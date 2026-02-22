<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TRANSACTION STATUS</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-QWTKZyjpPEjISv5WaRU90FeRpok6YctnYmDr5pNlyT2bRjxh0JMhjY6hW+ALEWIH" crossorigin="anonymous">
</head>
<body>

   <form name="form1" method="post" action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
           <div class="mb-3">
   <label for="text" class="form-label">Provide ORDER ID :</label>
  <select class="form-control" name="order_id">

        <?php
$url = 'http://argyn07.scienceontheweb.net/rest2/api2.php';
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);
$result = curl_exec($ch);
curl_close($ch);
//var_dump(json_decode($result, true));
$array=json_decode($result, true);
for ($j=0; $j<count($array); $j++) {
echo '<option>'.$array[$j]['order_id'].'</option>'; }
   ?>
   </select>

        </div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php

if (isset($_POST['order_id'])){
$order_id = $_POST['order_id'];
$url1 ='http://argyn07.scienceontheweb.net/rest2/api.php?order_id='.$order_id;
$ch1 = curl_init();
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch1, CURLOPT_URL, $url1);
$result1 = curl_exec($ch1);
curl_close($ch1);
$array1=json_decode($result1, true);}
else {
echo" <!-- ";
        }
?>


<table class="table">
        <tbody>
<tr>
<th scope="row">No of an Order :</th>
<td> <?php echo $array1['order_id']; ?></td>
</tr>
<tr>
<th scope="row">Amount in PLN :</th>
<td> <?php echo $array1['amount']; ?></td>
</tr>
  <tr>              
<th scope="row">Status Code :</th>
<td> <?php echo $array1['response_code']; ?></td>
</tr>
<tr>
<th scope="row">Status Description :</th>
<td> <?php echo $array1['response_desc']; ?></td>
 </tr>
</tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf@tY31HB60NNkmXc559fDVZLESaAA55NDzOxhy9GkcIds1K1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>