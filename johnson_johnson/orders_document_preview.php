<?php
include '../modules/header.php';
require_once '../connection.php';
$korisnik = $_SESSION['logged_in_user'];
$ar = explode('#', $korisnik, 2);
$ar[1] = rtrim($ar[1], '#');
$idKorisnika = $ar[0];
$con = OpenCon();
mysqli_set_charset($con, 'utf8');
$id_stavke = mysqli_real_escape_string($con, $_REQUEST['id']);

if (isset($_GET['realizovano']) && $_GET['realizovano'] != "") {
    $stmt1 = $con->prepare('UPDATE istorijat_moptic SET realizovana="&check;", IDKorisnika_realizovao=? WHERE ID=?');
    $stmt1->bind_param('ii', $idKorisnika, $id_stavke);
    $stmt1->execute();
}

if (isset($_REQUEST['napomena'])) {
    $napomena = mysqli_real_escape_string($con, $_REQUEST['napomena']);
    $stmt2 = $con->prepare('UPDATE istorijat_moptic SET napomena=? WHERE ID=?');
    $stmt2->bind_param('si', $napomena, $id_stavke);
    $stmt2->execute();
}

$stmt = $con->prepare('SELECT * FROM istorijat_moptic WHERE ID=?');
$stmt->bind_param('i', $id_stavke);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_object()) {
    $narudzba = $row->narudzba;
    $realizovana = $row->realizovana;
    $napomena = $row->napomena;
}

echo "<h5 style='font-weight:700;'>#" . $id_stavke . "</h5>";
$str = $narudzba;
echo htmlspecialchars_decode($str);

if ($realizovana == "&check;") {
    echo "</table></br></br><center><h6 style='color:green;font-weight:700;'>Narudžba je realizovana!</h6></center>";
} else {
    echo "</table></br></br> <center><button type='button' class='btn btn-success' onClick=window.location.href='\../moptic/orders_document_preview.php?id=$id_stavke&realizovano=true'>Potvrdi prispeće ove narudžbe</button></center>";
}


echo "<form method='post' action='orders_document_preview.php?id=$id_stavke'><div class='md-form mb-5' style='margin-left:3%;margin-right:3%;'>
    <label>Napomena</label>
    <textarea name='napomena' style='width:30%;height:30%;' class='form-control' type='text' id='napomena' >$napomena</textarea>
    <button type='submit' style='width:30%;' id='dugmeNaruci' class='btn btn-outline-primary btn-block buttonAdd'>Sačuvaj napomenu</button>
    </div></form>";


// note that here the quotes aren't converted
//echo htmlspecialchars_decode($str, ENT_NOQUOTES);
