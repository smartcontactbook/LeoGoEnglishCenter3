
<!DOCTYPE html>
<html>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <head data-page="">
    <title>Anh Van LeoGo</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="content-language" content="en"/>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <meta name="apple-touch-fullscreen" content="yes"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=yes">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
    <meta name="twitter:url" content="index.html"/>
    <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
    <script src="{{ asset('js/sweetalert.js') }}"></script>
    <meta name="google" content="notranslate">

    <link rel="manifest" href="{{ asset('assets/images/favicons/manifest.json')}}">
    <meta name="theme-color" content="#ba141a">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/icofont/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css')}}">
    <script>
      var assets_url = 'index.html';
      var app_lang = 'vi';
      var current_url = 'index.html';
    </script>
    <style>
    .swal2-container {
      z-index: 99999 !important;
    }

    body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
      overflow-y: visible !important;
    }
  </style>
</head>
<body data-module="main">
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K5TGJQ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <section class="wrapper">
  <div class="row">
  </div>
    {{-- @include('sweet::alert') --}}
    @if (Session::has('sweet_alert.alert'))
      <script>
        Swal.fire({
          title: 'Bạn đã đăng kí khóa học thành công',
          width: 600,
          padding: '3em',
          background: '#fff url(https://sweetalert2.github.io/images/trees.png)',
          backdrop: `
          rgba(0,0,123,0.4)
          url("https://sweetalert2.github.io/images/nyan-cat.gif")
          center left
          no-repeat
          `
        })
      </script>
    @endif
    @include('clients/layout/header/header')

     <div class="content-wrapper">
      @yield('main-content-client')
    </div>
    @include('clients/layout/map/map')
    @include('clients/layout/register/register')
    @include('clients/registerOnline/registerOnline')
    @include('clients/layout/footer/footer')

<script src="{{asset('assets/js/vendor.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/js/function.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('js/tgtm.js')}}"></script>

  <script>
    (function(s, u, b, i, z){
      u[i]=u[i]||function(){
        u[i].t=+new Date();
        (u[i].q=u[i].q||[]).push(arguments);
      };
      z=s.createElement('script');
      var zz=s.getElementsByTagName('script')[0];
      z.async=1; z.src=b; z.id='subiz-script';
      zz.parentNode.insertBefore(z,zz);
    })(document, window, 'https://widgetv4.subiz.com/static/js/app.js', 'subiz');
    subiz('setAccount', 'acqdwlniptpjmrbuhfdd');
    </script>
</body>
</html>