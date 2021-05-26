<?php
error_reporting(0);
header('X-XSS-Protection: 0');
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["myfile"]["name"]);
$FileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
?>
<html>

<head>
    <title>Cross Site Scripting | Level 16</title>
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
        <h1>XSS Level 16</h1>
        <p>Try to alert using <b>document.domain</b></p>
        <button class="btn btn-primary mb-3" onclick="func()">Clue</button>
        <p id="clue" style="display:none">Input payloads in image name</p>
        <form action="xss14.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="myfile" id="myfile">
            <input class="btn btn-primary my-2 my-sm-0" type="submit" value="Upload Image" name="submit">
        </form>
        <?php
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file) && $FileType === "jpg" || $FileType === "png" || $FileType == "jpeg" || $FileType == "svg") {
            echo "The file " . basename($_FILES["myfile"]["name"]) . " has been uploaded.";
        }
        ?>
    </div>
    <script>
        function func() {
            var x = document.getElementById("clue");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
</body>

</html>