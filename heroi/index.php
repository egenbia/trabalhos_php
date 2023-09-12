<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


    <form action="resultado.php" method="post">
        DC: <input type="radio" name="universo" value="DC" ><br>
        Marvel: <input type="radio" name="universo" value="Marvel" ><br>
        Digite quantas vezes você quer que a imagem se repita: <br>
        <textarea name="qtd"></textarea><br>
        Heróis: <select name="hr">
                    <option>spiderman</option>
                    <option>ironman</option>
                    <option>thor</option>
                    <option>mercurio</option>
                    <option>groot</option>
                    <option>superman</option>
                    <option>batman</option>
                    <option>flash</option>
                    <option>aquaman</option>
                    <option>shazam</option>
                </select><br>
        <input type="submit">
    </form>
 

</body>
</html>