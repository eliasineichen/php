<!DOCTYPE html>

<html lang="de">
    <head>

        <meta charset="utf-8">
        <title>FORMS</title>
        <style>
            .red {
                color: red;
            }
        </style>
    </head>
    <body>
        <h1>Einfaches Formular (POST)</h1>
        <form action="forms/simpleForm.php" method="post">
            Name: <input type="text" name="name"><br>
            E-Mail: <input type="text" name="email"><br>
            <button type="submit">SENDEN</button>
        </form>

        <h1>Form Validation</h1>
        <p class="red">* Pflichtfelder</p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            Anrede<span class="red">*</span>: <br>
            <input type="radio" name="gender" value="male" required> Herr <br>
            <input type="radio" name="gender" value="female" required> Frau <br>
            Name<span class="red">*</span>: <input type="text" name="name" required><br>
            E-Mail<span class="red">*</span>: <input type="email" name="email" required><br>
            Website: <input type="url" name="website"><br>
            Kommentar: <textarea type="text" name="comment"></textarea><br>
            <input type="submit" value="Speichern">
        </form>

        <?php
            $gender = $_POST['gender'];
            $name   = $_POST['name'];
            $email  = $_POST['email'];
            $website= $_POST['website'];
            $comment= $_POST['comment'];

            echo '<h3>Ausgabe:</h3>';
            echo '<b>Geschlecht: </b>' . $gender . '<br>';
            echo '<b>Name: </b>'. $name . '<br>';
            echo '<b>Email: </b>' . $email . '<br>';
            echo '<b>Website: </b>' . $website . '<br>';
            echo '<b>Kommentar: </b>' . $comment . '<br>';
        ?>
    </body>
</html>