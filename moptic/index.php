<!DOCTYPE html>
<html lang="en">
<?php
include '../modules/header.php';
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
                        <div class="companyInfo"> <img id="logo" src="../images/moptic.svg">
                            <!-- <p>“M-OPTIC” d.o.o.</br> ul. Majevička br. 29, 76300 Bijeljina</br> <strong>Tel:</strong> +387 55 222 999, 222 990, 490 010</br> <strong>Fax:</strong> +387 55 222 998</br> <strong>Email:</strong> <a href="mailto:mopticvp@mojaoptika.com">mopticvp@mojaoptika.com</a></br> <a href="https://mojaoptika.com">www.mojaoptika.com</a></p>-->
                            </br>
                            </br>
                        </div>

                        <?php
                        include 'narudzbenica_moptic.php';
                        ?>

                        <div class="row d-flex justify-content-center modalWrapper" id="add_edit_form">
                            <div class="modal fade addNewInputs" id="modalAddMoptic" tabindex="-1" role="dialog" aria-labelledby="modalAddMoptic" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <h4 id="add_edit_label" class="modal-title w-100 font-weight-bold text-primary ml-5">Dodaj novi zapis</h4>
                                            <button type="button" class="close text-primary" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body mx-3">
                                            <div class="md-form mb-5">
                                                <label>Komitent/radnja</label>
                                                <input list="listaKomitenata" name="komitenti_radnje" title="Unesite komitenta/radnju" type="text" class="form-control" id="komitenti_radnje">
                                                <datalist id='listaKomitenata'>
                                                    <?php
                                                    $con = OpenCon();
                                                    mysqli_set_charset($con, 'utf8');
                                                    $stmt = $con->prepare('SELECT naziv FROM komitenti');
                                                    $stmt->execute();
                                                    $result = $stmt->get_result();
                                                    while ($row = $result->fetch_object()) {
                                                        echo "<option>$row->naziv</option>";
                                                    }
                                                    ?>
                                                </datalist>
                                            </div>
                                            <div class="md-form mb-5">
                                                <label id='label_odosou'>OD / OS / OU</label>
                                                <select name="od_os_ou" title="OD - za desno oko, OS - za lijevo oko, OU - ako je obostrano isto" class="form-control" id="select1">
                                                    <option default></option>
                                                    <option>OD</option>
                                                    <option>OS</option>
                                                    <option>OU</option>
                                                </select>
                                            </div>

                                            <div class="md-form mb-5">
                                                <input name="id_stavke" type="hidden" class="form-control" id="id_stavke" value="">
                                            </div>

                                            <div class="md-form mb-5">
                                                <label>Vrsta sočiva</label>
                                                <select name="vrsta_sociva" title="Unesite vrstu sočiva" class="form-control" id="select2">
                                                    <option default></option>
                                                    <option>Monofokal</option>
                                                    <option>Bifokal</option>
                                                    <option>Progresiv</option>
                                                </select>
                                            </div>


                                            <div class="md-form mb-5">
                                                <label>Vrsta materijala</label><label class="obavezna_polja">*</label>
                                                <select name="vrsta_materijala" title="Unesite vrstu dizajna" class="form-control" id="vrsta_materijala">
                                                    <option default></option>
                                                    <option>1.50 CR-39 UC</option>
                                                    <option>1.50 HMC</option>
                                                    <option>1.60 HMC</option>
                                                    <option>1.56 SHMC</option>
                                                    <option>1.56 Anti Blue</option>
                                                    <option>1.56 Photocromic Gray</option>
                                                    <option>1.56 Photocromic Gray HMC</option>
                                                    <option>1.56 Photocromic Brown</option>
                                                    <option>1.59 Polycarbonate</option>
                                                    <option>1.50 Lentikular</option>
                                                </select>
                                            </div>


                                            <div class="md-form mb-5">
                                                <div class="sfera">
                                                    <label>SPH</label>
                                                    <input list="listaSph" name="sph" title="Unesite Sfernu dioptriju" type="text" class="form-control" id="sph">
                                                    <datalist id="listaSph">
                                                        <option default></option>
                                                        <option> 0.00</option>
                                                        <?php
                                                        for ($x = 0.25; $x <= 16.00; $x = $x + 0.25) {
                                                            echo  "<option>+" . sprintf('%0.2f', $x) . "</option>";
                                                        }
                                                        ?>
                                                        <option> 0.00</option>
                                                        <?php
                                                        for ($x = 0.25; $x <= 17.75; $x = $x + 0.25) {
                                                            echo  "<option>-" . sprintf('%0.2f', $x) . "</option>";
                                                        }
                                                        ?>
                                                        <option>-18.00</option>
                                                        <option>-18.50</option>
                                                        <option>-19.00</option>
                                                        <option>-19.50</option>
                                                        <option>-20.00</option>
                                                        <option>-20.50</option>
                                                        <option>-21.00</option>
                                                        <option>-21.50</option>
                                                        <option>-22.00</option>
                                                        <option>-23.00</option>
                                                        <option>-24.00</option>
                                                        <option>-25.00</option>
                                                        <option>-26.00</option>
                                                        <option>-27.00</option>
                                                        <option>-28.00</option>
                                                        <option>-29.00</option>
                                                        <option>-30.00</option>
                                                    </datalist>
                                                </div>
                                                <div class="cilindar">
                                                    <label>CYL</label>
                                                    <input list="listaCyl" name="cyl" title="Unesite Cilindričnu dioptriju" type="text" class="form-control" id="cyl">
                                                    <datalist id="listaCyl">
                                                        <option default></option>
                                                        <option>0.00</option>
                                                        <?php
                                                        for ($x = 0.25; $x <= 6.00; $x = $x + 0.25) {
                                                            echo  "<option>+" . sprintf('%0.2f', $x) . "</option>";
                                                        }
                                                        ?>
                                                        <option> 0.00</option>
                                                        <?php
                                                        for ($x = 0.25; $x <= 6.00; $x = $x + 0.25) {
                                                            echo  "<option>-" . sprintf('%0.2f', $x) . "</option>";
                                                        }
                                                        ?>
                                                    </datalist>
                                                </div>
                                            </div>

                                            <div class="md-form mb-5">
                                                <label>Add / Dig.</label>
                                                <input list="addDigList" name="add" title="Dodajte adiciju ili digresiju za office progresive" class="form-control" id="addDig">
                                                <datalist id="addDigList">
                                                    <option default></option>
                                                    <?php
                                                    for ($x = 0.75; $x <= 4.00; $x = $x + 0.25) {
                                                        echo  "<option>" . sprintf('%0.2f', $x) . "</option>";
                                                    }
                                                    ?>
                                                </datalist>
                                            </div>

                                            <div class="md-form mb-5">
                                                <label>Jedinica mjere</label>
                                                <select name="jm" title="Unesite jedinicu mjere" class="form-control" id="select14">
                                                    <option default>kom</option>
                                                </select>
                                                <label>Količina</label><label class="obavezna_polja">*</label>
                                                <input name="kolicina" maxlength="2" title="Unesite potrebnu količinu.Za 2 ili više komada, stavljajte na početku Ou - Obostrano isto!" type="text" class="form-control" id="kolicina">
                                            </div>

                                            <div class="md-form mb-5">
                                                <label id='label_mpc'>MPC po komadu</label>
                                                <input name="mpc" maxlength='15' title="Unesite MPC" type="text" class="form-control" id="mpc">
                                            </div>

                                            <div class="md-form mb-5">
                                                <label id='label_brnalog'>Broj radnog naloga (№)</label>
                                                <input name="broj_radnog_naloga" maxlength='30' class="form-control" type="text" title="Unesite broj radnog naloga" id="broj_radnog_naloga" placeholder="" />
                                            </div>

                                            <div class="md-form mb-5">
                                                <label>Napomena</label>
                                                <textarea name="napomena" class="form-control" type="text" title="NAPOMENA: Ovdje unosite: Stepen zatamnjenja; Decentracija; Ime i prezime; Vrijeme isporuke itd." id="napomena" row="5"></textarea>
                                            </div>

                                        </div>
                                        <div class="modal-footer d-flex justify-content-center buttonAddFormWrapper">
                                            <button type='submit' onclick="return checkFormMoptic();" id='dugmeNaruci' class="btn btn-outline-primary btn-block buttonAdd">Sačuvaj stavku
                                                <i class="fas fa-paper-plane-o ml-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <a href="" class="btn btn-info btn-rounded btn-sm" id="addButton" data-toggle="modal" data-target="#modalAddMoptic">Dodaj novi zapis<i class="fa fa-plus-square ml-1"></i></a>
                            </div>
                            &nbsp;
                            &nbsp;
                            </br>
                            </br>
                            </br>

                        </div>


                    </div>
                </div>
            </div>
        </div><?php include '../modules/footer.php'; ?>
</body>
<script type="text/javascript">
    $(document).keypress(function(e) {
        if (e.which == 13) {
            $('#modalAddMoptic').modal({
                show: true
            });
            $("#modalAddMoptic").on('shown.bs.modal', function() {
                $(this).find('#komitenti_radnje').focus();
            });
        }
    });
</script>


</html>