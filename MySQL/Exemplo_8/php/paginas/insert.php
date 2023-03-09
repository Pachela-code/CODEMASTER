<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>

    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- CSS LOCAL -->
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once(".//MySQL/Exemplo_8/php/funcoes/base_dados.php");
            $result = selectSQL("SELECT * FROM produtos");
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nome'] . "</td>";
                echo "<td>" . $row['preco'] . "</td>";
                echo "<td>" . $row['quantidade'] . "</td>";
                echo "<td>";
                echo "<a href='update.php?id=" . $row['id'] . "'>Editar</a>";
                echo "<a href='delete.php?id=" . $row['id'] . "'>Excluir</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>