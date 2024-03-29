<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Aplikasi Sales</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name='csrf-token' content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="{{asset('')}}">

        <link href="{{asset('/css/app.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('/css/style.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('/plugins/morris/morris.css') }}">
    </head>
    <style scoped>
        .slide-fade-enter-active {
            transition: all 0.5s ease;
        }
        .slide-fade-leave-active {
            transition: all 0.1s cubic-bezier(1, 0.5, 0.8, 1);
        }
        .slide-fade-enter, .slide-fade-leave-to
            /* .slide-fade-leave-active below version 2.1.8 */ {
            transform: translateX(10px);
            opacity: 0;
        }
        </style>
    <body class="fixed-left">
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>
        </div>

        <!-- Begin page -->
        <div id="app">
            <app></app>
        </div>
        <!-- END wrapper -->

        <!-- jQuery  -->
        <script src="{{asset('/js/jquery.min.js')}}"></script>
        <script src="{{asset('/js/modernizr.min.js')}}"></script>
        <script src="{{asset('/js/detect.js')}}"></script>
        <script src="{{asset('/js/fastclick.js')}}"></script>
        <script src="{{asset('/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('/js/waves.js')}}"></script>
        <script src="{{asset('/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('plugins/alertify/js/alertify.js')}}"></script>
        <script src="{{ asset('plugins/morris/morris.min.js') }}"></script>
        <script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>

        <!-- App js -->
        <script src="{{mix('/js/app.js')}}"></script>
        <script src="{{asset('/js/app_template.js')}}"></script>
        <script>
            import Topbar from "./../components/Topbar";
            export default {
                components: {
                    Topbar
                }
            };
            </script>
            

            
    </body>
</html>