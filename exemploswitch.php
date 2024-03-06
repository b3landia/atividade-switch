<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="post">
		<label for="valor">valor </label>
		<input type="text" name="valor" id="valor">

		<br>

		<button type="submit"> Enviar </button>
	</form>

	<br>

<?php

if($_POST){
	$valor= $_POST['valor'];
	switch ($valor) {
		case '0':
			echo "você perdeu";
			break;
		case '1':
			echo "avance 1 casa";
			break;
		case '2':
			echo "você ganhou um bonus";
			break;
		
		default:
			echo "jogue novamente";
			break;
	}
	
}
?>

</body>
</html>
