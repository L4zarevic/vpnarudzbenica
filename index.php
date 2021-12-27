<?php session_start();
if (is_null($_SESSION['logged_in_user'])) {
    header('Location: login.php');
}
include 'connection.php';
$korisnik = $_SESSION['logged_in_user'];
$ar = explode("#", $korisnik, 2);
$ar[1] = rtrim($ar[1], "#");
$idKorisnika = $ar[0];
$imeKorisnika = $ar[1];

//Uklanjanje kolačića
setcookie('cica_maca', '', time() - 3600);

//require_once 'connection.php';
$con = OpenCon();
mysqli_set_charset($con, 'utf8');

function novih_narudzbi_pol($con)
{
    $stmt = $con->prepare('SELECT COUNT(ID) AS brojRedova FROM narudzbenica_pol');
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_object()) {
        echo $row->brojRedova;
    }
}

function novih_narudzbi_essilor($con)
{
    $stmt = $con->prepare('SELECT COUNT(ID) AS brojRedova FROM narudzbenica_essilor');
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_object()) {
        echo $row->brojRedova;
    }
}

function novih_narudzbi_hoya($con)
{
    $stmt = $con->prepare('SELECT COUNT(ID) AS brojRedova FROM narudzbenica_hoya');
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_object()) {
        echo $row->brojRedova;
    }
}

function novih_narudzbi_moptic($con)
{
    $stmt = $con->prepare('SELECT COUNT(ID) AS brojRedova FROM narudzbenica_moptic');
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_object()) {
        echo $row->brojRedova;
    }
}
function novih_narudzbi_johnson_johnson($con)
{
    $stmt = $con->prepare('SELECT COUNT(ID) AS brojRedova FROM narudzbenica_jj');
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_object()) {
        echo $row->brojRedova;
    }
}

function novih_narudzbi_alcon($con)
{
    $stmt = $con->prepare('SELECT COUNT(ID) AS brojRedova FROM narudzbenica_alcon');
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_object()) {
        echo $row->brojRedova;
    }
}

function novih_narudzbi_bausch_lomb($con)
{
    $stmt = $con->prepare('SELECT COUNT(ID) AS brojRedova FROM narudzbenica_bl');
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_object()) {
        echo $row->brojRedova;
    }
}

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex">
    <meta name="description" content="">
    <meta name="author" content="Nemanja Lazarević">
    <title>Moja Optika Stanković | e-Narudžbenica VP</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/themes/default.min.css" />
    <link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="images/favicon.ico" />
</head>
<style>
    .card {
        width: 100%;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: 20%;
        display: inline-block;
        padding: 2px 16px;
        margin: 2px 5px;
    }

    .card img {
        padding-top: 15px;
        padding-bottom: 15px;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }
