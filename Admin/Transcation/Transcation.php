<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo 2.png" type="image/x-icon" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <title>Transcation</title>
    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <script>
        let AdminName = "<?php echo $_GET["name"] ?>"
    </script>
    <div class="container tablediv">
        <table class="table table-striped">
            <tr class="table-secondary table" id="table1">
                <th class="primary ">Name</th>
                <th class="primary">Transcation ID</th>
                <th class="primary">Buy Time</th>
                <th class="primary">Total Buget Used </th>
            </tr>


        </table>
    </div>

</body>

</html>