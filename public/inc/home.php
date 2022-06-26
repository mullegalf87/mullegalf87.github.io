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

        $query = "SELECT * FROM test_php";

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

        $query = "INSERT INTO test_php (".$data_column.") VALUES (".$data_value.")";
    
        if (mysqli_query($conn, $query)) {
            $id_prod = $conn->insert_id;
            $result = array("id_prod"=>$id_prod, "type_query"=>"add_prod");
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
        $data_value=$_GET["data_value"];

        $query = "UPDATE test_php SET ".$data_column."='".$data_value."' WHERE id=$id_prod";
        echo $query;

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

        $query = "DELETE FROM test_php WHERE id=".$id_prod."";

        if (mysqli_query($conn, $query)) {
            $result = array("id_prod"=>$id_prod, "type_query"=>"delete_prod");
            echo json_encode($result);
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    }

?>