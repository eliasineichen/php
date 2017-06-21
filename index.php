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

            // Operators
            $z = "3";
            $x = 3;
            $y = 15;

            echo "<h1>Operators:</h1>";

            echo "<h3>Arithmetic Operators</h3>";

            echo "Plus (+): ", $x + $y, "<br>";
            echo "Minus (-): ", $y - $x, "<br>";
            echo "Mal (*): ", $x * $y, "<br>";
            echo "Geteilt (/): ", $y / $x, "<br>";
            echo "Modulo (%): ", $y % $x, "<br>";
            echo "Hoch (**): ", $x ** $y, "<br>";

            echo "<h3>Comparison Operators</h3>";

            echo "Equal (==): ", var_dump($x == $z), "<br>";
            echo "Identical (===): ", var_dump($x === $z), "<br>";
            echo "Not Equal (!=): ", var_dump($x != $z), "<br>";
            echo "Not Identical (!==): ", var_dump($x !== $z), "<br>";
            echo "Greater than (>): ", var_dump($x > $y), "<br>";
            echo "Less than (<): ", var_dump($x < $y), "<br>";
            echo "Greater than or equal to (>=): ", var_dump($x >= $y), "<br>";
            echo "Less than or equal to (<=): ", var_dump($x <= $y), "<br>";
            
            echo "<h3>Logical Operators</h3>";

            echo "And (&&): ", var_dump(true && false), "<br>";
            echo "Or (||): ", var_dump(true || false), "<br>";
            echo "Not (!): ", var_dump(!true), "<br>";

            // Conditional Statements
            $true = true;
            $false = false;


            echo "<h1>Conditional Statements:</h1>";

            echo "<h3>If</h3>";

            if ($true) { 
                echo "If (x == true) {<br>
                    <i>Wird ausgeführt wenn Bedingung true ist.</i><br>
                }";
            }
            
            echo "<h3>Else</h3>";

            if ($false) { 
            } else {
                echo "If (x == true) {<br>
                } else {<br>
                    <i>Wird ausgeführt wenn Bedingung false ist.</i><br>
                }";
            }

            echo "<h3>Elseif</h3>";

            if ($false) { 
            } elseif ($true) {
                echo "If (x == true) {<br>
                } elseif (y == true) {<br>
                    <i>Wird ausgeführt wenn erste Bedingung false und zweite Bedingung true ist.</i><br>
                }";
            }

            echo "<h3>Switch</h3>";

            echo "switch (farbe) {                                                              <br>
                case 'rot':             // if(farbe == rot)                                     <br>
                    break;                                                                      <br>
                case 'gruen':           // if(farbe == gruen)                                   <br>                 
                    break;                                                                      <br>
                case 'blau':            // if(farbe == blau)                                    <br>
                    break;                                                                      <br>
                default:                // if(farbe != rot && farbe != gruen && farbe != blau)  <br>
                    brek;                                                                       <br>
            }<br><br>";

            echo "Ergebniss: <br>";
            
            $farbe = "rot";

            switch ($farbe) {
                case "rot":
                    echo "Farbe: Rot";
                    break;
                case "gruen":
                    echo "Farbe: Grün";
                    break;
                case "blau":
                    echo "Farbe: Blau";
                    break;
                default:
                    echo "Die Standardfarbe ist Schwarz/Weiss.";
            }
        ?>
    </body>
</html>