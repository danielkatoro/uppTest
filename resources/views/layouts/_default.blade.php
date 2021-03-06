<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>{{ isset($title) ? $title .' | ':' ' }} Admin</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset('images') }}/{{$app_config->logoimage}}" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="{{asset('admin/css/app.min.css') }}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{asset('admin/css/style.css') }}" rel="stylesheet" />
    <!-- You can choose a theme from css/styles instead of get all themes -->
    <link href="{{asset('admin/css/styles/all-themes.css') }}" rel="stylesheet" />
</head>

<body class="light">
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" onClick="return false;" class="navbar-toggle collapsed" data-bs-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="#" onClick="return false;" class="bars"></a>
                <a class="navbar-brand" href="index.html">
                    <img style="height: 30px!important;" src="{{asset('images') }}/{{$app_config->logoimage}}" alt="" />
                    <!-- <span class="logo-name">{{$app_config->name}}</span> -->
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="pull-left">
                    <li>
                        <a href="#" onClick="return false;" class="sidemenu-collapse">
                            <i data-feather="menu"></i>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Full Screen Button -->
                    <li class="fullscreen">
                        <a href="javascript:;" class="fullscreen-btn">
                            <i class="fas fa-expand"></i>
                        </a>
                    </li>
                    <li class="dropdown user_profile">
                        <div class="dropdown-toggle" data-bs-toggle="dropdown">
                            <img style="height: 50px;" src="{{asset('admin/images/usrbig.jpg') }}" alt="user">
                        </div>
                        <ul class="dropdown-menu pullDown">
                            <li class="body">
                                <ul class="user_dw_menu">
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <i class="material-icons">person</i>Profile
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="material-icons">power_settings_new</i>Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right">
                        <a href="#" onClick="return false;" class="js-right-sidebar" data-close="true">
                            <i class="fas fa-cog"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <div>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="sidebar-user-panel active">
                        <div class="user-panel">
                            <div class=" image">
                                <img src="{{asset('admin/images/usrbig.jpg') }}" class="user-img-style" alt="User Image" />
                            </div>
                        </div>
                        <div class="profile-usertitle">
                            <div class="sidebar-userpic-name"> {{ Auth::user()->name}} </div>
                            <div class="profile-usertitle-job ">Administrateur </div>
                        </div>
                    </li>
                   <hr>
                    <li>
                        <a href="{{route('home')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                            <span>Dashbord</span>
                        </a>
                    </li>
                        <li>
                            <a href="{{ route('principal_banner')}}"><i data-feather="calendar"></i> <span>Bannier Principale</a>
                        </li>
                        <li>
                            <a href="{{route('crypto_slide')}}"><i data-feather="calendar"></i> <span>Slide des Crypto</a>
                        </li>
                        <li>
                            <a href="{{route('buy_and_sell')}}"><i data-feather="calendar"></i> <span>Section Achat et Vente</a>
                        </li>
                        <li>
                            <a href="{{route('parteners_logo')}}"><i data-feather="calendar"></i> <span>Logo des partenaires</a>
                        </li>
                        <li>
                            <a href="{{route('download_app')}}"><i data-feather="calendar"></i> <span>Section T??l??charger App</a>
                        </li>
                        <li>
                            <a href="{{route('amazing_features')}}"><i data-feather="calendar"></i> <span>Amazing Features Section</a>
                        </li>
                        <li>
                            <a href="{{route('additional_services')}}"><i data-feather="calendar"></i> <span>Additional services Section</a>
                        </li>
                        <li>
                            <a href="{{route('start_traiding')}}"><i data-feather="calendar"></i> <span>Start tranding Section</a>
                        </li>
                        <!-- <li>
                            <a href="{{route('get_ready')}}"><i data-feather="calendar"></i> <span>Get ready Section</a>
                        </li> -->
                        <li>
                            <a href="{{route('faq')}}"><i data-feather="calendar"></i> <span>FAQ Section</a>
                        </li>
                        <li>
                            <a href="{{route('testimonials_section')}}"><i data-feather="calendar"></i> <span>Testimoniols Section</a>
                        </li>
                        <li>
                            <a href="{{route('last_news')}}"><i data-feather="calendar"></i> <span>Last news Section</a>
                        </li>
                    </li>
                        <a href="{{route('app_config')}}">
                            <i data-feather="calendar"></i>
                            <span>Configuration</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation">
                    <a href="#skins" data-bs-toggle="tab" class="active">SKINS</a>
                </li>
                <li role="presentation">
                    <a href="#settings" data-bs-toggle="tab">SETTINGS</a>
                </li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane in active in active stretchLeft" id="skins">
                    <div class="demo-skin">
                        <div class="rightSetting">
                            <p>SIDEBAR COLOR</p>
                            <div class="selectgroup selectgroup-pills sidebar-color mt-3">
                                <label class="selectgroup-item">
                                    <input type="radio" name="icon-input" value="1" class="btn-check selectgroup-input select-sidebar" checked>
                                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip" data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="icon-input" value="2" class="btn-check selectgroup-input select-sidebar">
                                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip" data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                                </label>
                            </div>
                        </div>
                        <div class="rightSetting">
                            <p>THEME COLORS</p>
                            <div class="btn-group theme-color mt-3" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="btnradio" value="1" id="btnradio1" autocomplete="off" checked>
                                <label class="radio-toggle btn btn-outline-primary" for="btnradio1">Light</label>
                                <input type="radio" class="btn-check" name="btnradio" value="2" id="btnradio2" autocomplete="off">
                                <label class="radio-toggle btn btn-outline-primary " for="btnradio2">Dark</label>
                            </div>
                        </div>
                        <div class="rightSetting">
                            <p>SKINS</p>
                            <ul class="demo-choose-skin choose-theme list-unstyled">
                                <li data-theme="black">
                                    <div class="black-theme"></div>
                                </li>
                                <li data-theme="white">
                                    <div class="white-theme white-theme-border"></div>
                                </li>
                                <li data-theme="purple">
                                    <div class="purple-theme"></div>
                                </li>
                                <li data-theme="blue">
                                    <div class="blue-theme"></div>
                                </li>
                                <li data-theme="cyan">
                                    <div class="cyan-theme"></div>
                                </li>
                                <li data-theme="green">
                                    <div class="green-theme"></div>
                                </li>
                                <li data-theme="orange">
                                    <div class="orange-theme"></div>
                                </li>
                            </ul>
                        </div>
                        <div class="rightSetting">
                            <p>RTL Layout</p>
                            <div class="switch mt-3">
                                <label>
                                    <input type="checkbox" class="layout-change">
                                    <span class="lever switch-col-red layout-switch"></span>
                                </label>
                            </div>
                        </div>
                        <div class="rightSetting">
                            <p>DISK SPACE</p>
                            <div class="sidebar-progress">
                                <div class="progress m-t-20">
                                    <div class="progress-bar l-bg-cyan shadow-style width-per-45" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="progress-description">
                                    <small>26% remaining</small>
                                </span>
                            </div>
                        </div>
                        <div class="rightSetting">
                            <p>Server Load</p>
                            <div class="sidebar-progress">
                                <div class="progress m-t-20">
                                    <div class="progress-bar l-bg-orange shadow-style width-per-63" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="progress-description">
                                    <small>Highly Loaded</small>
                                </span>
                            </div>
                        </div>
                        <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                            <button type="button" class="btn btn-outline-primary btn-border-radius btn-restore-theme">Restore
                                Default</button>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane stretchRight" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever switch-col-green"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox">
                                        <span class="lever switch-col-blue"></span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever switch-col-purple"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever switch-col-cyan"></span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever switch-col-red"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox">
                                        <span class="lever switch-col-lime"></span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </div>
    @yield('content')
    <script src="{{asset('admin/js/app.min.js') }}"></script>
    <script src="{{asset('admin/js/chart.min.js') }}"></script>
    <script src="{{asset('admin/js/table.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{asset('admin/js/admin.js') }}"></script>
    <script src="{{asset('admin/js/bundles/echart/echarts.js') }}"></script>
    <script src="{{asset('admin/js/bundles/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{asset('admin/js/pages/index.js') }}"></script>
    <script src="{{asset('admin/js/pages/todo/todo.js') }}"></script>