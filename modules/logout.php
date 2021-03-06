<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <!-- Sidebar Toggle (Topbar) -->
    <?php include '../modules/email_list.php'; ?>
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