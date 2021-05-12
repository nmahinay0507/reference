<?php

    $db_host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "category";

    $connection = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);

    try{

        $sql_data = "SELECT * 
                        FROM tbl_list";

        $stmt_data = $connection->prepare($sql_data);
        $stmt_data->execute();
        $fetch_data = $stmt_data->fetchAll(PDO::FETCH_ASSOC);
        $data = array();

        foreach($fetch_data as $row){

            $parent_id = ($row["parent_id"]) == 0 ? "#" : $row["parent_id"];

            $sub_data["id"] = $row["id"];
            $sub_data["name"] = $row["name"];
            $sub_data["text"] = $row["name"];
            $sub_data["parent"] = $row["parent_id"];

            $data[] = array(
                "id" => $row['id'],
                "parent" => $parent_id,
                "text" => $row['name'],
             );

        }

        // foreach($data as $key => &$value){

        //     $output[$value["id"]] = &$value;
        // }

        // foreach($data as $key => &$value){

        //     if($value["parent"] && isset($output[$value["parent"]])){

        //         $output[$value["parent"]]["children"][] = &$value;
        //     }
        // }

        // foreach($data as $key => &$value){
        //     if($value["parent"] && isset($output[$value["parent"]])){

        //         unset($data[$key]);
        //     }
        // }

        echo json_encode($data);

    }
    catch(PDOException $e){

        echo $e->getMessage();
    }

?>