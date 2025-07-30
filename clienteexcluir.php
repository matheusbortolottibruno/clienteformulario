<?php 
$indexcluir = $_GET['indexcluir'];


include "conexao.php";

$sql = "delete from tb_cliente where id=$indexcluir";
$resultado = mysqli_query($conexao, $sql);
mysqli_close($conexao);
header("location:Clientelistar.php");



?>