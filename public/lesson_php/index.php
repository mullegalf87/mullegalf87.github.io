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

        <h6>1) Variabili globali e locali e costanti</h6> 
            <label>
                <?php

                    $x=5; //global scope - fuori dalle funzioni, al termine della funzione verrà cancellata;
                    define("ciao","Welcome to W3Schools.com"); //global scope come costante
                    define("cars",["bmc", "merceds", "lorens"]); //global scope come costante array
                    myTest();

                    function myTest(){

                        $y=6;//local scope - dentro le funzioni, al termine della funzione verrà cancellata;
                        global $x; //global scope - richiami la variabile globale oppure con $GLOBALS['x']
                        $x=$x+$y;
                        echo ciao." costante dentro una funzione <br>";  //costante string

                    }

                    
                    echo cars[0]." costante dentro una funzione <br>"; //costante array
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

                echo "minimo tra i numeri: <br>";
                echo min(0, 150, 30, 20, -8, -200);  // returns -200
                echo "<br>";

                echo "massimo tra i numeri: <br>";
                echo max(0, 150, 30, 20, -8, -200);  // returns 150
                echo "<br>";

                echo "ritorna il numero assoluto positivo di un numero: <br>";
                echo abs(-6.7);
                echo "<br>";

                echo "ritorna la radice quadrata di un numero: <br>";
                echo sqrt(64);
                echo "<br>";

                echo "ritorna l'arrotondamento di un numero: <br>";
                echo round(0.60);
                echo "<br>";

                echo "ritorna un numero randomico: <br>";
                echo rand(1, 5);//inserisci da quale numero a quale deve estrarre il numero randomico
                echo "<br>";

            ?>
        </label>

        <h6>7) Loop</h6>
        <label>
            <?php

                $x = 0;

                while($x <= 100) {
                    echo "The number is: $x <br>";
                    $x+=10;
                }
                
                //si può anche scrivere
                // do{
                //     echo "The number is: $x <br>";
                //     $x+=10;
                // }while($x <= 100);

                //si può anche scrivere
                // for ($x=0; $x <=100 ; $x+=10) { 
                //     echo "The number is: $x <br>";
                // }

                $colors_array = array("red", "green", "blue", "yellow");
                $age_object = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

                foreach ($colors_array as $key) {
                    echo "The color is: $key <br>";
                }

                foreach ($age_object as $key=>$value) {
                    echo "The person is: $key and age: $value <br>";
                }
                
            ?>
        </label>

        <h6>8) Break/continue</h6>
        <label>
            <?php

                for ($i=0; $i < 10 ; $i++) { 
                    if ($i==4) {
                        break; //l'iterazione si ferma al 4, come il do while
                        //continue;//l'iterazione arriva al 4 e lo salta ma continua fino a concludere il ciclo for
                    }

                    echo "ciclo $i <br>";
                }
                
               
            ?>
        </label>

    </div>
    
</body>
</html>