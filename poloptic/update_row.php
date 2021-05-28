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
$lager_specijala = $arS[1];
$odOsOu = $arS[2];
$vrstaSociva = $arS[3];
$dizajn = $arS[4];
$koridor_visina = $arS[5];
$segment = $arS[6];
$baza = $arS[7];
$indeks = $arS[8];
$materijal = $arS[9];
$precnik1 = $arS[10];
$precnik2 = $arS[11];
$sph = $arS[12];
$cyl = $arS[13];
$ugao = $arS[14];
$add = $arS[15];
$jm = $arS[16];
$kolicina = $arS[17];
$tretman1 = $arS[18];
$tretman2 = $arS[19];
$pd = $arS[20];
$ID_mjesta_isporuke = $arS[21];
$mpc = $arS[22];
$broj_naloga = $arS[23];
$napomena1 = $arS[24];

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

$stmt = $con->prepare('UPDATE narudzbenica_pol SET IDOptike=?,lag_spec=?,od_os_ou=?,vrsta_sociva=?,dizajn=?,visina=?,segment=?,baza=?,indeks=?,vrsta_materijala=?,precnik=?,sph=?,cyl=?,ugao=?,adicija=?,jm=?,kolicina=?,tretman1=?,tretman2=?,pd=?,mjesto_isporuke=?,mpc=?,broj_naloga=?,napomena=? WHERE ID=?');
$stmt->bind_param('isssssssssssssssisssssssi', $ID_mjesta_isporuke, $lager_specijala, $odOsOu, $vrstaSociva, $dizajn, $koridor_visina, $segment, $baza, $indeks, $materijal, $precnik, $sph, $cyl, $ugao, $add, $jm, $kolicina, $tretman1, $tretman2, $pd, $mjesto_isporuke, $mpc, $broj_naloga, $napomena, $id_stavke);
$stmt->execute();
if (mysqli_error($con)) {
	die(mysqli_error($con));
}
CloseCon($con);
