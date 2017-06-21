<!DOCTYPE html>

<html lang="de">
    <head>

        <meta charset="utf-8">
        <title>PHP</title>
    
    </head>
    <body>

        <?php
            // Variablen
            echo "<h1>Variablen:</h1>";

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
            print "<br>";
            print ("Print in Klammern");

            // Datentypen
            print ("<h1>Datentypen</h1>");

            $string = "Ich bin ein String";
            $int = -5275;
            $float = 2345.34534;
            $boolean = true;
            $array = array("Audi", "BMW", "Mercedes", "Ford", "Chevrolet");
            $null = NULL;

            // Klasee
            class Car {

                // Konstruktor
                function Car() {
                    $this->Marke = "VW";
                    $this->Model = "Golf";
                }
            }

            // Create Object
            $object = new Car();

            echo "String: ", var_dump($string), "<br>";
            echo "Int: ", var_dump($int), "<br>";
            echo "Float: ", var_dump($float), "<br>";
            echo "Boolean: ", var_dump($boolean), "<br>";
            echo "Array: ", var_dump($array), "<br>";
            echo "Object: ", var_dump($object), "<br>";
            echo "Null: ", var_dump($null), "<br>";

            // String-Functions
            echo "<h1>String-Funktioinen:</h1>";
            $simpleString = "Hello world!";

            // Länge des Strings
            echo "Länge des Strings: ";
            echo strlen($simpleString);
            echo "<br>";

            // Anzahl Wörter
            echo "Anzahl Wörter: ";
            echo str_word_count($simpleString);
            echo "<br>";

            // String umkehren
            echo "String umgekehrt: ";
            echo strrev($simpleString);
            echo "<br>";

            // String Position
            echo "Position von 'world': ";
            echo strpos($simpleString, "world");
            echo "<br>";

            // String ersetzen
            echo "Ersetst das Wort 'world': ";
            echo str_replace("world", "Dolly", $simpleString);
            echo "<br>";

            // Constants
            echo "<h1>Constants:</h1>";
            define("konstante", "Hallo Ich bin eine Konstante!");
            echo konstante;
            echo "<br><br>";

            function irgendetwas () {
                echo "Konstanten sind global. Jetzt wird sie innerhalb einer Funktino ausgegeben: ";
                echo "<br>";
                echo konstante;
            }

            irgendetwas();

            // Operations
            $x = 3;
            $y = 15;

            echo "<h1>Operations:</h1>";

            echo "Plus (+): ", $x + $y, "<br>";
            echo "Minus (-): ", $y - $x, "<br>";
            echo "Mal (*): ", $x * $y, "<br>";
            echo "Geteilt (/): ", $y / $x, "<br>";
            echo "Modulo (%): ", $y % $x, "<br>";
            echo "Hoch (**): ", $x ** $y, "<br>";
        ?>
    </body>
</html>