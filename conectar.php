
<?php

/* Dados do Banco de Dados a conectar */
$Servidor = 'localhost';
$nomeBanco = 'banco';
$Usuario = 'root';
$Senha = 'eduardo';
$strcon = mysqli_connect($Servidor, $Usuario, $Senha, $nomeBanco); 
?>

<?php
$usuario = 'root';
$senha = 'eduardo';
$database = 'banco';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
?>