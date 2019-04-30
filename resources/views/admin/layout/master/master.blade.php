
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head> 
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LeoGo | Dashboard
    </title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset('css/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styleEdit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bower_components/Ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dist/css/skins/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bower_components/morris.js/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.2/themes/explorer-fas/theme.css" media="all" rel="stylesheet" type="text/css"/>
    <style type="text/css">
      .main-section{
        margin:0 auto;
        padding: 20px;
        margin-top: 100px;
        background-color: #fff;
        box-shadow: 0px 0px 20px #c1c1c1;
      }
      .fileinput-remove,
      .fileinput-upload{
        display: none;
      }
    </style>
    {{-- 
    <link rel="stylesheet" href="{{ asset('ckeditor/ckeditor.js') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style>
      .example-modal .modal {
        position: relative;
        top: auto;
        bottom: auto;
        right: auto;
        left: auto;
        display: block;
        z-index: 1;
      }
      .example-modal .modal {
        background: transparent !important;
      }
    </style>
  </head>
  <body class="hold-transition skin-blue sidebar-mini" id="testLoad">
    <div class="wrapper">   
      @include('admin.layout.header.header')
      @include('admin.layout.sidebar.sidebar')
      <div class="content-wrapper">
        @yield('main-content')
      </div>
      @include('admin.layout.footer.footer')
    </div>
    {{-- 
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
    </script> --}}
    <script type="text/javascript" src="{{ asset('js/app.js') }}">
    </script>
    <script src="{{ asset('js/bower_components/jquery-ui/jquery-ui.min.js') }}">
    </script>
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.2/js/plugins/sortable.js">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.2/js/fileinput.js">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.2/themes/explorer/theme.js">
    </script>
    <script src="{{ asset('js/bower_components/bootstrap/dist/js/bootstrap.min.js') }}">
    </script>
    <script src="{{ asset('js/bower_components/raphael/raphael.min.js') }}">
    </script>
    <script src="{{ asset('js/bower_components/morris.js/morris.min.js') }}">
    </script>
    <script src="{{ asset('js/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}">
    </script>
    <script src="{{ asset('js/bower_components/jquery-knob/dist/jquery.knob.min.js') }}">
    </script>
    <script src="{{ asset('js/bower_components/moment/min/moment.min.js') }}">
    </script>
    <script src="{{ asset('js/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}">
    </script>
    <script src="{{ asset('js/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}">
    </script>
    <script src="{{ asset('js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}">
    </script>
    <script src="{{ asset('js/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}">
    </script>
    <script src="{{ asset('js/bower_components/fastclick/lib/fastclick.js') }}">
    </script>
    <script src="{{ asset('js/dist/js/adminlte.min.js') }}">
    </script>
    <script src="{{ asset('js/dist/js/demo.js') }}">
    </script>
    <script src="{{ asset('js/bower_components/datatables.net/js/jquery.dataTables.min.js') }}">
    </script>
    <script src="{{ asset('js/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js">
    </script>
    <script src="{{ asset('js/custom.js') }}">
    </script>
    <script>
      $(function () {
        $('#example1').DataTable({
          'paging'      : true,
          'lengthChange': true,
          'searching'   : true,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false
        }
                                )
        $('#example2').DataTable({
          'paging'      : false,
          'lengthChange': true,
          'searching'   : true,
          'ordering'    : true,
          'info'        : false,
          'autoWidth'   : false
        }
                                )
      }
       )
    </script>
    <script type="text/javascript">
      $("div.alert").delay(3000).slideUp();
      //   $( ".selector" ).datepicker({
      //     altFormat: "yy-mm-dd"
      // });
    </script>
  </body>
</html>
