<!DOCTYPE html>

<html>
    <head>

        <title>PHP</title>
    
    </head>
    <body>

        <?php
            // GLOBALS
            $globaleVariable1 = 1;
            $globaleVariable2 = 2;

            function calc() {
                $lokal = "Hallo, ich bin eine lokale Variable! ;)";
                // Definiert Globale Variable als lokale Variable.
                global $globaleVariable1, $globaleVariable2;

                // Greift direkt auf Globale Variable zu.
                $GLOBALS['globaleVariable3'] = $globaleVariable1 + $globaleVariable2;

                echo $lokal;
            }

            function increment() {
                static $index = 0;
                $index++;
                $GLOBALS['index'] = $index;
            }

            calc();
            
            increment();
            increment();            
            increment();

            //Gibt Text aus
            echo
                "<br><br>", 
                "Globale Variable: ",
                $globaleVariable3,
                "<br><br>",
                "Statische Variable: ",
                $index;

            // Echo
            echo "<h1>ECHOS:</h1>";
            echo "Hallo, ich bin <b>FETT</b>.";
            echo "<br>";
            echo "Dieser", " ", "String", " ", "wurde", " ", "zusammengesetzt!";
            echo ("<br>");
            echo ("Dies ist ein Echo in Klammern...");
            echo ("<br>");

            $name = "Ineichen";
            $vorname = "Elias";
            $eins = 1;
            $vier = 4;

            echo "Hallo, ich bin $vorname $name";
            echo "<br>";
            echo $eins, $vier;
            echo "<br>";
            echo $eins + $vier;
            
            // PRINT
            print "<h1>PRINTS:</h1>";
            print "Einfacher Print...";
            print ("Print in Klammern");
        ?>
    </body>
</html>