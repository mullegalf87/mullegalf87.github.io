<?php
    session_start();
    require('connect_db.php');
    
    $function_query=$_GET["type_query"] ? $_GET["type_query"] : 'get_data';
    
    $function_query();

    function get_data(){

        global $dbConn;
        $tab=$_GET["tab"] ? $_GET["tab"] : 'enterprise';
        $col=$_GET["col"] ? $_GET["col"] : 'branch_code';
        $val=$_GET["val"] ? $_GET["val"] : '1';

        $query = "SELECT * FROM ".$tab." WHERE ".$col."=".$val." AND id_user=".$_SESSION["id_user"]."";
        $rsenterprise = queryPrepare($dbConn, $query);
        queryExecute($rsenterprise);
        if (!queryNumRows($rsenterprise)){
            $query = "INSERT INTO ".$tab." (".$col.",id_user) VALUES (".$val.",".$_SESSION["id_user"].")";
            $insertenterprise = queryPrepare($dbConn, $query);
            queryExecute($insertenterprise);
        }

        $query = "SELECT * FROM ".$tab." WHERE ".$col."=".$val." AND id_user=".$_SESSION["id_user"]."";
        $rsenterprise = queryPrepare($dbConn, $query);
        queryExecute($rsenterprise);
        if (queryNumRows($rsenterprise)){
            if ($rsDataEnterprise = resultFetchAssoc($rsenterprise)){

                $GLOBALS['id_enterprise'] = $rsDataEnterprise["id"];
                $GLOBALS['branchcode_enterprise'] = $rsDataEnterprise["branch_code"];
                $GLOBALS['name_enterprise'] = $rsDataEnterprise["name"];
                $GLOBALS['matrinps_enterprise'] = $rsDataEnterprise["matr_inps"];
                $GLOBALS['posinail_enterprise'] = $rsDataEnterprise["pos_inail"];
                $GLOBALS['address_enterprise'] = $rsDataEnterprise["address"];
                $GLOBALS['cf_enterprise'] = $rsDataEnterprise["c_f"];

            }
            echo json_encode($rsDataEnterprise);
        }

    }

    function save_data(){
 
        global $conn;
        $tab=$_GET["tab"];
        $col=$_GET["col"];
        $val=$_GET["val"];

    }

    // function add_prod(){

    //     global $conn;
    //     $data_column=$_GET["data_column"];
    //     $data_value=$_GET["data_value"];

    //     $query = "INSERT INTO ecommerce (".$data_column.") VALUES (".$data_value.")";
    
    //     if (mysqli_query($conn, $query)) {
    //         $id_prod = $conn->insert_id;
    //         $result = array("id_prod"=>$id_prod, "type_query"=>"add_prod", "data_column"=>$data_column, "data_value"=>$data_value);
    //         echo json_encode($result);
    //     } else {
    //         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    //     }
        
    //     mysqli_close($conn);

    // }

    // function update_prod(){

    //     global $conn;
    //     $id_prod=$_GET["id_prod"];

    //     $data_column=$_GET["data_column"];
    //     $data_column=explode("_".$id_prod,$data_column);
    //     $data_column=explode(",",implode($data_column));

    //     $data_value=$_GET["data_value"];
    //     $data_value=explode(",",$data_value);
        
    //     for ($i=0; $i < count($data_column); $i++) { 
           
    //        $value[$data_column[$i]]=$data_value[$i];
           
    //     }

    //     $query = "UPDATE ecommerce SET ";
    //     foreach ($value as $column => $values) {
    //         $query .= $column."=".$values.", ";
    //     }
    //     $query = rtrim($query , ', ');
    //     $query.=" WHERE id=$id_prod";

    //     if (mysqli_query($conn, $query)) {
    //         $result = array("id_prod"=>$id_prod, "type_query"=>"update_prod");
    //         echo json_encode($result);
    //     } else {
    //         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    //     }

    // }

    // function delete_prod(){

    //     global $conn;
    //     $id_prod=$_GET["id_prod"];

    //     $query = "DELETE FROM ecommerce WHERE id=".$id_prod."";

    //     if (mysqli_query($conn, $query)) {
    //         $result = array("id_prod"=>$id_prod, "type_query"=>"delete_prod");
    //         echo json_encode($result);
    //     } else {
    //         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    //     }

    // }

?>