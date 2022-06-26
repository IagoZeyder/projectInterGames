
<?php
/* Conecta com o banco */

$hostname = "localhost";
$database ="interJogos";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $database);

if($mysqli -> error){
die("Falha ao conectar ao bancado de dados: ".$mysqli->error);
}
?>