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
$stmt = $con->prepare('SELECT * FROM narudzbenica_bausch_lomb');
$stmt->execute();
$result = $stmt->get_result();

echo "<div class='naslov'></div>";
echo "<div class='table-responsive'><div class='table-wrapper-scroll-y table-hover'>
<table class='narudzbenica-tabela' id='narudzbenica'>
<thead>
<tr>
<th class='tg-0lax'>Rbr.</th>
<th class='tg-0lax'>OD/OS</th>
<th class='tg-0lax'>Tip/vrsta</th>
<th class='tg-0lax'>SPH</th>
<th class='tg-0lax'>CYL</th>
<th class='tg-0lax'>Ugao</th>
<th class='tg-0lax'>BC</th>
<th class='tg-0lax'>TD</th>
<th class='tg-0lax'>JM</th>
<th class='tg-0lax'>Kol.</th>
<th class='tg-0lax' style='background: #ffa;'>MPC\n(kom)</th>
<th class='tg-0lax' style='background: #ffa;'>Br. radnog naloga</th>
<th class='tg-0lax'>Napomena</th>
<th class='tg-0lax' style='background: #ffa;'>Komitent\n Radnja</th>
<th class='tg-0lax' style='background: #ffa;'>Dobavljač</th>
<th class='tg-0lax'>Mjesto\nisporuke</th>
<th class='tg-0lax'></th>
</tr>
</thead>
<tbody>";
$rb = 0;
while ($row = mysqli_fetch_object($result)) {
    echo "<tr id='$row->ID' onclick='updateEntireRowLenses()'>";
    echo "<td>" . ($rb = $rb + 1) . "</td>";
    echo "<td>$row->od_os</td>";
    echo "<td>$row->tip</td>";
    echo "<td>$row->sph</td>";
    echo "<td>$row->cyl</td>";
    echo "<td>$row->ugao</td>";
    echo "<td>$row->bc</td>";
    echo "<td>$row->td</td>";
    echo "<td>$row->jm</td>";
    echo "<td>$row->kolicina</td>";
    echo "<td style='background: #ffa;'>$row->mpc</td>";
    echo "<td style='background: #ffa;'>$row->broj_naloga</td>";
    echo "<td>$row->napomena</td>";
    echo "<td style='background: #ffa;'>$row->komitenti_radnje</td>";
    echo "<td style='background: #ffa;'>$row->dobavljac</td>";
    echo "<td>$row->mjesto_isporuke</td>";
    echo "<td class='tg-options'><i onclick='deleteRow(event);' id='$row->ID' title='Ukloni stavku' class='fas fa-trash fa-lg'></i></td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo "</div>";
echo "</br>";

$stmt1 = $con->prepare('SELECT * FROM narudzbenica_bausch_lomb WHERE dobavljac="bausch_lomb-bih"');
$stmt1->execute();
$result1 = $stmt1->get_result();

if (mysqli_num_rows($result1) > 0) {
    echo "<button type='button' onclick='sendBauschLombBiH()' class='btn btn-primary send'><i class='fa fa-paper-plane'></i>  Pošalji - Bausch Lomb BiH</button>&nbsp;&nbsp;";
}

$stmt2 = $con->prepare('SELECT * FROM narudzbenica_bausch_lomb WHERE dobavljac="bausch_lomb-srbija"');
$stmt2->execute();
$result2 = $stmt2->get_result();

if (mysqli_num_rows($result2) > 0) {
    echo "<button type='button' onclick='sendBauschLombSrbija()' class='btn btn-primary send'><i class='fa fa-paper-plane'></i>  Pošalji - Bausch Lomb Srbija</button>&nbsp;&nbsp;";
}

echo "</br>";
echo "</br>";


if (isset($_REQUEST['msg'])) {
    if ($_REQUEST['msg'] == '1') {
        echo "<script src=\"../js/alertify.min.js\"></script>";
        echo "<script type=\"text/javascript\"> alertify.error('Greška prilikom slanja');</script>";
        echo "<script type=\"text/javascript\">window.history.replaceState(null, null, window.location.pathname);</script>";
    } else if ($_REQUEST['msg'] == '0') {
        echo "<script src=\"../js/alertify.min.js\"></script>";
        echo "<script type=\"text/javascript\">alertify.success('Narudžbenica je poslataF');</script>";
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
