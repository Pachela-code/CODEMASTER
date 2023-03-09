<?php

require_once("funcoes.php");

$lista_nomes = ["Pão", "Bolo", "Torta", "Pastel de Nata", "Uvas"];
$lista_precos = [0.33, 5.79, 9.99, 1.50, 3.99];
$posicao_mais_caro;
$media;

$form = isset($_GET["produto"]) && isset($_GET["preco"]);

if($form){
    $lista_nomes[] = $_GET["produto"];
    $lista_precos[] = floatval($_GET["preco"]);

    $posicao_mais_caro = burcarMaisCaro($lista_precos);
    $media = mediaDosPrecos($lista_precos);

}
else{
    echo "Preencha o formulário da página anterior.";
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste - Saída</title>

    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <h2>Saída</h2>

    <table>
        <tr>
            <th>Posição</th>
            <th>Nome</th>
            <th>Preço</th>
        </tr>
        <?php for($i=0; $i<count($lista_nomes); $i++): ?>

            <tr>
                <td><?= ($i+1); ?></td>
                <td><?= $lista_nomes[$i]; ?></td>
                <td><?= number_format($lista_precos[$i], 2); ?> €</td>
            </tr>

        <?php endfor; ?>
    </table>

    <br><br>

    <h3>
        Produto mais caro: (<?= $lista_nomes[$posicao_mais_caro]; ?>) [<?= number_format( $lista_precos[$posicao_mais_caro],2) ?> €]
    </h3>

    <h3>
        Média geral dos preços: [<?= number_format($media, 2) ?> €]
    </h3>
    
</body>
</html>