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
$stmt = $con->prepare('SELECT * FROM narudzbenica_pol ');
$stmt->execute();
$result = $stmt->get_result();

echo "<div class='naslov'></div>";
echo "<div class='table-wrapper-scroll-y table-hover'>
<table class='narudzbenica-tabela' id='narudzbenica'>
<thead>
<tr>
<th class='tg-0lax'>R.br.</th>
<th class='tg-0lax'>Lag-Spec</th>
<th class='tg-0lax'>Od/Os/Ou</th>
<th class='tg-0lax'>Vrsta \nsoč.</th>
<th class='tg-0lax'>Dizajn</th>
<th class='tg-0lax'>PRL \nOCHT</th>
<th class='tg-0lax'>Segm.</th>
<th class='tg-0lax'>Baza</th>
<th class='tg-0lax'>Index</th>
<th class='tg-0lax'>Vrsta materijala</th>
<th class='tg-0lax'>&Oslash;</th>
<th class='tg-0lax'>SPH</th>
<th class='tg-0lax'>CYL</th>
<th class='tg-0lax'>Ugao</th>
<th class='tg-0lax'>Add</th>
<th class='tg-0lax'>JM</th>
<th class='tg-0lax'>Kol.</th>
<th class='tg-0lax'>Tr.1</th>
<th class='tg-0lax'>Tr.2</th>
<th class='tg-0lax'>PD</th>
<th class='tg-0lax'>Mjesto isp.</th>
<th class='tg-0lax'>MPC</th>
<th class='tg-0lax'>Br. radnog naloga</th>
<th class='tg-0lax'>Napomena</th>
<th class='tg-0lax'></th>
</tr>
</thead>
<tbody>";
$rb = 0;
while ($row = mysqli_fetch_object($result)) {
    echo "<tr id='$row->ID' onclick='updateEntireRowPol()'>";
    echo "<td>" . ($rb = $rb + 1) . "</td>";
    echo "<td class='od_os_ou'>$row->lag_spec</td>";
    echo "<td class='od_os_ou'>$row->od_os_ou</td>";
    echo "<td>$row->vrsta_sociva</td>";
    echo "<td>$row->dizajn</td>";
    echo "<td>$row->visina</td>";
    echo "<td>$row->segment</td>";
    echo "<td>$row->baza</td>";
    echo "<td>$row->indeks</td>";
    echo "<td>$row->vrsta_materijala</td>";
    echo "<td>$row->precnik</td>";
    echo "<td>$row->sph</td>";
    echo "<td>$row->cyl</td>";
    echo "<td>$row->ugao</td>";
    echo "<td>$row->adicija</td>";
    echo "<td>$row->jm</td>";
    echo "<td>$row->kolicina</td>";
    echo "<td>$row->tretman1</td>";
    echo "<td>$row->tretman2</td>";
    echo "<td>$row->pd</td>";
    echo "<td>$row->mjesto_isporuke</td>";
    echo "<td>$row->mpc</td>";
    echo "<td>$row->broj_naloga</td>";
    echo "<td>$row->napomena</td>";
    echo "<td class='tg-options'><i onclick='deleteRow(event);' id='$row->ID' title='Ukloni stavku' class='fas fa-trash fa-lg'></i></td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo "</br>";

$stmt1 = $con->prepare('SELECT * FROM mojaopt_vpnarudzbenica.narudzbenica_pol JOIN mojaopt_optike.korisnici ON narudzbenica_pol.IDOptike = mojaopt_optike.korisnici.ID WHERE mojaopt_optike.korisnici.poloptic="pol-sarajevo" ');
$stmt1->execute();
$result1 = $stmt1->get_result();

if (mysqli_num_rows($result1) > 0) {
    echo "<button type='button' onclick='sendPolopticSarajevo()' class='btn btn-primary send'><i class='fa fa-paper-plane'></i> Pošalji - POL Sarajevo</button>&nbsp;&nbsp;";
}

$stmt2 = $con->prepare('SELECT * FROM mojaopt_vpnarudzbenica.narudzbenica_pol JOIN mojaopt_optike.korisnici ON narudzbenica_pol.IDOptike = mojaopt_optike.korisnici.ID WHERE mojaopt_optike.korisnici.poloptic="pol-beograd" ');
$stmt2->execute();
$result2 = $stmt2->get_result();

if (mysqli_num_rows($result2) > 0) {
    echo "<button type='button' onclick='sendPolopticBeograd()' class='btn btn-primary send'><i class='fa fa-paper-plane'></i> Pošalji - POL Beograd</button>";
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
        echo "<script type=\"text/javascript\">alertify.success('Narudžbenica je poslata');</script>";
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
