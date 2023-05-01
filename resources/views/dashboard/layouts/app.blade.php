<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    {{-- <title> Dashboard - Ace Admin</title> --}}

    <title> @yield('title') </title>
    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/font-awesome.css') }}" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/ace-fonts.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin/assets/css/datepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap-timepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/daterangepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap-datetimepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/colorpicker.css') }}" />

    <!-- ace styles -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/ace.css') }}" class="ace-main-stylesheet"
        id="main-ace-style" />
    <link type="text/css" rel="stylesheet" id="ace-rtl-stylesheet" href="{{ asset('admin/assets/css/ace-rtl.css') }}">
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{{ asset('admin/assets/css/ace-part2.css') }}" class="ace-main-stylesheet"/>
    <![endif]-->

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{{ asset('admin/assets/css/ace-ie.css') }}"/>
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="{{ asset('admin/assets/js/ace-extra.js') }}"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="{{ asset('admin/assets/js/html5shiv.js') }}"></script>
    <script src="{{ asset('admin/assets/js/respond.js') }}"></script>
    <![endif]-->

    <link rel="stylesheet" href="{{ asset('admin/assets/my-css/style.css') }}" />
    @yield('css')
</head>

<body class="no-skin rtl">
    <div id="admin">

        @include('dashboard.includes.header')

        <div class="main-container" id="main-container">
            <script type="text/javascript">
                try {
                    ace.settings.check('main-container', 'fixed')
                } catch (e) {}
            </script>

            @include('dashboard.includes.sidebar')

            <div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs" id="breadcrumbs">
                        <script type="text/javascript">
                            try {
                                ace.settings.check('breadcrumbs', 'fixed')
                            } catch (e) {}
                        </script>

                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="#">Home</a>
                            </li>

                            <li>
                                <a href="#">{{ $page_name ?? 'غير معروف' }}</a>
                            </li>
                            <li class="active">Blank Page</li>
                        </ul><!-- /.breadcrumb -->

                        <!-- #section:basics/content.searchbox -->
                        <div class="nav-search" id="nav-search">
                            aaa
                        </div><!-- /.nav-search -->

                        <!-- /section:basics/content.searchbox -->
                    </div>

                    <div class="page-content">
                        @if ($message = \Session::get('success'))
                            <div class="alert alert-success">
                                {{ $message }}
                            </div>
                        @endif
                        @if ($message = \Session::get('error'))
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @endif
                        @yield('content')
                        <!-- #section:custom/widget-box -->

                    </div>

                </div>

            </div><!-- /.main-content -->

            @include('dashboard.includes.footer')

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

    </div>

    <!-- basic scripts -->

    <!--[if !IE]> -->
    <script type="text/javascript">
        window.jQuery || document.write("<script src='{{ asset('admin/assets/js/jquery.js') }}'>" + "<" + "/script>");
    </script>

    <!-- <![endif]-->

    <!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='{{ asset('admin/assets/js/jquery1x.js') }}'>" + "<" + "/script>");
</script>
<![endif]-->
    <script type="text/javascript">
        if ('ontouchstart' in document.documentElement) document.write(
            "<script src='{{ asset('admin/assets/js/jquery.mobile.custom.js') }}'>" + "<" + "/script>");
    </script>
    <script src="{{ asset('admin/assets/js/bootstrap.js') }}"></script>


    <!-- page specific plugin scripts -->
    <script src="{{ asset('admin/assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery.ui.touch-punch.js') }}"></script>




    <!-- page specific plugin scripts -->
    <script src="{{ asset('admin/assets/js/dataTables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('admin/assets/js/dataTables/jquery.dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('admin/assets/js/dataTables/extensions/TableTools/js/dataTables.tableTools.js') }}"></script>
    <script src="{{ asset('admin/assets/js/dataTables/extensions/ColVis/js/dataTables.colVis.js') }}"></script>


    <!-- ace scripts -->
    <script src="{{ asset('admin/assets/js/ace/elements.scroller.js') }}"></script>
    <script src="{{ asset('admin/assets/js/ace/elements.colorpicker.js') }}"></script>
    <script src="{{ asset('admin/assets/js/ace/elements.fileinput.js') }}"></script>
    <script src="{{ asset('admin/assets/js/ace/elements.typeahead.js') }}"></script>
    <script src="{{ asset('admin/assets/js/ace/elements.wysiwyg.js') }}"></script>
    <script src="{{ asset('admin/assets/js/ace/elements.spinner.js') }}"></script>
    <script src="{{ asset('admin/assets/js/ace/elements.treeview.js') }}"></script>
    <script src="{{ asset('admin/assets/js/ace/elements.wizard.js') }}"></script>
    <script src="{{ asset('admin/assets/js/ace/elements.aside.js') }}"></script>
    <script src="{{ asset('admin/assets/js/ace/ace.js') }}"></script>
    <script src="{{ asset('admin/assets/js/ace/ace.ajax-content.js') }}"></script>
    <script src="{{ asset('admin/assets/js/ace/ace.touch-drag.js') }}"></script>
    <script src="{{ asset('admin/assets/js/ace/ace.sidebar.js') }}"></script>
    <script src="{{ asset('admin/assets/js/ace/ace.sidebar-scroll-1.js') }}"></script>
    <script src="{{ asset('admin/assets/js/ace/ace.submenu-hover.js') }}"></script>
    <script src="{{ asset('admin/assets/js/ace/ace.widget-box.js') }}"></script>
    <script src="{{ asset('admin/assets/js/ace/ace.settings.js') }}"></script>
    <script src="{{ asset('admin/assets/js/ace/ace.settings-rtl.js') }}"></script>
    <script src="{{ asset('admin/assets/js/ace/ace.settings-skin.js') }}"></script>
    <script src="{{ asset('admin/assets/js/ace/ace.widget-on-reload.js') }}"></script>
    <script src="{{ asset('admin/assets/js/ace/ace.searchbox-autocomplete.js') }}"></script>

    <script src="{{ asset('admin/assets/js/date-time/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('admin/assets/js/date-time/bootstrap-timepicker.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('admin/assets/css/ace.onpage-help.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/docs/assets/js/themes/sunburst.css') }}" />

    <script type="text/javascript">
        ace.vars['base'] = '..';
    </script>
    <script src="{{ asset('admin/assets/js/ace/elements.onpage-help.js') }}"></script>
    <script src="{{ asset('admin/assets/js/ace/ace.onpage-help.js') }}"></script>
    <script src="{{ asset('admin/docs/assets/js/rainbow.js') }}"></script>
    <script src="{{ asset('admin/docs/assets/js/language/generic.js') }}"></script>
    <script src="{{ asset('admin/docs/assets/js/language/html.js') }}"></script>
    <script src="{{ asset('admin/docs/assets/js/language/css.js') }}"></script>
    <script src="{{ asset('admin/docs/assets/js/language/javascript.js') }}"></script>



    <script src="{{ asset('admin/assets/my-js/script.js') }}"></script>


    @yield('js')
</body>

</html>
