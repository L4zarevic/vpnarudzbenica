<?php
session_start();
if (is_null($_SESSION['logged_in_user'])) {
	header('Location: ../login.php');
}

require_once '../connection.php';
$con = OpenCon();
mysqli_set_charset($con, 'utf8');

$stavka = mysqli_real_escape_string($con, $_REQUEST['stavka']);
$arS = explode("###", $stavka, 12);
$arS[1] = rtrim($arS[1], "###");

$id_stavke = $arS[0];
$vrstaSociva = $arS[1];
$vrstaMaterijala = $arS[2];
$sph = $arS[3];
$cyl = $arS[4];
$add = $arS[5];
$jm = $arS[6];
$kolicina = $arS[7];
$mpc = $arS[8];
$broj_naloga = $arS[9];
$napomena1 = $arS[10];
$komitenti_radnje = $arS[11];

$napomena = str_replace('\n', " ", $napomena1);

$stmt = $con->prepare('UPDATE narudzbenica_moptic SET vrsta_sociva=?,vrsta_materijala=?,sph=?,cyl=?,adicija=?,jm=?,kolicina=?,mpc=?,broj_naloga=?,napomena=?,komitenti_radnje=? WHERE ID=?');
$stmt->bind_param('ssssssissssi', $vrstaSociva, $vrstaMaterijala, $sph, $cyl, $add, $jm, $kolicina, $mpc, $broj_naloga, $napomena, $komitenti_radnje, $id_stavke);
$stmt->execute();
if (mysqli_error($con)) {
	die(mysqli_error($con));
}
CloseCon($con);
