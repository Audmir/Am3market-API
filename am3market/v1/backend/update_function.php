<?php
    require '../connect/config.php';

    function updateData($name, $price, $old_price, $details, $number_in_stock, $delivary_number, $rate, $photo_dir){
        global $con;
        $id = "2";
        $query = "UPDATE data SET `name` = '{$name}', `price` = '{$price}', `old_price` = '{$old_price}', `details` = '{$details}', `number_in_stock`= '{$number_in_stock}', `delivary_number` = '{$delivary_number}', `rate` = '{$rate}', `image` = '{$photo_dir}' WHERE id = '$id'";

        if(mysqli_query($con, $query) === TRUE){

                $data = [
                    'status' => (200),
                    'message' => 'Updated Successfully',
                    //'data' => $res
                ];
                header("HTTP/1.0 200 OK");
                return json_encode($data);

        } else {
            $data = [
                'status' => 500,
                'message' => 'Internal Server Error',
            ];
            header("HTTP/1.0 500 Internal Server Error");
            return json_encode($data);
        }

    }

?>

