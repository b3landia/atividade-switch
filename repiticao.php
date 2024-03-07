<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> </title>
</head>
<body>
	<form method="post">
		<label for="valor1">valor1 </label>
		<input type="text" name="valor1" id="valor1">

		<br>

		<button type="submit"> Enviar </button>  
	</form>

	<br>

	<?php
	if($_POST){
		$valor1 = $_POST['valor1'];

		switch($valor1){
			case '1':
				echo "voce esta na tabuada do:" . "valor1";
				echo "<br>";
				for($i = 1; $i <= 10; $i++){
					echo $valor1 . " X " . $i . " = " . $valor1 * $i;
					echo '<br>';

				}
				break;
			case '2':
				echo "voce esta na tabuada do 2";
				echo "<br>";
				for ($i= 1; $i <= 10; $i++){ 
					echo $valor1 . " X " . $i . " = " . $valor1 * $i;
					echo '<br>';
				}
				break;
			case '3':
				echo "voce esta na tabuada do 3";
				echo "<br>";
				for ($i= 1; $i <= 10; $i++){ 
					echo $valor1 . " X " . $i . " = " . $valor1 * $i;
					echo '<br>';
				}
				break;
			case '4':
				echo "voce esta na tabuada do 4";
				echo "<br>";
				for ($i= 1; $i <= 10; $i++){ 
					echo $valor1 . " X " . $i . " = " . $valor1 * $i;
					echo '<br>';
				}
				break;
			case '5':
				echo "voce esta na tabuada do 5";
				echo "<br>";
				for ($i= 1; $i <= 10; $i++){ 
					echo $valor1 . " X " . $i . " = " . $valor1 * $i;
					echo '<br>';
				}
				break;
			case '6':
				echo "voce esta na tabuada do 6";
				echo "<br>";
				for ($i= 1; $i <= 10; $i++){ 
					echo $valor1 . " X " . $i . " = " . $valor1 * $i;
					echo '<br>';
				}
				break;
			case '7':
				echo "voce esta na tabuada do 7";
				echo "<br>";
				for ($i= 1; $i <= 10; $i++){ 
					echo $valor1 . " X " . $i . " = " . $valor1 * $i;
					echo '<br>';
				}
				break;
			case '8':
				echo "voce esta na tabuada do 8";
				echo "<br>";
				for ($i= 1; $i <= 10; $i++){ 
					echo $valor1 . " X " . $i . " = " . $valor1 * $i;
					echo '<br>';
				}
				break;
			case '9':
				echo "voce esta na tabuada do 9";
				echo "<br>";
				for ($i= 1; $i <= 10; $i++){ 
					echo $valor1 . " X " . $i . " = " . $valor1 * $i;
					echo '<br>';
				}
				break;
			case '10':
				echo "voce esta na tabuada do 10";
				echo "<br>";
				for ($i= 1; $i <= 10; $i++){ 
					echo $valor1 . " X " . $i . " = " . $valor1 * $i;
					echo '<br>';
				}
				break;	

		}

	}

	?>

</body>
</html>