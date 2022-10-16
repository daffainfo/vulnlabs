<?php
error_reporting(0);
header('X-XSS-Protection: 0');
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["myfile"]["name"]);
$fileType = $_FILES["myfile"]["type"];
?>
<html>

<head>
    <title>Unrestricted File Upload</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container m-5">
        <a href="../">> Back to Home</a>
        <h1>Unrestricted File Upload</h1>
        <p id="clue" style="display:none">Input payloads in image name</p>
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="myfile" id="myfile">
            <input class="btn btn-primary my-2 my-sm-0" type="submit" value="Upload Image" name="submit">
        </form>
        <?php
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file) && $fileType == "image/gif" || $fileType == "image/jpeg" || $fileType == "image/png") {
            echo "<p>The file " . basename($_FILES["myfile"]["name"]) . " has been uploaded.</p>";
			echo "<a target='_blank' href='uploads/" . basename($_FILES["myfile"]["name"]) . "'>Click here to view the file</a>";
		} else {
			echo "<p>Sorry, there was an error uploading your file.</p>";
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