<?php
error_reporting(0);
header('X-XSS-Protection: 0');
$param = $_GET['query'];
?>
<html>

<head>
    <title>Cross Site Scripting | Level 11</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container m-5">
        <a href="./">> Back to Home</a>
        <h1>XSS Level 11</h1>
        <p>Try to alert using <b>document.domain</b></p>
        <form class="form-inline my-2 my-lg-0" action="?query=" method="get">
            <input class="form-control mr-sm-2" placeholder="keyword" name="query">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
        <br>
        <?php
        if (!filter_var($param, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
        } else {
            echo $param;
        }
        ?>
    </div>

</body>

</html>