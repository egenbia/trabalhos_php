<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juros Simples</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
    <form method="post" action="juros_simples.php">
        <label for="principal">Digite o valor principal: </label>
        <input type="text" name="principal"><br>

        <label for="taxa">Digite a taxa de juros: </label>
        <input type="text" name="taxa"><br>

        <label for="tempo">Digite o tempo em anos: </label>
        <input type="text" name="tempo"><br>

        <input type="submit" name="calcular" value="Calcular">
    </form>
</body>
</html>