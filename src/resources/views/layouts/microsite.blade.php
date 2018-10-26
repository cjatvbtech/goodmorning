<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#000000">
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
    <!-- <link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('styles')

    <title>{{ config('app.name', 'Good Morning Financial Corporation') }}</title>
</head>

<body id="@yield('page-id')" class="microsite">
    <div class="main-container">
        @include('partials.header-microsite')

        <main id="main" role="main">
            <div class="inner-wrap">
                @yield('content')
            </div>
        </main>

        <footer id="footer">
            <div class="inner-wrap">
                <p class="contact-support text-center">
                    <i class="sprite headphone-ico m-r-5 va-middle"></i> Need help? <a href="#"><strong>Contact support</strong></a>
                </p>
            </div>
        </footer>
    </div>

    @yield('modalElements')

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>
    window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery.min.js') }}"><\/script>')
    </script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="./theme-one/js/vendor/slick.min.js"></script> -->
    <script type="text/javascript" src="/js/vendor/jquery.nicescroll.js"></script>

    <!-- Other JS Libraries that is being used in each requested page -->
    @yield('otherJSLibrary')
</body>
</html>
