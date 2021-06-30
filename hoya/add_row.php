<?php

session_start();
if (is_null($_SESSION['logged_in_user'])) {
	header('Location: ../login.php');
}

require_once '../connection.php';

$con = OpenCon();
mysqli_set_charset($con, 'utf8');

$stavka = mysqli_real_escape_string($con, $_REQUEST['stavka']);
$arS = explode("###", $stavka, 24);
$arS[1] = rtrim($arS[1], "###");

$odOsOu = $arS[0];
$vrstaSociva = $arS[1];
$dizajn = $arS[2];
$koridor_visina = $arS[3];
$segment = $arS[4];
$baza = $arS[5];
$indeks = $arS[6];
$precnik1 = $arS[7];
$precnik2 = $arS[8];
$sph = $arS[9];
$cyl = $arS[10];
$ugao = $arS[11];
$add = $arS[12];
$jm = $arS[13];
$kolicina = $arS[14];
$tretman1 = $arS[15];
$tretman2 = $arS[16];
$pd = $arS[17];
$mpc = $arS[18];
$broj_naloga = $arS[19];
$napomena1 = $arS[20];
$komitenti_radnje = $arS[21];
$dobavljac = $arS[22];
$mjesto_isporuke = $arS[23];

$napomena = str_replace('\n', " ", $napomena1);

if ($precnik2 == "") {
	$precnik = $precnik1;
} else if ($precnik1 == "") {
	$precnik = $precnik2;
} else {
	$precnik = $precnik1 . "/" . $precnik2;
}

$stmt = $con->prepare('INSERT INTO narudzbenica_hoya (od_os_ou,vrsta_sociva,dizajn,visina,segment,baza,indeks,precnik,sph,cyl,ugao,adicija,jm,kolicina,tretman1,tretman2,pd,mpc,broj_naloga,napomena,komitenti_radnje,dobavljac,mjesto_isporuke) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
$stmt->bind_param('sssssssssssssisssssssss', $odOsOu, $vrstaSociva, $dizajn, $koridor_visina, $segment, $baza, $indeks, $precnik, $sph, $cyl, $ugao, $add, $jm, $kolicina, $tretman1, $tretman2, $pd, $mpc, $broj_naloga, $napomena, $komitenti_radnje, $dobavljac, $mjesto_isporuke);
$stmt->execute();
if (mysqli_error($con)) {
	die(mysqli_error($con));
}

CloseCon($con);
