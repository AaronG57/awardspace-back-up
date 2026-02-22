<?php
header("Content-Type:application/json");      

        include('db.php');


        $result = mysqli_query( $con,

 "SELECT order_id FROM `transactions2`");
$data = [];

while( $row = mysqli_fetch_array($result, MYSQLI_ASSOC))
      { $data[] = $row;
}

        echo json_encode($data);

 mysqli_close($con);

?>