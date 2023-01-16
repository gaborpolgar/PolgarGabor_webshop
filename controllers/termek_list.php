<?php 

require_once "models/TermekModel.php";

$pizza_model = new TermekModel();

$termekek = $termek_model->select_all();
include "views/termek_list.php";