<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php 
			$ch = mysqli_connect('127.0.0.1', 'root', '', 'blog');	
			$cn = mysqli_query($ch, 'SELECT * FROM users');
		 ?>
	<div class="row">
		<div class="col-2">
			<?php 
				for ($i=0; $i < 5; $i++) {
					$result = $cn -> fetch_assoc();
					echo "<div class='bg-light border'>";
						echo "<h3 class='text-success'>". $result["name"] ."</h3>";
						echo "<p>".$result["email"]."</p>";
						echo "<p>" ."Автор: ".$result["phone"]."</p>";
						echo "<a href='" . $result["readmore"] . "'>Подробнее</a> ";
					echo "</div>";
				}
			 ?>
		</div>
		<div class="col-8">
			<form action="pages.php" method="GET">
				
				
				<p class="font-weight-bold">Заголовок:</p>
				<div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
				</div>
				<p class="font-weight-bold" class="form-control">Текст поста:</p>
				<div class="input-group">
				  <textarea class="form-control" aria-label="With textarea"></textarea>
				</div>
				<p class="font-weight-bold">Автор:</p>
				<div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
				</div>
				<button class="btn btn-success">Создать пост</button>
			</form>
		</div>
	</div>
	
</body>
</html>