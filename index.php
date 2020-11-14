<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="src/css/style.css">
  <title>Gallery</title>
</head>
<body>

<main>
	<span class="title">Добро пожаловать в нашу галерею путешествий</span>
	<div class="gallery">
		<?php
		include("server.php");

		$sql = "SELECT * FROM gallery";
		$table = mysqli_query($connect, $sql);
		while ($data = mysqli_fetch_assoc($table)):?>
		<a href="image.php?id=<?= $data['id']?>" class="img-link">
			<img width="300" height="270" src="<?= $data['small_address']?>" alt="photo" class="image">
		</a>
		<?php endwhile;?>
	</div>
</main>
</body>
</html>
