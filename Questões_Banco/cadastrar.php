<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p> <h1> Insira os dados de cadastro </h1> </p> 

    <form action="valida_cadastro.php" method="POST">
        <label for="id">id:</label>
        <input type="text" name="id" require/>
        <br>
        <br>
        <label for="marca">marca:</label>
        <input type="text" name="marca" require/>
        <br>
        <br>
        <label for="modelo">modelo:</label>
        <input type="text" name="modelo" require/>
        <br>
        <br>
        <input type="submit" value="enviar"/>
    </form>

</body>
</html>