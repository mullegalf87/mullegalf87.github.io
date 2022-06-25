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

            $last_id = $conn->insert_id;

            echo array("last_id"=>$last_id, "type_query"=>"add_prod");

        } else {

            echo "Error: " . $sql . "<br>" . mysqli_error($conn);

        }
        
        mysqli_close($conn);

    }

    function update_prod(){


    }

    function delete_prod(){


    }

?>