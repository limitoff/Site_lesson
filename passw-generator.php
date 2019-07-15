<DOCTYPE html>
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

					<h1>Генератор паролей</h1>

					<div class="box">

						<p id="info">Введите длину пароля</p>
						<input type="text" id="userAnswer">
						<br>
						<a href="#" onClick="guess();" id="button">Старт!</a>
					</div>

					<script>
						var array = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","0","1","2","3","4","5","6","7","8","9"];
						var passwordArray = [];
						var shift;
						var letter;
								
						function readIn(){
							var number = document.getElementById("userAnswer").value;
							return parseInt(number);
						}
							
						function write(text){
							document.getElementById("info").innerHTML = text;
						}

						function hide(id){
							var number = document.getElementById(id).style.display = "none";
						}
								
						function guess(){
							var passwordLength=readIn();
							for (var i=0; i < passwordLength; i++){
								var index = Math.floor(Math.random()*array.length);
								shift = Math.floor(Math.random()*2);
								if (shift == 1){
									letter = array[index];
									letter = letter.toLowerCase();
								}else{
									letter = array[index];
									letter = letter.toUpperCase()
								}
								passwordArray.push(letter);
							}

							password = passwordArray.join("");
							write ("Ваш пароль: " + password);
							hide("button");
							hide("userAnswer");

						}

					</script>
				</div>
			</div>
		</div>
	</div>


	<div class="footer">
		Copyright &copy; <?php echo date("Y");?> Yury Kuklin
	</div>

</body>
</html>