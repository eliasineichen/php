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
                // Definiert Globale Variable als lokale Variable.
                global $globaleVariable1, $globaleVariable2;

                // Greift direkt auf Globale Variable zu.
                $GLOBALS['globaleVariable3'] = $globaleVariable1 + $globaleVariable2;
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
            echo "My first PHP script!", 
            "<br><br>", 
            "Globale Variable: ",
            $globaleVariable3,
            "<br><br>",
            "Statische Variable: ",
            $index;


        ?>
    </body>
</html>