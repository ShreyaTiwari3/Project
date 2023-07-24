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


                <!--<a class="nav-link" href="ManageVolunteers">
                    <div class="sb-nav-link-icon">
                        <i data-feather="activity"></i>
                    </div>
                    Manage Employee
                </a>-->
                <a class="nav-link" href="Parent">
                    <div class="sb-nav-link-icon">
                        <i data-feather="activity"></i>
                    </div>
                    Parent User
                </a>
                <a class="nav-link" href="Staff">
                    <div class="sb-nav-link-icon">
                        <i data-feather="activity"></i>
                    </div>
                    Staff User
                </a>
                <a class="nav-link" href="Hod">
                    <div class="sb-nav-link-icon">
                        <i data-feather="activity"></i>
                    </div>
                    HOD User
                </a>
                <a class="nav-link" href="ManageNLeave">
                    <div class="sb-nav-link-icon">
                        <i data-feather="activity"></i>
                    </div>
                    Leave Applications
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div>
                <div class="small">Logged in as:</div>
                <?php echo $row_admin["AdminName"]; ?> (<?php echo $row_admin["AdminEmail"]; ?>)
            </div>
        </div>
    </nav>
</div>