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
                        <div class="companyInfo"> <img id="logo" src="../images/hoya.png">
                            </br>
                            </br>
                            <label>*Označene kolone se ne šalju dobavljaču</label>
                        </div>

                        <?php
                        include 'narudzbenica_hoya.php';
                        ?>

                        <div class="row d-flex justify-content-center modalWrapper" id="add_edit_form">
                            <div class="modal fade addNewInputs" id="modalAddHoya" tabindex="-1" role="dialog" aria-labelledby="modalAddHoya" aria-hidden="true">
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
                                                <label id='label_odosou'>OD / OS / OU</label><label id="label_zvjezdica1" class="obavezna_polja">*</label>
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

                                            <div id="ifSpecijala">
                                                <div class="md-form mb-5">
                                                    <label>Vrsta sočiva</label><label class="obavezna_polja">*</label>
                                                    <select name="vrsta_sociva" title="Unesite vrstu sočiva" class="form-control" id="select2">
                                                        <option default></option>
                                                        <option>Monofokal</option>
                                                        <option>Bifokal</option>
                                                        <option>Progresiv</option>
                                                        <option>Lentikular</option>
                                                    </select>
                                                </div>

                                                <div class="md-form mb-5">
                                                    <label>Dizajn - Naziv proizvoda</label><label class="obavezna_polja">*</label>
                                                    <input name="dizajn" title="Unesite dizajn" maxlength="255" type="text" class="form-control" id="dizajn" required>
                                                </div>

                                                <div class="md-form mb-5">
                                                    <label>Index</label><label class="obavezna_polja">*</label>
                                                    <select name="index" title="Unesite Index prelamanja" class="form-control" id="select8">
                                                        <option default></option>
                                                        <option>1.50</option>
                                                        <option>1.523</option>
                                                        <option>1.53</option>
                                                        <option>1.56</option>
                                                        <option>1.59</option>
                                                        <option>1.60</option>
                                                        <option>1.67</option>
                                                        <option>1.70</option>
                                                        <option>1.74</option>
                                                        <option>1.80</option>
                                                        <option>1.90</option>
                                                    </select>

                                                    <label>Baza</label>
                                                    <select name="baza" title="Unesite bazu sočiva" class="form-control" id="select7">
                                                        <option default></option>
                                                        <?php
                                                        for ($x = 4.0; $x <= 8.5; $x = $x + 0.5) {
                                                            echo  "<option>" . $x . "</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>

                                                <div class="md-form mb-5">
                                                    <label id="labelPrecnik">Prečnik mm</label><label class="obavezna_polja">*</label>
                                                    <select name="precnik1" title="Unesite prečnik" class="form-control" id="select9">
                                                        <option default></option>
                                                        <?php
                                                        for ($x = 50; $x <= 75; $x++) {
                                                            echo  "<option>" . $x . "</option>";
                                                        }
                                                        ?>
                                                    </select>

                                                    <select name="precnik2" title="Unesite prečnik" class="form-control" id="select10">
                                                        <option default></option>
                                                        <?php
                                                        for ($x = 50; $x <= 75; $x++) {
                                                            echo  "<option>" . $x . "</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>

                                                <div id="ifYes" style="display: none;">
                                                    <div class="md-form mb-5">
                                                        <label id='label_visina'>Visina ugradnje / Koridor</label><label class="obavezna_polja">*</label>
                                                        <select name="visina" title="Visina ugradnje (ili koridor) Unesite Visinu ugradnje za progresive: 'Infini i sve progresive iz Orange Linea' ili koridor za klasične progresive (Futura,Pollux i Polaris)" class="form-control" id="select5">
                                                            <option default></option>
                                                            <?php
                                                            for ($x = 13; $x <= 35; $x++) {
                                                                echo  "<option>" . $x . "</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="md-form mb-5">
                                                        <label>PD:</label><label class="obavezna_polja">*</label>
                                                        <input name="pd" title="Unesite PD" maxlength="14" type="text" class="form-control" id="pd">
                                                    </div>

                                                </div>

                                                <div id="showSegment">
                                                    <div class="md-form mb-5">
                                                        <label id='label_segmen'>Segment:</label>
                                                        <input name="segment" title="Unesite segment" maxlength="10" type="text" class="form-control" id="segment">
                                                    </div>

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
                                                    <label>Ax</label>
                                                    <input name="ugao" title="Unesite ugao cilindra" type="text" maxlength="3" class="form-control" id="ugaoCilindra">

                                                    <label>Add / Dig.</label><label id="label_zvjezdica2" class="obavezna_polja">*</label>
                                                    <select name="add" title="Dodajte adiciju ili digresiju za office progresive" class="form-control" id="select13">
                                                        <option default></option>
                                                        <?php
                                                        for ($x = 0.75; $x <= 4.00; $x = $x + 0.25) {
                                                            echo  "<option>" . sprintf('%0.2f', $x) . "</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
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
                                                <label>Tretmani i bojenja #1</label>
                                                <input name="tretman1" title="Unesite tretman" maxlength="255" type="text" class="form-control" id="tretman1" required>
                                            </div>

                                            <div class="md-form mb-5">
                                                <label>Tretmani i bojenja #2</label>
                                                <input name="tretman2" title="Unesite tretman" maxlength="255" type="text" class="form-control" id="tretman2" required>
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

                                            <div class="md-form mb-5">
                                                <label>Dobavljač</label><label class="obavezna_polja">*</label>
                                                <select name="dobavljac" class="form-control" id="dobavljac">
                                                    <option default>hoya-srbija</option>
                                                </select>
                                            </div>
                                            <div class="md-form mb-5">
                                                <label>Mjesto isporuke</label>
                                                <input list="listaMjestaIsporuke" name="mjesto_isporuke" title="Unesite mjesto isporuke" type="text" class="form-control" id="mjesto_isporuke">
                                                <datalist id='listaMjestaIsporuke'>
                                                    <option>Bijeljina</option>
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
                                        </div>
                                        <div class="modal-footer d-flex justify-content-center buttonAddFormWrapper">
                                            <button type='submit' onclick="return checkFormHoya();" id='dugmeNaruci' class="btn btn-outline-primary btn-block buttonAdd">Sačuvaj stavku
                                                <i class="fas fa-paper-plane-o ml-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <a href="" class="btn btn-info btn-rounded btn-sm" id="addButton" data-toggle="modal" data-target="#modalAddHoya">Dodaj novi zapis<i class="fa fa-plus-square ml-1"></i></a>
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
            $('#modalAddHoya').modal({
                show: true
            });
            $("#modalAddHoya").on('shown.bs.modal', function() {
                $(this).find('#komitenti_radnje').focus();
            });
        }
    });
    // $('#label_zvjezdica1').hide();
    $('#label_zvjezdica2').hide();
    // $('#select1').hide();
    // var $select_lagspec = $('#select_lagspec'),
    var $select2 = $('#select2');
    //     $select3 = $('#select3'),
    //     $select4 = $('#select4'),
    var $select12 = $('#select12');
    //     $select15 = $('#select15'),
    //     $select16 = $('#select16'),
    //     $options1 = $select3.find('option');
    // $options2 = $select4.find('option');
    // $options3 = $select15.find('option');
    // $options4 = $select16.find('option');

    $select2.on('change', function() {
        if (this.value == '3') {
            $('#ifYes').show();
        } else {
            $('#ifYes').hide();
        }

        if (this.value == '2') {
            $('#showSegment').show();
        } else {
            $('#showSegment').hide();
        }
    }).trigger('change');

    $select12.on('change', function() {
        if ((($('#select2').find("option:selected").text() == "Bifokal") || ($('#select2').find("option:selected").text() == "Progresiv")) && ($('#select12').find("option:selected").text().length != 0)) {
            $('#label_zvjezdica2').show();
        } else if ((($('#select2').find("option:selected").text() == "Bifokal") || ($('#select2').find("option:selected").text() == "Progresiv")) && ($('#select12').find("option:selected").text().length == 0)) {
            $('#label_zvjezdica2').hide();
        }
    }).trigger('change');
</script>

</html>