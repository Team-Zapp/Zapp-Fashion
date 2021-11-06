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
                    <button class="btn btn-outline-primary me-2" type="button" > Dashboard </button>

            <button class="btn btn-outline-primary me-2" type="button">Stock Management</button>
            <button class="btn btn-outline-primary me-2" type="button">Customer info</button>
            <button class="btn btn-outline-primary me-2" type="button">Transaction </button>
            <a href="#feedbackForm"><button class="btn btn-outline-primary me-2" type="button">Feedback</button></a>
            </form>
        </nav>
    </div>
    <div class="feedbackForm" id="feedbackForm">
        <h4>Reviews</h4>
        <div class="ProflieAndName">
            <p class="name">
                <img src="STEVE JOBS_ Apple, India, Buddhism, and Zen.jpg" alt="" class="UserProfile">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                asdfkjlkaf;
                </button>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                first
                </div>
            </div>
        </div>

        <div class="ProflieAndName">
            <p class="name">
                <img src="STEVE JOBS_ Apple, India, Buddhism, and Zen.jpg" alt="" class="UserProfile">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#baryar" aria-expanded="false" aria-controls="baryar">
                asdfkjlkaf;
                </button>
            </p>
            <div class="collapse" id="baryar">
                <div class="card card-body">
                second
                </div>
            </div>
        </div>

    </div>


</body>

</html>