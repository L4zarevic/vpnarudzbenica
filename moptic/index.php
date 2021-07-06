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
                                                    <option>Centar - Bijeljina</option>
                                                    <option>Mihajlović - Bijeljina</option>
                                                    <option>Delta - Banja Luka</option>
                                                    <option>Emporium - Banja Luka</option>
                                                    <option>Mercator - Banja Luka</option>
                                                    <option>Boska - Banja Luka</option>
                                                    <option>Brčko</option>
                                                    <option>Galerija - Beograd</option>
                                                    <option>Big - Novi Sad</option>
                                                    <option>Plaza - Kragujevac</option>
                                                    <option>Novaoptik - Novi Grad</option>
                                                    <option>Optika Isić - Orašje</option>
                                                    <option>Lens d.o.o. - Kalesija</option>
                                                    <option>Lens Optic - Tuzla</option>
                                                    <option>Lotica d.o.o. - Travnik</option>
                                                    <option>Lux Optika - Novi Grad</option>
                                                    <option>Mak d.o.o. - Bihać</option>
                                                    <option>OOptiks - Tuzla</option>
                                                    <option>Optika Vid - Prijedor</option>
                                                    <option>Optika Lukić - Bijeljina</option>
                                                    <option>Optika Omazić - Livno</option>
                                                    <option>Optika Visus - Lukavac</option>
                                                    <option>Optika Čakrama - Maglaj</option>
                                                    <option>Optika Đurbuzović - Sarajevo</option>
                                                    <option>Optika Galić - Široki Brijeg</option>
                                                    <option>Optika Karić - Konjic</option>
                                                    <option>Optika Monako d.o.o - Brčko</option>
                                                    <option>Optika Una - Banja Luka</option>
                                                    <option>Optika Šimić - Prskalo d.o.o.- Ljubuški</option>
                                                    <option>OR Optika - Gradačac</option>
                                                    <option>Opto centar d.o.o. - Sarajevo</option>
                                                    <option>OR N&S Optik - Tuzla</option>
                                                    <option>OR Optika Samouk - Goradžde</option>
                                                    <option>PR Optika Malinić - Prijedor</option>
                                                    <option>SPPR Optika Visus - Ugljevik</option>
                                                    <option>STR Optika Topić - Gračanica</option>
                                                    <option>SZR Optika i foto - Vogošća</option>
                                                    <option>SZR Optika - Sarajevo</option>
                                                    <option>SZR Optika Iris - Mostar</option>
                                                    <option>SZTR Optika Aleksić - Modriča</option>
                                                    <option>SZTR Optika Pajić - Bratunac</option>
                                                    <option>TR Optika Iris - Srebrenik</option>
                                                    <option>ZR Optika Miro - Teslić</option>
                                                    <option>ZTOR A&S - Derventa</option>
                                                    <option>ZTR Optika Kojić - Zvornik</option>
                                                    <option>ZTR Očna optika Vid - Zvornik</option>
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
                                                <label>SPH</label>
                                                <select name="sph" title="Unesite Sfernu dioptriju sa popisa" class="form-control" id="select11">
                                                    <option default></option>
                                                    <option> 0.00</option>
                                                    <option>+0.25</option>
                                                    <option>+0.50</option>
                                                    <option>+0.75</option>
                                                    <option>+1.00</option>
                                                    <option>+1.25</option>
                                                    <option>+1.50</option>
                                                    <option>+1.75</option>
                                                    <option>+2.00</option>
                                                    <option>+2.25</option>
                                                    <option>+2.50</option>
                                                    <option>+2.75</option>
                                                    <option>+3.00</option>
                                                    <option>+3.25</option>
                                                    <option>+3.50</option>
                                                    <option>+3.75</option>
                                                    <option>+4.00</option>
                                                    <option>+4.25</option>
                                                    <option>+4.50</option>
                                                    <option>+4.75</option>
                                                    <option>+5.00</option>
                                                    <option>+5.25</option>
                                                    <option>+5.50</option>
                                                    <option>+5.75</option>
                                                    <option>+6.00</option>
                                                    <option>+6.25</option>
                                                    <option>+6.50</option>
                                                    <option>+6.75</option>
                                                    <option>+7.00</option>
                                                    <option>+7.25</option>
                                                    <option>+7.50</option>
                                                    <option>+7.75</option>
                                                    <option>+8.00</option>
                                                    <option>+8.25</option>
                                                    <option>+8.50</option>
                                                    <option>+8.75</option>
                                                    <option>+9.00</option>
                                                    <option>+9.25</option>
                                                    <option>+9.50</option>
                                                    <option>+9.75</option>
                                                    <option>+10.00</option>
                                                    <option>+10.25</option>
                                                    <option>+10.50</option>
                                                    <option>+10.75</option>
                                                    <option>+11.00</option>
                                                    <option>+11.25</option>
                                                    <option>+11.50</option>
                                                    <option>+11.75</option>
                                                    <option>+12.00</option>
                                                    <option>+12.50</option>
                                                    <option>+13.00</option>
                                                    <option>+13.50</option>
                                                    <option>+14.00</option>
                                                    <option>+14.50</option>
                                                    <option>+15.00</option>
                                                    <option>+15.50</option>
                                                    <option>+16.00</option>
                                                    <option> 0.00</option>
                                                    <option>-0.25</option>
                                                    <option>-0.50</option>
                                                    <option>-0.75</option>
                                                    <option>-1.00</option>
                                                    <option>-1.25</option>
                                                    <option>-1.50</option>
                                                    <option>-1.75</option>
                                                    <option>-2.00</option>
                                                    <option>-2.25</option>
                                                    <option>-2.50</option>
                                                    <option>-2.75</option>
                                                    <option>-3.00</option>
                                                    <option>-3.25</option>
                                                    <option>-3.50</option>
                                                    <option>-3.75</option>
                                                    <option>-4.00</option>
                                                    <option>-4.25</option>
                                                    <option>-4.50</option>
                                                    <option>-4.75</option>
                                                    <option>-5.00</option>
                                                    <option>-5.25</option>
                                                    <option>-5.50</option>
                                                    <option>-5.75</option>
                                                    <option>-6.00</option>
                                                    <option>-6.25</option>
                                                    <option>-6.50</option>
                                                    <option>-6.75</option>
                                                    <option>-7.00</option>
                                                    <option>-7.25</option>
                                                    <option>-7.50</option>
                                                    <option>-7.75</option>
                                                    <option>-8.00</option>
                                                    <option>-8.25</option>
                                                    <option>-8.50</option>
                                                    <option>-8.75</option>
                                                    <option>-9.00</option>
                                                    <option>-9.25</option>
                                                    <option>-9.50</option>
                                                    <option>-9.75</option>
                                                    <option>-10.00</option>
                                                    <option>-10.25</option>
                                                    <option>-10.50</option>
                                                    <option>-10.75</option>
                                                    <option>-11.00</option>
                                                    <option>-11.25</option>
                                                    <option>-11.50</option>
                                                    <option>-11.75</option>
                                                    <option>-12.00</option>
                                                    <option>-12.25</option>
                                                    <option>-12.50</option>
                                                    <option>-12.75</option>
                                                    <option>-13.00</option>
                                                    <option>-13.25</option>
                                                    <option>-13.50</option>
                                                    <option>-13.75</option>
                                                    <option>-14.00</option>
                                                    <option>-14.25</option>
                                                    <option>-14.50</option>
                                                    <option>-14.75</option>
                                                    <option>-15.00</option>
                                                    <option>-15.25</option>
                                                    <option>-15.50</option>
                                                    <option>-15.75</option>
                                                    <option>-16.00</option>
                                                    <option>-16.25</option>
                                                    <option>-16.50</option>
                                                    <option>-16.75</option>
                                                    <option>-17.00</option>
                                                    <option>-17.25</option>
                                                    <option>-17.50</option>
                                                    <option>-17.75</option>
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
                                                </select>

                                                <label>CYL</label>
                                                <select name="cyl" title="Unesite Cilindričnu dioptriju sa popisa" class="form-control" id="select12">
                                                    <option default></option>
                                                    <option> 0.00</option>
                                                    <option>+0.25</option>
                                                    <option>+0.50</option>
                                                    <option>+0.75</option>
                                                    <option>+1.00</option>
                                                    <option>+1.25</option>
                                                    <option>+1.50</option>
                                                    <option>+1.75</option>
                                                    <option>+2.00</option>
                                                    <option>+2.25</option>
                                                    <option>+2.50</option>
                                                    <option>+2.75</option>
                                                    <option>+3.00</option>
                                                    <option>+3.25</option>
                                                    <option>+3.50</option>
                                                    <option>+3.75</option>
                                                    <option>+4.00</option>
                                                    <option>+4.25</option>
                                                    <option>+4.50</option>
                                                    <option>+4.75</option>
                                                    <option>+5.00</option>
                                                    <option>+5.25</option>
                                                    <option>+5.50</option>
                                                    <option>+5.75</option>
                                                    <option>+6.00</option>
                                                    <option> 0.00</option>
                                                    <option>-0.25</option>
                                                    <option>-0.50</option>
                                                    <option>-0.75</option>
                                                    <option>-1.00</option>
                                                    <option>-1.25</option>
                                                    <option>-1.50</option>
                                                    <option>-1.75</option>
                                                    <option>-2.00</option>
                                                    <option>-2.25</option>
                                                    <option>-2.50</option>
                                                    <option>-2.75</option>
                                                    <option>-3.00</option>
                                                    <option>-3.25</option>
                                                    <option>-3.50</option>
                                                    <option>-3.75</option>
                                                    <option>-4.00</option>
                                                    <option>-4.25</option>
                                                    <option>-4.50</option>
                                                    <option>-4.75</option>
                                                    <option>-5.00</option>
                                                    <option>-5.25</option>
                                                    <option>-5.50</option>
                                                    <option>-5.75</option>
                                                    <option>-6.00</option>
                                                </select>
                                            </div>

                                            <div class="md-form mb-5">
                                                <label>Add / Dig.</label>
                                                <select name="add" title="Dodajte adiciju ili digresiju za office progresive" class="form-control" id="select13">
                                                    <option default></option>
                                                    <option>0.75</option>
                                                    <option>1.00</option>
                                                    <option>1.25</option>
                                                    <option>1.50</option>
                                                    <option>1.75</option>
                                                    <option>2.00</option>
                                                    <option>2.25</option>
                                                    <option>2.50</option>
                                                    <option>2.75</option>
                                                    <option>3.00</option>
                                                    <option>3.25</option>
                                                    <option>3.50</option>
                                                    <option>3.75</option>
                                                    <option>4.00</option>
                                                </select>
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