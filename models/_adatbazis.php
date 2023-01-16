<?php 
class Adatbazis {
    protected $conn;
    
    public function __construct()
    {
        $this->conn = new mysqli("localhost", "root", "", "polgar_gabor_webshop");
    }
}