<!DOCTYPE html>
<html lang="en">
        @include('layouts/header')
    <body class="fix-header fix-sidebar card-no-border">
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Gyms</p>
            </div>
        </div>
        <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        @include('layouts/sidenav')
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card bg-info text-white">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="stats">
                                                <h1 class="text-white">3257+</h1>
                                                <h6 class="text-white">Clientes</h6>
                                                <button class="btn btn-rounded btn-outline btn-light m-t-10 font-14">Ver lista</button>
                                            </div>
                                            <div class="stats-icon text-right ml-auto"><i class="fa fa-users display-5 op-3 text-dark"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card bg-primary text-white">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="stats">
                                                <h1 class="text-white">6509+</h1>
                                                <h6 class="text-white">Personal</h6>
                                                <button class="btn btn-rounded btn-outline btn-light m-t-10 font-14">Ver lista</button>
                                            </div>
                                            <div class="stats-icon text-right ml-auto"><i class="fa fa-user display-5 op-3 text-dark"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card bg-success text-white">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="stats">
                                                <h1 class="text-white">9062+</h1>
                                                <h6 class="text-white">Personal Trainer</h6>
                                                <button class="btn btn-rounded btn-outline btn-light m-t-10 font-14">Ver lista</button>
                                            </div>
                                            <div class="stats-icon text-right ml-auto"><i class="fa fa-gear display-5 op-3 text-dark"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
        
        @include('layouts/footer')
        
    </body>

</html>