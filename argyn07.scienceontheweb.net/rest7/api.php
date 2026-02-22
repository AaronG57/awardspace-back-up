<?php
header("Content-Type:application/json");      

        include('db.php');

        $reservation_id = $_GET['reservation_id'];

        $result = mysqli_query( $con,

 "SELECT * FROM `transactions4` WHERE reservation_id=$reservation_id");

 $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        unset($row['id']);

        echo json_encode($row);

 mysqli_close($con);

?>