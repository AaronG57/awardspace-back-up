<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Transaction Status</title>
  </head>
  <body>


<?php

// Define the variable $url, which stores the URL of the API, including query parameters such as order_id.
$url = "http://argyn07.scienceontheweb.net/rest4/api.php?reservation_id=3001";
// Initialize a cURL session and assign the session handle to the variable $ch.


// The cURL handle allows you to configure and execute HTTP requests.

$ch = curl_init();
// Configure the cURL session to return the server response as a string instead of outputting it directly.
// Setting CURLOPT_RETURNTRANSFER to true ensures that the result is stored in a variable rather than printed.


curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Specify the URL to be requested by the cURL session.
// Setting CURLOPT_URL to $url tells cURL where to send the request.


curl_setopt($ch, CURLOPT_URL, $url);
// Execute the configured cURL session.
// The result of the HTTP request (e.g., a JSON response) is stored in the variable $result.


$result = curl_exec($ch);
// Close the cURL session to free system resources.
// It's a best practice to always close cURL sessions after they are no longer needed.


curl_close($ch);
// Decode the JSON response stored in $result into an associative array (second parameter set to true).
// The decoded data structure is dumped to the screen for debugging or verification purposes.


//var_dump(json_decode($result, true));

$array=json_decode($result,true)

?>
      
<table class="table table-dark table-striped">

  <tbody>
    <tr>
      <th scope="row">No of an Reservation</th>
      <td><?php echo $array['reservation_id']; ?></td>
    </tr>
     <tr>
      <th scope="row">Guest Name</th>
      <td><?php echo $array['guest_name']; ?></td>
    </tr>
     <tr>
      <th scope="row">Room Number</th>
      <td><?php echo $array['room_number']; ?></td>
    </tr>
      <tr>
      <th scope="row">Check In</th>
      <td><?php echo $array['check_in']; ?></td>
    </tr>
       <tr>
      <th scope="row">Check Out</th>
      <td><?php echo $array['check_out']; ?></td>
    </tr>
  </tbody>
</table>         

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
