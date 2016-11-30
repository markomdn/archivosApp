<!DOCTYPE html>
<!--[if IE 8]> <html lang="es" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>MongoDB Admnistrador</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <meta name="csrf_token" content="{!! csrf_token() !!}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/global/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/global/plugins/pace/themes/pace-theme-barber-shop.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/global/plugins/bootstrap-toastr/toastr.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('assets/global/plugins/bootstrap-toastr/toastr.min.css') }}" rel="stylesheet" type="text/css"/>
    {{--<link href="{{ asset('css/jquery.fs.dropper.css') }}" rel="stylesheet" type="text/css"/>--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-summernote/summernote.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-select/bootstrap-select.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/select2/select2.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/jquery-multi-select/css/multi-select.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/fullcalendar/fullcalendar.min.css') }}"/>

    <link href="{{ asset('assets/global/plugins/fancybox/source/jquery.fancybox.css') }}" type="text/css"/>
    <link href="{{ asset('assets/global/css/components.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/global/css/plugins.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/admin/layout/css/layout.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/admin/layout/css/themes/default.css') }}" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="{{ asset('assets/admin/layout/css/custom.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/admin/layout/css/themes/darkblue.css') }}" rel="stylesheet" type="text/css" id="style_color"/>

    <link href="{{ asset('assets/admin/pages/css/portfolio.css') }}" type="text/css"/>

    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    <link href="{{ asset('assets/global/plugins/gritter/css/jquery.gritter.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/global/plugins/jqvmap/jqvmap/jqvmap.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/clockface/css/clockface.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-datepicker/css/datepicker3.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-colorpicker/css/colorpicker.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css') }}"/>
    <link href="{{ asset('assets/admin/pages/css/profile.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/global/plugins/icheck/skins/all.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/clockface/css/clockface.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-datepicker/css/datepicker3.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-colorpicker/css/colorpicker.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/jquery-tags-input/jquery.tagsinput.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/typeahead/typeahead.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css') }}"/>
    <link href="{{ asset('assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/admin/pages/css/pricing-table.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/admin/pages/css/timeline.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/style-vd.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/global/plugins/bootstrap-summernote/summernote.css') }}">
    <link href="{{ asset('assets/admin/pages/css/tasks.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/global/plugins/dropzone/css/dropzone.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="{{ asset('') }}Favicon.png"/>
    {!! Analytics::render() !!}
</head>

<body class="page-header-fixed page-quick-sidebar-over-content">
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="/">
                <img id="logoCasino" src="{{ asset('img/logocasino.png') }}" width="200" height="50"  alt="logo" class="logo-default"/>
            </a>
            <div class="menu-toggler sidebar-toggler hide">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown dropdown-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="icon-user"></i>
                        <span id="" class="username username-hide-on-mobile">
                     </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a>
                                <i class="icon-user"></i>Mi Perfil </a>
                        </li>
                        <li class="divider">
                        </li>
                        <li>
                            <a>
                                <i class="icon-key"></i> Cerrar Sesión </a>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <div class="page-sidebar navbar-collapse collapse">
            <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                <li class="sidebar-toggler-wrapper">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler">
                    </div>
                    <!-- END SIDEBAR TOGGLER BUTTON -->
                </li>

                <li class="start active open">
                    <a href="javascript:;">
                        <i class="icon-home"></i>
                        <span class="title">Contenido</span>
                        <span class="arrow open"></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="/secciones" trigger="false">
                                <i class="icon-puzzle"></i>
                                Secciones</a>
                        </li>
                        <li>
                            <a href="/posts">
                                <i class="icon-pin"></i>
                                Publicaciones</a>
                        </li>
                        <li>
                            <a href="/categorias">
                                <i class="icon-list"></i>
                                Categorias</a>
                        </li>
                        <li>
                            <a href="/galerias">
                                <i class="icon-picture"></i>
                                Galerias</a>
                        </li>
                        <li>
                            <a href="/eventos">
                                <i class="icon-calendar"></i>
                                Eventos</a>
                        </li>
                        <li>
                            <a href="/rankings" trigger="false">
                                <i class="icon-list"></i>
                                Rankings</a>
                        </li>
                        <li>
                            <a href="/bloques-sucursales" trigger="false">
                                <i class="fa fa-cubes"></i>
                                Bloques</a>
                        </li>
                        <li>
                            <a href="/productos" trigger="false">
                                <i class="icon-basket"></i>
                                Productos</a>
                        </li>
                        <li class="start active open">
                            <a href="javascript:;">
                                <i class="icon-cup"></i>
                                <span class="title">Menu Restaurant</span>
                                <span class="arrow open"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="/menuResto" trigger="false">
                                        <i class="icon-settings"></i>
                                        Restaurant</a>
                                </li>
                                <li>
                                    <a href="/platoResto" trigger="false">
                                        <i class="icon-book-open"></i>
                                        Platos - Bebidas</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="start active open">
                    <a href="javascript:;">
                        <i class="icon-picture"></i>
                        <span class="title">Interfaz</span>
                        <span class="arrow open"></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="/sliders" trigger="false">
                                <i class="icon-picture"></i>
                                Sliders</a>
                        </li>
                        <li>
                            <a href="/footers" trigger="false">
                                <i class="icon-settings"></i>
                                Footer</a>
                        </li>
                        <li>
                            <a href="/cabeceraProductos" trigger="false">
                                <i class="icon-grid"></i>
                                Cabecera de Merchandising</a>
                        </li>
                    </ul>
                </li>
                <li class="start active open">
                    <a href="javascript:;">
                        <i class="icon-user"></i>
                        <span class="title">Usuarios</span>
                        <span class="arrow open"></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="/usuarios" trigger="false">
                                <i class="icon-users"></i>
                                Usuarios</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <div class="page-content-wrapper">
        <div id="clinicadigital-content" class="page-content">
        @yield('content')
        </div>
    </div>

</div>
<div class="page-footer">
    <div class="page-footer-inner">
        {{ date('Y') }} &copy; <a href="http://www.vidadigital.com.ar/"> Vida Digital.</a>
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<script src="{{ asset('assets/global/plugins/respond.min.js') }}"></script>
<script src="{{ asset('assets/global/plugins/excanvas.min.js') }}"></script>
<script src="{{ asset('assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-migrate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('') }}assets/global/plugins/dropzone/dropzone.min.js" />
<script src="{{ asset('assets/admin/pages/scripts/form-dropzone.js') }}" />
<script src="{{ asset('assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery.cokie.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/jquery-mixitup/jquery.mixitup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/fancybox/source/jquery.fancybox.pack.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/clockface/js/clockface.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/bootstrap-daterangepicker/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/fuelux/js/spinner.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/jquery.input-ip-address-control-1.0.min.js') }}"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-tags-input/jquery.tagsinput.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/typeahead/handlebars.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/typeahead/typeahead.bundle.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/datatables/media/js/jquery.dataTables.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('assets/global/plugins/bootbox/bootbox.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/select2/select2.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js') }}"></script>
<script src="{{ asset('assets/admin/pages/scripts/index.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/pages/scripts/tasks.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/moment.min.js') }}"></script>
<script src="{{ asset('assets/global/plugins/fullcalendar/fullcalendar.js') }}"></script>
<script src="{{ asset('assets/global/plugins/fullcalendar/lang/es.js') }}"></script>

