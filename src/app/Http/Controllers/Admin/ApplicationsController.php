<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseController;
use App\Mail\ApplicationMail;
use App\Application;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApplicationsController 
{
    public function index()
    {
        $applications = Application::orderBy('created_at', 'ASC')->get();
        return view('admin.applications.index', compact('applications'));
    }

    public function show($tracking_code)
    {
        $application = Application::where('tracking_code', $tracking_code)->firstOrFail();
        return view('admin.applications.show', compact('application'));
    }

    public function edit($tracking_code)
    {
        $application = Application::where('tracking_code', $tracking_code)->firstOrFail();
        return view('admin.applications.edit', compact('application'));
    }

    public function process($tracking_code, $status)
    {
        try {
            $application = Application::where('tracking_code', $tracking_code)->firstOrFail();
            $application->status = $status;
            $application->save();

            Mail::to($application->email)->send(new ApplicationMail($application));

        } catch (Exception $e) {
            return redirect()->route('admin-loans-index')->with('message', 'Loan application updated.');
        }

        return redirect()->route('admin-loans-index')->with('message', 'Loan application updated.');
    }

    public function update(Request $request, $tracking_code)
    {
        $loan = Application::where('tracking_code', $tracking_code)->firstOrFail();
        return $loan;
    }

    public function delete($tracking_code)
    {
        $loan = Application::where('tracking_code', $tracking_code)->firstOrFail();
        $loan->delete();

        return redirect()->route('admin-loans-index')->with('message', 'Loan application deleted.');
    }
}
