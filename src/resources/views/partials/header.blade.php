<header id="header">
    <div class="inner-wrap">
        <h1><span>@yield('page-title')</span></h1>
        @if(auth()->check())
            <ul class="top-menu text-right">
                <li>
                    <form id="formSearch">
                        <div class="form-group m-b-0 has-feedback">
                            <input type="search" name="search" class="form-control"/>
                            <a class="btn-hover btn-go btn-ico form-control-feedback"
                                onclick="event.preventDefault(); document.getElementById('formSearch').submit();">
                                <span>GO</span>
                            </a>
                        </div>
                    </form>
                </li>
                <li>
                    <a href="#" class="btn-hover main-menu-btn" id="btnMenu">
                        <i class="sprite app-header-menu"></i>
                    </a>
                </li>
            </ul>
        @endif
    </div>
</header>