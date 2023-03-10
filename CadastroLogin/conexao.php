<?php

$servidorLocal = "127.0.0.1";
$usuarioDB = "root";
$senhaDB = "";
$database = "login";

$mysqli = new mysqli($servidorLocal, $usuarioDB, $senhaDB, $database);

if($mysqli->error){
    die("Sem conexo com o banco de dados" . $mysqli->error);
}

echo "<small><b>Status:</b> Conectado ao BD</small>";

?>