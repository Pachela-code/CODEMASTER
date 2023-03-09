<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada</title>
</head>
<body style="text-align: center;">

    <form action="saida.php">

        <input type="text" name="nome" placeholder="Nome*" required="required">
        <br><br>
        <textarea name="sobre" placeholder="Sobre*" cols="60" rows="10" required="required"></textarea>
        <br><br>
        <input type="number" name="perfis_anteriores" min="0" placeholder="Perfis Anteriores*" required="required">
        <br><br>
        <input type="number" name="perfis_posteriores" min="0" placeholder="Perfis Posteriores*" required="required">
        <br><br>
        <input type="text" name="imagem" placeholder="Imagem">
        <br><br>
        <input type="submit" value="Enviar">

    </form>

</body>
</html>