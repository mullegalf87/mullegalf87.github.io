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

        <h6>9) Funzioni</h6>
        <label>
            <?php 
                //la funzione trasforma il secondo argomento da una stringa ad un numero, prendendo il primo numero
                function add_number(int $a, int $b){

                    return $a + $b;

                }

                echo add_number(5,"5 day")."<br>";
                //se la funzione chiamata non riporta il parametro (argomento), di default viene attribuito da quello riportato
                function minheight(int $minheight=50){

                    return $minheight;

                }

                echo minheight(350)."<br>";
                echo minheight()."<br>";
                echo minheight(150)."<br>";
                echo minheight(250)."<br>";

                //se alla fine della funzione prima del { riporto : int o float, ritornerà il valore intero o decimale, indipendentemente se gli argomenti passati dichiarati sono int o float
                function sum_number(int $a, float $b) : int{

                    $z=$a+$b;
                    return $z;

                }

                echo "5+6.3= ".sum_number(5,6.3)."<br>";
                echo "4+6.3= ".sum_number(4,6.2)."<br>";
                echo "8+6.1= ".sum_number(8,6.1)."<br>";

                //se metti prima del parametro la & lui riporterà lui ritornera il valore come variabile esterna
                function add_number_5(&$value){

                    return $value+=5;

                }

                $num=2;
                add_number_5($num);
                echo $num."<br>";

            ?>
        </label>

        <h6>10) Array/Object</h6>
        <label>
            <?php
                //semplice array
                $cars=array("volvo", "bmw", "mercedes");

                $qnt_cars=count($cars);

                echo "quante macchine? ".$qnt_cars."<br>";

                for($i=0; $i < $qnt_cars; $i++){

                    echo $cars[$i]."<br>";

                }

                //associated array (sembra un object)
                $ages=array("luca"=>32, "luigi"=>43, "marco"=>22);

                foreach($ages as $key=>$value){

                    echo "il nome è :".$key." e l'età è ".$value."<br>";

                }

                //multidimensional array, dentro un array c'è uno o più array
                $auto = array (
                    array("Volvo",22,18),
                    array("BMW",15,13),
                    array("Saab",5,2),
                    array("Land Rover",17,15)
                  );

                $qnt_array_auto=count($auto);

                for ($i=0; $i < $qnt_array_auto; $i++) { 

                    $qnt_auto=count($auto[$i]);

                    for ($y=0; $y < $qnt_auto; $y++) { 

                        echo $auto[$i][$y]."<br>";
 
                    }

                }  

                order();

                function order(){
                    //$cars=array("volvo", "bmw", "mercedes");
                    global $cars;

                    sort($cars); //- sort arrays in ascending order
                    // rsort($cars); //- sort arrays in descending order
                    // asort($cars); //- sort associative arrays in ascending order, according to the value
                    // ksort($cars); //- sort associative arrays in ascending order, according to the key
                    // arsort($cars); //- sort associative arrays in descending order, according to the value
                    // krsort($cars); //- sort associative arrays in descending order, according to the key

                    $qnt_cars=count($cars);

                    for ($i=0; $i < $qnt_cars; $i++) { 

                        echo $cars[$i]."<br>";

                    }

                }  
               
            ?>
        </label>

        <h6>11) Superglobals</h6>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        <input type="submit"><br>

        <a href="<?php echo $_SERVER['PHP_SELF'];?>?subject=PHP&web=W3schools.com">Test $GET</a>
        
        </form>
        <label>
            <?php
                //Superglobals sono variabili globali che puoi richiamare ovunque
                //$_SERVER per ricavare dati headers, paths, and script locations.
                echo $_SERVER['PHP_SELF']; //ritorna il file corrente del tuo url
                echo "<br>";
                echo $_SERVER['SERVER_NAME'];
                echo "<br>";
                echo $_SERVER['HTTP_HOST'];
                echo "<br>";
                echo $_SERVER['HTTP_REFERER'];
                echo "<br>";
                echo $_SERVER['REQUEST_METHOD']; //ritorna il tipo di metodo usato nel form (post/get)
                echo "<br>";
                echo $_SERVER['SCRIPT_NAME'];
                echo "<br>";

                //$_REQUEST per prendere dati da un form dopo il submit
               if ($_SERVER['REQUEST_METHOD']=="POST") {
                // $name=$_REQUEST[fname]; uguale a post
                $name=$_POST[fname];
                   if (empty($name)) {
                       echo "il nome è vuoto<br>";
                   }else{
                       echo $name."<br>";
                   }

               }

               //$_GET per ottenere dati da un url
               echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
            ?>
        </label>
               
        <h6>12) Regular expression (regex)</h6>
        <label>
            <?php
                $str = "Visit W3Schools and W3Schools";
                $pattern = "/w3schools/i";
                echo preg_match($pattern, $str)."<br>"; //ritorna 1 se il pattern cercato esiste nella stringa
                echo preg_match_all($pattern, $str)."<br>"; //ritorna il numero di volte che il pattern è stato trovato nella stringa
                echo preg_replace($pattern, "Ciao", $str)."<br>"; //sostituisce il pattern contenuto nella stringa con un'altra stringa
            ?>
        </label>

        <h6>13) Form</h6>
        
        <?php 
            $name="";
            $nameErr="";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (empty($_POST["name"])) {
                    $nameErr = "Name is required";
                }else{
                    $name = test_input($_POST["name"]);
                    //if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {} controlla se il nome possiede altro oltre gli spazi e le lettere
                    //if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {} controlla se la mail è valida
                    //if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {} controlla se il sito è corretto
                    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                        $nameErr = "Only letters and white space allowed";
                    }else{
                        echo $name;
                    }
                }
            
            }

            function test_input($data) {
                $data = trim($data); //rimuove gli spazi
                $data = stripslashes($data); //removes backslashes
                $data = htmlspecialchars($data); //Convert special characters to HTML entities
                return $data;
            }

        ?>

        <!-- per questioni di sicurezza quando metti lo script della stessa pagina in action metti il prefisso htmlspecialchars -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <input type="text" name="name" placeholder="name"/>
            <span class="error">* <?php echo $nameErr;?></span>
            <input class="btn btn-primary" type="submit" value="submit">
        </form>


        <h6>14) Date</h6>
        <label>
            <?php
                //d=giorno a numero
                //l=giorno a lettere
                //m=mese a numero
                //M=mese a lettere
                //Y=anno
                //h=ora
                //i=mese
                //s=secondi
                //a=am o pm
                date_default_timezone_set("Italy/Rome");
                echo "Today is " . date("d/m/Y-l h:i:s") . "<br>";
                //mktime attribuisce mktime(hour, minute, second, month, day, year)
                $mktime=mktime(11, 14, 54, 8, 12, 2014);
                echo "The date is " . date("d/m/Y-l h:i:s", $mktime) . "<br>";
                //strtotime converte una stringa ini inglese di una data in un formato data
                $strtotime=strtotime("22:30 15 April 2022");
                echo "Create date is " . date("d/m/Y-l h:i:sa", $strtotime) . "<br>";
                //esercizio sotto permette di scrollare ogni settimana per un massimo di 6 settimane con strtotime
                // Jun 11
                // Jun 18
                // Jun 25
                // Jul 02
                // Jul 09
                // Jul 16
                $strtotime_2=strtotime("saturday");

                $enddate=strtotime("6 weeks", $strtotime_2);

                while ($strtotime_2 < $enddate) {
                    
                    echo date("d-M",$strtotime_2)."<br>";

                    $strtotime_2=strtotime("+1 week",$strtotime_2);
                }
                //mostrare numero di giorni fino al 4 luglio
                $today=strtotime("today");
                $enddate_2=strtotime("4 july");

                $count=0;
                while ($today < $enddate_2) {
                    $count+=1;
                    $today=strtotime("+1 day",$today);
                }
                echo "dal 4 luglio ad oggi ci sono ".$count." giorni<br>";
            ?>
        </label>

        <h6>15) Include e Require</h6>
        <label>
            <?php 
                // Use require quando il file è richiesto dall'applicazione.
                //Use include quando il file non è richiesto dall'applicazione and l'applicazione dovrebbe continuare fino a quando il file non è trovato.

                //require
                include 'other_file/vars.php';
                echo "il colore è ".$color;

            ?>
        </label>

        <h6>16) Open/Read/Close/Create/Write</h6>
        <label>
            <?php 
                //FUNZIONI
                // fopen: apre il file
                // fread: legge il file
                // fclose chiude il file
                // fgets: legge una sola riga
                // feof: controlla se la fine del file è stata raggiunta con il loop
                // fgetc: legge un singolo carattere dal file
                // fwrite: sovrascrive sul file

                //PARAMETRI
                //r	apri un file per leggerlo solo
                //w apri un file per sovrascriverlo solo
                //a apri un file per scrivere in prosecuzione (append)
                //x crea un nuovo file per scriverlo solo
                //r+ apri un file per leggere e scrivere solo
                //x+ crea un nuovo file per leggere e scrivere solo

                //apro il file solo per leggerlo
                //$myfile = fopen("other_file/webdictionary.txt", "r") or die("Unable to open file!");
                //leggo il file
                // echo fread($myfile,filesize("other_file/webdictionary.txt"));
                //leggo una sola riga
                // echo fgets($myfile);
                //controllo se il file è arrivato alla fine
                // while(!feof($myfile)){
                // legge tutti i caratteri del file in loop
                //     echo fgetc($myfile);
                // }
                
                $myfile = fopen("other_file/webdictionary.txt", "a") or die("Unable to open file!");
                $txt = "John Doe = Ciccio\n";
                //sovrascrive sul file
                fwrite($myfile, $txt);
                $txt = "John Babbano = Toro\n";
                fwrite($myfile, $txt);

                fclose($myfile);
            
            ?>
        </label>
    </div>
    
</body>
</html>