<?php

session_start();
if (is_null($_SESSION['logged_in_user'])) {
	header('Location: ../login.php');
}

require_once '../connection.php';

$con = OpenCon();
mysqli_set_charset($con, 'utf8');

$stavka = mysqli_real_escape_string($con, $_REQUEST['stavka']);
$arS = explode("###", $stavka, 26);
$arS[1] = rtrim($arS[1], "###");

$lager_specijala = $arS[0];
$odOsOu = $arS[1];
$vrstaSociva = $arS[2];
$dizajn = $arS[3];
$koridor_visina = $arS[4];
$segment = $arS[5];
$baza = $arS[6];
$indeks = $arS[7];
$materijal = $arS[8];
$precnik1 = $arS[9];
$precnik2 = $arS[10];
$sph = $arS[11];
$cyl = $arS[12];
$ugao = $arS[13];
$add = $arS[14];
$jm = $arS[15];
$kolicina = $arS[16];
$tretman1 = $arS[17];
$tretman2 = $arS[18];
$pd = $arS[19];
$mpc = $arS[20];
$broj_naloga = $arS[21];
$napomena1 = $arS[22];
$komitenti_radnje = $arS[23];
$dobavljac = $arS[24];
$mjesto_isporuke = $arS[25];

$napomena = str_replace('\n', " ", $napomena1);

if ($precnik2 == "") {
	$precnik = $precnik1;
} else if ($precnik1 == "") {
	$precnik = $precnik2;
} else {
	$precnik = $precnik1 . "/" . $precnik2;
}

$stmt = $con->prepare('INSERT INTO narudzbenica_essilor (lag_spec,od_os_ou,vrsta_sociva,dizajn,visina,segment,baza,indeks,vrsta_materijala,precnik,sph,cyl,ugao,adicija,jm,kolicina,tretman1,tretman2,pd,mpc,broj_naloga,napomena,komitenti_radnje,dobavljac,mjesto_isporuke) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
$stmt->bind_param('sssssssssssssssisssssssss', $lager_specijala, $odOsOu, $vrstaSociva, $dizajn, $koridor_visina, $segment, $baza, $indeks, $materijal, $precnik, $sph, $cyl, $ugao, $add, $jm, $kolicina, $tretman1, $tretman2, $pd, $mpc, $broj_naloga, $napomena, $komitenti_radnje, $dobavljac, $mjesto_isporuke);
$stmt->execute();
if (mysqli_error($con)) {
	die(mysqli_error($con));
}

CloseCon($con);
