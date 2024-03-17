<?php
require_once 'connect/config.php';

function readData()
{
    global $con;
    $sql = "SELECT * FROM data";
    $query = mysqli_query($con, $sql);
    if ($query) {
        if (mysqli_num_rows($query) > 0) {
            $res = mysqli_fetch_all($query, MYSQLI_ASSOC);
            $data = [
                'status' => (200),
                'message' => 'Data Fectched Successfully',
                'data' => $res
            ];
            header("HTTP/1.0 200 OK");
            return json_encode($data);
        } else {
            $data = [
                'status' => 404,
                'message' => 'No Data Found'
            ];
            header("HTTP/1.0 404 Data Found");
            return json_encode($data);
        }
    } else {
        $data = [
            'status' => 404,
            'message' => 'No Data Found',
        ];
        header("HTTP/1.0 404 Data Found");
        return json_encode($data);
    }
}

?>


