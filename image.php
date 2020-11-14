<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="src/css/style.css">
	<title>Photo</title>
</head>
<body>
<?php
include("server.php");

$idImage = $_GET['id'];
$sqlImage = "SELECT * FROM gallery WHERE id = '$idImage'";

if(mysqli_query($connect, $sqlImage)) {
  $image = mysqli_fetch_assoc(mysqli_query($connect, $sqlImage));
  $update = "UPDATE gallery SET count = count + 1 WHERE id = $idImage";
  mysqli_query($connect, $update);
}

?>
<img src="<?= $image['big_address']?>" alt="full photo" class="full-img">
<span class="count"> <?= ++$image['count']?></span>
</body>
</html>
