<?php
#formulario de alterar
$id = $_GET['idalterar'];
$nome = "matheus";
$email = "matheus@gmail.com";
 
include 'conexao.php';
$sql = "select * from bd_clientes where id = $id";
$resultado = mysqli_query($conexao, $sql);
 
while ($linha = mysqli_fetch_assoc($resultado)){
    $nome = $linha['nome'];
    $email = $linha['email'];
}
?>
 
<form method="post" action="clientealterar.php">
    <input type="hidden" name="id" value="<?= $id ?>">
    Nome:<input type="text" name="nome" value="<?= $nome ?>"><br>
    E-mail:<input type="email" name="email" value="<?= $email ?>"><br>
    <button type="submit">Salvar Alterações</button>
</form>