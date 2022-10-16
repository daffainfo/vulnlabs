<!DOCTYPE html>
<html>
<head>
	<title>Check your website</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
<body>
	<div class="container text-center">
		<div class="main-wrapper" style="margin-top: 25vh;">
			<div class="header-wrapper">
				<h2 class="col">Check if the website is down</h2>
			</div>
			<div class="col-md-auto mt-3 d-flex justify-content-center">
				<form method="POST" class="flex-column">
					<input class="form-control" type="text" name="ip" style="width: 500px;">
					<button type="submit" class="btn btn-primary mt-4" style=" width: 500px;">Check</button>
				</form>
			</div>

			<div class="col-md-auto d-flex justify-content-center">

				<?php
				function RemoveSpecialChar($str) {
					$res = str_replace( array( '|' ), ' ', $str);

					return $res;
				}

				if (isset($_POST["ip"])) {
					$input = $_POST["ip"];
					$input_filter = RemoveSpecialChar($input);
					exec("ping $input_filter", $output);
					if (!empty($output)) {
						echo '<div class="mt-3 alert alert-primary" role="alert" style=" width:500px;" >';
                        echo '<p style="text-align:center;">';
						foreach ($output as $line) {
							echo $line."<br>";
						}
						echo ' </p></strong></div>';
					}
				}
				?>
			</div>
		</div>
	</div>
</body>
</html>