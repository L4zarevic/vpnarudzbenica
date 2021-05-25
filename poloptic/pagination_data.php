<?php
require_once '../connection.php';
$sql = "SELECT ID as Brojnarudzbe,IDKorisnika as Naručio,datum as Datum FROM istorijat_pol WHERE dobavljac = 'Poloptic - Sarajevo' ORDER BY ID DESC LIMIT 10";
$resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
$data = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
	$data[] = $rows;
}
$results = array(
	"sEcho" => 1,
"iTotalRecords" => count($data),
"iTotalDisplayRecords" => count($data),
  "aaData"=>$data);
echo json_encode($results);
exit;
?>