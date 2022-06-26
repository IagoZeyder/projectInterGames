<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "interJogos";

$mysqli = new mysqli($host, $user, $pass, $database);

/* Checar conexão */
if ($mysqli -> connect_error) {
    echo "Falha na conexão do banco de dados. " . $mysqli -> connect_error;
    exit();
}

?>