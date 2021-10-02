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
                        <div class="companyInfo"> <img id="logo" src="../images/bausch_and_lomb.svg" style="width:100%">
                            </br>
                            </br>
                        </div>

                        <?php
                        include 'lenses_order_table.php';
                        ?>

                        <div class="row d-flex justify-content-center modalWrapper" id="add_edit_form">
                            <div class="modal fade addNewInputs" id="modalAddLenses" tabindex="-1" role="dialog" aria-labelledby="modalAddLenses" aria-hidden="true">
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
                                                <label id='label_odosou'>OD / OS</label><label class="obavezna_polja">*</label>
                                                <select name="od_os_ou" title="OD - za desno oko, OS - za lijevo oko" class="form-control" id="select1">
                                                    <option default></option>
                                                    <option>OD</option>
                                                    <option>OS</option>
                                                </select>
                                            </div>

                                            <div class="md-form mb-5">
                                                <input name="id_stavke" type="hidden" class="form-control" id="id_stavke" value="">
                                            </div>

                                            <div class="md-form mb-5">
                                                <label>Tip/vrsta</label><label class="obavezna_polja">*</label>
                                                <input name="tip" type="text" class="form-control" id="tip">
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
                                                    </datalist>
                                                </div>
                                            </div>

                                            <div class="md-form mb-5">
                                                <label>Ugao</label>
                                                <input name="ugao" type="text" class="form-control" id="ugao">
                                            </div>
                                            <div class="md-form mb-5">
                                                <label>BC</label><label class="obavezna_polja">*</label>
                                                <input name="bc" type="text" class="form-control" id="bc">
                                                <label>TD</label><label class="obavezna_polja">*</label>
                                                <input name="td" type="text" class="form-control" id="td">
                                            </div>

                                            <div class="md-form mb-5">
                                                <label>Jedinica mjere</label>
                                                <select name="jm" title="Unesite jedinicu mjere" class="form-control" id="select14">
                                                    <option default>kutija</option>
                                                </select>
                                                <label>Količina</label><label class="obavezna_polja">*</label>
                                                <input name="kolicina" maxlength="2" title="Unesite potrebnu količinu." type="text" class="form-control" id="kolicina">
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
                                                    <option default>bausch_lomb-bih</option>
                                                    <option>bausch_lomb-srbija</option>
                                                </select>
                                            </div>
                                            <div class="md-form mb-5">
                                                <label>Mjesto isporuke</label>
                                                <input list="listaMjestaIsporuke" name="mjesto_isporuke" title="Unesite mjesto isporuke" type="text" class="form-control" id="mjesto_isporuke">
                                                <datalist id='listaMjestaIsporuke'>
                                                    <option>Bijeljina</option>
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

                                        </div>
                                        <div class="modal-footer d-flex justify-content-center buttonAddFormWrapper">
                                            <button type='submit' onclick="return checkFormLenses();" id='dugmeNaruci' class="btn btn-outline-primary btn-block buttonAdd">Sačuvaj stavku
                                                <i class="fas fa-paper-plane-o ml-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <a href="" class="btn btn-info btn-rounded btn-sm" id="addButton" data-toggle="modal" data-target="#modalAddLenses">Dodaj novi zapis<i class="fa fa-plus-square ml-1"></i></a>
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
            $('#modalAddLenses').modal({
                show: true
            });
            $("#modalAddLenses").on('shown.bs.modal', function() {
                $(this).find('#komitenti_radnje').focus();
            });
        }
    });
</script>


</html>