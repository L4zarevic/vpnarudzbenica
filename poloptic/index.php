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
                        <div class="companyInfo"> <img id="logo" src="../images/poloptic.svg">
                            <!-- <p>“M-OPTIC” d.o.o.</br> ul. Majevička br. 29, 76300 Bijeljina</br> <strong>Tel:</strong> +387 55 222 999, 222 990, 490 010</br> <strong>Fax:</strong> +387 55 222 998</br> <strong>Email:</strong> <a href="mailto:mopticvp@mojaoptika.com">mopticvp@mojaoptika.com</a></br> <a href="https://mojaoptika.com">www.mojaoptika.com</a></p>-->
                            </br>
                            </br>
                            <label>*Označene kolone se ne šalju dobavljaču</label>
                        </div>

                        <?php
                        include 'narudzbenica_poloptic.php';
                        ?>

                        <div class="row d-flex justify-content-center modalWrapper" id="add_edit_form">
                            <div class="modal fade addNewInputs" id="modalAddPol" tabindex="-1" role="dialog" aria-labelledby="modalAddPol" aria-hidden="true">
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
                                                <label>Lager / Specijala</label><label class="obavezna_polja">*</label>
                                                <select name="lag_spec" title="Izaberite Lager ili Specijala" class="form-control" id="select_lagspec">
                                                    <option value='Lager'>Lager</option>
                                                    <option value='Spec'>Specijala</option>
                                                </select>
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
                                                        <option value="0" default></option>
                                                        <option value="1">Monofokal</option>
                                                        <option value="2">Bifokal</option>
                                                        <option value="3">Progresiv</option>
                                                        <option value="4">Lentikular</option>
                                                    </select>
                                                </div>


                                                <div class="md-form mb-5">
                                                    <label>Dizajn - Naziv proizvoda</label><label class="obavezna_polja">*</label>
                                                    <select name="dizajn" title="Unesite vrstu dizajna" class="form-control" id="select4">
                                                        <option value="0"></option>
                                                        <option value="1" default></option>
                                                        <option id="100" value="1">Standard UC</option>
                                                        <option id="101" value="1">Panorama</option>
                                                        <option id="101" value="1">Anglera</option>
                                                        <option id="102" value="1">Matrix Mono</option>
                                                        <option id="102" value="1">Matrix Sport</option>
                                                        <option id="102" value="1">Elegance</option>
                                                        <option value="1" default></option>

                                                        <option value="2" default></option>
                                                        <option id="103" value="2">FT28</option>
                                                        <option id="103" value="2">CT28</option>
                                                        <option id="104" value="2">Bifo Invisio Ulteh</option>
                                                        <option id="104" value="2">Bifo Invisio Round</option>
                                                        <option value="2" default></option>

                                                        <option value="3" default></option>
                                                        <option id="100" value="3">Pollux</option>
                                                        <option id="100" value="3">Polaris</option>
                                                        <option id="105" value="3">Futura</option>
                                                        <option id="105" value="3">Infini</option>
                                                        <option id="106" value="3">Inoffis</option>
                                                        <option id="107" value="3">Matrix Pro</option>
                                                        <option id="107" value="3">Matrix Short</option>
                                                        <option id="107" value="3">Lightform</option>
                                                        <option id="107" value="3">Operative</option>
                                                        <option id="107" value="3">Sequel DBS</option>
                                                        <option id="107" value="3">Adapta DBS</option>
                                                        <option id="107" value="3">Customfit</option>
                                                        <option id="108" value="3">Varia 3D</option>
                                                        <option id="108" value="3">Varia Pro</option>
                                                        <option id="108" value="3">Varia Pix</option>
                                                        <option id="108" value="3">Varia Zon</option>
                                                        <option id="109" value="3">Mineralni progresiv</option>
                                                        <option value="3" default></option>

                                                        <option value="4" default></option>
                                                        <option id="110" value="4">Tip A</option>
                                                        <option id="110" value="4">Tip B</option>
                                                        <option id="110" value="4">Tip C</option>
                                                        <option value="4" default></option>
                                                    </select>
                                                </div>


                                                <div class="md-form mb-5">
                                                    <label>Vrsta materijala</label><label class="obavezna_polja">*</label>
                                                    <input list="vrsta_materija_spec_list" name="materijal" title="Unesite vrstu materijala za recepturu" class="form-control" id="materijal_spec">
                                                    <datalist id="vrsta_materija_spec_list">
                                                        <option>CR-39</option>
                                                        <option>CR-39 UV420 Remove</option>
                                                        <option>CR-39 UV420 Photo gray</option>
                                                        <option>CR-39 UV420 Photo brown</option>
                                                        <option>Transitions VII gray</option>
                                                        <option>Transitions VII brown</option>
                                                        <option>Transitions VII green</option>
                                                        <option>Polycarbonate</option>
                                                        <option>Polycarbonate Transitions gray</option>
                                                        <option>Polycarbonate Transitions brown</option>
                                                        <option>Polycarbonate Transitions green</option>
                                                        <option>Nupolar gray</option>
                                                        <option>Nupolar brown</option>
                                                        <option>Nupolar G-15</option>
                                                        <option>Nupolar-Polycarbonate gray</option>
                                                        <option>Nupolar-Polycarbonate brown</option>
                                                        <option>Nupolar-Polycarbonate G-15</option>
                                                        <option>Photomatic gray</option>
                                                        <option>Photomatic brown</option>
                                                        <option>Mineralni materijali</option>
                                                        <option>Photo gray mineralni materijali</option>
                                                        <option>Photo brown mineralni materijali</option>

                                                        <option>Ortas</option>
                                                        <option>Stand</option>
                                                        <option>Expert</option>
                                                    </datalist>
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
                                                        <option>4</option>
                                                        <option>4.5</option>
                                                        <option>5</option>
                                                        <option>5.5</option>
                                                        <option>6</option>
                                                        <option>6.5</option>
                                                        <option>7</option>
                                                        <option>7.5</option>
                                                        <option>8</option>
                                                        <option>8.5</option>
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
                                                            <option>13</option>
                                                            <option>14</option>
                                                            <option>15</option>
                                                            <option>16</option>
                                                            <option>17</option>
                                                            <option>18</option>
                                                            <option>19</option>
                                                            <option>20</option>
                                                            <option>21</option>
                                                            <option>22</option>
                                                            <option>23</option>
                                                            <option>24</option>
                                                            <option>25</option>
                                                            <option>26</option>
                                                            <option>27</option>
                                                            <option>28</option>
                                                            <option>29</option>
                                                            <option>30</option>
                                                            <option>31</option>
                                                            <option>32</option>
                                                            <option>33</option>
                                                            <option>34</option>
                                                            <option>35</option>
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
                                                    <label>Ax</label>
                                                    <input name="ugao" title="Unesite ugao cilindra" type="text" maxlength="3" class="form-control" id="ugaoCilindra">

                                                    <label>Add / Dig.</label><label id="label_zvjezdica2" class="obavezna_polja">*</label>
                                                    <input list="addDigList" name="add" title="Dodajte adiciju ili digresiju za office progresive" class="form-control" id="addDig">
                                                    <datalist id="addDigList">
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
                                                    </datalist>
                                                </div>
                                            </div>

                                            <div id="ifLager">
                                                <div class="md-form mb-5">
                                                    <label>Vrsta materijala:</label><label class="obavezna_polja">*</label>
                                                    <input name="materijal_lager" title="Unesite vrstu materijala" maxlength="255" type="text" class="form-control" id="materijal_lager" required>
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

                                            <div id="ifSpecijalaTr">
                                                <div class="md-form mb-5">
                                                    <label>Tretmani #1</label>
                                                    <input list="tretman1lista" name="tretman1" class="form-control" id="tretman1">
                                                    <datalist id="tretman1lista">
                                                        <option>HC</option>
                                                        <option>MultiPlus</option>
                                                        <option>UltraGlide</option>
                                                        <option>NanoGlide</option>
                                                        <option>PolarGlide</option>
                                                        <option>BlueGlide</option>
                                                        <option>PureGlide</option>
                                                        <option>UltraGlide BackSide</option>
                                                        <option>Mirror/UltraBS</option>
                                                    </datalist>
                                                </div>



                                                <div class="md-form mb-5">
                                                    <label>Tretmani i bojenja #2</label>
                                                    <input list="tretman2lista" name="tretman2" class="form-control" id="tretman2">
                                                    <datalist id="tretman2lista">
                                                        <option>HC</option>
                                                        <option>MultiPlus</option>
                                                        <option>UltraGlide</option>
                                                        <option>NanoGlide</option>
                                                        <option>PolarGlide</option>
                                                        <option>BlueGlide</option>
                                                        <option>PureGlide</option>
                                                        <option>UltraGlide BackSide</option>
                                                        <option>Mirror/UltraBS</option>

                                                        <option>Unicolor</option>
                                                        <option>Unicolor Hi index</option>
                                                        <option>Color po uzorku</option>
                                                        <option>Color po uzorku Hi index</option>
                                                        <option>Gradient</option>
                                                        <option>Gradient Hi index</option>
                                                    </datalist>
                                                </div>
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
                                                    <option default>pol-sarajevo</option>
                                                    <option>pol-beograd</option>
                                                    <option>pol-novi sad</option>
                                                    <option>pol-bojana</option>
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
                                            <button type='submit' onclick="return checkFormPolOptic();" id='dugmeNaruci' class="btn btn-outline-primary btn-block buttonAdd">Sačuvaj stavku
                                                <i class="fas fa-paper-plane-o ml-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <a href="" class="btn btn-info btn-rounded btn-sm" id="addButton" data-toggle="modal" data-target="#modalAddPol">Dodaj novi zapis<i class="fa fa-plus-square ml-1"></i></a>
                            </div>
                            &nbsp;
                            &nbsp;
                            </br>
                            </br>
                            </br>

                        </div>
                    </div>
                </div>
            </div><?php include '../modules/footer.php'; ?>
