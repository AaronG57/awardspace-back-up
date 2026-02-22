<?php
header("Content-Type: application/json");
include("db.php");

$sql = "SELECT month, total_sales FROM sales";
$result = mysqli_query($con, $sql);

$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);
mysqli_close($con);
?>