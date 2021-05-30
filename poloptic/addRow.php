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
$ID_mjesta_isporuke = $arS[20];
$mpc = $arS[21];
$broj_naloga = $arS[22];
$napomena1 = $arS[23];

$napomena = str_replace('\n', " ", $napomena1);

if ($precnik2 == "") {
	$precnik = $precnik1;
} else if ($precnik1 == "") {
	$precnik = $precnik2;
} else {
	$precnik = $precnik1 . "/" . $precnik2;
}

$stmt3 = $con->prepare('SELECT alias FROM mojaopt_optike.korisnici WHERE ID=?');
$stmt3->bind_param('i', $ID_mjesta_isporuke);
$stmt3->execute();
$result3 = $stmt3->get_result();
$mjesto_isporuke = "";
while ($row3 = mysqli_fetch_object($result3)) {
	$mjesto_isporuke = $row3->alias;
}

$stmt = $con->prepare('INSERT INTO narudzbenica_pol (IDOptike,lag_spec,od_os_ou,vrsta_sociva,dizajn,visina,segment,baza,indeks,vrsta_materijala,precnik,sph,cyl,ugao,adicija,jm,kolicina,tretman1,tretman2,pd,mjesto_isporuke,mpc,broj_naloga,napomena) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
$stmt->bind_param('isssssssssssssssisssssss', $ID_mjesta_isporuke, $lager_specijala, $odOsOu, $vrstaSociva, $dizajn, $koridor_visina, $segment, $baza, $indeks, $materijal, $precnik, $sph, $cyl, $ugao, $add, $jm, $kolicina, $tretman1, $tretman2, $pd, $mjesto_isporuke, $mpc, $broj_naloga, $napomena);
$stmt->execute();
if (mysqli_error($con)) {
	die(mysqli_error($con));
}

CloseCon($con);
