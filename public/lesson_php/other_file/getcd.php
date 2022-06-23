<?php
   
    $cd=$_GET["data"];

    //leggo il file xml COME FILE con la funzione php simplexml_load_file()
    $xml=simplexml_load_file("../other_file/cd_catalog.xml") or die("Error: Cannot create object");
 
    //conto quante volte il tag book si ripete e mi estrapolo il get dei titoli
   
    for ($i=0; $i < count($xml->CD); $i++) { 
        
        if ($cd == $xml->CD[$i]->ARTIST) {
            echo json_encode(array($xml->CD[$i]));
            // echo $xml->CD[$i]->TITLE . "<br>";
            // echo $xml->CD[$i]->ARTIST . "<br>";
            // echo $xml->CD[$i]->COUNTRY . "<br>";
            // echo $xml->CD[$i]->COMPANY. "<br>";
            // echo $xml->CD[$i]->PRICE . "<br>";
            // echo $xml->CD[$i]->YEAR . "<br>";

        }

    }
        

    

?>