<?php session_start();
if (is_null($_SESSION['logged_in_user'])) {
    header('Location: ../login.php');
}
include '../connection.php';
$korisnik = $_SESSION['logged_in_user'];
$ar = explode("#", $korisnik, 2);
$ar[1] = rtrim($ar[1], "#");
$idKorisnika = $ar[0];
$imeKorisnika = $ar[1]; ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex">
    <meta name="description" content="">
    <meta name="author" content="Nemanja Lazarević">
    <title>Moja Optika Stanković | e-Narudžbenica VP</title>
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/alertify.min.css" />
    <link rel="stylesheet" href="../css/themes/default.min.css" />
    <link rel="icon" type="image/png" href="../images/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="../images/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="../images/favicon.ico" />
</head>