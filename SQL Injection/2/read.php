<!DOCTYPE html>
<html>
<?php
    include('../../config.php');

    $id = $_GET['id'];

	$sql = "SELECT * FROM news WHERE id = $id";
	$result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($result)) {
        $judul = $row['judul'];
        $deskripsi = $row['deskripsi'];
    }
?>
<head>
    <meta charset="UTF-8" />
    <title>PT MENCARI CINTA SEJATI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            height: 50%;
            background: url(images/Background.jpg) fixed no-repeat center top;
        }

        .desc {
            color: white;
        }

        main,
        footer {
            color: white;
        }

        .list-group {
            padding-right: 300px;
            padding-left: 300px;
        }
        .publication-list {
            padding-right: 150px;
            padding-left: 150px;
        }

        h1,
        .nickname {
            color: #17D1AC;
        }

        h1 {
            font-size: 4em;
        }

        .text {
            /* padding-top: 45px;
            padding-bottom: 250px; */
            margin-top: 150px;
        }

        .background-p {
            height: 50%
        }

    </style>
</head>

<body>
    
    <div class="container">
        <h1 class="text-center mt-5 mb-5"><?php echo $judul;?></h1>
        <p class="desc"><?php echo $deskripsi;?></p>
    </div>
</body>

</html>