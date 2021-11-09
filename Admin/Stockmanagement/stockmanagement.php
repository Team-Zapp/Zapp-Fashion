<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>
    <script src="stockmgmt.js" defer></script>
    <link rel="stylesheet" href="stockmgmt.css">
</head>
<body>
<div class="chartbg">
        <div id="chart"></div>
    </div>
    <div class="mgmtdiv">
    <h3>Stock Management</h3>
    <form action="">
    <div class="mgmt">
        <div class="inputdiv">
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Product Name">
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Product ID">
            <input type="file" class="form-control" id="inputGroupFile02" placeholder="Choose Image">
        </div>
        <div class="inputdiv">
            <select class="form-select" id="inputGroupSelect01">
                <option selected>Gender</option>
                <option value="1">Men</option>
                <option value="2">Women</option>
                <option value="3">Kid</option>
            </select>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Product Catagory">
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Made">
        </div>
        <div class="inputdiv">
            <div class="money"> 
            <input type="text" class="form-control " aria-label="Dollar amount (with dot and two decimal places)" placeholder="Original Price">
            <span class="input-group-text">$</span>
            </div>
            <div class="money">
            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" placeholder="Sale Price">
            <span class="input-group-text">$</span>
            </div>
        </div>
        <input class="subbtn" type="submit" value="Submit">
        <input class="delbth" type="submit" value="Delete">
    </div>
    </form>
    </div>
</body>

</html>