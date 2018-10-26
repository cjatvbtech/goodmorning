<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#000000">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--
      manifest.json provides metadata used when your web app is added to the
      homescreen on Android. See https://developers.google.com/web/fundamentals/engage-and-retain/web-app-manifest/
    -->
    <!-- <link rel="manifest" href="%PUBLIC_URL%/manifest.json"> -->
    <!-- <link rel="shortcut icon" href="%PUBLIC_URL%/favicon.ico"> -->
    <!--
      Notice the use of %PUBLIC_URL% in the tags above.
      It will be replaced with the URL of the `public` folder during the build.
      Only files inside the `public` folder can be referenced from the HTML.

      Unlike "/favicon.ico" or "favicon.ico", "%PUBLIC_URL%/favicon.ico" will
      work correctly both with client-side routing and a non-root public URL.
      Learn how to configure a non-root public URL by running `npm run build`.
    -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" crossorigin="anonymous">
    <link href="{{ asset('css/vendor/font-awesome.min.css') }}" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>{{ config('app.name', 'Good Morning Financial Corporation') }}</title>
</head>

<body id="dashboard">
    <div class="main-container">
        <header id="header" class="inner-wrap">
            <ul class="top-menu list-unstyle list-inline">
                <!-- <li>
                    <a href="#" class="btn-hover btn-ico btn-lg bgm-blue" id="notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span class="badge badge-circle">2</span>
                        <i class="zmdi zmdi-notifications f-22 c-white"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right notifications" aria-labelledby="notifications">
                        <li>
                            <a href="#" class="c-black">
                                Cash deposit successfull
                                <small class="d-block c-gray">Lorem ipsum is simply dummy...</small>
                            </a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="#" class="c-black">
                                Important notice
                                <small class="d-block c-gray">Lorem ipsum is simply dummy...</small>
                            </a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="#" class="c-black">
                                New loan application
                                <small class="d-block c-gray">Lorem ipsum is simply dummy...</small>
                            </a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li class="lv-footer">
                            <a href="#" class="btn btn-lightgray btn-xs di-block">
                                View all
                            </a>
                        </li>
                    </ul>
                </li> -->
                <li class="dropdown">
                    <a href="#" class="btn-hover btn-ico btn-lg bgm-blue" id="userProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        KC
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="userProfile">
                        <li class="lv-header clearfix">
                            <a class="btn-hover btn-ico bgm-blue person-avatar">
                                KC
                                <span class="hover-text">Change</span>
                            </a>
                            <div class="f-14 c-black p-l-40 m-l-30 p-t-15">
                                Kevin Cayton
                                <small class="d-block f-10 c-gray">President</small>
                            </div>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">My profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Settings</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="lv-footer">
                            <a href="{{ route('logout') }}" class="btn btn-lightgray btn-xs di-block" 
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Sign out
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            <div class="tbl-like text-center h-100">
                <div class="logo-wrap tbl-cell va-bottom p-t-10 p-b-10">
                    <img src="/images/goodmorning-logo.png" class="img-responsive m-auto" />
                </div>
            </div>
        </header>
        <main role="main" id="main">
            @yield('content')

        </main>
        <footer id="footer" class="inner-wrap">
            <div class="tbl-like h-100">
                <p class="tbl-cell text-center va-middle">
                    <i class="sprite headphone-ico va-middle m-r-10"></i>Need help? <a href="#"><strong>Contact support</strong></a>
                </p>
            </div>
        </footer>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>
    window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery.min.js') }}"><\/script>')
    </script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="/js/vendor/jquery.nicescroll.js"></script>



    <script src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.9/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.0.0/js/dataTables.responsive.min.js"></script>

    <script>
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
    </script>    

   

@yield('scripts')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
