<?php
$n = trim(filter_input(INPUT_GET, 'n', FILTER_SANITIZE_STRING));
$e = trim(filter_input(INPUT_GET, 'e', FILTER_SANITIZE_STRING));
?>

<html>
<head>
	<title>Erro Banco de Dados</title>
</head>
<body>
	<h1>Erro Banco de Dados</h1>
	<p><?php echo "Erro nº $n<br>Mensagem: $e";?></p>
</body>
</html>