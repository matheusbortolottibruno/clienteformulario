<?php
$nome = $_POST['nome'];
$email = $_POST['email'];


$sql = "insert into bd_clientes(nome,email) values ('$nome', '$email')";


include 'conexao.php';

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);


header('location:clientelista.php');


?>