<?php session_start();
if (is_null($_SESSION['login'])) {
    header('Location: ../login.php');
}
require_once '../connection.php';
$korisnik = $_SESSION['login'];
$ar = explode('#', $korisnik, 4);
$ar[1] = rtrim($ar[1], '#');
$idKorisnika = $ar[0];
$dataBaseName = $ar[3];
$conn = OpenStoreCon($dataBaseName);
mysqli_set_charset($conn, 'utf8');

$stavka = mysqli_real_escape_string($conn, $_REQUEST['stavka']);
$upit = "DELETE FROM `narudzbenica_essilor` WHERE ID='$stavka'";
$rezultat = mysqli_query($conn, $upit);
if (!$rezultat) die(mysqli_error($conn));
CloseCon($conn);
header('Location: ' . $_SERVER['HTTP_REFERER']);
