<?php
include '../modules/header.php';
require_once '../connection.php';
$korisnik = $_SESSION['logged_in_user'];
$ar = explode('#', $korisnik, 2);
$ar[1] = rtrim($ar[1], '#');
$idKorisnika = $ar[0];
$con = OpenCon();
$id_stavke = mysqli_real_escape_string($con, $_REQUEST['id']);

if (isset($_GET['realizovano']) && $_GET['realizovano'] != "") {
    $stmt1 = $con->prepare('UPDATE istorijat_pol SET realizovana="&check;", IDKorisnika_realizovao=? WHERE ID=?');
    $stmt1->bind_param('ii', $idKorisnika, $id_stavke);
    $stmt1->execute();
}

$stmt = $con->prepare('SELECT * FROM istorijat_pol WHERE ID=?');
$stmt->bind_param('i', $id_stavke);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_object()) {
    $narudzba = $row->narudzba;
    $realizovana = $row->realizovana;
}

echo "<h5 style='font-weight:700;'>#" . $id_stavke . "</h5>";
$str = $narudzba;
echo htmlspecialchars_decode($str);

if ($realizovana == "&check;") {
    echo "</table></br></br><center><h6 style='color:green;font-weight:700;'>Narudžba je realizovana!</h6></center>";
} else {
    echo "</table></br></br> <center><button type='button' class='btn btn-success' onClick=window.location.href='\../poloptic/orders_document_preview.php?id=$id_stavke&realizovano=true'>Potvrdi prispeće ove narudžbe</button></center>";
}

// note that here the quotes aren't converted
//echo htmlspecialchars_decode($str, ENT_NOQUOTES);
