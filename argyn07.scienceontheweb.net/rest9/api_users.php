<?php
header("Content-Type: application/json");
include("db.php");

$sql = "SELECT country, user_count FROM users";
$result = mysqli_query($con, $sql);

$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);
mysqli_close($con);
?>