<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>

    <h2>Entrada</h2>

    <form action="saida.php">

        <label for="produto">Produto: </label>
        <input type="text" name="produto" required="required">

        <br><br>

        <label for="preco">Preço: </label>
        <input type="number" name="preco" min="0" step="0.01" required="required">

        <br><br>

        <input type="submit" value="Registar">

    </form>

</body>
</html>