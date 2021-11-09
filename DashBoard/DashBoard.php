<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery3.6.0.js"></script>
    <script src="script.js" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <link rel="shortcut icon" href="logo.jpg" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <div class="header">

        <div class="topRight">
            <img src="LogoSample_ByTailorBrands.png" alt="" class="logo" style="width: 10%;">
            <div class="date">
                <p>Today Nov4
                    <ion-icon name="calendar-number-outline"></ion-icon>
                </p>
            </div>
            <h3>Admin</h3>
            <img src="STEVE JOBS_ Apple, India, Buddhism, and Zen.jpg" alt="">
        </div>
        <p class="lastsignIn">Last sign in 2 Hours ago</p>
        <nav class="navbar navbar-light bg-light">
            <form class="container-fluid justify-content-start">
                <a href="http://localhost/Team1/DashBoard/DashBoard.php"><button class="btn btn-primary me-2" type="button"> Dashboard </button></a>
                <button class="btn btn-outline-primary me-2" type="button">Stock Management</button>
                <a href="http://localhost/Team1/CustomerInfo/Customerinfo.php"><button class="btn btn-outline-primary me-2" type="button">Customer info</button></a>
                <button class="btn btn-outline-primary me-2" type="button">Transaction </button>
                <a href="http://localhost/Team1/FeedBack/feedback.php"><button class="btn btn-outline-primary me-2" type="button">Feedback</button></a>
            </form>
        </nav>
    </div>

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
            <div id="pie"></div>
        </div>
        <div class="donutChart">
            <div id="donut"></div>
        </div>
    </div>
</body>

</html>