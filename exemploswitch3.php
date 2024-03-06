<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="post">
		<label for="cor"> cor </label>
		<input type="text" name="cor" id="cor">

		<br>

		<button type="submit"> Enviar </button>
	</form>

	<br>

<?php

if($_POST){
	$cor = $_POST[cor];
	switch ($cor) {
		case 'amarelo':
			echo "ruim";
			break;
		case 'rosa':
			echo "bom de mais ";
			break;
		case 'laranja':
			echo "a melhor";
			break;
		
		default:
			echo "escolha";
			break;
	}
	
}
?>

</body>
</html>
