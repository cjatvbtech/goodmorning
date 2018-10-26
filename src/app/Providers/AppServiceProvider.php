<?php

namespace App\Providers;

use App\BankAccount;
use App\Profile;
use App\SourceOfIncome;
use App\TradeReference;
use App\UploadedRequirement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\User;
use Illuminate\Support\Facades\View;
use App\Comaker;
use Illuminate\Support\Facades\Log;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        Schema::defaultStringLength(767);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
