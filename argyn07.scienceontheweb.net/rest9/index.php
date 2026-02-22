<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>REST API Charts</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
</head>

<body class="bg-light">

<div class="container py-4">
<h2 class="text-center mb-4">REST API Data Visualization</h2>

<?php

function fetchData($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    return json_decode($result, true);
}

$sales   = fetchData("http://argyn07.scienceontheweb.net/rest9/api_sales.php");
$users   = fetchData("http://argyn07.scienceontheweb.net/rest9/api_users.php");
$devices = fetchData("http://argyn07.scienceontheweb.net/rest9/api_devices.php");
$temp    = fetchData("http://argyn07.scienceontheweb.net/rest9/api_temperature.php");
?>


<div class="row mb-4">
    <div class="col-md-6">
        <div class="card p-3">
            <h5 class="text-center">Monthly Sales</h5>
            <div id="salesChart"></div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card p-3">
            <h5 class="text-center">Users by Country</h5>
            <div id="usersChart"></div>
        </div>
    </div>
</div>
        
<div class="row">
    <div class="col-md-6">
        <div class="card p-3">
            <h5 class="text-center">Temperature Trend</h5>
            <div id="tempChart"></div>
        </div>
    </div>    
        
    <div class="col-md-6">
        <div class="card p-3">
            <h5 class="text-center">Device Usage</h5>
            <div id="devicesChart"></div>
        </div>
    </div>

</div>


<script>
/* PHP → JS */
const sales   = <?php echo json_encode($sales); ?>;
const users   = <?php echo json_encode($users); ?>;
const temp    = <?php echo json_encode($temp); ?>;
const devices = <?php echo json_encode($devices); ?>;

/* SALES BAR */
Plotly.newPlot("salesChart", [{
    x: sales.map(s => s.month),
    y: sales.map(s => s.total_sales),
    type: "bar"
}], { title: "Monthly Sales" });

/* USERS PIE */
Plotly.newPlot("usersChart", [{
    labels: users.map(u => u.country),
    values: users.map(u => u.user_count),
    type: "pie"
}], { title: "Users by Country" });
        
/* TEMPERATURE LINE */
Plotly.newPlot("tempChart", [{
    x: temp.map(t => t.day),
    y: temp.map(t => t.avg_temp),
    type: "bar"
}], { title: "Temperature Trend" });

/* DEVICES PIE */
Plotly.newPlot("devicesChart", [{
    labels: devices.map(d => d.device_name),
    values: devices.map(d => d.users_count),
    type: "pie"
}], { title: "Device Usage" });

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>