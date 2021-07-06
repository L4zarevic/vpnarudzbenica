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
                                                        <option id="107" value="3">Matrix Short</option>
                                                        <option id="107" value="3">Matrix Pro</option>
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
                                                    <select name="materijal" title="Unesite vrstu materijala za recepturu" class="form-control" id="select3">
                                                        <option value="0" default></option>
                                                        <!-- Standard UC / Pollux / Polaris-->
                                                        <option value="100" default></option>
                                                        <option value="100">CR-39</option>
                                                        <option value="100">CR-39 UV420 Remove</option>
                                                        <option value="100">CR-39 UV420 Photo gray</option>
                                                        <option value="100">CR-39 UV420 Photo brown</option>
                                                        <option value="100">Transitions VII gray</option>
                                                        <option value="100">Transitions VII brown</option>
                                                        <option value="100">Transitions VII green</option>
                                                        <option value="100">Polycarbonate</option>
                                                        <option value="100">Polycarbonate Transitions gray</option>
                                                        <option value="100">Polycarbonate Transitions brown</option>
                                                        <option value="100">Polycarbonate Transitions green</option>
                                                        <option value="100">Nupolar gray</option>
                                                        <option value="100">Nupolar brown</option>
                                                        <option value="100">Nupolar G-15</option>
                                                        <option value="100">Nupolar-Polycarbonate gray</option>
                                                        <option value="100">Nupolar-Polycarbonate brown</option>
                                                        <option value="100">Nupolar-Polycarbonate G-15</option>
                                                        <option value="100">Photomatic gray</option>
                                                        <option value="100">Photomatic brown</option>
                                                        <option value="100">Mineralni materijali</option>
                                                        <option value="100">Photo gray mineralni materijali</option>
                                                        <option value="100">Photo brown mineralni materijali</option>
                                                        <option value="100" default></option>

                                                        <!-- Panorama / Anglera -->
                                                        <option value="101" default></option>
                                                        <option value="101">CR-39</option>
                                                        <option value="101">CR-39 UV420 Remove</option>
                                                        <option value="101">CR-39 UV420 Photo gray</option>
                                                        <option value="101">CR-39 UV420 Photo brown</option>
                                                        <option value="101">Transitions VII gray</option>
                                                        <option value="101">Transitions VII brown</option>
                                                        <option value="101">Transitions VII green</option>
                                                        <option value="101">Polycarbonate</option>
                                                        <option value="101">Polycarbonate Transitions gray</option>
                                                        <option value="101">Polycarbonate Transitions brown</option>
                                                        <option value="101">Polycarbonate Transitions green</option>
                                                        <option value="101">Nupolar gray</option>
                                                        <option value="101">Nupolar brown</option>
                                                        <option value="101">Nupolar G-15</option>
                                                        <option value="101">Nupolar-Polycarbonate gray</option>
                                                        <option value="101">Nupolar-Polycarbonate brown</option>
                                                        <option value="101">Nupolar-Polycarbonate G-15</option>
                                                        <option value="101">Photomatic gray</option>
                                                        <option value="101">Photomatic brown</option>
                                                        <option value="101" default></option>

                                                        <!-- Matrix Mono / Elegance / Matrix Sport -->
                                                        <option value="102" default></option>
                                                        <option value="102">CR-39</option>
                                                        <option value="102">CR-39 UV420 Remove</option>
                                                        <option value="102">CR-39 UV420 Photo gray</option>
                                                        <option value="102">CR-39 UV420 Photo brown</option>
                                                        <option value="102">Transitions VII gray</option>
                                                        <option value="102">Transitions VII brown</option>
                                                        <option value="102">Transitions VII green</option>
                                                        <option value="102">Polycarbonate</option>
                                                        <option value="102">Polycarbonate Transitions gray</option>
                                                        <option value="102">Polycarbonate Transitions brown</option>
                                                        <option value="102">Polycarbonate Transitions green</option>
                                                        <option value="102">Nupolar gray</option>
                                                        <option value="102">Nupolar brown</option>
                                                        <option value="102">Nupolar G-15</option>
                                                        <option value="102">Nupolar-Polycarbonate gray</option>
                                                        <option value="102">Nupolar-Polycarbonate brown</option>
                                                        <option value="102">Nupolar-Polycarbonate G-15</option>
                                                        <option value="102" default></option>

                                                        <!-- FT28 / CT28-->
                                                        <option value="103" default></option>
                                                        <option value="103">CR-39</option>
                                                        <option value="103">Transitions VII gray</option>
                                                        <option value="103">Transitions VII brown</option>
                                                        <option value="103">Trivex</option>
                                                        <option value="103">Polycarbonate Transitions gray</option>
                                                        <option value="103">Polycarbonate Transitions brown</option>
                                                        <option value="103">Polycarbonate Transitions green</option>
                                                        <option value="103">Nupolar-Polycarbonate gray</option>
                                                        <option value="103">Nupolar-Polycarbonate brown</option>
                                                        <option value="103">Nupolar-Polycarbonate G-15</option>
                                                        <option value="103">Mineralni materijali</option>
                                                        <option value="103">Photo gray mineralni materijali</option>
                                                        <option value="103">Photo brown mineralni materijali</option>
                                                        <option value="103" default></option>

                                                        <!-- Bifo invision-->
                                                        <option value="104" default></option>
                                                        <option value="104">CR-39</option>
                                                        <option value="104">CR-39 UV420 Remove</option>
                                                        <option value="104">CR-39 UV420 Photo gray</option>
                                                        <option value="104">CR-39 UV420 Photo brown</option>
                                                        <option value="104">Transitions VII gray</option>
                                                        <option value="104">Transitions VII brown</option>
                                                        <option value="104">Transitions VII green</option>
                                                        <option value="104">Polycarbonate</option>
                                                        <option value="104">Polycarbonate Transitions gray</option>
                                                        <option value="104">Polycarbonate Transitions brown</option>
                                                        <option value="104">Polycarbonate Transitions green</option>
                                                        <option value="104">Nupolar gray</option>
                                                        <option value="104">Nupolar brown</option>
                                                        <option value="104">Nupolar G-15</option>
                                                        <option value="104">Nupolar-Polycarbonate gray</option>
                                                        <option value="104">Nupolar-Polycarbonate brown</option>
                                                        <option value="104">Nupolar-Polycarbonate G-15</option>
                                                        <option value="104">Photomatic gray</option>
                                                        <option value="104">Photomatic brown</option>
                                                        <option value="104" default></option>

                                                        <!-- Futura / Infini -->
                                                        <option value="105" default></option>
                                                        <option value="105">CR-39</option>
                                                        <option value="105">CR-39 UV420 Remove</option>
                                                        <option value="105">CR-39 UV420 Photo gray</option>
                                                        <option value="105">CR-39 UV420 Photo brown</option>
                                                        <option value="105">Transitions VII gray</option>
                                                        <option value="105">Transitions VII brown</option>
                                                        <option value="105">Transitions VII green</option>
                                                        <option value="105">Polycarbonate</option>
                                                        <option value="105">Polycarbonate Transitions gray</option>
                                                        <option value="105">Polycarbonate Transitions brown</option>
                                                        <option value="105">Polycarbonate Transitions green</option>
                                                        <option value="105">Nupolar gray</option>
                                                        <option value="105">Nupolar brown</option>
                                                        <option value="105">Nupolar G-15</option>
                                                        <option value="105">Nupolar-Polycarbonate gray</option>
                                                        <option value="105">Nupolar-Polycarbonate brown</option>
                                                        <option value="105">Nupolar-Polycarbonate G-15</option>
                                                        <option value="105">Photomatic gray</option>
                                                        <option value="105">Photomatic brown</option>
                                                        <option value="105" default></option>

                                                        <!-- Inoffis -->
                                                        <option value="106" default></option>
                                                        <option value="106">CR-39</option>
                                                        <option value="106">CR-39 UV420 Remove</option>
                                                        <option value="106">CR-39 UV420 Photo gray</option>
                                                        <option value="106">CR-39 UV420 Photo brown</option>
                                                        <option value="106">Transitions VII gray</option>
                                                        <option value="106">Transitions VII brown</option>
                                                        <option value="106">Transitions VII green</option>
                                                        <option value="106">Polycarbonate</option>
                                                        <option value="106">Polycarbonate Transitions gray</option>
                                                        <option value="106">Polycarbonate Transitions brown</option>
                                                        <option value="106">Polycarbonate Transitions green</option>
                                                        <option value="106">Photomatic gray</option>
                                                        <option value="106">Photomatic brown</option>
                                                        <option value="106" default></option>

                                                        <!-- Matrix Short / Matrix Pro / Lightform / Operative -->
                                                        <option value="107" default></option>
                                                        <option value="107">CR-39</option>
                                                        <option value="107">CR-39 UV420 Remove</option>
                                                        <option value="107">CR-39 UV420 Photo gray</option>
                                                        <option value="107">CR-39 UV420 Photo brown</option>
                                                        <option value="107">Transitions VII gray</option>
                                                        <option value="107">Transitions VII brown</option>
                                                        <option value="107">Transitions VII green</option>
                                                        <option value="107">Polycarbonate</option>
                                                        <option value="107">Polycarbonate Transitions gray</option>
                                                        <option value="107">Polycarbonate Transitions brown</option>
                                                        <option value="107">Polycarbonate Transitions green</option>
                                                        <option value="107">Nupolar gray</option>
                                                        <option value="107">Nupolar brown</option>
                                                        <option value="107">Nupolar G-15</option>
                                                        <option value="107">Nupolar-Polycarbonate gray</option>
                                                        <option value="107">Nupolar-Polycarbonate brown</option>
                                                        <option value="107">Nupolar-Polycarbonate G-15</option>
                                                        <option value="107" default></option>

                                                        <!-- Varia 3D / Varia Pro / Varia Pix / Varia Zon-->
                                                        <option value="108" default></option>
                                                        <option value="108">CR-39</option>
                                                        <option value="108">Transitions VII gray</option>
                                                        <option value="108">Transitions VII brown</option>
                                                        <option value="108">Polycarbonate</option>
                                                        <option value="108">Polycarbonate Transitions gray</option>
                                                        <option value="108">Polycarbonate Transitions brown</option>
                                                        <option value="108">Nupolar gray</option>
                                                        <option value="108">Nupolar brown</option>
                                                        <option value="108" default></option>

                                                        <!-- Mineralni materijali-->
                                                        <option value="109" default></option>
                                                        <option value="109">Mineralni materijali</option>
                                                        <option value="109">Photo gray mineralni materijali</option>
                                                        <option value="109">Photo brown mineralni materijali</option>
                                                        <option value="109" default></option>

                                                        <!-- Tip A / Tip B / Tip C-->
                                                        <option value="110" default></option>
                                                        <option value="110">Ortas</option>
                                                        <option value="110">Stand</option>
                                                        <option value="110">Expert</option>
                                                        <option value="110" default></option>
                                                    </select>
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
                                                        <option>50</option>
                                                        <option>51</option>
                                                        <option>52</option>
                                                        <option>53</option>
                                                        <option>54</option>
                                                        <option>55</option>
                                                        <option>56</option>
                                                        <option>57</option>
                                                        <option>58</option>
                                                        <option>59</option>
                                                        <option>60</option>
                                                        <option>61</option>
                                                        <option>62</option>
                                                        <option>63</option>
                                                        <option>64</option>
                                                        <option>65</option>
                                                        <option>66</option>
                                                        <option>67</option>
                                                        <option>68</option>
                                                        <option>69</option>
                                                        <option>70</option>
                                                        <option>71</option>
                                                        <option>72</option>
                                                        <option>73</option>
                                                        <option>74</option>
                                                        <option>75</option>
                                                    </select>

                                                    <select name="precnik2" title="Unesite prečnik" class="form-control" id="select10">
                                                        <option default></option>
                                                        <option>50</option>
                                                        <option>51</option>
                                                        <option>52</option>
                                                        <option>53</option>
                                                        <option>54</option>
                                                        <option>55</option>
                                                        <option>56</option>
                                                        <option>57</option>
                                                        <option>58</option>
                                                        <option>59</option>
                                                        <option>60</option>
                                                        <option>61</option>
                                                        <option>62</option>
                                                        <option>63</option>
                                                        <option>64</option>
                                                        <option>65</option>
                                                        <option>66</option>
                                                        <option>67</option>
                                                        <option>68</option>
                                                        <option>69</option>
                                                        <option>70</option>
                                                        <option>71</option>
                                                        <option>72</option>
                                                        <option>73</option>
                                                        <option>74</option>
                                                        <option>75</option>
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
                                            </div>

                                            <div id="ifLager">
                                                <div class="md-form mb-5">
                                                    <label>Vrsta materijala:</label><label class="obavezna_polja">*</label>
                                                    <input name="materijal_lager" title="Unesite vrstu materijala" maxlength="255" type="text" class="form-control" id="materijal_lager" required>
                                                </div>
                                            </div>

                                            <div class="md-form mb-5">
                                                <label>Jedinica mjere</label>
                                                <select name="jm" title="Unesite jedinicu mjere" class="form-control" id="select14" disabled>
                                                    <option default>kom</option>
                                                </select>
                                                <label>Količina</label><label class="obavezna_polja">*</label>
                                                <input name="kolicina" maxlength="2" title="Unesite potrebnu količinu.Za 2 ili više komada, stavljajte na početku Ou - Obostrano isto!" type="text" class="form-control" id="kolicina">
                                            </div>

                                            <div id="ifSpecijalaTr">
                                                <div class="md-form mb-5">
                                                    <label>Tretmani i bojenja #1</label>
                                                    <select name="tretman1" class="form-control" id="select15">
                                                        <option value="100" default></option>
                                                        <option value="100">HC</option>
                                                        <option value="100">MultiPlus</option>
                                                        <option value="100">NanoGlide</option>
                                                        <option value="100">PolarGlide</option>
                                                        <option value="100">BlueGlide</option>
                                                        <option value="100">PureGlide</option>
                                                        <option value="100">UltraGlide BackSide</option>
                                                        <option value="100">Mirror/UltraBS</option>
                                                        <option value="100" disabled>--- Bojenje ---</option>
                                                        <option value="100">Unicolor</option>
                                                        <option value="100">Unicolor Hi index</option>
                                                        <option value="100">Color po uzorku</option>
                                                        <option value="100">Color po uzorku Hi index</option>
                                                        <option value="100">Gradient</option>
                                                        <option value="100">Gradient Hi index</option>
                                                        <option value="100" default></option>

                                                        <option value="101" default></option>
                                                        <option value="101">MultiPlus</option>
                                                        <option value="101">UltraGlide</option>
                                                        <option value="101">NanoGlide</option>
                                                        <option value="101">PolarGlide</option>
                                                        <option value="101">BlueGlide</option>
                                                        <option value="101">PureGlide</option>
                                                        <option value="101">UltraGlide BackSide</option>
                                                        <option value="101">Mirror/UltraBS</option>
                                                        <option value="101" disabled>--- Bojenje ---</option>
                                                        <option value="101">Unicolor</option>
                                                        <option value="101">Unicolor Hi index</option>
                                                        <option value="101">Color po uzorku</option>
                                                        <option value="101">Color po uzorku Hi index</option>
                                                        <option value="101">Gradient</option>
                                                        <option value="101">Gradient Hi index</option>
                                                        <option value="101" default></option>

                                                        <option value="102" default></option>
                                                        <option value="102">UltraGlide</option>
                                                        <option value="102">NanoGlide</option>
                                                        <option value="102">PolarGlide</option>
                                                        <option value="102">BlueGlide</option>
                                                        <option value="102">PureGlide</option>
                                                        <option value="102">UltraGlide BackSide</option>
                                                        <option value="102">Mirror/UltraBS</option>
                                                        <option value="102" disabled>--- Bojenje ---</option>
                                                        <option value="102">Unicolor</option>
                                                        <option value="102">Unicolor Hi index</option>
                                                        <option value="102">Color po uzorku</option>
                                                        <option value="102">Color po uzorku Hi index</option>
                                                        <option value="102">Gradient</option>
                                                        <option value="102">Gradient Hi index</option>
                                                        <option value="102" default></option>

                                                        <option value="103" default></option>
                                                        <option value="103">HC</option>
                                                        <option value="103">MultiPlus</option>
                                                        <option value="103">UltraGlide</option>
                                                        <option value="103">NanoGlide</option>
                                                        <option value="103">PolarGlide</option>
                                                        <option value="103">BlueGlide</option>
                                                        <option value="103">PureGlide</option>
                                                        <option value="103">UltraGlide BackSide</option>
                                                        <option value="103">Mirror/UltraBS</option>
                                                        <option value="103" disabled>--- Bojenje ---</option>
                                                        <option value="103">Unicolor</option>
                                                        <option value="103">Unicolor Hi index</option>
                                                        <option value="103">Color po uzorku</option>
                                                        <option value="103">Color po uzorku Hi index</option>
                                                        <option value="103">Gradient</option>
                                                        <option value="103">Gradient Hi index</option>
                                                        <option value="103" default></option>

                                                        <option value="104" default></option>
                                                        <option value="104">MultiPlus</option>
                                                        <option value="104">UltraGlide</option>
                                                        <option value="104">NanoGlide</option>
                                                        <option value="104">PolarGlide</option>
                                                        <option value="104">BlueGlide</option>
                                                        <option value="104">PureGlide</option>
                                                        <option value="104">UltraGlide BackSide</option>
                                                        <option value="104">Mirror/UltraBS</option>
                                                        <option value="104" disabled>--- Bojenje ---</option>
                                                        <option value="104">Unicolor</option>
                                                        <option value="104">Unicolor Hi index</option>
                                                        <option value="104">Color po uzorku</option>
                                                        <option value="104">Color po uzorku Hi index</option>
                                                        <option value="104">Gradient</option>
                                                        <option value="104">Gradient Hi index</option>
                                                        <option value="104" default></option>

                                                        <option value="105" default></option>
                                                        <option value="105">MultiPlus</option>
                                                        <option value="105">UltraGlide</option>
                                                        <option value="105">NanoGlide</option>
                                                        <option value="105">PolarGlide</option>
                                                        <option value="105">BlueGlide</option>
                                                        <option value="105">PureGlide</option>
                                                        <option value="105">UltraGlide BackSide</option>
                                                        <option value="105">Mirror/UltraBS</option>
                                                        <option value="105" disabled>--- Bojenje ---</option>
                                                        <option value="105">Unicolor</option>
                                                        <option value="105">Unicolor Hi index</option>
                                                        <option value="105">Color po uzorku</option>
                                                        <option value="105">Color po uzorku Hi index</option>
                                                        <option value="105">Gradient</option>
                                                        <option value="105">Gradient Hi index</option>
                                                        <option value="105" default></option>

                                                        <option value="107" default></option>
                                                        <option value="107">UltraGlide</option>
                                                        <option value="107">NanoGlide</option>
                                                        <option value="107">PolarGlide</option>
                                                        <option value="107">BlueGlide</option>
                                                        <option value="107">PureGlide</option>
                                                        <option value="107">UltraGlide BackSide</option>
                                                        <option value="107">Mirror/UltraBS</option>
                                                        <option value="107" disabled>--- Bojenje ---</option>
                                                        <option value="107">Unicolor</option>
                                                        <option value="107">Unicolor Hi index</option>
                                                        <option value="107">Color po uzorku</option>
                                                        <option value="107">Color po uzorku Hi index</option>
                                                        <option value="107">Gradient</option>
                                                        <option value="107">Gradient Hi index</option>
                                                        <option value="107" default></option>

                                                        <option value="108" default></option>
                                                        <option value="108">UltraGlide</option>
                                                        <option value="108">NanoGlide</option>
                                                        <option value="108">PolarGlide</option>
                                                        <option value="108">BlueGlide</option>
                                                        <option value="108">PureGlide</option>
                                                        <option value="108">UltraGlide BackSide</option>
                                                        <option value="108">Mirror/UltraBS</option>
                                                        <option value="108" disabled>--- Bojenje ---</option>
                                                        <option value="108">Unicolor</option>
                                                        <option value="108">Unicolor Hi index</option>
                                                        <option value="108">Color po uzorku</option>
                                                        <option value="108">Color po uzorku Hi index</option>
                                                        <option value="108">Gradient</option>
                                                        <option value="108">Gradient Hi index</option>
                                                        <option value="108" default></option>

                                                        <option value="109" default></option>
                                                        <option value="109">MultiPlus</option>
                                                        <option value="109">UltraGlide</option>
                                                        <option value="109">NanoGlide</option>
                                                        <option value="109">PolarGlide</option>
                                                        <option value="109">BlueGlide</option>
                                                        <option value="109">PureGlide</option>
                                                        <option value="109">UltraGlide BackSide</option>
                                                        <option value="109">Mirror/UltraBS</option>
                                                        <option value="109" disabled>--- Bojenje ---</option>
                                                        <option value="109">Unicolor</option>
                                                        <option value="109">Unicolor Hi index</option>
                                                        <option value="109">Color po uzorku</option>
                                                        <option value="109">Color po uzorku Hi index</option>
                                                        <option value="109">Gradient</option>
                                                        <option value="109">Gradient Hi index</option>
                                                        <option value="109" default></option>
                                                    </select>
                                                </div>



                                                <div class="md-form mb-5">
                                                    <label>Tretmani i bojenja #2</label>
                                                    <select name="tretman2" class="form-control" id="select16">

                                                        <option value="100" default></option>
                                                        <option value="100">HC</option>
                                                        <option value="100">MultiPlus</option>
                                                        <option value="100">NanoGlide</option>
                                                        <option value="100">PolarGlide</option>
                                                        <option value="100">BlueGlide</option>
                                                        <option value="100">PureGlide</option>
                                                        <option value="100">UltraGlide BackSide</option>
                                                        <option value="100">Mirror/UltraBS</option>
                                                        <option value="100" disabled>--- Bojenje ---</option>
                                                        <option value="100">Unicolor</option>
                                                        <option value="100">Unicolor Hi index</option>
                                                        <option value="100">Color po uzorku</option>
                                                        <option value="100">Color po uzorku Hi index</option>
                                                        <option value="100">Gradient</option>
                                                        <option value="100">Gradient Hi index</option>
                                                        <option value="100" default></option>

                                                        <option value="101" default></option>
                                                        <option value="101">MultiPlus</option>
                                                        <option value="101">UltraGlide</option>
                                                        <option value="101">NanoGlide</option>
                                                        <option value="101">PolarGlide</option>
                                                        <option value="101">BlueGlide</option>
                                                        <option value="101">PureGlide</option>
                                                        <option value="101">UltraGlide BackSide</option>
                                                        <option value="101">Mirror/UltraBS</option>
                                                        <option value="101" disabled>--- Bojenje ---</option>
                                                        <option value="101">Unicolor</option>
                                                        <option value="101">Unicolor Hi index</option>
                                                        <option value="101">Color po uzorku</option>
                                                        <option value="101">Color po uzorku Hi index</option>
                                                        <option value="101">Gradient</option>
                                                        <option value="101">Gradient Hi index</option>
                                                        <option value="101" default></option>

                                                        <option value="102" default></option>
                                                        <option value="102">UltraGlide</option>
                                                        <option value="102">NanoGlide</option>
                                                        <option value="102">PolarGlide</option>
                                                        <option value="102">BlueGlide</option>
                                                        <option value="102">PureGlide</option>
                                                        <option value="102">UltraGlide BackSide</option>
                                                        <option value="102">Mirror/UltraBS</option>
                                                        <option value="102" disabled>--- Bojenje ---</option>
                                                        <option value="102">Unicolor</option>
                                                        <option value="102">Unicolor Hi index</option>
                                                        <option value="102">Color po uzorku</option>
                                                        <option value="102">Color po uzorku Hi index</option>
                                                        <option value="102">Gradient</option>
                                                        <option value="102">Gradient Hi index</option>
                                                        <option value="102" default></option>

                                                        <option value="103" default></option>
                                                        <option value="103">HC</option>
                                                        <option value="103">MultiPlus</option>
                                                        <option value="103">UltraGlide</option>
                                                        <option value="103">NanoGlide</option>
                                                        <option value="103">PolarGlide</option>
                                                        <option value="103">BlueGlide</option>
                                                        <option value="103">PureGlide</option>
                                                        <option value="103">UltraGlide BackSide</option>
                                                        <option value="103">Mirror/UltraBS</option>
                                                        <option value="103" disabled>--- Bojenje ---</option>
                                                        <option value="103">Unicolor</option>
                                                        <option value="103">Unicolor Hi index</option>
                                                        <option value="103">Color po uzorku</option>
                                                        <option value="103">Color po uzorku Hi index</option>
                                                        <option value="103">Gradient</option>
                                                        <option value="103">Gradient Hi index</option>
                                                        <option value="103" default></option>

                                                        <option value="104" default></option>
                                                        <option value="104">MultiPlus</option>
                                                        <option value="104">UltraGlide</option>
                                                        <option value="104">NanoGlide</option>
                                                        <option value="104">PolarGlide</option>
                                                        <option value="104">BlueGlide</option>
                                                        <option value="104">PureGlide</option>
                                                        <option value="104">UltraGlide BackSide</option>
                                                        <option value="104">Mirror/UltraBS</option>
                                                        <option value="104" disabled>--- Bojenje ---</option>
                                                        <option value="104">Unicolor</option>
                                                        <option value="104">Unicolor Hi index</option>
                                                        <option value="104">Color po uzorku</option>
                                                        <option value="104">Color po uzorku Hi index</option>
                                                        <option value="104">Gradient</option>
                                                        <option value="104">Gradient Hi index</option>
                                                        <option value="104" default></option>

                                                        <option value="105" default></option>
                                                        <option value="105">MultiPlus</option>
                                                        <option value="105">UltraGlide</option>
                                                        <option value="105">NanoGlide</option>
                                                        <option value="105">PolarGlide</option>
                                                        <option value="105">BlueGlide</option>
                                                        <option value="105">PureGlide</option>
                                                        <option value="105">UltraGlide BackSide</option>
                                                        <option value="105">Mirror/UltraBS</option>
                                                        <option value="105" disabled>--- Bojenje ---</option>
                                                        <option value="105">Unicolor</option>
                                                        <option value="105">Unicolor Hi index</option>
                                                        <option value="105">Color po uzorku</option>
                                                        <option value="105">Color po uzorku Hi index</option>
                                                        <option value="105">Gradient</option>
                                                        <option value="105">Gradient Hi index</option>
                                                        <option value="105" default></option>

                                                        <option value="107" default></option>
                                                        <option value="107">UltraGlide</option>
                                                        <option value="107">NanoGlide</option>
                                                        <option value="107">PolarGlide</option>
                                                        <option value="107">BlueGlide</option>
                                                        <option value="107">PureGlide</option>
                                                        <option value="107">UltraGlide BackSide</option>
                                                        <option value="107">Mirror/UltraBS</option>
                                                        <option value="107" disabled>--- Bojenje ---</option>
                                                        <option value="107">Unicolor</option>
                                                        <option value="107">Unicolor Hi index</option>
                                                        <option value="107">Color po uzorku</option>
                                                        <option value="107">Color po uzorku Hi index</option>
                                                        <option value="107">Gradient</option>
                                                        <option value="107">Gradient Hi index</option>
                                                        <option value="107" default></option>

                                                        <option value="108" default></option>
                                                        <option value="108">UltraGlide</option>
                                                        <option value="108">NanoGlide</option>
                                                        <option value="108">PolarGlide</option>
                                                        <option value="108">BlueGlide</option>
                                                        <option value="108">PureGlide</option>
                                                        <option value="108">UltraGlide BackSide</option>
                                                        <option value="108">Mirror/UltraBS</option>
                                                        <option value="108" disabled>--- Bojenje ---</option>
                                                        <option value="108">Unicolor</option>
                                                        <option value="108">Unicolor Hi index</option>
                                                        <option value="108">Color po uzorku</option>
                                                        <option value="108">Color po uzorku Hi index</option>
                                                        <option value="108">Gradient</option>
                                                        <option value="108">Gradient Hi index</option>
                                                        <option value="108" default></option>

                                                        <option value="109" default></option>
                                                        <option value="109">MultiPlus</option>
                                                        <option value="109">UltraGlide</option>
                                                        <option value="109">NanoGlide</option>
                                                        <option value="109">PolarGlide</option>
                                                        <option value="109">BlueGlide</option>
                                                        <option value="109">PureGlide</option>
                                                        <option value="109">UltraGlide BackSide</option>
                                                        <option value="109">Mirror/UltraBS</option>
                                                        <option value="109" disabled>--- Bojenje ---</option>
                                                        <option value="109">Unicolor</option>
                                                        <option value="109">Unicolor Hi index</option>
                                                        <option value="109">Color po uzorku</option>
                                                        <option value="109">Color po uzorku Hi index</option>
                                                        <option value="109">Gradient</option>
                                                        <option value="109">Gradient Hi index</option>
                                                        <option value="109" default></option>
                                                    </select>
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
    $('#label_zvjezdica1').hide();
    $('#label_zvjezdica2').hide();
    $('#select1').hide();
    var $select_lagspec = $('#select_lagspec'),
        $select2 = $('#select2'),
        $select3 = $('#select3'),
        $select4 = $('#select4'),
        $select12 = $('#select12'),
        $select15 = $('#select15'),
        $select16 = $('#select16'),
        $options1 = $select3.find('option');
    $options2 = $select4.find('option');
    $options3 = $select15.find('option');
    $options4 = $select16.find('option');


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

    $select4.on('change', function() {
        var id = $(this).children(":selected").attr("id");
        $select3.html($options1.filter('[value="' + id + '"]'));
    }).trigger('change');

    $select4.on('change', function() {
        var id = $(this).children(":selected").attr("id");
        $select15.html($options3.filter('[value="' + id + '"]'));
    }).trigger('change');

    $select4.on('change', function() {
        var id1 = $(this).children(":selected").attr("id");
        $select16.html($options4.filter('[value="' + id1 + '"]'));
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