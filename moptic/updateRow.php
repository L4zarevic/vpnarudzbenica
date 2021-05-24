<?php session_start();
if (is_null($_SESSION['login'])) {
    header('Location: ../login.php');
}
header("Content-Type: application/json", true);
require_once '../connection.php';
$korisnik = $_SESSION['login'];
$ar = explode('#', $korisnik, 4);
$ar[1] = rtrim($ar[1], '#');
$idKorisnika = $ar[0];
$dataBaseName = $ar[3];
$conn = OpenStoreCon($dataBaseName);
mysqli_set_charset($conn, 'utf8');
$stavka = mysqli_real_escape_string($conn, $_REQUEST['stavka']);
$ar = explode("#", $stavka, 2);
$ar[1] = rtrim($ar[1], "#");
$ID = $ar[0];
$napomena = $ar[1];
$realID = substr($ID, 1);
$stmt = $conn->prepare('UPDATE narudzbenica_moptic SET napomena =? WHERE ID =?');
$stmt->bind_param('si', $napomena, $realID);
$stmt->execute();
if (mysqli_error($conn)) {
    die(mysqli_error($conn));
}
CloseCon($conn);
header('Location: ' . $_SERVER['HTTP_REFERER']);
