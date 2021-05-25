<?php
session_start();
if (is_null($_SESSION['logged_in_user'])) {
    header('Location: ../login.php');
}

require_once '../connection.php';
$con = OpenCon();
$id_stavke = mysqli_real_escape_string($con, $_REQUEST['id']);
$stmt = $con->prepare('SELECT * FROM istorijat_pol WHERE ID=?');
$stmt->bind_param('i', $id_stavke);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_object()) {
    $narudzba = $row->narudzba;
}

$str = $narudzba;
echo htmlspecialchars_decode($str);

// note that here the quotes aren't converted
//echo htmlspecialchars_decode($str, ENT_NOQUOTES);
