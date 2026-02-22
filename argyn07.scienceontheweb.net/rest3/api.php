<?php
header("Content-Type:application/json");      

        include('db.php');

        $product_id = $_GET['product_id'];

        $result = mysqli_query( $con,

 "SELECT * FROM `transactions3` WHERE product_id=$product_id");

 $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        unset($row['id']);

        echo json_encode($row);

 mysqli_close($con);

?>