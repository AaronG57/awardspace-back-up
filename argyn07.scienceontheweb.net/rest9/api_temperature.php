<?php
header("Content-Type: application/json");
include("db.php");

$sql = "SELECT day, avg_temp FROM temperature ORDER BY day ASC";
$result = mysqli_query($con, $sql);

$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);
mysqli_close($con);
?>