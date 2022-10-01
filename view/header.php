<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>M-Side Fitness</title>
<!-- Stylesheets -->
<link href="assets/css/bootstrap.css" rel="stylesheet">

<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

<!-- Color Switcher Mockup -->
<link href="assets/css/color-switcher-design.css" rel="stylesheet">

<!-- Color Themes -->
<link id="theme-color-file" href="assets/css/color-themes/default-theme.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="assets/assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="assets/assets/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">
    
<div class="page-wrapper">
 	
     <!-- Preloader -->
     <div class="preloader"></div>
      
      <!-- Main Header-->
     <header class="main-header header-style-two">
         
         <!-- Header Top -->
         <div class="header-top">
             <div class="auto-container">
                 <div class="clearfix">
                 
                     <!-- Top Left -->
                     <div class="top-left pull-left">
                         <!-- Info List -->
                         <ul class="info-list">
                             <li><span class="icon fa fa-location-arrow"></span> 27 Division St, New York, USA</li>
                             <li><span class="icon fa fa-phone"></span> <a href="tel:+1-044-123-456-789"> +1 (044) 123 456 789</a></li>
                             <li><span class="icon fa fa-envelope-o"></span> <a href="mailto:info@example.com"> info@example.com</a></li>
                         </ul>
                     </div>
                     
                     <!-- Top Right -->
                     <div class="top-right pull-right">
                         
                         <!--Language-->
                         <div class="language dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"><span class="flag-icon fa fa-globe"></span>EN &nbsp;<span class="icon fa fa-angle-down"></span></a>
                             <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu2">
                                 <li><a href="#">English</a></li>
                                 <li><a href="#">German</a></li>
                                 <li><a href="#">Arabic</a></li>
                                 <li><a href="#">Hindi</a></li>
                             </ul>
                         </div>
                         
                     </div>
                     
                 </div>
             </div>
         </div>
         
         <!-- Header Upper -->
         <div class="header-upper">
             <div class="auto-container clearfix">
                 
                 <div class="pull-left logo-box">
                     <div class="logo"><a href="<?=_BASE_?>"><img src="assets/images/logo_msf.png" alt="" title=""></a></div>
                 </div>
                 
                 <div class="nav-outer clearfix">
                     <!--Mobile Navigation Toggler-->
                     <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                     <!-- Main Menu -->
                     <nav class="main-menu navbar-expand-md">
                         <div class="navbar-header">
                             <!-- Toggle Button -->    	
                             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                 <span class="icon-bar"></span>
                                 <span class="icon-bar"></span>
                                 <span class="icon-bar"></span>
                             </button>
                         </div>
                         
                         <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                             <ul class="navigation clearfix">
                                 <li class="<?=$active_page == "home"?"current":""?>"><a href="<?=_BASE_?>">Home</a> </li>
                                 <li class="<?=$active_page == "about"?"current":""?>"><a href="<?=_BASE_?>about">About</a> </li>
                                 <li class="<?=$active_page == "classes"?"current":""?>"><a href="<?=_BASE_?>classes">Classes</a> </li>
                                 <li class="<?=$active_page == "portfolios"?"current":""?>"><a href="<?=_BASE_?>portfolios">Portfolios</a> </li>
                                 <li class="<?=$active_page == "contact"?"current":""?>"><a href="<?=_BASE_?>contact">Contact</a></li>
                             </ul>
                         </div>
                     </nav>
                     
                 </div>
                 
             </div>
         </div>
         <!--End Header Upper-->
         
         <!-- Sticky Header  -->
         <div class="sticky-header">
             <div class="auto-container clearfix">
                 <!--Logo-->
                 <div class="logo pull-left">
                     <a href="index.html" title=""><img src="assets/images/logo-small.png" alt="" title=""></a>
                 </div>
                 <!--Right Col-->
                 <div class="pull-right">
                     <!-- Main Menu -->
                     <nav class="main-menu">
                         <!--Keep This Empty / Menu will come through Javascript-->
                     </nav><!-- Main Menu End-->
                     
                 </div>
             </div>
         </div><!-- End Sticky Menu -->
     
         <!-- Mobile Menu  -->
         <div class="mobile-menu">
             <div class="menu-backdrop"></div>
             <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
             
             <nav class="menu-box">
                 <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
                 <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
             </nav>
         </div><!-- End Mobile Menu -->
     
     </header>
     <!-- End Main Header -->