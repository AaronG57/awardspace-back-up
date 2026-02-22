<! DOCTYPE html>



<html>
<body>
<?php
     
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$city = $_POST["city"];
$street = $_POST["street"];
$streetnumber = $_POST["streetnumber"];

define ("SERVERNAME", "fdb1034.awardspace.net");
define ("USERNAME", "4703279_argyn");

define ("PASSWORD", "Aaron0532");
define ("DBNAME", "4703279_argyn");
// Create connection

$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);



// Check connection


if (!$conn) {

die("Connection failed: " . mysqli_connect_error());}
        
$sql = "INSERT INTO MyGuests VALUES(NULL, '$firstname', '$lastname', '$city', '$street', '$streetnumber')";
        
if (mysqli_query($conn, $sql)) {
echo "New record created successfully";


} else {


echo "Error: " . $sql . "<br>" . mysqli_error($conn);


}
mysqli_close($conn);


?>

</body>
</html>