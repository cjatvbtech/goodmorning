@extends('layouts.dashboard')

@section('page-id', 'dashboard')

@section('content')
    <!-- <section class="search-bar">
        <form class="search-bar-wrap">
            <p class="text-center c-black bold">Hello there, anything I can help you with for today?</p>
            <div class="form-group">
                <input type="search" name="dashboard-search" placeholder="Type your inquiry here" class="form-control" />
            </div>
            <div class="form-group">
                <button class="btn btn-secondary">GO</button>
            </div>
        </form>
    </section> -->

    <section class="nav-icons clearfix">
        <div class="nav-icons-wrap">
            <div class="nav-ico-div">
                <a href="{{ route('admin-loans-index') }}" class="nav-icon btn-hover">
                    <span class="badge badge-circle">{{ getPendingApplicationsCount() }}</span>
                    <i class="sprite db-ico on-bording-ico"></i>
                    <span class="nav-ico-label">On boarding</span>
                </a>
            </div>
            <div class="nav-ico-div text-center">
                <a href="/admin/products" class="nav-icon btn-hover text-center">
                    <span class="nav-ico-label">Products</span>
                </a>
            </div>
            <div class="nav-ico-div">
                <a href="{{ route('admin-soon') }}" class="nav-icon btn-hover">
                    <i class="sprite db-ico assets-ico"></i>
                    <span class="nav-ico-label">Assets</span>
                </a>
            </div>
            <div class="nav-ico-div">
                <a href="{{ route('admin-soon') }}" class="nav-icon btn-hover">
                    <i class="sprite db-ico liabilities-ico"></i>
                    <span class="nav-ico-label">Liabilities</span>
                </a>
            </div>
            <div class="nav-ico-div">
                <a href="{{ route('admin-soon') }}" class="nav-icon btn-hover">
                    <i class="sprite db-ico stockholders-ico"></i>
                    <span class="nav-ico-label">Stockholders</span>
                </a>
            </div>
            <div class="nav-ico-div">
                <a href="{{ route('admin-soon') }}" class="nav-icon btn-hover">
                    <i class="sprite db-ico revenue-ico"></i>
                    <span class="nav-ico-label">Revenue</span>
                </a>
            </div>
            <div class="nav-ico-div">
                <a href="{{ route('admin-soon') }}" class="nav-icon btn-hover">
                    <i class="sprite db-ico expenses-ico"></i>
                    <span class="nav-ico-label">Expenses</span>
                </a>
            </div>
            <div class="nav-ico-div">
                <a href="{{ route('admin-soon') }}" class="nav-icon btn-hover">
                    <i class="sprite db-ico clients-ico"></i>
                    <span class="nav-ico-label">Clients</span>
                </a>
            </div>
           <div class="nav-ico-div">
                <a href="{{ route('admin-soon') }}" class="nav-icon btn-hover">
                    <i class="sprite db-ico inbox-ico"></i>
                    <span class="nav-ico-label">Inbox</span>
                </a>
            </div>
            <div class="nav-ico-div">
                <a href="{{ route('admin-soon') }}" class="nav-icon btn-hover">
                    <i class="sprite db-ico my-account-ico"></i>
                    <span class="nav-ico-label">My account</span>
                </a>
            </div>
        </div>
    </section>

    <section class="revenue-vs-expense">
        <div class="inner-wrap">
            <h2>
                REVENUE VS EXPENSES
                <small>As of today 10:00 AM</small>
            </h2>
            <div class="rev-exp-disp">
                <div class="row row-xl">
                    <div class="col-sm-6">
                        <h3>
                            <small>Revenue</small>
                            ₱30,389.00
                        </h3>
                    </div>
                    <div class="col-sm-6">
                        <h3>
                            <small>Expenses</small>
                            ₱6,250.00
                        </h3>
                    </div>
                </div>
            </div>
            <p class="c-white bold m-b-40">Did you know that as of 10:00 AM Today your <br />
                money in incresed by <span class="c-yellow">2% Today</span></p>
            <p><a class="btn btn-secondary">VIEW CHART</a></p>
        </div>
    </section>

@endsection
