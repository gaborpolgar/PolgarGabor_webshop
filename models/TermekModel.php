<?php 
require_once "models/_adatbazis.php";
class TermekModel extends Adatbazis {
    public function select_all()
    {
        $sql = "SELECT * FROM termek";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }


    public function insert($nev, $leiras, $ar)
    {
        $sql = "INSERT INTO pizzak(nev, leiras, ar) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssi", $nev, $leiras, $ar);
        $stmt->execute();
        return $stmt->insert_id;
    }

    public function update_kep($id, $kep)
    {
        $sql = "UPDATE termek
                SET kep = ?
                WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("si", $kep, $id);
        $stmt->execute();
    }
}