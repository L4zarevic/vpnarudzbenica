<?php
session_start();

if (is_null($_SESSION['logged_in_user'])) {
  header('Location: ../login.php');
}
require_once '../connection.php';

$korisnik = $_SESSION['logged_in_user'];
$ar = explode('#', $korisnik, 2);
$ar[1] = rtrim($ar[1], '#');
$idKorisnika = $ar[0];
$imeKorisnika = $ar[1];
$con = OpenCon();
mysqli_set_charset($con, 'utf8');

$stmt = $con->prepare('SELECT vrsta_sociva,vrsta_materijala,sph,cyl,adicija,jm,kolicina,mpc,broj_naloga,napomena,komitenti_radnje FROM mojaopt_vpnarudzbenica.narudzbenica_moptic');
$stmt->execute();
$result = $stmt->get_result();

echo '<html><head><meta charset="utf-8"></head><body>';
echo '<h2>Narudžbenica - M-Optic</h2>';
echo '<br/>Narudžba od: ' . "$imeKorisnika" . '<br/>';
echo 'Datum narudžbe: ' . date("d.m.Y") . ' u ' . date('H:i') . '<br/>';
echo '<br/>';
echo '<table rules="all" style="border-color:#000;" cellpadding="2">';
echo '<thead>';
echo '<tr>';
echo '<th>R.br.</th>';
echo "<th>Vrsta \nsočiva</th>";
echo "<th>Vrsta \nmaterijala</th>";
echo '<th>SPH</th>';
echo '<th>CYL</th>';
echo "<th>Add \nDig</th>";
echo '<th>JM</th>';
echo '<th>Kol.</th>';
echo "<th>MPC\n(kom)</th>";
echo "<th>Br.\nradnog \nnaloga</th>";
echo '<th>Napomena</th>';
echo "<th>Komitent/radnje</th>";
echo '<th></th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
echo '<tr>';

$rb = 0;
while ($row = mysqli_fetch_object($result)) {
  echo '<td>' . ($rb = $rb + 1) . '</td>';
  echo '<td>' . $row->vrsta_sociva . '</td>';
  echo '<td>' . $row->vrsta_materijala . '</td>';
  echo '<td>' . $row->sph . '</td>';
  echo '<td>' . $row->cyl . '</td>';
  echo '<td>' . $row->adicija . '</td>';
  echo '<td>' . $row->jm . '</td>';
  echo '<td>' . $row->kolicina . '</td>';
  echo '<td>' . $row->mpc . '</td>';
  echo '<td>' . $row->broj_naloga . '</td>';
  echo '<td>' . $row->napomena . '</td>';
  echo '<td>' . $row->komitenti_radnje . '</td>';
  echo '</tr>';
  echo '</tbody>';
}
