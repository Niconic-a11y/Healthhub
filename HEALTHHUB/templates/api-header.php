<?php
include_once("../config/database.php");
include_once("../config/Models.php");
$_POST = json_decode(file_get_contents('php://input'), true);
?>
