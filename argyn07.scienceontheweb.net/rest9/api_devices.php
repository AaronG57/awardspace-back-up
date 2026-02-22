<?php
header("Content-Type: application/json");
include("db.php");

$sql = "SELECT device_name, users_count FROM devices";
$result = mysqli_query($con, $sql);

$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);
mysqli_close($con);
?>