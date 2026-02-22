<?php

define ("SERVERNAME", "fdb1034.awardspace.net");
define ("USERNAME", "4703279_argyn");

define ("PASSWORD", "Aaron0532");
define ("DBNAME", "4703279_argyn");

$con = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

        if (mysqli_connect_errno()){

 echo "Failed to connect to MySQL: " . mysqli_connect_error();

 die();

 }

?>