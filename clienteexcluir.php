<?php 
$idexcluir = $_GET['idexcluir'];


include "conexao.php";

$sql = "delete from bd_cliente where id=$idexcluir";
$resultado = mysqli_query($conexao, $sql);
mysqli_close($conexao);
header("location:Clientelistar.php");



?>