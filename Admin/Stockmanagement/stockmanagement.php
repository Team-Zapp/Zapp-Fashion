<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery.js"></script>
    <script src="stockmgmt.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="stockmgmt.css">
</head>

<body>

    <div class="chartbg">
        <div id="chart"></div>
    </div>
    <form action="../../Controllers/stockmgmtinsert.php" method="POST">
        <div class="mgmtdiv">
            <h3 class="stockhead">Stock Management</h3>
            <div class="mgmt">
                <div class="inputdiv">
                    <div class="findpd">
                        <input type="text" name="pdname" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Product Name">
                        <span class="searchbtn"><button type="button" class="btn btn-secondary text-center searchbtn">Search</button></span>
                    </div>
                    <input class="form-control" type="text" placeholder="Create Date" aria-label="Disabled input example" disabled>
                    <input type="file" name="pdimage" class="form-control" id="inputGroupFile02" placeholder="Choose Image">
                </div>
                <div class="inputdiv">
                    <select class="form-select" id="inputGroupSelect01" name="pdgender">
                        <option selected>Gender</option>
                        <option value="1">Men</option>
                        <option value="2">Women</option>
                        <option value="3">Kid</option>
                    </select>
                    <select class="form-select" id="inputGroupSelect01" name="category">
                        <option selected>Products Catagory</option>
                        <option value="1">Shirt</option>
                        <option value="2">Pant</option>
                        <option value="3">Shoes</option>
                    </select>
                    <input type="text" name="madeof" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Made">
                </div>
                <div class="inputdiv">
                    <div class="money">
                        <input type="number" class="form-control " name="orgprice" aria-label="Dollar amount (with dot and two decimal places)" placeholder="Original Price">
                        <span class="input-group-text">$</span>
                    </div>
                    <div class="money">
                        <input type="number" class="form-control" name="saleprice" aria-label="Dollar amount (with dot and two decimal places)" placeholder="Sale Price">
                        <span class="input-group-text">$</span>
                    </div>
                    <input type="number" name="stock" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Quantities">
                </div>
                <input class="subbtn" type="submit" name="submit" value="Submit">
                <input class="update" type="submit" name="update" value="Update">
                <input class="delbth" type="submit" name="delete" value="Delete">
            </div>
        </div>
    </form>
    <div class="container-fluid">
        <div class="row">
            <div class="col-10 text-center ">
                <table class="table table-hover mx-5 mt-5 mytable">
                    <thead class="table-dark">
                        <th>No.</th>
                        <th>Product Name </th>
                        <th>Gender</th>
                        <th>Product Catagory</th>
                        <th>Original Price</th>
                        <th>Sale Price</th>
                        <th>Quantities</th>
                    </thead>
                    <tr>
                        <td>1.</td>
                        <td>Blue Shirt</td>
                        <td>Male</td>
                        <td>Shirt</td>
                        <td>100</td>
                        <td>150</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>Blue Shirt</td>
                        <td>Male</td>
                        <td>Shirt</td>
                        <td>100</td>
                        <td>150</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>Blue Shirt</td>
                        <td>Male</td>
                        <td>Shirt</td>
                        <td>100</td>
                        <td>150</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>Blue Shirt</td>
                        <td>Male</td>
                        <td>Shirt</td>
                        <td>100</td>
                        <td>150</td>
                        <td>10</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="footer">

    </div>
    <script>
        let AdminName = "<?php echo $_GET["name"] ?>"
    </script> 
</body>

</html>