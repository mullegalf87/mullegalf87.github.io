<?php 

    //STEP 1 = definisci le viaribili
    //stabilisci la directory dove verrà salvato il file ricordati dei due puntini prima
    $target_dir="../other_img/";
    //ottiene il nome del file 
    $target_file=$target_dir.basename($_FILES["fileToUpload"]["name"]);
    //questo servirà alla fine per controllare se è andato tutto bene in un if e si procede all'aupload
    $uploadOk=1;
    //ottiene in minuscolo la directory del file con le sue info, nello specifico l'estensione del file
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    //STEP 2 = controlla se l'immagine è un fake o una vera immagine
    //isset controlla se la variabile è stata dichiarata
    if (isset($_POST["submit"])) {
        //controllo la dimensione del file
        $check=getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        //stampo info file
        if ($check!==false) {
            //il mime mi permette di capire che tipo di file è
            echo "il file è un immagine ".$check["mime"]."<br>";
            $uploadOk=1;
        } else {
            echo "non è un file immagine <br>";
            $uploadOk=0;
        }
        
    } 

    //STEP 3 = controlla se l'immagine già esiste nella directory
    //file_exists è una funzione php che permette di controllare se il file esiste in una directory
    if (file_exists($target_file)) {
       echo "il file esiste <br>";
       $uploadOk=0;
    }

    //STEP 4 = controlla se il file ha superato un limite di misura
    $size_file=$_FILES["fileToUpload"]["size"];
    echo $size_file;
    if ($size_file > 500000) {
        echo "il file è troppo grande <br>";
        $uploadOk=0;
    }

    //STEP 5 = controlla se l'estensione del file va bene
    if ($imageFileType!="jpg" && $imageFileType!="png" && $imageFileType!="jpeg" && $imageFileType!="gif") {
        echo "il formato del file non è valido <br>";
        $uploadOk=0;
        # code...
    }

    //STEP 6 = attribuisci i permessi di scrittura nella directory che conterrà il file
    if( is_dir($target_dir) === false ){

        mkdir($target_dir, 0777, true);
    
    }

    //STEP 7 = controlla se $uploadOK è uguale 1
    if ($uploadOk==1) {
        //i check sono andati a buon fine si può procedere con il salvataggio dell'immagine sulla directory
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.<br>";
        } else {
        echo "Sorry, there was an error uploading your file.<br>";
        }
    }else{
        echo "il file non può essere salvato <br>";
    }

?>