<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav sb-shadow-right sb-sidenav-light">
        <div class="sb-sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">

                <div class="sb-sidenav-menu-heading"> Welcome! </div>

                <a class="nav-link" href="Dashboard">
                    <div class="sb-nav-link-icon">
                        <i class="fa-solid fa-code-merge"></i>
                    </div>
                    Dashboard
                </a>
                <a class="nav-link" href="ManageApplication">
                    <div class="sb-nav-link-icon">
                        <i class="fa-solid fa-gears"></i>
                    </div>
                    Apply For Leave
                </a>
                <a class="nav-link" href="ManageStatus.php">
                    <div class="sb-nav-link-icon">
                        <i class="fa-solid fa-window-restore"></i>
                    </div>
                    Leave Status
                </a>
                <a class="nav-link" href="ManageGatePass">
                    <div class="sb-nav-link-icon">
                        <i class="fa-solid fa-user-secret"></i>
                    </div>
                    Gate Pass
                </a>


            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div>
                <div class="small">Logged in as:</div>
                <?php echo $row_admin["name"]; ?> (<?php echo $row_admin["mobile"]; ?>)
            </div>
        </div>
    </nav>
</div>