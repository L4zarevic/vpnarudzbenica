<?php
session_start();
if (is_null($_SESSION['logged_in_user'])) {
	header('Location: ../login.php');
}

require_once '../connection.php';
$con = OpenCon();
mysqli_set_charset($con, 'utf8');

$stavka = mysqli_real_escape_string($con, $_REQUEST['stavka']);
$arS = explode("###", $stavka, 25);
$arS[1] = rtrim($arS[1], "###");

$id_stavke = $arS[0];

$odOsOu = $arS[1];
$vrstaSociva = $arS[2];
$dizajn = $arS[3];
$koridor_visina = $arS[4];
$segment = $arS[5];
$baza = $arS[6];
$indeks = $arS[7];

$precnik1 = $arS[8];
$precnik2 = $arS[9];
$sph = $arS[10];
$cyl = $arS[11];
$ugao = $arS[12];
$add = $arS[13];
$jm = $arS[14];
$kolicina = $arS[15];
$tretman1 = $arS[16];
$tretman2 = $arS[17];
$pd = $arS[18];
$mpc = $arS[19];
$broj_naloga = $arS[20];
$napomena1 = $arS[21];
$komitenti_radnje = $arS[22];
$dobavljac = $arS[23];
$mjesto_isporuke = $arS[24];

$napomena = str_replace('\n', " ", $napomena1);

if ($precnik2 == "") {
	$precnik = $precnik1;
} else if ($precnik1 == "") {
	$precnik = $precnik2;
} else {
	$precnik = $precnik1 . "/" . $precnik2;
}

$stmt = $con->prepare('UPDATE narudzbenica_essilor SET od_os_ou=?,vrsta_sociva=?,dizajn=?,visina=?,segment=?,baza=?,indeks=?,precnik=?,sph=?,cyl=?,ugao=?,adicija=?,jm=?,kolicina=?,tretman1=?,tretman2=?,pd=?,mpc=?,broj_naloga=?,napomena=?, komitenti_radnje=?, dobavljac=?, mjesto_isporuke=? WHERE ID=?');
$stmt->bind_param('sssssssssssssisssssssssi', $odOsOu, $vrstaSociva, $dizajn, $koridor_visina, $segment, $baza, $indeks, $precnik, $sph, $cyl, $ugao, $add, $jm, $kolicina, $tretman1, $tretman2, $pd, $mpc, $broj_naloga, $napomena, $komitenti_radnje, $dobavljac, $mjesto_isporuke, $id_stavke);
$stmt->execute();
if (mysqli_error($con)) {
	die(mysqli_error($con));
}
CloseCon($con);
