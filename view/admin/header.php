
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MSF</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="<?=URL?>view/admin/assets/images/favicon-32x32.png">
    <!-- Base Styling  -->
    <link rel="stylesheet" href="<?=URL?>view/admin/assets/main/css/fonts.css">
    <link rel="stylesheet" href="<?=URL?>view/admin/assets/main/css/style.css">
</head>

<body>
    <div id="main-wrapper" class="show">


        <!-- start logo components -->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="<?=URL?>"><img class="brand-title" src="<?=URL?>view/admin/assets/images/logo.png" alt=""></a>
            </div>
        </div>
        <!-- End logo components -->


        <!-- start section sidebar -->
        <aside class="left-panel nicescroll-box">
            <nav class="navigation">
                <ul class="list-unstyled main-menu">
                    <li class="has-submenu active">
                        <a href="<?=URL?>dashboard">
                            <i class="fas fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="has-submenu">
                        <a href="#" class="has-arrow mm-collapsed">
                            <i class="fas fa-users"></i>
                            <span class="nav-label">Coachs</span>
                        </a>
                        <ul class="list-unstyled mm-collapse">
                            <li><a href="<?=URL?>coachs/create">New coach</a></li>
                            <li><a href="<?=URL?>coachs">All coachs</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="<?=URL?>planning">
                            <i class="fas fa-calendar-alt"></i>
                            <span class="nav-label">Planning</span>
                        </a>
                    </li>
                   <li class="has-submenu">
                        <a href="#" class="has-arrow mm-collapsed">
                            <i class="fas fa-users"></i>
                            <span class="nav-label">Pricing</span>
                        </a>
                        <ul class="list-unstyled mm-collapse">
                            <li><a href="<?=URL?>pricing/create">New Pack</a></li>
                            <li><a href="<?=URL?>pricing">All Packs</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
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
                                    <img src="<?=URL?>view/admin/assets/images/user-icon.png" alt="admin">
                                </a>
                                <div class="account-dropdown-form dropdown-container">
                                    <div class="form-content">
                                        <a href="<?=URL?>profil">
                                            <i class="far fa-user"></i>
                                            <span class="ml-2">Profil</span>
                                        </a>
                                        <a href="<?=URL?>logout">
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
