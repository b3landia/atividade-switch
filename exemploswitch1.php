<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="post">
		<label for="nome">nome</label>
		<input type="text" name="nome" id="nome">

		<br>

		<button type="submit"> Enviar </button>
	</form>

	<br>

<?php

if($_POST){
	$nome = $_POST['nome'];
	switch ($nome) {
		case 'Bel':
			echo "nome bonito";
			break;
		case 'Osvaldo':
			echo "nome de velho";
			break;
		default:
			echo "nome maravilhoso";
			break;
	}
	
}
?>

</body>
</html>
