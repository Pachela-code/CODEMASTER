<?php
// responsavel pela importação 

$base_dados = [
    "host" => "localhost",
    "usuario" => "root",
    "senha" => "",
    "nome" => "empresa"
];


$conexao = mysqli_connect($base_dados["host"], $base_dados["usuario"], $base_dados["senha"], $base_dados["nome"]);

$consulta = mysqli_query($conexao, "SELECT * FROM produtos");

$resultado = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Preco</th>
            <th>Quantidade</th>

        </tr>
        <?php foreach ($resultado as $i) { ?>
            <tr>
                <td><?php echo $i["id"]; ?></td>
                <td><?php echo $i["nome"]; ?></td>
                <td><?php echo $i["preco"]; ?></td>
                <td><?php echo $i["quantidade"]; ?></td>

            </tr>
        <?php } ?>
    </table>.

</body>

</html>