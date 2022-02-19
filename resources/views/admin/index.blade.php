<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.radixtouch.com/templates/admin/atrio/source/lighthr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jan 2022 12:34:57 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>AtrioHR - HR and Company Management Admin Template</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset('admin/images/favicon.ico') }}" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="{{asset('admin/css/app.min.css') }}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{asset('admin/css/style.css') }}" rel="stylesheet" />
    <!-- You can choose a theme from css/styles instead of get all themes -->
    <link href="{{asset('admin/css/styles/all-themes.css') }}" rel="stylesheet" />
</head>

<body class="light">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img class="loading-img-spin" src="assets/images/loading.png" alt="admin">
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" onClick="return false;" class="navbar-toggle collapsed" data-bs-toggle="collapse"
                    data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="#" onClick="return false;" class="bars"></a>
                <a class="navbar-brand" href="index.html">
                    <img src="assets/images/logo.png" alt="" />
                    <span class="logo-name">AtrioHR</span>
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
                    <!-- #END# Full Screen Button -->
                    <!-- #START# Notifications-->
                    <li class="dropdown">
                        <a href="#" onClick="return false;" class="dropdown-toggle" data-bs-toggle="dropdown"
                            role="button">
                            <i class="far fa-bell"></i>
                            <span class="notify"></span>
                            <span class="heartbeat"></span>
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="assets/images/user/user1.jpg" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">Sarah Smith</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="assets/images/user/user2.jpg" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">Airi Satou</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="assets/images/user/user3.jpg" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">John Doe</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="assets/images/user/user4.jpg" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">Ashton Cox</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="assets/images/user/user5.jpg" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">Cara Stevens</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="assets/images/user/user6.jpg" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">Charde Marshall</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span class="table-img msg-user">
                                                <img src="assets/images/user/user7.jpg" alt="">
                                            </span>
                                            <span class="menu-info">
                                                <span class="menu-title">John Doe</span>
                                                <span class="menu-desc">
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </span>
                                                <span class="menu-desc">Please check your email.</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#" onClick="return false;">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications-->
                    <li class="dropdown user_profile">
                        <div class="dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="assets/images/user.jpg" alt="user">
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
                                        <a href="#" onClick="return false;">
                                            <i class="material-icons">feedback</i>Feedback
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <i class="material-icons">help</i>Help
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <i class="material-icons">power_settings_new</i>Logout
                                        </a>
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
                                <img src="assets/images/usrbig.jpg" class="user-img-style" alt="User Image" />
                            </div>
                        </div>
                        <div class="profile-usertitle">
                            <div class="sidebar-userpic-name"> Emily Smith </div>
                            <div class="profile-usertitle-job ">Manager </div>
                        </div>
                    </li>
                    <li class="header">-- Main</li>
                    <li class="active">
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="monitor"></i>
                            <span>Dashboard</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="active">
                                <a href="index.html">Dashboard 1</a>
                            </li>
                            <li>
                                <a href="pages/dashboard/dashboard2.html">Dashboard 2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="users"></i>
                            <span>Employees</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/employee/all-employees.html">All Employee</a>
                            </li>
                            <li>
                                <a href="pages/employee/add-employee.html">Add Employee</a>
                            </li>
                            <li>
                                <a href="pages/employee/edit-employee.html">Edit Employee</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="briefcase"></i>
                            <span>Projects</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/projects/all-projects.html">All Projects</a>
                            </li>
                            <li>
                                <a href="pages/projects/add-project.html">Add Project</a>
                            </li>
                            <li>
                                <a href="pages/projects/edit-project.html">Edit Project</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="book-open"></i>
                            <span>Attendance</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/attendance/today-attend.html">Today Attendance</a>
                            </li>
                            <li>
                                <a href="pages/attendance/emp-attend.html">Employee Attendance</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="user"></i>
                            <span>Clients</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/clients/all-clients.html">All Clients</a>
                            </li>
                            <li>
                                <a href="pages/clients/add-client.html">Add Client</a>
                            </li>
                            <li>
                                <a href="pages/clients/edit-client.html">Edit Client</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="clipboard"></i>
                            <span>Leave Management</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/leave/all-leave.html">All Leave Request</a>
                            </li>
                            <li>
                                <a href="pages/leave/leave-balance.html">Leave Balance</a>
                            </li>
                            <li>
                                <a href="pages/leave/add-leave.html">New Leave Request</a>
                            </li>
                            <li>
                                <a href="pages/leave/edit-leave.html">Edit Leave Request</a>
                            </li>
                            <li>
                                <a href="pages/leave/leave-type.html">Leave Types</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="headphones"></i>
                            <span>Holidays</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/holiday/all-holidays.html">All Holidays</a>
                            </li>
                            <li>
                                <a href="pages/holiday/add-holiday.html">Add Holiday</a>
                            </li>
                            <li>
                                <a href="pages/holiday/edit-holiday.html">Edit Holiday</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="book"></i>
                            <span>Accounts</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/accounts/income.html">Income</a>
                            </li>
                            <li>
                                <a href="pages/accounts/expense.html">Expenses</a>
                            </li>
                            <li>
                                <a href="pages/accounts/invoice.html">Invoices</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="trello"></i>
                            <span>Departments</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/departments/all-departments.html">All Departments</a>
                            </li>
                            <li>
                                <a href="pages/departments/add-department.html">Add Department</a>
                            </li>
                            <li>
                                <a href="pages/departments/edit-department.html">Edit Departments</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="dollar-sign"></i>
                            <span>Payroll</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/payroll/payslip.html">Payslip</a>
                            </li>
                            <li>
                                <a href="pages/payroll/employee-salary.html">Employee Salary</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="command"></i>
                            <span>Job</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/job/add-job.html">Add Job</a>
                            </li>
                            <li>
                                <a href="pages/job/requirement-list.html">Requirements</a>
                            </li>
                            <li>
                                <a href="pages/job/applicant-list.html">Applicant List</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="package"></i>
                            <span>Consultancy</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/consultancy/all-consultancy.html">All Consultancy</a>
                            </li>
                            <li>
                                <a href="pages/consultancy/add-consultancy.html">Add Consultancy</a>
                            </li>
                            <li>
                                <a href="pages/consultancy/edit-consultancy.html">Edit Consultancy</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="feather"></i>
                            <span>Widgets</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/widgets/chart-widget.html">Chart Widget</a>
                            </li>
                            <li>
                                <a href="pages/widgets/data-widget.html">Data Widget</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="copy"></i>
                            <span>User Interface (UI)</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/ui/alerts.html">Alerts</a>
                            </li>
                            <li>
                                <a href="pages/ui/badges.html">Badges</a>
                            </li>
                            <li>
                                <a href="pages/ui/modal.html">Modal</a>
                            </li>
                            <li>
                                <a href="pages/ui/buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="pages/ui/collapse.html">Collapse</a>
                            </li>
                            <li>
                                <a href="pages/ui/dialogs.html">Dialogs</a>
                            </li>
                            <li>
                                <a href="pages/ui/cards.html">Cards</a>
                            </li>
                            <li>
                                <a href="pages/ui/labels.html">Labels</a>
                            </li>
                            <li>
                                <a href="pages/ui/list-group.html">List Group</a>
                            </li>
                            <li>
                                <a href="pages/ui/notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="pages/ui/preloaders.html">Preloaders</a>
                            </li>
                            <li>
                                <a href="pages/ui/progressbars.html">Progress Bars</a>
                            </li>
                            <li>
                                <a href="pages/ui/range-sliders.html">Range Sliders</a>
                            </li>
                            <li>
                                <a href="pages/ui/tabs.html">Tabs</a>
                            </li>
                            <li>
                                <a href="pages/ui/typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="pages/ui/helper-classes.html">Helper Classes</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="triangle"></i>
                            <span>Icons</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/icons/material-icons.html">Material Icons</a>
                            </li>
                            <li>
                                <a href="pages/icons/font-awesome.html">Font Awesome</a>
                            </li>
                            <li>
                                <a href="pages/icons/simple-line-icons.html">Simple Line Icons</a>
                            </li>
                            <li>
                                <a href="pages/icons/themify.html">Themify Icons</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="layout"></i>
                            <span>Forms</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/forms/basic-form-elements.html">Basic Form</a>
                            </li>
                            <li>
                                <a href="pages/forms/advanced-form-elements.html">Advanced Form</a>
                            </li>
                            <li>
                                <a href="pages/forms/form-examples.html">Form Examples</a>
                            </li>
                            <li>
                                <a href="pages/forms/form-validation.html">Form Validation</a>
                            </li>
                            <li>
                                <a href="pages/forms/form-wizard.html">Form Wizard</a>
                            </li>
                            <li>
                                <a href="pages/forms/editors.html">Editors</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="grid"></i>
                            <span>Tables</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/tables/normal-tables.html">Normal Tables</a>
                            </li>
                            <li>
                                <a href="pages/tables/advance-tables.html">Advance Datatables</a>
                            </li>
                            <li>
                                <a href="pages/tables/export-table.html">Export Table</a>
                            </li>
                            <li>
                                <a href="pages/tables/child-row-table.html">Child Row Table</a>
                            </li>
                            <li>
                                <a href="pages/tables/group-table.html">Grouping</a>
                            </li>
                        </ul>
                    </li>
                    <li class="header">-- Apps</li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="mail"></i>
                            <span>Email</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/email/inbox.html">Inbox</a>
                            </li>
                            <li>
                                <a href="pages/email/compose.html">Compose</a>
                            </li>
                            <li>
                                <a href="pages/email/view-mail.html">Read Email</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="pages/apps/chat.html">
                            <i data-feather="message-circle"></i>
                            <span>Chat</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages/apps/calendar.html">
                            <i data-feather="calendar"></i>
                            <span>Calendar</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages/apps/task.html">
                            <i data-feather="check-circle"></i>
                            <span>Task Bar</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages/apps/portfolio.html">
                            <i data-feather="wind"></i>
                            <span>Portfolio</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="server"></i>
                            <span>Others</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/apps/dragdrop.html">Drag &amp; Drop</a>
                            </li>
                            <li>
                                <a href="pages/apps/contact_list.html">Contact List</a>
                            </li>
                            <li>
                                <a href="pages/apps/contact_grid.html">Contact Grid</a>
                            </li>
                            <li>
                                <a href="pages/apps/support.html">Support</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="pie-chart"></i>
                            <span>Charts</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/charts/amchart.html">amChart</a>
                            </li>
                            <li>
                                <a href="pages/charts/echart.html">Echart</a>
                            </li>
                            <li>
                                <a href="pages/charts/apexcharts.html">ApexCharts</a>
                            </li>
                            <li>
                                <a href="pages/charts/morris.html">Morris</a>
                            </li>
                            <li>
                                <a href="pages/charts/chartjs.html">ChartJS</a>
                            </li>
                            <li>
                                <a href="pages/charts/sparkline.html">Sparkline</a>
                            </li>
                            <li>
                                <a href="pages/charts/jquery-knob.html">Jquery Knob</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="map"></i>
                            <span>Maps</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/maps/google.html">Google Map</a>
                            </li>
                            <li>
                                <a href="pages/maps/jqvmap.html">Vector Map</a>
                            </li>
                            <li>
                                <a href="pages/maps/datamap.html">Data Map</a>
                            </li>
                        </ul>
                    </li>
                    <li class="header">-- Extra</li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="sliders"></i>
                            <span>Timeline</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/timeline/horizontal-timeline.html">Horizontal</a>
                            </li>
                            <li>
                                <a href="pages/timeline/vertical-timeline.html">Vertical</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="image"></i>
                            <span>Medias</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/medias/image-gallery.html">Image Gallery</a>
                            </li>
                            <li>
                                <a href="pages/medias/carousel.html">Carousel</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="user-check"></i>
                            <span>Authentication</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/examples/login-register.html">Login &amp; Register</a>
                            </li>
                            <li>
                                <a href="pages/examples/sign-in.html">Sign In</a>
                            </li>
                            <li>
                                <a href="pages/examples/sign-up.html">Sign Up</a>
                            </li>
                            <li>
                                <a href="pages/examples/forgot-password.html">Forgot Password</a>
                            </li>
                            <li>
                                <a href="pages/examples/locked.html">Locked</a>
                            </li>
                            <li>
                                <a href="pages/examples/404.html">404 - Not Found</a>
                            </li>
                            <li>
                                <a href="pages/examples/500.html">500 - Server Error</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="anchor"></i>
                            <span>Extra Pages</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/examples/profile.html">Profile</a>
                            </li>
                            <li>
                                <a href="pages/examples/pricing.html">Pricing</a>
                            </li>
                            <li>
                                <a href="pages/examples/faqs.html">Faqs</a>
                            </li>
                            <li>
                                <a href="pages/examples/blank.html">Blank Page</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <i data-feather="chevrons-down"></i>
                            <span>Multi Level Menu</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#" onClick="return false;">
                                    <span>Menu Item</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" onClick="return false;">
                                    <span>Menu Item - 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" onClick="return false;" class="menu-toggle">
                                    <span>Level - 2</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span>Menu Item</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;" class="menu-toggle">
                                            <span>Level - 3</span>
                                        </a>
                                        <ul class="ml-menu">
                                            <li>
                                                <a href="#" onClick="return false;">
                                                    <span>Level - 4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
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
                                    <input type="radio" name="icon-input" value="1"
                                        class="btn-check selectgroup-input select-sidebar" checked>
                                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                        data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" name="icon-input" value="2"
                                        class="btn-check selectgroup-input select-sidebar">
                                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                        data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                                </label>
                            </div>
                        </div>
                        <div class="rightSetting">
                            <p>THEME COLORS</p>
                            <div class="btn-group theme-color mt-3" role="group"
                                aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="btnradio" value="1" id="btnradio1"
                                    autocomplete="off" checked>
                                <label class="radio-toggle btn btn-outline-primary" for="btnradio1">Light</label>
                                <input type="radio" class="btn-check" name="btnradio" value="2" id="btnradio2"
                                    autocomplete="off">
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
                                    <div class="progress-bar l-bg-cyan shadow-style width-per-45" role="progressbar"
                                        aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
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
                                    <div class="progress-bar l-bg-orange shadow-style width-per-63" role="progressbar"
                                        aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="progress-description">
                                    <small>Highly Loaded</small>
                                </span>
                            </div>
                        </div>
                        <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                            <button type="button"
                                class="btn btn-outline-primary btn-border-radius btn-restore-theme">Restore
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
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">Dashboard</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="index.html">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-xl-3 col-sm-6">
                    <div class="card l-bg-purple">
                        <div class="info-box-5 p-4">
                            <div class="card-icon card-icon-large"><i class="far fa-window-restore"></i></div>
                            <div class="mb-4">
                                <h5 class="font-20 mb-0">Projects</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        125
                                    </h2>
                                </div>
                                <div class="col-4 text-end">
                                    <span class="fw-bold">24.7% <i class="fa fa-arrow-up"></i></span>
                                </div>
                            </div>
                            <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card l-bg-blue-dark">
                        <div class="info-box-5 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                            <div class="mb-4">
                                <h5 class="font-20 mb-0">New Employee</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        213
                                    </h2>
                                </div>
                                <div class="col-4 text-end">
                                    <span>5.28% <i class="fa fa-arrow-up"></i></span>
                                </div>
                            </div>
                            <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                <div class="progress-bar l-bg-green" role="progressbar" data-width="25%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card l-bg-green-dark">
                        <div class="info-box-5 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-tasks"></i></div>
                            <div class="mb-4">
                                <h5 class="font-20 mb-0">Running Tasks</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        10,225
                                    </h2>
                                </div>
                                <div class="col-4 text-end">
                                    <span>16% <i class="fa fa-arrow-up"></i></span>
                                </div>
                            </div>
                            <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card l-bg-orange-dark">
                        <div class="info-box-5 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-money-check-alt"></i></div>
                            <div class="mb-4">
                                <h5 class="font-20 mb-0">Earning</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        $2,658
                                    </h2>
                                </div>
                                <div class="col-4 text-end">
                                    <span>5.07% <i class="fa fa-arrow-up"></i></span>
                                </div>
                            </div>
                            <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Products</strong> Chart</h2>
                        </div>
                        <div class="body">
                            <div class="recent-report__chart">
                                <div id="chart1"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Profit</strong> Chart</h2>
                        </div>
                        <div class="body">
                            <div class="recent-report__chart">
                                <div id="chart2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Project</strong> Details</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle"
                                        data-bs-toggle="dropdown" role="button" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
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
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Project</th>
                                            <th>Team</th>
                                            <th>Priority</th>
                                            <th>Status</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Project A</td>
                                            <td class="text-truncate">
                                                <ul class="list-unstyled order-list">
                                                    <li class="avatar avatar-sm"><img class="rounded-circle"
                                                            src="assets/images/user/user1.jpg" alt="user">
                                                    </li>
                                                    <li class="avatar avatar-sm"><img class="rounded-circle"
                                                            src="assets/images/user/user2.jpg" alt="user">
                                                    </li>
                                                    <li class="avatar avatar-sm"><img class="rounded-circle"
                                                            src="assets/images/user/user3.jpg" alt="user">
                                                    </li>
                                                    <li class="avatar avatar-sm"><span class="badge">+4</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><span class="badge col-orange">High</span></td>
                                            <td>
                                                <div class="progress-xs not-rounded progress shadow-style">
                                                    <div class="progress-bar progress-bar-danger width-per-40"
                                                        role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <span class="sr-only">40%</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$150.00</td>
                                        </tr>
                                        <tr>
                                            <td>Project B</td>
                                            <td class="text-truncate">
                                                <ul class="list-unstyled order-list">
                                                    <li class="avatar avatar-sm"><img class="rounded-circle"
                                                            src="assets/images/user/user4.jpg" alt="user">
                                                    </li>
                                                    <li class="avatar avatar-sm"><img class="rounded-circle"
                                                            src="assets/images/user/user5.jpg" alt="user">
                                                    </li>
                                                    <li class="avatar avatar-sm"><span class="badge">+3</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><span class="badge col-cyan">Medium</span></td>
                                            <td>
                                                <div class="progress-xs not-rounded progress shadow-style">
                                                    <div class="progress-bar progress-bar-lightred width-per-60"
                                                        role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <span class="sr-only">60%</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$470.00</td>
                                        </tr>
                                        <tr>
                                            <td>Project C</td>
                                            <td class="text-truncate">
                                                <ul class="list-unstyled order-list">
                                                    <li class="avatar avatar-sm"><img class="rounded-circle"
                                                            src="assets/images/user/user1.jpg" alt="user">
                                                    </li>
                                                    <li class="avatar avatar-sm"><img class="rounded-circle"
                                                            src="assets/images/user/user2.jpg" alt="user">
                                                    </li>
                                                    <li class="avatar avatar-sm"><img class="rounded-circle"
                                                            src="assets/images/user/user3.jpg" alt="user">
                                                    </li>
                                                    <li class="avatar avatar-sm"><span class="badge">+4</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><span class="badge col-orange">High</span></td>
                                            <td>
                                                <div class="progress-xs not-rounded progress shadow-style">
                                                    <div class="progress-bar progress-bar-warning width-per-40"
                                                        role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <span class="sr-only">40%</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$564.00</td>
                                        </tr>
                                        <tr>
                                            <td>Project D</td>
                                            <td class="text-truncate">
                                                <ul class="list-unstyled order-list">
                                                    <li class="avatar avatar-sm"><img class="rounded-circle"
                                                            src="assets/images/user/user6.jpg" alt="user">
                                                    </li>
                                                    <li class="avatar avatar-sm"><img class="rounded-circle"
                                                            src="assets/images/user/user7.jpg" alt="user">
                                                    </li>
                                                    <li class="avatar avatar-sm"><img class="rounded-circle"
                                                            src="assets/images/user/user8.jpg" alt="user">
                                                    </li>
                                                    <li class="avatar avatar-sm"><span class="badge">+4</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><span class="badge col-green">Low</span></td>
                                            <td>
                                                <div class="progress-xs not-rounded progress shadow-style">
                                                    <div class="progress-bar progress-bar-success width-per-45"
                                                        role="progressbar" aria-valuenow="45" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <span class="sr-only">45%</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$925.00</td>
                                        </tr>
                                        <tr>
                                            <td>Project E</td>
                                            <td class="text-truncate">
                                                <ul class="list-unstyled order-list">
                                                    <li class="avatar avatar-sm"><img class="rounded-circle"
                                                            src="assets/images/user/user8.jpg" alt="user">
                                                    </li>
                                                    <li class="avatar avatar-sm"><img class="rounded-circle"
                                                            src="assets/images/user/user9.jpg" alt="user">
                                                    </li>
                                                    <li class="avatar avatar-sm"><span class="badge">+1</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><span class="badge col-cyan">Medium</span></td>
                                            <td>
                                                <div class="progress-xs not-rounded progress shadow-style">
                                                    <div class="progress-bar progress-bar-lightred width-per-80"
                                                        role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <span class="sr-only">80%</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$785.00</td>
                                        </tr>
                                        <tr>
                                            <td>Project G</td>
                                            <td class="text-truncate">
                                                <ul class="list-unstyled order-list">
                                                    <li class="avatar avatar-sm"><img class="rounded-circle"
                                                            src="assets/images/user/user1.jpg" alt="user">
                                                    </li>
                                                    <li class="avatar avatar-sm"><img class="rounded-circle"
                                                            src="assets/images/user/user6.jpg" alt="user">
                                                    </li>
                                                    <li class="avatar avatar-sm"><img class="rounded-circle"
                                                            src="assets/images/user/user8.jpg" alt="user">
                                                    </li>
                                                    <li class="avatar avatar-sm"><span class="badge">+3</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td><span class="badge col-green">Low</span></td>
                                            <td>
                                                <div class="progress-xs not-rounded progress shadow-style">
                                                    <div class="progress-bar progress-bar-success width-per-40"
                                                        role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <span class="sr-only">40%</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$270.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>TODO </strong>List</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle"
                                        data-bs-toggle="dropdown" role="button" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
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
                            <div class="tdl-content">
                                <ul class="to-do-list ui-sortable">
                                    <li class="clearfix">
                                        <div class="form-check m-l-10">
                                            <label class="form-check-label"> <input class="form-check-input"
                                                    type="checkbox" value="">
                                                Add salary details in system <span class="form-check-sign"> <span
                                                        class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="todo-actionlist pull-right clearfix">
                                            <a href="#"> <i class="material-icons">clear</i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="form-check m-l-10">
                                            <label class="form-check-label"> <input class="form-check-input"
                                                    type="checkbox" value="">
                                                Announcement for holiday <span class="form-check-sign"> <span
                                                        class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="todo-actionlist pull-right clearfix">
                                            <a href="#"> <i class="material-icons">clear</i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="form-check m-l-10">
                                            <label class="form-check-label"> <input class="form-check-input"
                                                    type="checkbox" value="">
                                                call bus driver <span class="form-check-sign"> <span
                                                        class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="todo-actionlist pull-right clearfix">
                                            <a href="#"> <i class="material-icons">clear</i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="form-check m-l-10">
                                            <label class="form-check-label"> <input class="form-check-input"
                                                    type="checkbox" value="">
                                                Office Picnic <span class="form-check-sign"> <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="todo-actionlist pull-right clearfix">
                                            <a href="#"> <i class="material-icons">clear</i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="form-check m-l-10">
                                            <label class="form-check-label"> <input class="form-check-input"
                                                    type="checkbox" value="">
                                                Website Must Be Finished <span class="form-check-sign"> <span
                                                        class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="todo-actionlist pull-right clearfix">
                                            <a href="#"> <i class="material-icons">clear</i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="form-check m-l-10">
                                            <label class="form-check-label"> <input class="form-check-input"
                                                    type="checkbox" value="">
                                                Recharge My Mobile <span class="form-check-sign"> <span
                                                        class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="todo-actionlist pull-right clearfix">
                                            <a href="#"> <i class="material-icons">clear</i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="form-check m-l-10">
                                            <label class="form-check-label"> <input class="form-check-input"
                                                    type="checkbox" value="">
                                                Add salary details in system <span class="form-check-sign"> <span
                                                        class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="todo-actionlist pull-right clearfix">
                                            <a href="#"> <i class="material-icons">clear</i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <input type="text" class="tdl-new form-control-radious" placeholder="Enter Todo...">
                        </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>Chart 1</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle"
                                        data-bs-toggle="dropdown" role="button" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
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
                            <div id="echart_graph_line" class="chartsh"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>Chart 2</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle"
                                        data-bs-toggle="dropdown" role="button" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
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
                            <div id="echart_area_line" class="chartsh"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>Chart 3</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle"
                                        data-bs-toggle="dropdown" role="button" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
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
                            <div id="echart_bar" class="chartsh"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{asset('admin/js/app.min.js') }}"></script>
    <script src="{{asset('admin/js/chart.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{asset('admin/js/admin.js') }}"></script>
    <script src="{{asset('admin/js/bundles/echart/echarts.js') }}"></script>
    <script src="{{asset('admin/js/bundles/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{asset('admin/js/pages/index.js') }}"></script>
    <script src="{{asset('admin/js/pages/todo/todo.js') }}"></script>
</body>


<!-- Mirrored from www.radixtouch.com/templates/admin/atrio/source/lighthr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jan 2022 12:36:28 GMT -->
</html>