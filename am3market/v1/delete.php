<?php
require "../connect/config.php";
include_once "./setup/setup.php";
include_once "./backend/delete_function.php";

$requestMethod = $_SERVER["REQUEST_METHOD"];
if ($requestMethod == "POST") {

    $id = "3";

    $datas = deleteData($id);
    echo $datas;

} else {
    $data = [
        'status' => 405,
        'message' => $requestMethod . 'Method Not Allowed',
    ];
    header("HTTP/1.0  405  Method Not Allowed");
    echo json_encode($data);
}