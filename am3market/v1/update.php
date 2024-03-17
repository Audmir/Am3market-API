<?php
require_once "../connect/config.php";
include_once "./setup/setup.php";
include_once "./backend/update_function.php";

$requestMethod = $_SERVER["REQUEST_METHOD"];
if ($requestMethod == "POST") {

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $old_price = mysqli_real_escape_string($con, $_POST['old_price']);
    $details = mysqli_real_escape_string($con, $_POST['details']);
    $number_in_stock = mysqli_real_escape_string($con, $_POST['number_in_stock']);
    $delivary_number = mysqli_real_escape_string($con, $_POST['delivery_number']);
    $rate = mysqli_real_escape_string($con, $_POST['rate']);

    $photo = $_FILES['image'];

   /*  $name = mysqli_real_escape_string($con, "Dell i9 9th Gen");
    $price = mysqli_real_escape_string($con, "50000");
    $old_price = mysqli_real_escape_string($con, "30000");
    $details = mysqli_real_escape_string($con, "this is a good computer");
    $number_in_stock = mysqli_real_escape_string($con,"105");
    $delivary_number = mysqli_real_escape_string($con, "10");
    $rate = mysqli_real_escape_string($con, "6");
    $photo = "rate.png"; */

    $photo_name = $_FILES['image']['name'];
    $photo_size = $_FILES['image']['size'];
    $photo_tmp = $_FILES['image']['tmp_name'];
    $photo_dir = '/v1/backend/images' . $photo_name;
    $move = move_uploaded_file($photo_tmp, $photo_dir);
    if ($move) {
    }

    if (
        !empty($name) && !empty($price) && !empty($old_price) && !empty($details)
        && !empty($number_in_stock) && !empty($delivary_number)
    ) {

        $func = updateData($name, $price, $old_price, $details, $number_in_stock, $delivary_number, $rate, $photo_dir);
        echo $func;
        
    } else {
        $data = [
            'status' => 404,
            'message' => $requestMethod . ' Fill all fields please',
        ];
        header("HTTP/1.0  405  Fill all fields please");
        echo json_encode($data);
    }
} else {
    $data = [
        'status' => 405,
        'message' => $requestMethod . ' Method Not Allowed',
    ];
    header("HTTP/1.0  405  Method Not Allowed");
    echo json_encode($data);
}
