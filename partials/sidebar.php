<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <?php
                if (
                    $_SESSION['role'] != 'admin' && $_SESSION['role'] != 'superadmin'
                ) {
                ?>
                    <li class="sidebar-item <?= ($active == 'x') ? 'selected' : ''; ?>"> <a class="sidebar-link sidebar-link" href="index.php" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Dashboard</span></a></li>
                    <!-- <li class="list-divider"></li> -->
                    <!-- <li class="nav-small-cap"><span class="hide-menu">Applications</span></li> -->
                    <li class="sidebar-item <?= ($active == 'y') ? 'selected' : ''; ?>"> <a class="sidebar-link" href="docs.php" aria-expanded="false"><i data-feather="archive" class="feather-icon"></i><span class="hide-menu">Documents</span></a></li>
                    <!-- <li class="sidebar-item"> <a class="sidebar-link" href="ticket-list.html" aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">Ticket List</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link" href="app-chat.html" aria-expanded="false"><i data-feather="message-square" class="feather-icon"></i><span class="hide-menu">Chat</span></a></li> -->
                    <?php

                    if (
                        $_SESSION['role'] == 'Approver'
                    ) {
                        $c1 = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM docs where is_approved = 0 AND approver = '$_SESSION[id]'"));
                    } else {
                        $c1 = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM docs where is_approved = 0"));
                    }
                    $c2 = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM docs where is_approved = 2"));
                    if (
                        $_SESSION['role'] == 'Approver' ||  $_SESSION['role'] == 'Maker'
                    ) {
                    ?>
                        <li class="sidebar-item <?= ($active == 'z') ? 'selected' : ''; ?>">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="check-square" class="feather-icon"></i>
                                <span class="hide-menu">Approval </span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level base-level-line">

                                <li class="sidebar-item">
                                    <a href="pending.php" class="sidebar-link">
                                        <span class="hide-menu">Pending Documents
                                            <!-- <?php if ($c1[0] > 0) { ?>
                                                <span class="badge badge-warning notify-no rounded-circle"><?= $c1[0]; ?></span>
                                            <?php } ?> -->
                                        </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="rejected.php" class="sidebar-link <?= (isset($_GET['active'])) ? 'active' : ''; ?>">
                                        <span class="hide-menu">Rejected Documents
                                            <!-- <?php if ($c2[0] > 0) { ?>
                                                <span class="badge badge-danger notify-no rounded-circle"><?= $c2[0]; ?></span>
                                            <?php } ?> -->
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php }
                }
                if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'superadmin') {
                    ?>
                    <li class="sidebar-item <?= ($active == 'a') ? 'selected' : ''; ?>"> <a class="sidebar-link" href="accounts.php" aria-expanded="false"><i data-feather="user" class="feather-icon"></i><span class="hide-menu">User Management</span></a></li>
                <?php } ?>
                <?php if ($_SESSION['role'] == 'superadmin' || $_SESSION['role'] == 'admin')  { ?>
                    <li class="sidebar-item <?= ($active == 'c') ? 'selected' : ''; ?>"> <a class="sidebar-link" href="pendinguser.php" aria-expanded="false"><i data-feather="user-check" class="feather-icon"></i><span class="hide-menu">Pending User</span></a></li>
                <?php } ?>
                
                
                
                
                <li class="sidebar-item <?= ($active == 'k') ? 'selected' : ''; ?>">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i data-feather="bar-chart-2" class="feather-icon"></i>
                        <span class="hide-menu">Complaint Handling </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        
                        <li class="sidebar-item">
                            <a href="complaint.php" class="sidebar-link">
                                <span class="hide-menu">Input Complaint
                                    
                                    </span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="pendingcomplaint1.php" class="sidebar-link">
                                    <span class="hide-menu">Pending Complaint
                                        
                                        </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="listcomplaint1.php" class="sidebar-link">
                                        <span class="hide-menu">List Complaint
                                            
                                            </span>
                                        </a>
                                    </li>
                              
                                    
                                </ul>
                            </li>
                <li class="sidebar-item <?= ($active == 'm') ? 'selected' : ''; ?>">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i data-feather="zap" class="feather-icon"></i>
                        <span class="hide-menu">Development Issue </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        
                        <li class="sidebar-item">
                            <a href="issue.php" class="sidebar-link">
                                <span class="hide-menu">Input Issue
                                    
                                    </span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="pendingissue.php" class="sidebar-link">
                                    <span class="hide-menu">Pending Issue
                                        
                                        </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="listissue.php" class="sidebar-link">
                                        <span class="hide-menu"> Completed Issue
                                            
                                            </span>
                                        </a>
                                    </li>
                                <li class="sidebar-item">
                                    <a href="issue_all.php" class="sidebar-link">
                                        <span class="hide-menu">List issue
                                            
                                            </span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                            
                <li class="sidebar-item <?= ($active == 'p') ? 'selected' : ''; ?>">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i data-feather="book" class="feather-icon"></i>
                        <span class="hide-menu">Reporting Monitoring </span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        
                        <li class="sidebar-item">
                            <a href="1upload.php" class="sidebar-link">
                                <span class="hide-menu">Add Reporting
                                    
                                    </span>
                                </a>
                            </li>               

                        <li class="sidebar-item">
                            <a href="1reportingdone.php" class="sidebar-link">
                                <span class="hide-menu">List Reporting
                                    
                                    </span>
                                </a>
                            </li>                           
                                
                                
                                
                                
                                <li class="sidebar-item">
                                    <a href="1pendingreporting.php" class="sidebar-link">
                                        <span class="hide-menu">Pending Reporting
                                            
                                            </span>
                                        </a>
                                    </li>
                                <li class="sidebar-item">
                                    <a href="1disable.php" class="sidebar-link">
                                        <span class="hide-menu">Rejected Reporting
                                            
                                            </span>
                                        </a>
                                    </li>


                                <li class="sidebar-item">
                                    <a href="1history.php" class="sidebar-link">
                                        <span class="hide-menu">History
                                            
                                            </span>
                                        </a>
                                    </li>
                              
                                
                                    
                                </ul>
                            </li>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            <li class="list-divider"></li>
                            
                            <li class="sidebar-item <?= ($active == 't') ? 'selected' : ''; ?>"> <a class="sidebar-link" href="account.php" aria-expanded="false"><i data-feather="settings" class="feather-icon"></i><span class="hide-menu">Account Setting</span></a></li>
                            <li class="list-divider"></li>
                            
                            <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="functions/account.php?logout=true" aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span class="hide-menu">Logout</span></a></li>
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>