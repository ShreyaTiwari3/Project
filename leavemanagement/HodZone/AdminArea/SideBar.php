<div id="layoutSidenav_nav">
    <nav class="sb-sidenav sb-shadow-right sb-sidenav-light">
        <div class="sb-sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">

                <div class="sb-sidenav-menu-heading"> Welcome! </div>

                <a class="nav-link" href="Dashboard">
                    <div class="sb-nav-link-icon">
                        <i data-feather="activity"></i>
                    </div>
                    Dashboard
                </a>
                
                <a class="nav-link" href="ManageNLeave.php">
                    <div class="sb-nav-link-icon">
                        <i data-feather="activity"></i>
                    </div>
                    New Leave Application
                </a>
                <a class="nav-link" href="ManageApproved">
                    <div class="sb-nav-link-icon">
                        <i data-feather="activity"></i>
                    </div>
                    Approved Leave Application
                </a>
                <a class="nav-link" href="ManageRejected">
                    <div class="sb-nav-link-icon">
                        <i data-feather="activity"></i>
                    </div>
                    Rejected Leave Application
                </a>



            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div>
                <div class="small">Logged in as:</div>
                <?php echo $row_admin["name"]; ?> (<?php echo $row_admin["email"]; ?>)
            </div>
        </div>
    </nav>
</div>