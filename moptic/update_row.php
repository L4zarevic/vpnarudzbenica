<?php
session_start();
if (is_null($_SESSION['logged_in_user'])) {
	header('Location: ../login.php');
}

require_once '../connection.php';
$con = OpenCon();
mysqli_set_charset($con, 'utf8');

$stavka = mysqli_real_escape_string($con, $_REQUEST['stavka']);
$arS = explode("###", $stavka, 13);
$arS[1] = rtrim($arS[1], "###");

$id_stavke = $arS[0];
$od_os_ou = $arS[1];
$vrstaSociva = $arS[2];
$vrstaMaterijala = $arS[3];
$sph = $arS[4];
$cyl = $arS[5];
$add = $arS[6];
$jm = $arS[7];
$kolicina = $arS[8];
$mpc = $arS[9];
$broj_naloga = $arS[10];
$napomena1 = $arS[11];
$komitenti_radnje = $arS[12];

$napomena = str_replace('\n', " ", $napomena1);

$stmt = $con->prepare('UPDATE narudzbenica_moptic SET od_os_ou=?,vrsta_sociva=?,vrsta_materijala=?,sph=?,cyl=?,adicija=?,jm=?,kolicina=?,mpc=?,broj_naloga=?,napomena=?,komitenti_radnje=? WHERE ID=?');
$stmt->bind_param('sssssssissssi', $od_os_ou, $vrstaSociva, $vrstaMaterijala, $sph, $cyl, $add, $jm, $kolicina, $mpc, $broj_naloga, $napomena, $komitenti_radnje, $id_stavke);
$stmt->execute();
if (mysqli_error($con)) {
	die(mysqli_error($con));
}
CloseCon($con);
