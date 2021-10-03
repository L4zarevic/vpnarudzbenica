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

$user_message = mysqli_real_escape_string($con, $_REQUEST['user_message']);

$stmt = $con->prepare('SELECT od_os_ou,vrsta_sociva,dizajn,visina,segment,baza,indeks,precnik,sph,cyl,ugao,adicija,jm,kolicina,tretman1,tretman2,pd,mjesto_isporuke,napomena
FROM mojaopt_vpnarudzbenica.narudzbenica_hoya
WHERE dobavljac="hoya-bih"');

$stmt->execute();
$result = $stmt->get_result();

$schema_insert = '<html><head><meta charset="utf-8"></head><body>';
$schema_insert .= '<h2>Narudžbenica - Hoya</h2>';
$schema_insert .= '<br/>Narudžba od: ' . $imeKorisnika . '<br/>';
$schema_insert .= 'Datum narudžbe: ' . date("d.m.Y") . ' u ' . date('H:i') . '<br/>';
$schema_insert .= '<br/>';
$schema_insert .= '<table rules="all" style="border-color:#000;" cellpadding="2">';
$schema_insert .= '<thead>';
$schema_insert .= '<tr>';
$schema_insert .= '<th>R.br.</th>';
$schema_insert .= '<th>Od/Os/Ou</th>';
$schema_insert .= '<th>Vrsta soč.</th>';
$schema_insert .= '<th>Dizajn</th>';
$schema_insert .= '<th>PRL/OCHT</th>';
$schema_insert .= '<th>Segm.</th>';
$schema_insert .= '<th>Baza</th>';
$schema_insert .= '<th>Index</th>';
$schema_insert .= '<th>Prečn.</th>';
$schema_insert .= '<th>SPH</th>';
$schema_insert .= '<th>CYL</th>';
$schema_insert .= '<th>Ugao</th>';
$schema_insert .= '<th>Add</th>';
$schema_insert .= '<th>JM</th>';
$schema_insert .= '<th>Kol.</th>';
$schema_insert .= '<th>Tr.1</th>';
$schema_insert .= '<th>Tr.2</th>';
$schema_insert .= '<th>PD</th>';
$schema_insert .= '<th>Mjesto isporuke</th>';
$schema_insert .= '<th>Napomena</th>';
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
  $schema_insert .= '<td>' . $row->dizajn . '</td>';
  $schema_insert .= '<td>' . $row->visina . '</td>';
  $schema_insert .= '<td>' . $row->segment . '</td>';
  $schema_insert .= '<td>' . $row->baza . '</td>';
  $schema_insert .= '<td>' . $row->indeks . '</td>';
  $schema_insert .= '<td>' . $row->precnik . '</td>';
  $schema_insert .= '<td>' . $row->sph . '</td>';
  $schema_insert .= '<td>' . $row->cyl . '</td>';
  $schema_insert .= '<td>' . $row->ugao . '</td>';
  $schema_insert .= '<td>' . $row->adicija . '</td>';
  $schema_insert .= '<td>' . $row->jm . '</td>';
  $schema_insert .= '<td>' . $row->kolicina . '</td>';
  $schema_insert .= '<td>' . $row->tretman1 . '</td>';
  $schema_insert .= '<td>' . $row->tretman2 . '</td>';
  $schema_insert .= '<td>' . $row->pd . '</td>';
  $schema_insert .= '<td>' . $row->mjesto_isporuke . '</td>';
  $schema_insert .= '<td>' . $row->napomena . '</td>';
  $schema_insert .= '</tr>';
}
$schema_insert .= '</tbody>';
file_put_contents('../orders/hoya/narudzbenica_hoya_' . $imeKorisnika . '_' . date("d.m.Y_H.i") . '.html', $schema_insert);

//// Email adresa dobaljača ///////
$to="";
$stmt_email = $con->prepare('SELECT email FROM email_dobavljaca WHERE naziv_dobavljaca="hoya-bih"');
$stmt_email->execute();
$result_email = $stmt_email->get_result();
while ($row_email = $result_email->fetch_object()) {
  $to = $row_email->email;
}
//$to = "narudzba@mojaoptika.com";
///////////////////////////////////

$stmt = $con->prepare('SELECT email FROM mojaopt_vpnarudzbenica.korisnici WHERE ID =?');
$stmt->bind_param('i', $idKorisnika);
$stmt->execute();
$result = $stmt->get_result();
$email = "";
while ($row = mysqli_fetch_object($result)) {
  $email = $row->email;
}

$from = $email;
$subject = "eNarudzbenica - M-Optic d.o.o.";
$separator = md5(date('r', time()));
// carriage return type (we use a PHP end of line constant)
$eol = PHP_EOL;

// attachment name
$filename = "narudzbenica_hoya_" . $imeKorisnika . "_" . date("d.m.Y_H.i") . ".html";

//$pdfdoc is PDF generated by FPDF
$attachment = chunk_split(base64_encode(file_get_contents('../orders/hoya/narudzbenica_hoya_' . $imeKorisnika . '_' . date("d.m.Y_H.i") . '.html')));

// main header
$headers  = "From: " . $from . $eol;
$headers .= "MIME-Version: 1.0" . $eol;
$headers .= "Content-Type: multipart/mixed; charset=utf-8; boundary=\"" . $separator . "\"";

// no more headers after this, we start the body! //

// message & attachment
$body = "--" . $separator . $eol;
$body .= "Content-type:text/plain; charset=utf-8" . $eol;
$body .= "Content-Transfer-Encoding: 7bit" . $eol . $eol;
$body .= $user_message . $eol;
$body .= "--" . $separator . $eol;
$body .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"" . $eol;
$body .= "Content-Transfer-Encoding: base64" . $eol;
$body .= "Content-Disposition: attachment;  filename=\"" . $filename . "\"" . $eol . $eol;
$body .= $attachment . $eol;
$body .= "--" . $separator . "--";


