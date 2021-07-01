<?php if (is_null($_SESSION['logged_in_user'])) {
    header('Location: ../login.php');
}
require_once '../connection.php';
$korisnik = $_SESSION['logged_in_user'];
$ar = explode('#', $korisnik, 2);
$ar[1] = rtrim($ar[1], '#');
$idKorisnika = $ar[0];

$con = OpenCon();
mysqli_set_charset($con, 'utf8');
$stmt = $con->prepare('SELECT * FROM narudzbenica_moptic');
$stmt->execute();
$result = $stmt->get_result();

echo "<div class='naslov'></div>";
echo "<div class='table-responsive'><div class='table-wrapper-scroll-y table-hover'>
<table class='narudzbenica-tabela' id='narudzbenica'>
<thead>
<tr>
<th class='tg-0lax'>Rbr.</th>
<th class='tg-0lax'>Vrsta\nsočiva</th>
<th class='tg-0lax'>Vrsta\nmaterijala</th>
<th class='tg-0lax'>SPH</th>
<th class='tg-0lax'>CYL</th>
<th class='tg-0lax'>Add/Dig</th>
<th class='tg-0lax'>JM</th>
<th class='tg-0lax'>Kol.</th>
<th class='tg-0lax'>MPC\n(kom)</th>
<th class='tg-0lax'>Br. radnog naloga</th>
<th class='tg-0lax'>Napomena</th>
<th class='tg-0lax'>Komitent\n Radnja</th>
<th class='tg-0lax'></th>
</tr>
</thead>
<tbody>";
$rb = 0;
while ($row = mysqli_fetch_object($result)) {
    echo "<tr id='$row->ID' onclick='updateEntireRowMoptic()'>";
    echo "<td>" . ($rb = $rb + 1) . "</td>";
    echo "<td>$row->vrsta_sociva</td>";
    echo "<td>$row->vrsta_materijala</td>";
    echo "<td>$row->sph</td>";
    echo "<td>$row->cyl</td>";
    echo "<td>$row->adicija</td>";
    echo "<td>$row->jm</td>";
    echo "<td>$row->kolicina</td>";
    echo "<td>$row->mpc</td>";
    echo "<td>$row->broj_naloga</td>";
    echo "<td>$row->napomena</td>";
    echo "<td>$row->komitenti_radnje</td>";
    echo "<td class='tg-options'><i onclick='deleteRow(event);' id='$row->ID' title='Ukloni stavku' class='fas fa-trash fa-lg'></i></td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo "</div>";
echo "</br>";

$stmt1 = $con->prepare('SELECT * FROM narudzbenica_moptic ');
$stmt1->execute();
$result1 = $stmt1->get_result();

if (mysqli_num_rows($result1) > 0) {
    echo "<button type='button' onclick='saveOrderMoptic()' class='btn btn-primary send'><i class='fa fa-paper-plane'></i> Potvrdi narudžbu</button>&nbsp;&nbsp;";
}

echo "</br>";
echo "</br>";


if (isset($_REQUEST['msg'])) {
    if ($_REQUEST['msg'] == '1') {
        echo "<script src=\"../js/alertify.min.js\"></script>";
        echo "<script type=\"text/javascript\"> alertify.error('Greška');</script>";
        echo "<script type=\"text/javascript\">window.history.replaceState(null, null, window.location.pathname);</script>";
    } else if ($_REQUEST['msg'] == '0') {
        echo "<script src=\"../js/alertify.min.js\"></script>";
        echo "<script type=\"text/javascript\">alertify.success('Narudžbenica je sačuvana');</script>";
        echo "<script type=\"text/javascript\">window.history.replaceState(null, null, window.location.pathname);</script>";
    }
    if ($_REQUEST['msg'] == '2') {
        echo "<script src=\"../js/alertify.min.js\"></script>";
        echo "<script type=\"text/javascript\">alertify.success('Stavka je dodata');</script>";
        echo "<script type=\"text/javascript\">window.history.replaceState(null, null, window.location.pathname); window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' })</script>";
    }
    if ($_REQUEST['msg'] == '3') {
        echo "<script src=\"../js/alertify.min.js\"></script>";
        echo "<script type=\"text/javascript\">alertify.success('Stavka je ažurirana','custom',2);</script>";
        echo "<script type=\"text/javascript\">window.history.replaceState(null, null, window.location.pathname); window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' })</script>";
    }
}
CloseCon($con);
