<!DOCTYPE html>
<html lang="en">
<?php
require("code/config.php");
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login - <?= $panel_name ?></title>
    <link href="css\styles.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?= $favicon ?>">
    <script data-search-pseudo-elements="" defer="" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header justify-content-center">

                                    <h3 class="font-weight-light my-4 text-center">
                                        <img src="<?= $logo ?>" style="height:80px; " />
                                        <br /> <br />
                                        HOD Login
                                    </h3>
                                </div>
                                <div class="card-body">

                                    <form action="code/AdminLogin.php" method="post">
                                    <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label><input class="form-control py-4" type="email" name="email" placeholder="Enter Email"></div>
                                        <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" type="password" name="password" placeholder="Enter password"></div>


                                        <div class="form-group text-right">
                                            <button class="btn btn-primary">Login &nbsp; <i class="fa fa-sign-in-alt"></i>
                                            </button>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="sb-footer py-4 mt-auto sb-footer-dark">
                <div class="container-fluid">
                    <div class="text-center">

                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js\scripts.js"></script>
</body>

</html>