<?php
    $host = "localhost";
    $password = "";
    $name = "root";
    $database_name = "am3market";

    $con = mysqli_connect($host, $name, $password, $database_name);
    if(!$con){
        $data = [
            'status' => '404',
            'message' => 'Not connected to database, please check your configuration',
        ];
        $datas = json_encode($data);
        echo $datas;
    } else {
        
    }
?>
