<header class="topbar" data-navbarbg="skin6">
    <nav class="navbar top-navbar navbar-expand-md">
        <div class="navbar-header" data-logobg="skin6">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-brand">
                <!-- Logo icon -->
                <a href="#">
                    <b class="logo-icon">
                        <!-- Dark Logo icon -->
                        <img src="../partials/logo-icon.png" width="50" height="50" alt="homepage" class="dark-logo" />
                        <!-- Light Logo icon -->
                        <img src="../partials/logo-icon.png" width="50" height="50" alt="homepage" class="light-logo" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class="logo-text">
                        <!-- dark Logo text -->
                        <img src="../partials/logo-text.png" width="100" height="50" alt="homepage" class="dark-logo" />
                        <!-- Light Logo text -->
                        <img src="../partials/logo-text.png" width="100" height="50" class="light-logo" alt="homepage" />
                    </span>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                <!-- create new -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <p class="ml-3 mt-4">Hi <?= $_SESSION['name'];; ?>, Have a nice day! </p>
                </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-right">
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
                <p class="mr-5 mt-4"><?= gmdate("l, jS F Y ", time()); ?></p>
                <!-- Notification -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-5 pl-md-2 position-relative" href="javascript:void(0)" id="bell" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span><i data-feather="bell" class="text-info"></i><span style="font-size: 20px; position: relative; top: -11px; left: -4px;" class="text-danger">⁕</span></span>
                       
                       
                    </a>
                    <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                        <ul class="list-style-none">
                            <li>
                                <div class="message-center notifications position-relative">
                                <!-- javascript:void(0) -->
                                     <a href="notifcomplaint.php" class="message-item d-flex align-items-center border-bottom px-3 py-2"> 
                                        <div class=""><i data-feather="inbox" class="text-danger"></i></div>
                                        <div class="w-75 d-inline-block v-middle pl-2">
                                            <h6 class="message-title mb-0 mt-1">Hi <?= $_SESSION['name'];; ?>, You have notifications !</h6>
                                            <span class="font-12 text-nowrap d-block text-muted"></span>
                                            <span class="font-12 text-nowrap d-block text-muted"><?= gmdate(" jS F Y ", time()); ?></span>
                                        </div>
                                    </a>
                                 
                                    <!-- <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                        <span class="btn btn-success text-white rounded-circle btn-circle"><i data-feather="calendar" class="text-white"></i></span>
                                        <div class="w-75 d-inline-block v-middle pl-2">
                                            <h6 class="message-title mb-0 mt-1">Event today</h6>
                                            <span class="font-12 text-nowrap d-block text-muted text-truncate">Just
                                                a reminder that you have event</span>
                                            <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span>
                                        </div>
                                    </a> -->
                                 
                                    <!-- <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                        <span class="btn btn-info rounded-circle btn-circle"><i data-feather="settings" class="text-white"></i></span>
                                        <div class="w-75 d-inline-block v-middle pl-2">
                                            <h6 class="message-title mb-0 mt-1">Settings</h6>
                                            <span class="font-12 text-nowrap d-block text-muted text-truncate">You
                                                can customize this template
                                                as you want</span>
                                            <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span>
                                        </div>
                                    </a> -->
                                 
                                    <!-- <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                        <span class="btn btn-primary rounded-circle btn-circle"><i data-feather="box" class="text-white"></i></span>
                                        <div class="w-75 d-inline-block v-middle pl-2">
                                            <h6 class="message-title mb-0 mt-1">Pavan kumar</h6> <span class="font-12 text-nowrap d-block text-muted">Just
                                                see the my admin!</span>
                                            <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span>
                                        </div>
                                    </a>
                                </div>
                            </li> -->
                            <li>
                                <!-- <a class="nav-link pt-3 text-center text-dark" href="pendingcomplaint.php">
                                    <strong>Check all notifications</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a> -->
                            </li>
                        </ul>
                    </div>
                </li> 
                <!-- End Notification -->
                <!-- ============================================================== -->
                 <!-- <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0)">
                                <form>
                                    <div class="customize-input">
                                        <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                            type="search" placeholder="Search" aria-label="Search">
                                        <i class="form-control-icon" data-feather="search"></i>
                                    </div>
                                </form>
                            </a>
                        </li> --> 
                 <!-- ============================================================== -->
                 <!-- User profile and search --> 
                <!-- ============================================================== -->
                 <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="pointer-events: none;" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="../src/assets/images/users/profile-pic.jpg" alt="user" class="rounded-circle" width="40">
                        <span class="d-none d-lg-inline-block"><span class="text-dark">Hello, <?= $_SESSION['name'];; ?></span>
                    </a>
                </li> -->
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
            </ul>
        </div>
    </nav>
</header>