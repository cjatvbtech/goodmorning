<div id="header" class="bgm-white">
    <div class="inner-wrap">
        <div class="col-md-12 m-t-50">
            @if (!(Route::currentRouteName() == 'home'))
            <div class="col-md-12 text-right">
                <a href="{{ route('home') }}" class="d-block">BACK TO HOME</a>
            </div>
            @endif
            <div class="tbl-like text-center h-100">
                <div class="logo-wrap tbl-cell va-bottom p-t-10 p-b-10">
                    <img src="/images/goodmorning-logo.png" class="img-responsive m-auto" />
                </div>
            </div>
        </div>
    </div>
</div>