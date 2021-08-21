<?php

session_start();
if (is_null($_SESSION['logged_in_user'])) {
	header('Location: ../login.php');
}

require_once '../connection.php';

$con = OpenCon();
mysqli_set_charset($con, 'utf8');

$stavka = mysqli_real_escape_string($con, $_REQUEST['stavka']);
$arS = explode("###", $stavka, 15);
$arS[1] = rtrim($arS[1], "###");

$od_os = $arS[0];
$tip = $arS[1];
$sph = $arS[2];
$cyl = $arS[3];
$ugao  = $arS[4];
$bc = $arS[5];
$td = $arS[6];
$jm = $arS[7];
$kolicina = $arS[8];
$mpc = $arS[9];
$broj_naloga = $arS[10];
$napomena1 = $arS[11];
$komitenti_radnje = $arS[12];
$dobavljac = $arS[13];
$mjesto_isporuke = $arS[14];

$napomena = str_replace('\n', " ", $napomena1);

$stmt = $con->prepare('INSERT INTO narudzbenica_bl (od_os,tip,sph,cyl,ugao,bc,td,jm,kolicina,mpc,broj_naloga,napomena,komitenti_radnje,dobavljac,mjesto_isporuke) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
$stmt->bind_param('ssssssssissssss', $od_os, $tip, $sph, $cyl, $ugao, $bc, $td, $jm, $kolicina, $mpc, $broj_naloga, $napomena, $komitenti_radnje, $dobavljac, $mjesto_isporuke);
$stmt->execute();
if (mysqli_error($con)) {
	die(mysqli_error($con));
}

CloseCon($con);
