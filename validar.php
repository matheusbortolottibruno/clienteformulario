<?php
$email = $_POST['email'];
$senhaUsuario = $_POST['senha'];
 
include "conexao.php";
$sql = "select * from tb_clientes where email = '$email' and senha='$senhaUsuario'";
 
$resultado = mysqli_query($conexao, $sql);
 
if($resultado->num_rows > 0){
    header("Location:admin.php");
}else{
    header("Location:login.php");
}
 
?>