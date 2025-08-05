<?php
#clientealterar.php


$id = $_POST['id'] ?? null;
$nome = $_POST['nome'] ?? null;
$email = $_POST['email'] ?? null;

include "conexao.php";
$sql = "update bd_clientes set nome = '$nome', email= '$email' where id = $id";
$resultado  = mysqli_query($conexao, $sql);

mysqli_close($conexao);


header("Location:clientelista.php");

?>