</body>
<script type="text/javascript">
    $(document).keypress(function(e) {
        if (e.which == 13) {
            $('#modalAddPol').modal({
                show: true
            });
            $("#modalAddPol").on('shown.bs.modal', function() {
                $(this).find('#komitenti_radnje').focus();
            });
        }
    });


    $('#label_zvjezdica1').hide();
    $('#label_zvjezdica2').hide();
    $('#select1').hide();
    var $select_lagspec = $('#select_lagspec'),
        $select2 = $('#select2'),
        $select4 = $('#select4'),
        $select12 = $('#select12'),
        $options2 = $select4.find('option');


    $('#ifSpecijala,#ifSpecijalaTr').hide();
    $('#ifLager').show();
    $select_lagspec.on('change', function() {
        if (this.value == 'Spec') {
            $('#ifSpecijala,#ifSpecijalaTr,#label_odosou,#select1').show();
            $('#ifLager').hide();
        } else {
            $('#ifLager').show();
            $('#ifSpecijala,#ifSpecijalaTr,#label_odosou,#select1').hide();

        }

    }).trigger('change');

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

    $select2.on('change', function() {
        $select4.html($options2.filter('[value="' + this.value + '"]'));
    }).trigger('change');

    $select12.on('change', function() {
        if ((($('#select2').find("option:selected").text() == "Bifokal") || ($('#select2').find("option:selected").text() == "Progresiv")) && ($('#select12').find("option:selected").text().length != 0)) {
            $('#label_zvjezdica2').show();
        } else if ((($('#select2').find("option:selected").text() == "Bifokal") || ($('#select2').find("option:selected").text() == "Progresiv")) && ($('#select12').find("option:selected").text().length == 0)) {
            $('#label_zvjezdica2').hide();
        }
    }).trigger('change');

    $select_lagspec.on('change', function() {
        if ($('#select_lagspec').find("option:selected").text() == "Specijala") {
            $('#label_zvjezdica1').show();
        } else {
            $('#label_zvjezdica1').hide();
        }
    }).trigger('change');
</script>

</html>