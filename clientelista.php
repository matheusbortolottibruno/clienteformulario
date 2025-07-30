<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Cliente</title>
</head>
<body>

<table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
   
        <?php
        include 'conexao.php';

        $sql = "select *from bd_cliente";
        $resultado = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_assoc($resultado)){
            echo "<tr>";
            echo "<td>{$linha['id']} </td>";
            echo "<td>{$linha['nome']} </td>";
            echo "<td>{$linha['email']} </td>";
            echo "<td>";
            echo "<a href='ClienteExcluir.php?indexcluir={$linha['id']}'>Excluir 🧹</a>"; 
          echo "</tb>";
            echo "</tr>";
        }

        mysqli_close($conexao);
        ?>
   
</table>
    
</body>
</html>