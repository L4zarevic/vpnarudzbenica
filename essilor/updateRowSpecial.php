<?php

session_start();
if (is_null($_SESSION['login'])) {
	header('Location: ../login.php');
}

require_once '../connection.php';

$korisnik = $_SESSION['login'];
$ar = explode('#', $korisnik, 4);
$ar[1] = rtrim($ar[1], '#');
$idKorisnika = $ar[0];
$dataBaseName = $ar[3];
$conn = OpenStoreCon($dataBaseName);
mysqli_set_charset($conn, 'utf8');

$stavka = mysqli_real_escape_string($conn, $_REQUEST['stavka']);
$arS = explode("###", $stavka, 22);
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
$id_stavke = $arS[21];

$napomena = str_replace('\n', " ", $napomena1);

if ($precnik2 == "") {
	$precnik = $precnik1;
} else if ($precnik1 == "") {
	$precnik = $precnik2;
} else {
	$precnik = $precnik1 . "/" . $precnik2;
}

$con = OpenCon();
mysqli_set_charset($con, 'utf8');
$stmt3 = $con->prepare('SELECT alias FROM korisnici WHERE ID=?');
$stmt3->bind_param('i', $idKorisnika);
$stmt3->execute();
$result3 = $stmt3->get_result();
$mjesto_isporuke = "";
while ($row3 = mysqli_fetch_object($result3)) {
	$mjesto_isporuke = $row3->alias;
}

$stmt = $conn->prepare('UPDATE narudzbenica_essilor SET IDKorisnika=?,od_os_ou=?,vrsta_sociva=?,dizajn=?,visina=?,segment=?,baza=?,indeks=?,precnik=?,sph=?,cyl=?,ugao=?,adicija=?,jm=?,kolicina=?,tretman1=?,tretman2=?,pd=?,mjesto_isporuke=?,mpc=?,broj_naloga=?,napomena=? WHERE ID=?');
$stmt->bind_param('isssssssssssssisssssssi', $idKorisnika, $odOsOu, $vrstaSociva, $dizajn, $koridor_visina, $segment, $baza, $indeks, $precnik, $sph, $cyl, $ugao, $add, $jm, $kolicina, $tretman1, $tretman2, $pd, $mjesto_isporuke, $mpc, $broj_naloga, $napomena, $id_stavke);
$stmt->execute();
if (mysqli_error($conn)) {
	die(mysqli_error($conn));
}
CloseCon($conn);
