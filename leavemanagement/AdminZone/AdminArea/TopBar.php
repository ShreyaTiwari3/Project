<nav class="sb-topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
    <a class="navbar-brand" href="Dashboard"><img src="<?= $logo ?>" style="height:50px; width:50px;"></a><button class="btn sb-btn-icon sb-btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#"><i data-feather="menu"></i></button>
    <form class="form-inline mr-auto d-none d-lg-block">

    </form>
    <form class="form-inline ml-auto mr-3">

    </form>
    <ul class="navbar-nav align-items-center">

        <li class="nav-item dropdown no-caret mr-3 sb-dropdown-user">
            <a class="btn sb-btn-icon sb-btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="img-fluid" src="<?= $logo ?>" />
            </a>
            <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">

                <h6 class="dropdown-header d-flex align-items-center">
                    <img class="sb-dropdown-user-img" src="<?= $logo ?>">
                    <div class="sb-dropdown-user-details">
                        <div class="sb-dropdown-user-details-name"><?php echo $row_admin["AdminName"]; ?></div>
                        <div class="sb-dropdown-user-details-email"><?php echo $row_admin["AdminEmail"]; ?></div>
                    </div>
                </h6>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="Profile">
                    <div class="sb-dropdown-item-icon"><i data-feather="settings"></i></div>
                    Account
                </a>

                <a class="dropdown-item" href="code/AdminLogout">
                    <div class="sb-dropdown-item-icon"><i data-feather="log-out"></i></div>
                    Logout
                </a>

            </div>
        </li>

    </ul>
</nav>