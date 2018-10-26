<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\LoanStatus;

class IndexController extends BaseController
{

    public function index() {
        return view('admin.dashboard.index');
    }

    public function soon()
    {
        return view('admin.dashboard.soon');
    }
}