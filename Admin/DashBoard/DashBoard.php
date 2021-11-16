<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquary.js"></script>
    <script src="script.js" defer></script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <link rel="shortcut icon" href="logo.jpg" type="image/x-icon" />
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <script>
        let AdminName = "<?php echo $_GET["name"] ?>"
    </script>

    <div class="row">
        <div class="Torder">
            <p class="head">Total Orders</p>
            <p class="foot">1000 Items</p>
        </div>
        <div class="Torder">
            <p class="head">Total Revenue</p>
            <p class="foot">1000 $</p>
        </div>
        <div class="Torder">
            <p class="head">Visit</p>
            <p class="foot">1000</p>
        </div>
        <div class="Torder">
            <p class="head">Feedback</p>
            <p class="foot">1000 +</p>
        </div>
    </div>

    <div class="row2">
        <div class="lineChart">
            <div id="chart"></div>
        </div>

        <div class="secondChart">
            <div id="secChart"></div>
        </div>
    </div>

    <div class="row3">
        <div class="pieChart">
            <h4>Popular Items</h4>
            <div id="pie"></div>
        </div>
        <div class="donutChart">
            <h4>Un-popular Items</h4>
            <div id="donut"></div>
        </div>
    </div>
    <div class="footer">FOOTER</div>
</body>

</html>