<?php
error_reporting(0);
header('X-XSS-Protection: 0');
?>
<html>

<head>
    <title>Cross Site Scripting | Level 5</title>
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
        <h1>XSS Level 5</h1>
        <p>Try to alert using <b>document.domain</b></p>
        <p>Your user agent: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>
    </div>

</body>

</html>