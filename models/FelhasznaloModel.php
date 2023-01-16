<?php 
require_once "models/_adatbazis.php";
class FelhasznaloModel extends Adatbazis {
    public function regisztracio($felhasznalo_nev, $email, $jelszo, $teljes_nev, $szuletesi_datum, $iranyito_szam, $varos, $cim)
    {
        $sql = "INSERT INTO felhasznalok(felhasznalo_nev, email, password, teljes_nev, szuletesi_datum, iranyito_szam, varos, cim, regisztracio_idopontja)
        VALUES (?,?,?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $hash = password_hash($jelszo, PASSWORD_DEFAULT);
        $stmt->bind_param("sss", $felhasznalo_nev, $email, $hash);
        $stmt->execute();
    }

    public function bejelentkezes($felhasznalo_nev, $jelszo)
    {
        $sql = "SELECT * FROM felhasznalok
            WHERE felhasznalo_nev = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $felhasznalo_nev);
        $stmt->execute();
        $result = $stmt->get_result();

        $felhasznalo = false;

        if ($result->num_rows == 1) {
            $sor = $result->fetch_assoc();
            if (password_verify($jelszo, $sor['password'])) {
               $felhasznalo = $sor;
            }
        }
        
        return $felhasznalo;
    }
}