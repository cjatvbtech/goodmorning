<?php

namespace App\Http\Controllers\Api\Applications;

use App\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return Application::with([
            'profile.user',
            'product',
            'status'
        ])
            ->where('tracking_code', '<>', null)
            ->get();
    }

    public function update(Request $request)
    {
        if ($request->isMethod('post')) {
            $application = Application::find($request->get('application_id'));
            $application->status_id = $request->get('status_id');
            $application->save();
            return $application;
        }

    }

    public function show($id){
        $application = Application::with(['profile','profile.user','product'])->find($id);
        return $application;
    }

}