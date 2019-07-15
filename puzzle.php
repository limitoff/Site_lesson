<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 

</head>
<body>

	<div class="content">

		<?php
			include "menu.php";
		?>

		<div class="contentWrap">
		    <div class="content">
		        <div class="center">

					<h1>Игра в загадки</h1>

					<div class="box">

						<?php
							
							if(isset($_GET["userAnswer1"]) && isset($_GET["userAnswer2"]) && isset($_GET["userAnswer3"]) && isset($_GET["userAnswer4"])){

								$userAnswer = mb_strtolower($_GET["userAnswer1"]);
								$score = 0;
								if ($userAnswer == "спичка" || $userAnswer == "спичку") {
									$score++;
								}

								$userAnswer = mb_strtolower($_GET["userAnswer2"]);
								if ($userAnswer == "пять" || $userAnswer == "5") {
									$score++;
								}

								$userAnswer = mb_strtolower($_GET["userAnswer3"]);
								if ($userAnswer == "время" || $userAnswer == "температура") {
									$score++;
								}

								$userAnswer = mb_strtolower($_GET["userAnswer4"]);
								if ($userAnswer == "одна" || $userAnswer == "1") {
									$score++;
								}

								echo "Дано верных ответов: " . $score;
							}

						?>

						<form method="GET">
							<p>Вы заходите в тёмную кухню. В ней есть свеча, керосиновая лампа и газовая плита. Что вы зажжёте в первую очередь?</p>
							<input type="text" name="userAnswer1">

							<p>Если пять кошек ловят пять мышей за пять минут, то сколько времени нужно одной кошке, чтобы поймать одну мышку?</p>
							<input type="text" name="userAnswer2">

							<p>Что не имеет длины, глубины, ширины, высоты, а можно измерить?</p>
							<input type="text" name="userAnswer3">

							<p>У семерых братьев по сестре. Сколько всего сестер?</p>
							<input type="text" name="userAnswer4">

							<br>
							<input type="submit" value="Ответить" name="">

						</form>
					</div>
		        </div>
		    </div>
		</div>
	</div>
	<div class="footer">
		Copyright &copy; <?php echo date("Y");?> Yury Kuklin
	</div>

</body>
</html>