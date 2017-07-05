<!DOCTYPE html>

<html lang="de">
    <head>

        <meta charset="utf-8">
        <title>FORMS</title>
    
    </head>
    <body>
            <b>Willkommen  <?php echo $_POST['name']?> </b>
            <br>
            <p>Deine E-Mail-Adresse lautet: <?php echo $_POST['email']?></p>
            <br>
            <a href="javascript:window.history.back();">Zurück</a>

    </body>
</html>