<html>
    <head>        
        <meta charset="UTF-8">
        <?php
            $preference = $_POST['preference'];
            setcookie("preference", $preference, time()+3600);
        ?>
    </head>
    <body>
        bien ajouté!
        <br>
        <a href="index.php">Cliquez ICI !</a>

    </body>
</html>


