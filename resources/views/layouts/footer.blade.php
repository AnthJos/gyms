    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('theme-admin/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('theme-admin/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('theme-admin/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('theme-admin/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('theme-admin/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('theme-admin/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('theme-admin/js/custom.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--sparkline JavaScript -->
    <script src="{{asset('theme-admin/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    {{-- <!--morris JavaScript -->
    <script src="{{asset('theme-admin/plugins/chartist-js/dist/chartist.min.js')}}"></script>
    <script src="{{asset('theme-admin/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <!--c3 JavaScript -->
    <script src="{{asset('theme-admin/plugins/d3/d3.min.js')}}"></script>
    <script src="{{asset('theme-admin/plugins/c3-master/c3.min.js')}}"></script>
    <!-- Popup message jquery -->
    <script src="{{asset('theme-admin/plugins/toast-master/js/jquery.toast.js')}}"></script>
    <!-- Chart JS -->
    <script src="{{asset('theme-admin/js/dashboard1.js')}}"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{asset('theme-admin/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script> --}}