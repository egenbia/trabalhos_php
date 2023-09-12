<?php

$varUN = $_POST["universo"];
$varHR = $_POST["hr"];
$varQTD = $_POST["qtd"];

 
if($varUN == "DC")
{
    if($varHR == "superman")
    {
        for($x = 0; $x < $varQTD; $x++)
        {
            echo "<img src='imgs/superman.png' width='100px'>";
        }
    }
    else if($varHR == "batman")
    {
        for($x = 0; $x < $varQTD; $x++)
        {
            echo "<img src='imgs/batman.png' width='100px'>";
        }
    }

    else if($varHR == "flash")
    {
        for($x = 0; $x < $varQTD; $x++)
        {
            echo "<img src='imgs/flash.png' width='100px'>";                
        }
    }

    else if($varHR == "aquaman")
    {
        for($x = 0; $x < $varQTD; $x++)
        {
            echo "<img src='imgs/aquaman.png' width='100px'>";
        }
    }

    else if($varHR == "shazam")
    {
        for($x = 0; $x < $varQTD; $x++)
        {
            echo "<img src='imgs/shazam.png' width='100px'>";
        }
    }

    else
    {
        echo "Herói Invalido!";
    }
}

else if($varUN == "Marvel")
{
    if($varHR == "spiderman")
    {
        for($x = 0; $x < $varQTD; $x++)
        {
            echo "<img src='imgs/spiderman.png' width='100px'>";
        }        
    }

    else if($varHR == "ironman")
    {
        for($x = 0; $x < $varQTD; $x++)
        {
            echo "<img src='imgs/ironman.png' width='100px'>";
        }
    }

    else if($varHR == "thor")
    {
        for($x = 0; $x < $varQTD; $x++)
        {
            echo "<img src='imgs/thor.png' width='100px'>";
        }
    }

    else if($varHR == "mercurio")
    {
        for($x = 0; $x < $varQTD; $x++)
        {
            echo "<img src='imgs/mercurio.png' width='100px'>";
        }
    }

    else if($varHR == "groot")
    {
        for($x = 0; $x < $varQTD; $x++)
        {
            echo "<img src='imgs/groot.png' width='100px'>";
        }
    }

    else
    {
        echo "Herói Invalido!";
    }
}
?>