<?php session_start();
if (is_null($_SESSION['logged_in_user'])) {
    header('Location: ../login.php');
}
require_once '../connection.php';
$con = OpenCon();
mysqli_set_charset($con, 'utf8');

$id_stavke = mysqli_real_escape_string($con, $_REQUEST['stavka']);
$stmt = $con->prepare('DELETE FROM `narudzbenica_pol` WHERE ID=?');
$stmt->bind_param('i',$id_stavke);
$stmt->execute();
if (mysqli_error($con)) {
	die(mysqli_error($con));
}
CloseCon($con);
