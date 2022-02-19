@extends('./layouts._default',['title'=>'App_Config'])
    
@section('content')
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Widgets</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="../../index.html">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item active">Widgets</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Settings</strong> Application</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle"
                                        data-bs-toggle="dropdown" role="button" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu float-end">
                                        <li>
                                            <a href="#" onClick="return false;">Action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Another action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="body text-center visitor-dial">
                                <h4 class="m-b-20">Nom de l'application</h4> <br><br><br>
                                <img src="{{ asset('admin/images/user/usrbig3.jpg') }}" class="user-img" alt="">
                                <h4 class="m-t-30">Description</h4>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Chart</strong> Sample</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle"
                                        data-bs-toggle="dropdown" role="button" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu float-end">
                                        <li>
                                            <a href="#" onClick="return false;">Action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Another action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="amChartLineWidget">

                            </div>
                            <div class="row">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </section>
    @endsection
    <script src="{{ asset('admin/js/app.min.js') }}"></script>
    <script src="{{ asset('admin/js/chart.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('admin/js/admin.js') }}"></script>
    <!-- Knob Js -->
    <script src="{{ asset('admin/js/pages/charts/jquery-knob.js') }}"></script>
    <script src="{{ asset('admin/js/bundles/amcharts4/core.js') }}"></script>
    <script src="{{ asset('admin/js/bundles/amcharts4/charts.js') }}"></script>
    <script src="{{ asset('admin/js/bundles/amcharts4/animated.js') }}"></script>
    <script src="{{ asset('admin/js/pages/widgets/chart-widget.js') }}"></script>