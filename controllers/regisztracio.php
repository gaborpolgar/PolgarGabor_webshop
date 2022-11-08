<?php 
if (isset($_SESSION['felhasznalo'])) {
    header("Location: /");
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {   
    require_once "models/FelhasznaloModel.php";
    $felh_model = new FelhasznaloModel();
    $felhasznalonev = $_POST['felhasznalonev'];
    $email = $_POST['email'];
    $jelszo = $_POST['jelszo'];
    $teljes_nev = $_POST['teljes_nev'];
    $szuletesi_datum = $_POST['szuletesi_datum'];
    $iranyito_szam = $_POST['iranyito_szam'];
    $varos = $_POST['varos'];
    $cim = $_POST['cim'];
    $regisztracio_idpontja = $_POST[''];
    
    $felh_model->regisztracio($felhasznalonev, $email, $jelszo, $teljes_nev, $szuletesi_datum, $iranyito_szam, $varos, $cim, $regisztracio_idopontja);
}

include "views/registration_form.php";