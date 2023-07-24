<?php
//session_start();
require("code/DBConnection.php");

$AdminEmail = $_SESSION["email"];



$query_admin = "select * from hodlogin where email='$AdminEmail'";
$res_admin = mysqli_query($conn, $query_admin);
$row_admin = mysqli_fetch_array($res_admin, MYSQLI_ASSOC);

?>


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="css\styles.css" rel="stylesheet">
<!-- https://github.com/CodeSeven/toastr -->
<link href="css\toastr.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous">
<link rel="icon" type="image/x-icon" href="<?= $favicon ?>">
<script data-search-pseudo-elements="" defer="" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" crossorigin="anonymous">
</script>
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Libre+Franklin:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap-datetimepicker.css" />