<script src="{{ asset('assets/global/scripts/metronic.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/layout/scripts/layout.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/layout/scripts/quick-sidebar.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/layout/scripts/demo.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/pages/scripts/portfolio.js') }}"></script>

<script src="{{ asset('assets/admin/pages/scripts/portlet-draggable.js') }}"></script>
<script src="{{ asset('assets/admin/pages/scripts/components-pickers.js') }}"></script>
<script src="{{ asset('assets/admin/pages/scripts/form-wizard.js') }}"></script>
<script src="{{ asset('assets/admin/pages/scripts/components-form-tools.js') }}"></script>
<script src="{{ asset('assets/admin/pages/scripts/components-dropdowns.js') }}"></script>
<script src="{{ asset('assets/admin/pages/scripts/ui-alert-dialog-api.js') }}"></script>
<script src="{{ asset('assets/admin/pages/scripts/ui-blockui.js') }}"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/pages/scripts/components-dropdowns.js') }}"></script>
<script src="{{ asset('assets/admin/pages/scripts/form-fileupload.js') }}"></script>
<script src="{{ asset('assets/admin/pages/scripts/table-managed.js') }}"></script>
<script src="{{ asset('assets/admin/pages/scripts/form-validation.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
@yield('script')

<script type="text/javascript" src="{{ asset('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js') }}"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-markdown/lib/markdown.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-summernote/summernote.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js') }}"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-markdown/lib/markdown.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-summernote/summernote.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/pages/scripts/components-editors.js') }}"></script>
<script src="{{ asset('assets/admin/pages/scripts/table-editable.js') }}"></script>
<script src="{{ asset('assets/global/plugins/icheck/icheck.min.js') }}"></script>
<script src="{{ asset('assets/admin/pages/scripts/form-icheck.js') }}"></script>
<script src="{{ asset('assets/global/plugins/bootstrap-toastr/toastr.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/underscore.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/modal.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/cargaImagen.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/notificationservice.js') }}"  type="text/javascript"/>
<script src="{{ asset('js/analitics.js') }}" />



<script type="text/javascript">
    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=csrf_token]').attr('content') }
    });
</script>
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        QuickSidebar.init(); // init quick sidebar
        Demo.init(); // init demo features
        Portfolio.init();
        UIAlertDialogApi.init();
        ComponentsEditors.init();
        FormiCheck.init(); // init page demo
        ComponentsPickers.init();
        PortletDraggable.init();
        ComponentsFormTools.init();
        TableEditable.init();
        $($('.sorting')[2]).click().click();
        $('.note-editable').click(function(){
            $('.cke_top').remove();
        });
        $(".fancybox").fancybox();
    });