</style>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar"> <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15"> </div>
                <div class="sidebar-brand-text mx-3">M-Optic d.o.o.</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active"> <a class="nav-link" href="index.php"> <i class="fas fa-home"></i> <span>Početna</span></a> </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading"> Narudžbe </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="moptic/index.php" d data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"> <i class="fas fa-glasses"></i> <span>M-Optic</span> </a>
                <a class="nav-link collapsed" href="poloptic/index.php" d data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"> <i class="fas fa-glasses"></i> <span>Pol Optic</span> </a>
                <a class="nav-link collapsed" href="essilor/index.php" d data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"> <i class="fas fa-glasses"></i> <span>Essilor</span> </a>
                <a class="nav-link collapsed" href="hoya/index.php" d data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"> <i class="fas fa-glasses"></i> <span>Hoya</span> </a>
                <a class="nav-link collapsed" href="johnson_johnson/index.php" d data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"> <i class="fas fa-eye"></i> <span>Johnson & Johnson</span> </a>
                <a class="nav-link collapsed" href="alcon/index.php" d data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"> <i class="fas fa-eye"></i> <span>Alcon</span></a>
                <a class="nav-link collapsed" href="bausch_lomb/index.php" d data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"> <i class="fas fa-eye"></i> <span>Bausch Lomb</span> </a>
                <div class="sidebar-heading"></br></div>
                <div class="sidebar-heading"> Istorijat narudžbi </div>
                <a class="nav-link collapsed" href="moptic/moptic_history.php" d data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"><i class="fas fa-glasses"></i> <span>M-Optic</span></a>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-glasses"></i> <span>Pol Optic</span> </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="poloptic/pol_history_sa.php">Sarajevo</a>
                        <a class="collapse-item" href="poloptic/pol_history_bg.php">Beograd</a>
                        <a class="collapse-item" href="poloptic/pol_history_ns.php">Novi Sad</a>
                        <a class="collapse-item" href="poloptic/pol_history_bojana.php">Bojana C.</a>
                    </div>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <i class="fas fa-glasses"></i> <span>Essilor</span> </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="essilor/essilor_history_bih.php">BiH</a>
                        <a class="collapse-item" href="essilor/essilor_history_srb.php">Srbija</a>
                    </div>
                </div>
                <a class="nav-link collapsed" href="hoya/hoya_history_srb.php" d data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"> <i class="fas fa-glasses"></i> <span>Hoya</span> </a>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    <i class="fas fa-eye"></i> <span>Johnson & Johnson</span> </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="johnson_johnson/johnson_johnson_history_bih.php">BiH</a>
                        <a class="collapse-item" href="johnson_johnson/johnson_johnson_history_srb.php">Srbija</a>
                    </div>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                    <i class="fas fa-eye"></i> <span>Alcon</span> </a>
                <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="alcon/alcon_history_bih.php">BiH</a>
                        <a class="collapse-item" href="alcon/alcon_history_srb.php">Srbija</a>
                    </div>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                    <i class="fas fa-eye"></i> <span>Bausch & Lomb</span> </a>
                <div id="collapseSix" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="bausch_lomb/bausch_lomb_history_bih.php">BiH</a>
                        <a class="collapse-item" href="bausch_lomb/bausch_lomb_history_srb.php">Srbija</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
            <div class="text-center d-none d-md-inline"> <button class="rounded-circle border-0" id="sidebarToggle"></button> </div>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <?php include 'modules/email_list.php'; ?>
                    <a href="" data-toggle="modal" id="emailIcon" data-target="#modalEmail"><i class="fa fa-envelope" title="Email adrese dobavljača" aria-hidden="true"></i></a>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Ulogovani ste kao
                                    <b>
                                        <?php $korisnik = $_SESSION['logged_in_user'];
                                        $ar = explode('#', $korisnik, 2);
                                        $ar[1] = rtrim($ar[1], '#');
                                        echo $imeKorisnika = $ar[1];
                                        ?>
                                    </b> <i class="fas fa-user"></i></span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Odjava
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    </div>
                    <div class="row">
                        <div class="">
                        </div>

                    </div>
                    </br>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">e-Narudžbenica VP &nbsp;<i class="fa fa-clipboard-list"></i></h1>
                    </div>

                    <div class="cards">
                        <div class="card">
                            <a href="moptic/index.php"><img src="images/moptic.svg" alt="M-OPTIC" style="width:100%">
                                <div class="container">
                                    <label>Novih narudžbi: &nbsp;<?php echo novih_narudzbi_moptic($con); ?></label>
                                </div>
                            </a>
                        </div>

                        <div class="card">
                            <a href="poloptic/index.php"><img src="images/poloptic.svg" alt="Pol Optic" style="width:100%">
                                <div class="container">
                                    <label>Novih narudžbi: &nbsp;<?php echo novih_narudzbi_pol($con); ?></label>
                                </div>
                            </a>
                        </div>
                        <div class="card">
                            <a href="essilor/index.php"><img src="images/essilor.svg" alt="Essilor" style="width:100%">
                                <div class="container">
                                    <label>Novih narudžbi: &nbsp;<?php echo novih_narudzbi_essilor($con); ?></label>
                                </div>
                            </a>
                        </div>
                        <div class="card">
                            <a href="hoya/index.php"> <img src="images/hoya.svg" alt="Hoya" style="width:100%">
                                <div class="container">
                                    <label>Novih narudžbi: &nbsp;<?php echo novih_narudzbi_hoya($con); ?></label>
                                </div>
                            </a>
                        </div>
                    </div>
                    </br>
                    <div class="cards">
                        <div class="card">
                            <a href="johnson_johnson/index.php"><img src="images/j&j.svg" alt="Johnson & Johnson" style="width:100%">
                                <div class="container">
                                    <label>Novih narudžbi: &nbsp;<?php echo novih_narudzbi_johnson_johnson($con); ?></label>
                                </div>
                            </a>
                        </div>

                        <div class="card">
                            <a href="alcon/index.php"><img src="images/alcon.svg" alt="Alcon" style="width:100%">
                                <div class="container">
                                    <label>Novih narudžbi: &nbsp;<?php echo novih_narudzbi_alcon($con); ?></label>
                                </div>
                            </a>
                        </div>
                        <div class="card">
                            <a href="bausch_lomb/index.php"><img src="images/bausch_and_lomb.svg" alt="Bausch Lomb" style="width:100%">
                                <div class="container">
                                    <label>Novih narudžbi: &nbsp;<?php echo novih_narudzbi_bausch_lomb($con); ?></label>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                </br>
                </br>

            </div>

            <footer class='sticky-footer bg-white'>
                <div class='container my-auto'>
                    <div class='copyright text-center my-auto'>
                        <?php echo "<span>Copyright &copy; M-Оptic d.o.o. " . date("Y") . "</span></br>"; ?>
                        <span>Za sve probleme u vezi aplikacije, pišite na email: <a href='mailto:lazarevic.nemanja96@gmail.com'>lazarevic.nemanja96@gmail.com</a></span>
                    </div>
                </div>
            </footer>
        </div>
        <a class="scroll-to-top rounded" href="#page-top"> <i class="fas fa-angle-up"></i></a>
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Odjava</h5> <button class="close" type="button" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                    </div>
                    <div class="modal-body">Izaberite "Odjava" da bi završili trenutnu sesiju.</div>
                    <div class="modal-footer"> <button class="btn btn-secondary" type="button" data-dismiss="modal">Poništi</button> <a class="btn btn-primary" href="logout.php">Odjava</a> </div>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
