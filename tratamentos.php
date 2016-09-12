<?php

if($parts[0] == 'busca'){

	$buscar = trim(filter_input(INPUT_POST, 'buscar', FILTER_SANITIZE_STRING));
}
?>