<?php
$servidor = "127.0.0.1:3366";
$usuario = "root";
$senha = "";
$banco = "hunt";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>