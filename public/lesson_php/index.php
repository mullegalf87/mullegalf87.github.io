<?php
    //SETTARE I COOKIE
    $cookie_name = "user";
    $cookie_value = "John Doe";
    //passare alla funzione nome, valore e data di estinsione del cookie
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    //per eliminare il cookie
    //setcookie("user", "", time() - 3600);

    //SETTARE UNA SESSIONE
    session_start();
?>
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
                // Use require_once, php controllerà che il file già esiste e se è così non lo include nuovamente
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

        <h6>17) Upload file</h6>
        <label>

            <form action="/lesson_php/other_file/upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
            </form>
            
        </label>

        <h6>18) Cookies</h6>
        <label>
                    
            <?php
                // un cookied viene usato per identificare un utente, e si setta prima dell'html tag
                //1) controllare se il cookie è stato settato/modificato prima dell'html tag con il setcookie()
                if (!isset($_COOKIE[$cookie_name])) {
                    echo "il cookie ".$cookie_name." non è settato<br>";
                }else{
                    echo "il cookie name ".$cookie_name." è settato<br>";
                    echo "il valore del cookie ".$_COOKIE[$cookie_name]." è settato<br>";
                    
                }

            ?>
            
        </label>

        <h6>19) Session</h6>
        <label>
                    
            <?php
                //session_start() creates a session or resumes the current one based on a session identifier passed via a GET or POST request, or passed via a cookie.
                //il session_start() si mette nella prima pagina che dichiara le variabili $_SESSION e anche nelle altre pagine dove le variabili $_SESSION verranno richiamate.
                // una sessione viene usata per memorizzare informazioni in variabili(come se fosse una super variabile globale) e passarli tra le pagine e si setta prima dell'html tag
                //per attribuire un valore ad una variabile session
                $_SESSION["favcolor"]="red";
                $_SESSION["favanimal"]="rabbit";
                echo $_SESSION["favcolor"]."<br>";
                foreach($_SESSION as $key=>$value){
                    echo($key." => ".$value."<br>");
                }
                //per modificare basta sovrascrivere sulla variabile precedente
                $_SESSION["favcolor"]="blue";
                echo $_SESSION["favcolor"]."<br>";

                // rimuove una sola session
                session_unset();

                // distrugge tutte le sessioni
                session_destroy();
            ?>
            
        </label>

        <h6>20) Filter</h6>
        <label>
            <?php
            // i filtri con filter_var() servono a:
            //validating data: a determinare se il dato è nella forma corretta;
            //sanitizing data: a rimuovere ogni carattere illegale secondo forma nel dato;
            //VALIDATING
            //-FILTER_VALIDATE_INT;
            //-FILTER_VALIDATE_IP;
            //-FILTER_VALIDATE_EMAIL;
            //-FILTER_VALIDATE_URL;
            //-FILTER_FLAG_IPV6; => controlla se è un ipv6
            //-FILTER_FLAG_QUERY_REQUIRED; => controlla se è un url con query
            //-FILTER_FLAG_STRIP_HIGH; =>rimuove tutti i caratteri con valore ascii > 127
            //SANITAZING
            //-FILTER_SANITIZE_EMAIL;
            //-FILTER_SANITIZE_URL;

            $email="test@ciao..it";
            //rimuove i caratteri strani
            $email=filter_var($email, FILTER_SANITIZE_EMAIL);
            //controlla se la mail è corretta
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)===false) {
                echo("Email is valid<br>");
            } else {
                echo("Email is not valid<br>");
            }
            
            $int = 3000;
            $min = 100;
            $max = 200;

            if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
                echo("Variable value is not within the legal range<br>");
            } else {
                echo("Variable value is within the legal range<br>");
            }

            $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

            if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
            echo("$ip is a valid IPv6 address<br>");
            } else {
            echo("$ip is not a valid IPv6 address<br>");
            }
            ?>

        <h6>21) Callback function</h6>
        <label>
                    
            <?php
                // è una funzione che è passata come argomento in un'altra funzione
                //ritorna quantità di elementi in un array con map_array()
                function my_callback($item){

                    return strlen($item);

                }

                $array=["test_1", "test_2", "test_3"];
                $call=array_map("my_callback",$array);
                print_r($call."<br>");

                function test_1($string){

                    return $string;

                }

                function test_2($string){

                    return $string;

                }

                function test_3($text, $function){

                    echo $function($text);

                }

                test_3("ciao_1<br>", "test_1");
                test_3("ciao_2<br>", "test_2");

            ?>
            
        </label>
            
        <h6>22) JSON</h6>
        <label>
                    
            <?php
                // JSON (JavaScript Object Notation) serve a memorizzare e scambiare dati e si divide in:
                //1) json_encode() = codifica un object o array da php a javascript
                //1) json_decode() = decodifica un object o array da javascript in php

                $objectName = array('peter' => 35,'luigi' => 45, 'mario' => 36);
                $arrayName = array("peter","luigi","mario");
                echo json_encode($objectName)."<br>";
                echo json_encode($arrayName)."<br>";

                $objectName = '{"peter":35,"luigi":45,"mario":36}';
                $arrayName='["peter","luigi","mario"]';
                //var_dump()=mostra la struttura dell'object o di un array
                echo var_dump(json_decode($objectName))."<br>";
                //mettendo true trasforma l'object in associative array
                //echo var_dump(json_decode($objectName),true)."<br>";
                $get_value=json_decode($objectName);
                echo $get_value->peter."<br>";
                //ottieni il dato sotto se l'object è un associative array
                //echo $arr["Peter"];
                foreach ($get_value as $key => $value) {
                    echo $key." e ".$value."<br>";
                }
                echo var_dump(json_decode($arrayName))."<br>";

            ?>
        </label>

        <h6>23) Exception</h6>
        <label>
                    
            <?php
                // Le exception permettono di estrapolare info sull'errore presentato durante il processo sottoforma di object, questi sono:
                //throw new Exception()= ricava l'errore e ferma il processo
                //try{}catch{}=ricava l'errore ma non ferma il processo
                function divide($dividend, $divisor) {
                    if($divisor == 0) {
                        // throw new Exception("Division by zero");
                    }
                    return $dividend / $divisor;
                }

                try{
                    
                    echo divide(5,0);

                }catch(Exception $e){

                    echo "inable to divide<br>";
                    echo $e->getMessage()."<br>";//mostra il messaggio di exception nel throw nella funzione
                    echo $e->getFile()."<br>";//mostra la directory del file dove si trova exception nel throw 
                    echo $e->getLine()."<br>";//mostra la linea dove si trova exception nel throw 
                    echo $e->getCode()."<br>";//mostra il codice del exception

                }finally {
                    //ti dice che il processo è terminato
                    echo "Process complete.<br>";

                }

                echo divide(5, 0);

            ?>
        </label>

        <h6>24) PHP + mySql</h6>
        <label>
                    
            <?php
            //php funziona con il database mysql attraverso:
            //-PDO (PHP Data Objects) =>funziona su 12 sistemi di database
            //-MySQLi extension (object-oriented e procedural)=>funziona solo su mysql database

            //1)CREARE CONNESSIONE AL DATABASE
            $servername="127.0.0.1";
            $username="root";
            $password="AklkOodX0Rc7LVvs";
            $db="test";
            global $conn;

            //MySqli (object-oriented)
            $conn=new mysqli($servername, $username, $password, $db);

            //MySqli (procedural)
            //$conn=mysqli_connect($servername, $username, $password, $db);

            //PDO
            //$conn=new PDO("mysql:host=$servername;dbname=myDB", $username, $password, $db);

            if (!$conn) {

                die(mysqli_connect_error());

            } else {

                echo "connesso";

                create_table();
                //MySqli
                // $conn->close();
                //MySqli (procedural)
                //mysqli_close($conn);
                //PDO
                //$conn = null;
                
            }
            
            function create_table(){
                global $conn;
                // sql to create table
                $sql = "CREATE TABLE lesson_php (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                firstname VARCHAR(30) NOT NULL,
                lastname VARCHAR(30) NOT NULL,
                email VARCHAR(50),
                reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                )";
                
                //questa //MySqli controlla la connessione al db e mette la query al suo interno
                if ($conn->query($sql) === TRUE) {
                echo "Table MyGuests created successfully<br>";
                } else {
                echo "Error creating table: " . $conn->error."<br>";
                }

                insert_multiple_data();

            }

            function insert_multiple_data(){
                //dichiaro la variabile globale connection
                global $conn;
                // add first array
                $array_1 = array("firstname"=>"john", "lastname"=>"doe", "email"=>"test@test.it");
                // add second array
                $array_2 = array("firstname"=>"dar", "lastname"=>"lamp", "email"=>"testa@testa.it");
                // add arrays into unique array
                $array=array($array_1,$array_2);

                //un altro modo è, ma a me non piace
                //$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
                //$sql = "DELETE FROM MyGuests WHERE id=2";
                // $sql = "INSERT INTO MyGuests (firstname, lastname, email)
                // VALUES ('John', 'Doe', 'john@example.com');";
                // $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
                // VALUES ('Mary', 'Moe', 'mary@example.com');";
                // $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
                // VALUES ('Julie', 'Dooley', 'julie@example.com')";

                // prepare and bind per evitare SQL injections.
                $stmt = $conn->prepare("UPDATE lesson_php (firstname, lastname, email) VALUES (?, ?, ?)");
                $stmt = $conn->prepare("INSERT INTO lesson_php (firstname, lastname, email) VALUES (?, ?, ?)");
                $stmt->bind_param("sss", $firstname, $lastname, $email);

                for ($i=0; $i < count($array); $i++) { 

                    //implode mette il primo parametro e lo divide per gli array presenti
                    // $value=implode("','",$array[$i]);
                    //metto il value nella query
                    // $sql = "INSERT INTO lesson_php (firstname, lastname, email) VALUES ('$value')";  
                    //inserisco la query nel conn e faccio la condizione se va tutto a buon fine
                    // if ($conn->query($sql) === TRUE) {

                    //     //questo ti permette di ricavare l'ultimo id inserito, è uguale a insertGetId di laravel
                    //     $last_id = $conn->insert_id;

                    //     echo "Table MyGuests created successfully with id:".$last_id;

                    // } else {

                    //     echo "Error creating table: " . $conn->error;

                    // }

                    // set parameters and execute
                    $firstname = $array[$i]["firstname"];
                    $lastname = $array[$i]["lastname"];
                    $email = $array[$i]["email"];
                    $stmt->execute();

                }

                get_multiple_data();
                
            }

            function get_multiple_data(){
                //dichiaro la variabile globale conn
                global $conn;
                //dichiaro la query
                $sql = "SELECT * FROM lesson_php WHERE id=9 ORDER BY lastname"; 
                //ti mostra il risultato della query in object con degli elementi utili come il num_rows
                $result = $conn->query($sql);  
                //gli dico di controllare se il numero delle righe è maggiore di zero e casomai mostra
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                    }
                } else {
                    echo "0 results";
                }

            }
            ?>
        </label>

        <h6>25) XML</h6>
        <label>
            
            <?php 
            // xml è un modo per strutturare dati da condividere sul web. Per manipolare i file xml è necessario l'xml parser che a sua volta si divide in:
            //Tree-Based Parsers(struttura ad albero): utile per file xml di piccole dimensioni, consuma più memoria: simple xml e DOM;
            //Event-Based Parsers: utile per file xml di grandi dimensioni, consuma meno memoria: XML reader, XML Expat Parser;

            //1)SIMPLE XML
            $myXMLData =
            "<?xml version='1.0' encoding='UTF-8'?>
            <note>
            <to>Tove</to>
            <from>Jani</from>
            <heading>Reminder</heading>
            <body>Don't forget me this weekend!</body>
            </note>";
            //leggo il file xml COME STRINGA con la funzione php simplexml_load_string() e lo trasforma in object dove i tag diventano le key e il contenuto i value
            $xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
            //controllo se il file xml presenta errori con libxml_get_errors()
            if ($xml === false) {
            echo "Failed loading XML: ";
            foreach(libxml_get_errors() as $error) {
                echo "<br>", $error->message;
            }
            } else {
            print_r($xml);
            }
            //leggo il file xml COME FILE con la funzione php simplexml_load_file()
            $xml=simplexml_load_file("../lesson_php/other_file/note.xml") or die("Error: Cannot create object");
            print_r($xml);
            //conto quante volte il tag book si ripete e mi estrapolo il get dei titoli
            for ($i=0; $i < count($xml->book); $i++) { 
                echo $xml->book[$i]->title . "<br>";
                //ottiene i nomi degli attributi category e lang
                echo $xml->book[$i]['category'] . "<br>";
                echo $xml->book[$i]->title['lang'] . "<br>";
            }
            //si può leggere anche così
            // foreach ($xml->book as $value) {
            //     echo $value->title ."<br>";
            // }
            // echo $xml->to;

            //2) PHP XML DOM Parser
            //dichiaro il dom document
            $xmlDoc = new DOMDocument();
            //leggo il file
            $xmlDoc->load("../lesson_php/other_file/note.xml");
            // print $xmlDoc->saveXML();
            //ottengo l'object da documentElement
            $x = $xmlDoc->documentElement;
            print_r($x->childNodes);
            foreach ($x->childNodes as $item) {
            print $item->nodeName . " = " . $item->nodeValue . "<br>";
            }            
            ?>
        </label>

        <h6>26) AJAX</h6>
        <label>
            <label for="fname">First name:</label>
            <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
            <input type="text" id="fprice" name="fprice" value="13.90">
            <div id="txtHint"><b>CD info will be listed here...</b></div>
            <select name="cds" onchange="showCD(this.value)">
                <option value="">Select a CD:</option>
                <option value="Bob Dylan">Bob Dylan</option>
                <option value="Bee Gees">Bee Gees</option>
                <option value="Cat Stevens">Cat Stevens</option>
            </select>
            
            <div id="txtHintcd"><b>CD info will be listed here...</b></div>

            <p>Suggestions: <span id="txtHint"></span></p> 
            <script>
                function showHint(str){
                    var price=$("#fprice").val();
                    $.ajax({
                        data: {data:str, price:price},
                        type: 'POST',
                        url: 'lesson_php/other_file/gethint.php',
                        success: function(output){
                            
                            $("#txtHint").text(output);

                        }
                    });
                }

                function showCD(str){
 
                    $.ajax({
                        data: {data:str},
                        type: 'GET',
                        url: 'lesson_php/other_file/getcd.php',
                        success: function(output){
                            var res=jQuery.parseJSON(output);

                            for (let index = 0; index < res.length; index++) {
                              
                                console.log(res[0].ARTIST);
                                $("#txtHintcd").html(res[0].TITLE+"<br>"+res[0].ARTIST+"<br>"+res[0].COUNTRY+"<br>"+res[0].COMPANY+"<br>"+res[0].PRICE+"<br>"+res[0].YEAR);
                                
                            }

                        }
                    });

                }
            </script>

        </label>
        
        <h6>27) OOP Object-Oriented Programming</h6>
        <label>
                <?php 
                    //i principali elementi di questo tipo di programmazione ad oggetti sono:
                    //1) Class= è un modello di oggetti (es: fruits), che contiene:
                        //-properties: è un nome attribuito ad un oggetto;
                        //-methods: è una azione che può essere eseguita sugli oggetti; a loro volta questi possono essere:
                            //*final methods: impedisce la sovrascrizione del primo metodo contenuto nella prima classe dal secondo metodo contenuto nella seconda classe;
                            //*abstract methods: esso è contenuto dentro un class abstract se il metodo astratto è definito come protetto nella classe parent, il metodo della classe child deve essere definito come protetto o pubblico, ma non privato;
                        //Entrambi sono accessibili in tre modi:
                        //.public (default): è possibile accedere alla proprietà o al metodo da ovunque
                        //.protected: è possibile accedere alla proprietà o al metodo all'interno della classe e dalle classi derivate da quella classe
                        //.private: è possibile accedere alla proprietà o al metodo SOLO all'interno della classe
                        //La class a sua volta può essere:
                            //*final class: impedisce l'Inheritance;
                            //*abstract class: è una classe che deve contenere almeno un method abstract, il quale è dichiarato dentro la classe ma non implementato nel codice;
                    //2) Object= è una instanza di una classe (es: apple, ananas) attraverso:
                        

                    //CREO UNA CLASS (// Parent class)
                    class Fruit {
                        // Properties
                        public $name;
                        //Una classe constant è dichiarata dentro una classe con const
                        const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
                        // Methods
                        //function set_name($name) {permette di inizializzare le proprietà di un oggetto nel momento della sua creazione                      
                        function __construct($name) { 
                          $this->name = $name;
                        }
                        //è possibile accedere alla proprietà o al metodo all'interno della classe e dalle classi derivate da quella classe
                        protected function get_name() {
                          return $this->name;
                        }
                        // function __destruct() { è chiamato quando l'object è distrutto o lo script è finito o uscito
                        //     echo "The fruit is {$this->name}.";
                        //   }
                      }

                      //Inheritance è quando una classe deriva da un altra classe dichiarando l'extends, quest'ultima classe creata verrà dichiarata dall'object per prima.
                      // Child classes
                      class Strawberry extends Fruit {

                        function message(){

                            echo "Am I a fruit or a berry? ";
                            //posso chiamare il method protected perchè questa classe è una derivata della prima
                            echo $this->get_name()."<br>";
                            //posso richiamare la classe const attraverso l'operatore self:: perchè è una derivata dell'altra classe
                            echo self::LEAVING_MESSAGE."<br>";

                        }

                      }
                      
                      //CREO UN OBJECT
                      $apple = new Strawberry("Apple");
                      //chiamo il method dentro l'ultima classe
                      $apple->message();
                      //$apple->get_name()."<br>"; sbagliato perchè è protected la properties
                      //posso richiamare la classe const attraverso l'operatore ::
                      echo Fruit::LEAVING_MESSAGE."<br>";
                      
                      
                ?>
        </label>

    </div>
    
</body>
</html>