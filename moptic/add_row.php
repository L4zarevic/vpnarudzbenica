<?php

session_start();
if (is_null($_SESSION['logged_in_user'])) {
	header('Location: ../login.php');
}

require_once '../connection.php';

$con = OpenCon();
mysqli_set_charset($con, 'utf8');

$stavka = mysqli_real_escape_string($con, $_REQUEST['stavka']);
$arS = explode("###", $stavka, 11);
$arS[1] = rtrim($arS[1], "###");

$vrstaSociva = $arS[0];
$vrstaMaterijala = $arS[1];
$sph = $arS[2];
$cyl = $arS[3];
$add = $arS[4];
$jm = $arS[5];
$kolicina = $arS[6];
$mpc = $arS[7];
$broj_naloga = $arS[8];
$napomena1 = $arS[9];
$komitenti_radnje = $arS[10];

$napomena = str_replace('\n', " ", $napomena1);

$stmt = $con->prepare('INSERT INTO narudzbenica_moptic (vrsta_sociva,vrsta_materijala,sph,cyl,adicija,jm,kolicina,mpc,broj_naloga,napomena,komitenti_radnje) VALUES (?,?,?,?,?,?,?,?,?,?,?)');
$stmt->bind_param('ssssssissss', $vrstaSociva, $vrstaMaterijala, $sph, $cyl, $add, $jm, $kolicina, $mpc, $broj_naloga, $napomena, $komitenti_radnje);
$stmt->execute();
if (mysqli_error($con)) {
	die(mysqli_error($con));
}

CloseCon($con);
