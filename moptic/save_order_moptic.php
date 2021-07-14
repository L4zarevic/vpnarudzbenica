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

$schema_insert = '<html><head><meta charset="utf-8"></head><body>';
$schema_insert .= '<h2>Narudžbenica - M-Optic</h2>';
$schema_insert .= '<br/>Narudžba od: ' . "$imeKorisnika" . '<br/>';
$schema_insert .= 'Datum narudžbe: ' . date("d.m.Y") . ' u ' . date('H:i') . '<br/>';
$schema_insert .= '<br/>';
$schema_insert .= '<table rules="all" style="border-color:#000;" cellpadding="2">';
$schema_insert .= '<thead>';
$schema_insert .= '<tr>';
$schema_insert .= '<th>R.br.</th>';
$schema_insert .= '<th>OD/OS/Ou</th>';
$schema_insert .= "<th>Vrsta \nsočiva</th>";
$schema_insert .= "<th>Vrsta \nmaterijala</th>";
$schema_insert .= '<th>SPH</th>';
$schema_insert .= '<th>CYL</th>';
$schema_insert .= "<th>Add \nDig</th>";
$schema_insert .= '<th>JM</th>';
$schema_insert .= '<th>Kol.</th>';
$schema_insert .= "<th>MPC\n(kom)</th>";
$schema_insert .= "<th>Br.\nradnog \nnaloga</th>";
$schema_insert .= '<th>Napomena</th>';
$schema_insert .= "<th>Komitenti/radnje</th>";
$schema_insert .= '<th></th>';
$schema_insert .= '</tr>';
$schema_insert .= '</thead>';
$schema_insert .= '<tbody>';
$schema_insert .= '<tr>';

$rb = 0;
while ($row = mysqli_fetch_object($result)) {
  $schema_insert .= '<td>' . ($rb = $rb + 1) . '</td>';
  $schema_insert .= '<td>' . $row->od_os_ou . '</td>';
  $schema_insert .= '<td>' . $row->vrsta_sociva . '</td>';
  $schema_insert .= '<td>' . $row->vrsta_materijala . '</td>';
  $schema_insert .= '<td>' . $row->sph . '</td>';
  $schema_insert .= '<td>' . $row->cyl . '</td>';
  $schema_insert .= '<td>' . $row->adicija . '</td>';
  $schema_insert .= '<td>' . $row->jm . '</td>';
  $schema_insert .= '<td>' . $row->kolicina . '</td>';
  $schema_insert .= '<td>' . $row->mpc . '</td>';
  $schema_insert .= '<td>' . $row->broj_naloga . '</td>';
  $schema_insert .= '<td>' . $row->napomena . '</td>';
  $schema_insert .= '<td>' . $row->komitenti_radnje . '</td>';
  $schema_insert .= '</tr>';
  $schema_insert .= '</tbody>';
}

file_put_contents('../orders/moptic/narudzbenica_moptic_' . $imeKorisnika . '_' . date("d.m.Y_H.i") . '.html', $schema_insert);

$stmt = $con->prepare('SELECT email FROM mojaopt_vpnarudzbenica.korisnici WHERE ID =?');
$stmt->bind_param('i', $idKorisnika);
$stmt->execute();
$result = $stmt->get_result();
$email = "";
while ($row = mysqli_fetch_object($result)) {
  $email = $row->email;
}

$separator = md5(date('r', time()));
// carriage return type (we use a PHP end of line constant)
$eol = PHP_EOL;
// attachment name
$filename = "narudzbenica_Pol_" . $imeKorisnika . "_" . date("d.m.Y_H.i") . ".html";
$attachment = chunk_split(base64_encode(file_get_contents('../orders/moptic/narudzbenica_moptic_' . $imeKorisnika . '_' . date("d.m.Y_H.i") . '.html')));

$header = "From: no-reply@mojaoptika.com" . $eol;
$header .= "MIME-Version: 1.0" . $eol;
$header .= "Content-Type: multipart/mixed; charset=utf-8; boundary=\"" . $separator . "\"";
$subject1 = "eNarudzbenica - Narudzba je sacuvana";

$message = "Narudzbenica - M-Optic \n";
$message .= "Narudzba od: " . $imeKorisnika . "\n";
$message .= "Datum narudzbe: " . date("d.m.Y") . " u " . date('H:i') . "\n";
$message .= "------------------------ \n" . $eol;
$message .= "Email poslat putem aplikacije eNarudzbenica VP. https://mojaoptika.com/vpnarudzbenica \n";

// message & attachment
$nmessage = "--" . $separator . $eol;
$nmessage .= "Content-type:text/plain; charset=utf-8;" . $eol;
$nmessage .= "Content-Transfer-Encoding: 7bit" . $eol . $eol;
$nmessage .= $message . $eol;
$nmessage .= "--" . $separator . $eol;
$nmessage .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"" . $eol;
$nmessage .= "Content-Transfer-Encoding: base64" . $eol;
$nmessage .= "Content-Disposition: attachment;  filename=\"" . $filename . "\"" . $eol . $eol;
$nmessage .= $attachment . $eol;
$nmessage .= "--" . $separator . "--";

//mail($email, $subject1, $nmessage, $header);

$stmt2 = $con->prepare('INSERT INTO mojaopt_vpnarudzbenica.istorijat_moptic (IDKorisnika,narudzba,datum,dobavljac) VALUES (?,?,?,"M-Optic")');
$stmt2->bind_param('iss', $idKorisnika, $schema_insert, date("Y-m-d"));
$stmt2->execute();

$stmt = $con->prepare('DELETE FROM `narudzbenica_moptic`');

$stmt->execute();
if (mysqli_error($con)) {
  die(mysqli_error($con));
}

CloseCon($con);
header('Location: index.php?msg=0');
die();
