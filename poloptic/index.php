<!DOCTYPE html>
<html lang="en">
<?php
include '../modules/header.php';

//Uklanjanje kolačića
setcookie('cica_maca', '', time() - 3600);

//require_once 'connection.php';
//$korisnik = $_SESSION['logged_in_user'];
//$ar = explode('#', $korisnik, 2);
//$ar[1] = rtrim($ar[1], '#');
//$idKorisnika = $ar[0];
//mysqli_set_charset($conn, 'utf8');
?>

<body id="page-top">
    <div id="wrapper">
        <?php include '../modules/menu.php'; ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php
                include '../modules/logout.php';
                ?>
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">e-Narudžbenica VP &nbsp;<i class="fa fa-clipboard-list"></i></h1>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">

                        </div>
                        </br>
                        <div class="companyInfo"> <img id="logo" src="../images/poloptic.svg">
                            <!-- <p>“M-OPTIC” d.o.o.</br> ul. Majevička br. 29, 76300 Bijeljina</br> <strong>Tel:</strong> +387 55 222 999, 222 990, 490 010</br> <strong>Fax:</strong> +387 55 222 998</br> <strong>Email:</strong> <a href="mailto:mopticvp@mojaoptika.com">mopticvp@mojaoptika.com</a></br> <a href="https://mojaoptika.com">www.mojaoptika.com</a></p>-->
                            </br>
                            </br>
                        </div>


                        <?php
                        include 'narudzbenica_poloptic.php';
                        ?>
                        <!--Contact Form-->
                        <div id="contact-popup">
                            <form class="contact-form" action="" id="contact-form" method="post" enctype="multipart/form-data">
                                <h1>Uređivanje stavke</h1>
                                <div>
                                    <div>
                                        <label>OD/OS/OU:</label>
                                    </div>
                                    <div>
                                        <input type="text" id="userName" name="userName" class="inputBox" />
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <label>Vrsta sočiva: </label>
                                    </div>
                                    <div>
                                        <input type="text" id="userEmail" name="userEmail" class="inputBox" />
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <label>Subject: </label><span id="subject-info" class="info"></span>
                                    </div>
                                    <div>
                                        <input type="text" id="subject" name="subject" class="inputBox" />
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <label>Message: </label><span id="userMessage-info" class="info"></span>
                                    </div>
                                    <div>
                                        <textarea id="message" name="message" class="inputBox"></textarea>
                                    </div>
                                </div>
                                <div>
                                    <input type="submit" id="send" name="send" value="Send" />
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div><?php include '../modules/footer.php'; ?>
</body>

</html>