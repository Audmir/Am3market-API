<?php

include_once "./connect/config.php";

function createData($name, $price, $old_price, $details, $number_in_stock, $delivary_number, $rate, $image)
{
    global $con;

    $sql = "INSERT INTO data(`name`,`price`,`old_price`,`details`,`number_in_stock`,`delivary_price`,`rate`,`image`)
       VALUES('{$name}','{$price}','{$old_price}','{$details}','{$number_in_stock}','{$delivary_number}','{$rate}','{$image}')";
    $query = mysqli_query($con, $sql);
    if ($query) {
        $data = [
            'status' => 200,
            'message' => ' Inserted successfully',
        ];
        header("HTTP/1.0  200  OK");
        return json_encode($data);
    } else {
        $data = [
            'status' => 404,
            'message' => ' Error not inserted',
        ];
        header("HTTP/1.0  404  Error not inserted");
        return json_encode($data);
    }
}