</script>
<script id="template-galeria" type="text/template">
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-blue-hoki bold uppercase">Galeria</span>
            </div>
        </div>
        <div class="portlet-body form">
            <div class="row" id="galleryContent">
            </div>
        </div>
    </div>
</script>

<script id="template-galeria-item" type="text/template">
    <div>
        <img id="pathImageModal" src="" style="width: 100%"/>
    </div>
</script>

<script id="template-galeriaUpfoto" type="text/template">
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-blue-hoki bold uppercase">Agregar Foto</span>
            </div>
        </div>
        <div class="portlet-body form">
            <div class="row">
                <div class="col-md-6">
                    <form method='post' action='/.' enctype="multipart/form-data" id="my-form" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <label>Subir imagen:</label>
                        <div class="form-group">
                            <div class="col-md-4">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="input-group input-large">
                                        <div class="form-control uneditable-input" data-trigger="fileinput">
                                            <i class="fa fa-file fileinput-exists"></i>&nbsp; <span class="fileinput-filename">
                                                                </span>
                                        </div>
                                                            <span class="input-group-addon btn default btn-file">
                                                            <span class="fileinput-new">
                                                            Seleccione imagen </span>
                                                            <span class="fileinput-exists">
                                                            Cambiar </span>
                                                            <input multiple="true" type='file' name='img' id="input_image"/>
                                                            </span>
                                        <a href="#" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput">
                                            Borrar </a>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input class="btn green-haze" type='submit' value='Upload' />
                                        </div>
                                        <div class="col-md-4">
                                            <h6 class="containerLoad">
                                                <img src="http://plainicon.com/dboard/userprod/2803_dd580/prod_thumb/plainicon.com-45968-256px-99b.png" id="cargaImage"/>
                                                Cargando...
                                            </h6>
                                        </div>
                                    </div>
                                    <input id="path_image" type='hidden'/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <label>Seleccionar imagen de la galeria:</label>
                    <br/>
                    <button class="btn green-haze" id="galeriaImage">Galeria</button>
                    <span class="help-block">Galeria de Imagenes.</span>
                </div>
            </div>
            <img id="new_image" style="width: 25%"/>
            <br/><br/>
            <butoon id="agregarImagenes" class="btn red">Aceptar</butoon>
            <butoon id="cancelarImagenes" class="btn green-haze">Cancelar</butoon>
        </div>
    </div>
</script>

<script id="template-postConfirm2" type="text/template">
    <div class="portlet box red">
        <div class="portlet-title">
            <div class="caption">
                <h2>Eliminar Publicacion</h2>
            </div>
        </div>
        <div class="portlet-body">
            <div>
                <h4>Esta seguro de eliminar esta publicacion</h4>
                <br/><br/>
            </div>
            <div class="form-actions">
                <button type="button" class="btn default" id="cancelDeletePost2">Cancelar</button>
                <button type="button" class="btn blue" id="confirmDeletePost2">Aceptar</button>
            </div>
        </div>
    </div>
</script>

<script id="template-producto-image" type="text/template">
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-blue-hoki bold uppercase">Agregar Foto</span>
            </div>
        </div>
        <div class="portlet-body form">
            <div class="row">
                <div class="col-md-6">
                    <form id="my-form" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <label>Subir imagen:</label>
                        <div class="form-group">
                            <div class="col-md-4">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="input-group input-large">
                                        <div class="form-control uneditable-input" data-trigger="fileinput">
                                            <i class="fa fa-file fileinput-exists"></i>&nbsp; <span class="fileinput-filename">
                                                                </span>
                                        </div>
                                                            <span class="input-group-addon btn default btn-file">
                                                            <span class="fileinput-new">
                                                            Seleccione imagen </span>
                                                            <span class="fileinput-exists">
                                                            Cambiar </span>
                                                            <input multiple="true" type='file' name='img' id="input_image"/>
                                                            </span>
                                        <a href="#" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput">
                                            Borrar </a>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input class="btn green-haze" type='submit' value='Upload' />
                                        </div>
                                        <div class="col-md-4">
                                            <h6 class="containerLoad">
                                                <img src="http://plainicon.com/dboard/userprod/2803_dd580/prod_thumb/plainicon.com-45968-256px-99b.png" id="cargaImage"/>
                                                Cargando...
                                            </h6>
                                        </div>
                                    </div>
                                    <input id="path_image_producto" type='hidden'/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <label>Seleccionar imagen de la galeria:</label>
                    <br/>
                    <button class="btn green-haze" id="galeriaImage">Galeria</button>
                    <span class="help-block">Galeria de Imagenes.</span>
                </div>
            </div>
            <img id="new_image_producto" style="width: 25%"/>
            <br/><br/>
            <butoon id="agregarImagenes" class="btn red">Aceptar</butoon>
            <butoon id="cancelarImagenes" class="btn green-haze">Cancelar</butoon>
        </div>
    </div>
</script>
@yield('script-template')
