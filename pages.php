<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	<style type="text/css">

		body {
			background-color: #f2f1ed;
		};

	</style>
<body>
	<div> <!-- 1. Все массивы создаем здесь-->
		<?php 
			$ch = mysqli_connect('127.0.0.1', 'root', '', 'blog');	
			if ($ch == true) {
				echo "true";
			}
			else {
				echo "false";
			}
			$cn = mysqli_query($ch, 'SELECT * FROM pages');
			
		 ?>
		<h1>
			<?php 
				$name = $_GET["name"];
				echo "Привет, " . $name;
			 ?>
		</h1>
		<?php 
			
			$database = [
				["title" => $_GET["title"],
				"short_text" => $_GET["text"],
				"readmore" => "",
				"img" => "",
				"users" => $_GET["user"]
				],
				["title" => "Статья 1",
				"short_text" => "lorem",
				"readmore" => "page1.php",
				"img" => "img/1.jpg",
				"users" => "user12"
				],
				["title" => "Статья 2",
				"short_text" => "lorem",
				"readmore" => "page2.php",
				"img" => "img/2.jpg",
				"users" => "user30"
				],
				["title" => "Статья 3",
				"short_text" => "lorem",
				"readmore" => "page3.php",
				"img" => "img/3.jpg",
				"users" => "user50"
				],
				["title" => "Статья 4",
				"short_text" => "lorem",
				"readmore" => "page4.php",
				"img" => "img/4.jpg",
				"users" => "user90"
				],
				["title" => "Статья 5",
				"short_text" => "lorem",
				"readmore" => "page5.php",
				"img" => "img/5.jpg",
				"users" => "user25"
				],
			]
		 ?>
	</div>

	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<h1 class="text-center">БЛОГ</h1>
		<a href="admin.php">Админ панель</a>
		<hr>
		<div class="col-12" style=""> <!-- 2. выводите все элементы в этом диве -->
			 <?php 
				 
				 for ($i=0; $i < 2; $i++) { 
					$result = $cn -> fetch_assoc();
					echo "<h1 class='text-success'>". $result["title"] ."</h1>";
					echo "<p>".$result["short_text"]."</p>";
					echo "<img src='". $result["img"] ."'class='w-100'>";
					echo "<p>" ."Автор: ".$result["user"]."</p>";
					echo "<a href='" . $result["readmore"] . "'>Подробнее</a> ";
					echo "<p>" ."Дата: ". getdate()["month"] . " " . getdate()["mday"] . " " . getdate()["year"] ."</p>";
					echo "<hr>";
				}
			 ?>
		</div>
	</div>
</body>
</html>