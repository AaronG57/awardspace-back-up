<! DOCTYPE html>

<html>
<body>
<?php

define ("SERVERNAME", "fdb1034.awardspace.net");
define ("USERNAME", "4703279_argyn");

define ("PASSWORD", "Aaron0532");
define ("DBNAME", "4703279_argyn");
// Create connection

$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

// Check connection

if (!$conn) {


   die("Connection failed: " . mysqli_connect_error());


}
$sql = "SELECT * FROM myguests";

$result = mysqli_query($conn, $sql);


 if (mysqli_num_rows($result) > 0) {



// output data of each row



while($row = mysqli_fetch_assoc($result)) {



        echo "id: " . $row["id"]. " - Name:
" . $row["firstname"]. " " . $row["lastname"]. ", City: " . $row["city"]. ", Street: " . $row["street"]. ", Street number: " . $row["streetnumber"]. "<br>";
      }


} 
        else {

            echo "0 results";
}


 mysqli_close($conn);
?>
</body>
</html>