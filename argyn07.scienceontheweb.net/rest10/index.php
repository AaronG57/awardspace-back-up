<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>USD & CHF Exchange Rates</title>
<script src="https://cdn.plot.ly/plotly-2.27.0.min.js"></script>
</head>

<?php
/* ---------- USD DATA ---------- */
$usd = json_decode(file_get_contents('usd.json'));

/* ---------- CHF DATA ---------- */
$chf = json_decode(file_get_contents('chf.json'));
?>

<body>

<h2>Last 20 USD Exchange Rates</h2>
<div id="usdChart"></div>

<h2>Last 20 CHF Exchange Rates</h2>
<div id="chfChart"></div>

<script>

/* ---------- USD CHART ---------- */
var usdTrace = {
    x: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20],
    y: [
        <?php
        for ($i = 0; $i < 20; $i++) {
            echo $usd->rates[$i]->mid;
            if ($i < 19) echo ",";
        }
        ?>
    ],
    mode: 'lines+markers',
    type: 'scatter',
    name: 'USD'
};

Plotly.newPlot('usdChart', [usdTrace], {
    title: 'USD – Last 20 Quotes',
    xaxis: {title: 'Quotation'},
    yaxis: {title: 'PLN Value'}
});

/* ---------- CHF CHART ---------- */
var chfTrace = {
    x: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20],
    y: [
        <?php
        for ($i = 0; $i < 20; $i++) {
            echo $chf->rates[$i]->mid;
            if ($i < 19) echo ",";
        }
        ?>
    ],
    mode: 'lines+markers',
    type: 'scatter',
    name: 'CHF'
};

Plotly.newPlot('chfChart', [chfTrace], {
    title: 'CHF – Last 20 Quotes',
    xaxis: {title: 'Quotation'},
    yaxis: {title: 'PLN Value'}
});

</script>

</body>
</html>