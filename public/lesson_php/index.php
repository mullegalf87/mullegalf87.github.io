<!DOCTYPE html>
<html>
    <head>
        <!-- dataresponsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- jquery 3.5 jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- bootstrap 4.5 bootstrap-->
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <style>
        h6{
            font-weight: bold;
        }
    </style>
<body>
    <div class="p-3">

        <h6>1) Variabili globali e locali</h6> 
            <label>
                <?php

                    $x=5; //global scope - fuori dalle funzioni, al termine della funzione verrà cancellata;

                    myTest();

                    function myTest(){

                        $y=6;//local scope - dentro le funzioni, al termine della funzione verrà cancellata;
                        global $x; //global scope - richiami la variabile globale oppure con $GLOBALS['x']
                        $x=$x+$y;

                    }

                    echo "totale tra una variabile globale e locale: <br>";
                    echo $x;
                    echo "<br>";

                ?>
            </label>

        <h6>2) Variabili statiche</h6>
        <label>
            <?php

                myTest2();
                myTest2();
                myTest2();

                function myTest2(){

                    static $x=0;//static scope - dentro le funzioni, al termine della funzione continuerà ad esistere

                    echo "mostra iterazione di una variabile statica: <br>";
                    echo $x;
                    echo "<br>";

                    $x++;

                }

            ?>
        </label>

        <h6>3) Funzione var_dump()</h6>
        <label>
            <?php

                myTest3();

                function myTest3(){

                    $x=12312.123;
                    echo "indica il tipo di dato: <br>";
                    echo var_dump($x);
                    echo "<br>";

                }

            ?>
        </label>

        <h6>4) Manipolazione delle stringhe</h6>
        <label>
            <?php

                $string="ciao dario come stai?";

                echo "conta le lettere: <br>";
                echo strlen($string);
                echo "<br>";

                echo "conta le parole: <br>";
                echo str_word_count($string);
                echo "<br>";

                echo "mostra il contrario della frase: <br>";
                echo strrev($string);
                echo "<br>";

                echo "sostituisce una parola con un'altra: <br>";
                echo str_replace("dario","luigi",$string);
                echo "<br>";


            ?>
        </label>

        <h6>5) PHP Numbers</h6>
        <label>
            <?php

                $x="23"; //questo è considerato come una stringa numerica e può essere calcolata
                $y=23;   //questo è un numero

                echo "controlla se è un intero: <br>";
                echo var_dump(is_int($x));
                echo "<br>";

                echo "controlla se è un float: <br>";
                echo var_dump(is_float($x));
                echo "<br>";

                echo "controlla se è finito: <br>";
                echo var_dump(is_finite($x));
                echo "<br>";

                echo "controlla se è infinito: <br>";
                echo var_dump(is_infinite($x));
                echo "<br>";

                echo "controlla se è nan: <br>";
                echo var_dump(is_nan($x));
                echo "<br>";

                echo "castare, convertire una stringa in un intero: <br>";
                echo $cast_string_to_int=(int)$x;
                echo "<br>";

            ?>
        </label>

        <h6>6) Funzioni matematiche</h6>
        <label>
            <?php

                echo "ricava il p-greco: <br>";
                echo pi();
                echo "<br>";

                echo "minimo tra i numeri";
                echo(min(0, 150, 30, 20, -8, -200));  // returns -200

                echo "massimo tra i numeri";
                echo(max(0, 150, 30, 20, -8, -200));  // returns 150


            ?>
        </label>

    </div>
    
</body>
</html>