if (mail($to, $subject, $body, $headers)) {

  //Arhiviranje naružbe i slanje potvrdnog email-a
  $stmt1 = $con->prepare('SELECT * FROM mojaopt_vpnarudzbenica.narudzbenica_hoya WHERE dobavljac="hoya-bih"');

  $stmt1->execute();
  $result1 = $stmt1->get_result();

  $schema_insert = '<html><head><meta charset="utf-8"></head><body>';
  $schema_insert .= '<h2>Narudžbenica - Hoya</h2>';
  $schema_insert .= '<br/>Narudžba od: ' . $imeKorisnika . '<br/>';
  $schema_insert .= 'Datum narudžbe: ' . date("d.m.Y") . ' u ' . date('H:i') . '<br/>';
  $schema_insert .= '<br/>';
  $schema_insert .= '<table rules="all" style="border-color:#000;" cellpadding="2">';
  $schema_insert .= '<thead>';
  $schema_insert .= '<tr>';
  $schema_insert .= '<th>R.br.</th>';
  $schema_insert .= '<th>Od/Os/Ou</th>';
  $schema_insert .= '<th>Vrsta soč.</th>';
  $schema_insert .= '<th>Dizajn</th>';
  $schema_insert .= '<th>PRL/OCHT</th>';
  $schema_insert .= '<th>Segm.</th>';
  $schema_insert .= '<th>Baza</th>';
  $schema_insert .= '<th>Index</th>';
  $schema_insert .= '<th>Prečn.</th>';
  $schema_insert .= '<th>SPH</th>';
  $schema_insert .= '<th>CYL</th>';
  $schema_insert .= '<th>Ugao</th>';
  $schema_insert .= '<th>Add</th>';
  $schema_insert .= '<th>JM</th>';
  $schema_insert .= '<th>Kol.</th>';
  $schema_insert .= '<th>Tr.1</th>';
  $schema_insert .= '<th>Tr.2</th>';
  $schema_insert .= '<th>PD</th>';
  $schema_insert .= '<th>MPC(kom)</th>';
  $schema_insert .= '<th>Br. radnog naloga</th>';
  $schema_insert .= '<th>Napomena</th>';
  $schema_insert .= "<th>Komitenti/Radnje</th>";
  $schema_insert .= "<th>Mjesto\nisporuke</th>";
  $schema_insert .= '<th></th>';
  $schema_insert .= '</tr>';
  $schema_insert .= '</thead>';
  $schema_insert .= '<tbody>';
  $schema_insert .= '<tr>';

  $rb = 0;
  while ($row1 = mysqli_fetch_object($result1)) {
    $schema_insert .= '<td>' . ($rb = $rb + 1) . '</td>';
    $schema_insert .= '<td>' . $row1->od_os_ou . '</td>';
    $schema_insert .= '<td>' . $row1->vrsta_sociva . '</td>';
    $schema_insert .= '<td>' . $row1->dizajn . '</td>';
    $schema_insert .= '<td>' . $row1->visina . '</td>';
    $schema_insert .= '<td>' . $row1->segment . '</td>';
    $schema_insert .= '<td>' . $row1->baza . '</td>';
    $schema_insert .= '<td>' . $row1->indeks . '</td>';
    $schema_insert .= '<td>' . $row1->precnik . '</td>';
    $schema_insert .= '<td>' . $row1->sph . '</td>';
    $schema_insert .= '<td>' . $row1->cyl . '</td>';
    $schema_insert .= '<td>' . $row1->ugao . '</td>';
    $schema_insert .= '<td>' . $row1->adicija . '</td>';
    $schema_insert .= '<td>' . $row1->jm . '</td>';
    $schema_insert .= '<td>' . $row1->kolicina . '</td>';
    $schema_insert .= '<td>' . $row1->tretman1 . '</td>';
    $schema_insert .= '<td>' . $row1->tretman2 . '</td>';
    $schema_insert .= '<td>' . $row1->pd . '</td>';
    $schema_insert .= '<td>' . $row1->mpc . '</td>';
    $schema_insert .= '<td>' . $row1->broj_naloga . '</td>';
    $schema_insert .= '<td>' . $row1->napomena . '</td>';
    $schema_insert .= '<td>' . $row1->komitenti_radnje . '</td>';
    $schema_insert .= '<td>' . $row1->mjesto_isporuke . '</td>';
    $schema_insert .= '</tr>';
  }
  $schema_insert .= '</tbody>';

  $header = "From: no-reply@mojaoptika.com" . $eol;
  $header .= "MIME-Version: 1.0" . $eol;
  $header .= "Content-Type: multipart/mixed; charset=utf-8; boundary=\"" . $separator . "\"";
  $subject1 = "eNarudzbenica - Narudzba je poslata";

  $message = "Narudzbenica - Hoya BiH \n";
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

  mail($email, $subject1, $nmessage, $header);

  $stmt2 = $con->prepare('INSERT INTO mojaopt_vpnarudzbenica.istorijat_hoya (IDKorisnika,narudzba,datum,dobavljac) VALUES (?,?,?,"Hoya - BiH")');
  $stmt2->bind_param('iss', $idKorisnika, $schema_insert, date("Y-m-d"));
  $stmt2->execute();

  $stmt = $con->prepare('DELETE FROM `narudzbenica_hoya` WHERE dobavljac = "hoya-bih"');

  $stmt->execute();
  if (mysqli_error($con)) {
    die(mysqli_error($con));
  }

  CloseCon($con);
  header('Location: index.php?msg=0');
  die();
} else {

  header('Location: ' . $_SERVER['HTTP_REFERER'] . '?msg=1');
}
