<?php

    require('connect_db.php');
    
    $type_query=$_GET["type_query"];

    switch ($type_query) {
        case 'add_prod':
            add_prod();
            break;
        case 'update_prod':
            update_prod();
            break;
        case 'delete_prod':
            delete_prod();
            break;
    }

    function get_prod(){

        global $conn;

        $query = "SELECT * FROM ecommerce";

        if (mysqli_query($conn, $query)) {
            $result = $conn->query($query);  
            $result = $result->fetch_all(MYSQLI_ASSOC);
            return $result;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        mysqli_close($conn);

    }

    function add_prod(){

        global $conn;
        $data_column=$_GET["data_column"];
        $data_value=$_GET["data_value"];

        $query = "INSERT INTO ecommerce (".$data_column.") VALUES (".$data_value.")";
    
        if (mysqli_query($conn, $query)) {
            $id_prod = $conn->insert_id;
            $result = array("id_prod"=>$id_prod, "type_query"=>"add_prod", "data_column"=>$data_column, "data_value"=>$data_value);
            echo json_encode($result);
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        mysqli_close($conn);

    }

    function update_prod(){

        global $conn;
        $id_prod=$_GET["id_prod"];

        $data_column=$_GET["data_column"];
        $data_column=explode("_".$id_prod,$data_column);
        $data_column=explode(",",implode($data_column));

        $data_value=$_GET["data_value"];
        $data_value=explode(",",$data_value);
        
        for ($i=0; $i < count($data_column); $i++) { 
           
           $value[$data_column[$i]]=$data_value[$i];
           
        }

        $query = "UPDATE ecommerce SET ";
        foreach ($value as $column => $values) {
            $query .= $column."=".$values.", ";
        }
        $query = rtrim($query , ', ');
        $query.=" WHERE id=$id_prod";

        if (mysqli_query($conn, $query)) {
            $result = array("id_prod"=>$id_prod, "type_query"=>"update_prod");
            echo json_encode($result);
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    }

    function delete_prod(){

        global $conn;
        $id_prod=$_GET["id_prod"];

        $query = "DELETE FROM ecommerce WHERE id=".$id_prod."";

        if (mysqli_query($conn, $query)) {
            $result = array("id_prod"=>$id_prod, "type_query"=>"delete_prod");
            echo json_encode($result);
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    }

?>