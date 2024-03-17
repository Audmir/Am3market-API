<?php
    require '../connect/config.php';

    function deleteData($id){
        global $con;

        $query = "DELETE FROM data WHERE `id` = '$id'";

        if(mysqli_query($con, $query) === TRUE){

                $data = [
                    'status' => (200),
                    'message' => 'Delete Successful',
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

