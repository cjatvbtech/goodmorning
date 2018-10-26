<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Application;
use App\Mail\ApplicationMail;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('home');
    }

    /**
     * Example Company Loan index
     * @return \Illuminate\Http\Response
     */
    public function loanIndex()
    {
        $products = Product::where('type', Product::LOAN)->get();
        $type = request()->get('type');
        return view('company-loan', compact('type', 'products'));
    }

    /**
     * Example Company Loan index
     * @return \Illuminate\Http\Response
     */
    public function companyLoan()
    {
        $categories = Category::all();
        return view('company-loan', ['categories' => $categories]);
    }

    /**
     * Example Loan application index
     * 
     * @return \Illuminate\Http\Response
     */
    public function loanApplication($id)
    {
        $product = Product::findOrFail($id);
        $type = request()->get('type');
        return view('loan-application', compact('type', 'product'));
    }

    /**
     * Store an application request
     * 
     * @param Request $request Request object
     * @param integer $product product id
     *
     * @return \Illuminate\Http\Response
     */
    public function loanApplicationPost($id)
    {
        $validatedData = request()->validate(
            [
                'number_of_items' => 'required|numeric|between:1,10',
                'company_name' => 'required',
                'company_address' => 'required',
                'company_email' => 'required|email',
                'company_phone' => 'required',
                'company_tin' => 'required|numeric|digits:9',
                'established_date' => 'required|date',
                'first_name' => 'required',
                'middle_name' => 'required',
                'last_name' => 'required',
                'home_address' => 'required',
                'email' => 'required|email',
                'birthdate' => 'required|date',
                'tin' => 'required|numeric|digits:9',
                'sss' => 'required|numeric',
                'home_mobile' => 'required',
                'home_phone' => 'required',
                'requirements' => 'required'
            ]
        );

        $application = new Application(request()->all());
        $application->product_id = $id;
        $application->type = request()->get('type');

        $requirements = [];

        if (!empty(request()->requirements)) {
            foreach (request()->requirements as $requirement) {
                if (!empty($requirement)) {
                    $requirement->store('public/loans');
                }
                $requirements[] = $requirement->hashName();
            }
        }

        $application->requirements = implode(",", $requirements);
        $application->tracking_code = Application::generateTrackingCode();
        $application->status = Application::PENDING;
        $application->save();

        Mail::to($application->email)->send(new ApplicationMail($application));

        return redirect()->route(
            'application-view', 
            [
                'tracking_code' => $application->tracking_code
            ]
        )->with('application_saved', 'Loan application successfully submitted');
    }

    /**
     * View a loan application status
     * 
     * @param Request $request Request object
     * 
     * @return \Illuminate\Http\Response
     */
    public function loanView(Request $request)
    {
        $loan = Application::where(
            'tracking_code', 
            $request->get('tracking_code')
        )->first();
        return view('application-view', compact('loan'));
    }

    /**
     * Display loan track form
     * 
     * @return \Illuminate\Http\Response
     */
    public function loanTrack()
    {
        return view('application-track');
    }

    /**
     * Display a list of insurance related products
     * 
     * @return \Illuminate\Http\Response
     */
    public function insuranceIndex()
    {
        $products = Product::where('type', Product::INSURANCE)->get();
        $type = request()->get('type');
        return view('insurance-index', compact('products', 'type'));
    }

    /**
     * Display a form for insurance application
     * 
     * @param int $id The product id
     * 
     * @return \Illuminate\Http\Response 
     */
    public function insuranceApplication($id)
    {
        $product = Product::findOrFail($id);
        $type = request()->get('type');
        return view('insurance-application', compact('product', 'type'));
    }

    /**
     * Store a new insurance application
     * 
     * @param int $id The product id
     * 
     * @return \Illuminate\Http\Response
     */
    public function insuranceApplicationPost($id)
    {
        $proprietor_validation = [
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'home_address' => 'required',
            'email' => 'required|email',
            'birthdate' => 'required|date',
            'tin' => 'required|numeric|digits:9',
            'sss' => 'required|numeric',
            'home_mobile' => 'required',
            'home_phone' => 'required',
            'requirements' => 'required'
        ];

        $corporation_validation = [];

        if (request()->get('type') == Application::CORPORATION) {
            $corporation_validation = [
                'company_name' => 'required',
                'company_address' => 'required',
                'company_email' => 'required|email',
                'company_phone' => 'required',
                'company_tin' => 'required|numeric|digits:9',
                'established_date' => 'required|date',
            ];
        }

        $validation = array_merge($proprietor_validation, $corporation_validation);
        $validatedData = request()->validate($validation);

        $application = new Application(request()->all());
        $application->product_id = $id;
        $application->type = request()->get('type');

        $requirements = [];

        if (!empty(request()->requirements)) {
            foreach (request()->requirements as $requirement) {
                if (!empty($requirement)) {
                    $requirement->store('public/loans');
                }
                $requirements[] = $requirement->hashName();
            }
        }

        $application->requirements = implode(",", $requirements);
        $application->tracking_code = Application::generateTrackingCode();
        $application->status = Application::PENDING;
        $application->save();

        return redirect()->route(
            'application-view', 
            [
                'tracking_code' => $loan->tracking_code
            ]
        )->with('application_saved', 'Insurance application successfully submitted');
    }
}
