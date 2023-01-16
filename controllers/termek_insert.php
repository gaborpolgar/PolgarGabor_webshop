<?php 
if (!isset($_SESSION['felhasznalo'])) {
    http_response_code(403);
    include "views/_403.html";
    die();
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    var_dump($_FILES);
    $nev = isset($_POST['nev']) ? $_POST['nev'] : "";
    $leiras = isset($_POST['leiras']) ? $_POST['leiras'] : "";
    $ar = isset($_POST['ar']) ? $_POST['ar'] : "";
    $kep = isset($_FILES['kep']) ? $_FILES['kep'] : [];
    $hiba = "";
    if (empty($nev)) {
        $hiba .= "Név megadása kötelező. ";
    }
    if (empty($ar)) {
        $hiba .= "Ár megadása kötelező. ";
    }
    if ($hiba != "") {
        $hiba = trim($hiba);
        include "views/hiba_alert.php";
    } else {
        require_once "models/TermekModel.php";
        $termek_model = new TermekModel();
        try {
            $termek_id = $termek_model->insert($nev, $leiras, $ar);
            $kiterjesztes = pathinfo($kep['name'], PATHINFO_EXTENSION);
            $kep_nev = $termek_id . '.' . $kiterjesztes;
            
            copy($kep['tmp_name'], './uploads/'.$kep_nev);
            $termek_model->update_kep($termek_id, $kep_nev);
        } catch (\mysqli_sql_exception $th) {
            $hiba = $th->getMessage();
            include "views/hiba_alert.php";
        }
    }
}

require_once "models/TermekModel.php";
$termek_model = new TermekModel();

$termekek = $termek_model->select_all();

include 'views/termek_insert.php';