<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MSF</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="view/admin/assets/images/favicon-32x32.png">
    <!-- Base Styling  -->
    <link rel="stylesheet" href="view/admin/assets/main/css/fonts.css">
    <link rel="stylesheet" href="view/admin/assets/main/css/style.css">
</head>

<body>
    <div id="main-wrapper" class="show">


        <!-- start logo components -->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html"> <img class="logo-tabib" src="view/admin/assets/images/download.png" alt=""></a>
                <a href="index.html"><img class="brand-title" src="view/admin/assets/images/logo.png" alt=""></a>
            </div>
        </div>
        <!-- End logo components -->


        <!-- start section sidebar -->
        <aside class="left-panel nicescroll-box">
            <nav class="navigation">
                <ul class="list-unstyled main-menu">
                    <li class="has-submenu active">
                        <a href="index.html">
                            <i class="fas fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="has-submenu">
                        <a href="#" class="has-arrow mm-collapsed">
                            <i class="fas fa-user-md"></i>
                            <span class="nav-label">Doctors</span>
                        </a>
                        <ul class="list-unstyled mm-collapse">
                            <li><a href="add-doctor.html">Add Doctor</a></li>
                            <li><a href="doctor-list.html">All Doctors</a></li>
                            <li> <a href="doctor-profile.html">Doctors Profile</a> </li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#" class="has-arrow mm-collapsed">
                            <i class="fas fa-users"></i>
                            <span class="nav-label">Patients</span>
                        </a>
                        <ul class="list-unstyled mm-collapse">
                            <li><a href="new-patient.html">New Patient</a></li>
                            <li><a href="all-patients.html">All Patients</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="new-appointment.html">
                            <i class="fas fa-calendar-plus"></i>
                            <span class="nav-label">Appointment</span>
                        </a>
                    </li>
                    <li class="has-submenu">
                        <a href="#" class="has-arrow mm-collapsed">
                            <i class="fas fa-book-medical"></i>
                            <span class="nav-label">Prescriptions</span>
                        </a>
                        <ul class="list-unstyled mm-collapse">
                            <li><a href="new-prescription.html">New Prescription</a></li>
                            <li><a href="all-prescriptions.html">All Prescriptions</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="add-drug.html">
                            <i class="fas fa-pills"></i>
                            <span class="nav-label">Add Drug</span>
                        </a>
                    </li>
                    <li class="has-submenu">
                        <a href="#" class="has-arrow mm-collapsed">
                            <i class="fas fa-heartbeat"></i>
                            <span class="nav-label">Tests</span>
                        </a>
                        <ul class="list-unstyled mm-collapse">
                            <li><a href="add-test.html">Add Test</a></li>
                            <li><a href="all-tests.html">All Tests</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="calendar.html">
                            <i class="fas fa-calendar-alt"></i>
                            <span class="nav-label">calendar</span>
                        </a>
                    </li>
                    <li class="has-submenu">
                        <a href="reports.html">
                            <i class="fas fa-chart-pie"></i>
                            <span class="nav-label">Reports</span>
                        </a>
                    </li>
                    <li class="has-submenu">
                        <a href="#" class="has-arrow mm-collapsed">
                            <i class="fas fa-file-invoice"></i>
                            <span class="nav-label">Billing</span>
                        </a>
                        <ul class="list-unstyled mm-collapse">
                            <li><a href="create-invoice.html">Create Invoice</a></li>
                            <li><a href="billing-list.html">Billing List</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#" class="has-arrow mm-collapsed">
                            <i class="fas fa-cog"></i>
                            <span class="nav-label">Settings</span>
                        </a>
                        <ul class="list-unstyled mm-collapse">
                            <li><a href="doctor-settings.html">Doctor Settings</a></li>
                            <li><a href="prescription-settings.html">Prescription Settings</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#" class="has-arrow mm-collapsed">
                            <i class="fa fa-tag"></i>
                            <span class="nav-label">Authentication</span>
                        </a>
                        <ul class="list-unstyled mm-collapse">
                            <li><a href="empty-page.html">Empty Page</a></li>
                            <li><a href="page-login.html">Login simple</a></li>
                            <li><a href="page-login-one.html">Login with Bg Image</a></li>
                            <li><a href="page-register.html">Register simple</a></li>
                            <li><a href="page-register-one.html">Register with Bg Image</a></li>
                            <li><a href="page-lock-screen.html">Lock Screen</a></li>
                            <li><a href="page-forgot-password.html">Page forgot password</a></li>
                            <li><a href="page-error-404.html">Error 404</a></li>
                            <li><a href="page-error-500.html">Error 500</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="sidebar-widgets">
                <div class="top-sidebar box-shadow mx-25 m-b-30 p-b-20 text-center">
                    <a href="new-appointment.html">
                        <img src="view/admin/assets/images/appointement.svg" class="side-img" alt="img">
                    </a>
                    <a href="#">
                        <h4 class="text-primary mb-0">Make an Appointments</h4>
                    </a>
                </div>
                <div class="copyright text-center">
                    <p class="mb-0"> Tabib Dashboard</p>
                    <p class="mb-0"> © 2021 </p>
                </div>
            </div>
        </aside>
        <!-- End section sidebar -->


        <!-- start section header -->
        <div class="header">
            <header class="top-head container-fluid">
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="line"></span><span class="line"></span><span class="line"></span>
                    </div>
                    
                </div>
                <div class="header-right">
                    <div class="my-account-wrapper">
                        <div class="account-wrapper">
                            <div class="account-control">
                                <a class="login header-profile" href="#" title="Sign in">
                                    <div class="header-info">
                                        <small>Admin</small>
                                    </div>
                                    <img src="view/admin/assets/images/client.jpg" alt="people">
                                </a>
                                <div class="account-dropdown-form dropdown-container">
                                    <div class="form-content">
                                        <a href="doctor-settings.html">
                                            <i class="far fa-user"></i>
                                            <span class="ml-2">Profile</span>
                                        </a>
                                        <a href="page-login.html">
                                            <i class="fas fa-sign-in-alt"></i>
                                            <span class="ml-2">Logout </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <!-- End section header -->
