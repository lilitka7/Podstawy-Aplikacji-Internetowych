<?php session_start(); 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
        <meta charset='UTF-8' />
    </head>
    <body>

        <?php
                if (isset($_GET["Czas"])) {
					if($_GET["Czas"] == ""){header("Location: index.php");}
                    setcookie("Czas", $_GET["Czas"], time() + $_GET["Czas"], "/");
                }
				echo "Ciasteczko zapisane <br>";
                
        ?>

        <a href="index.php">Wstecz</a>

    </body>
</html>