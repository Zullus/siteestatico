<?php
$navString = $_SERVER['REQUEST_URI']; // Retorna "Array ex: /Mod_rewrite/edit/1/"
$parts = explode('/', $navString); // Quebra a array pelo delimitador /
array_shift($parts); //retira o primeiro valor (sempre vazio) da array

if (in_array("xsinfo2015", $parts)) { 
    array_shift($parts); //rerira o '/xsinfo2015' -> para server local
}

if (in_array("www", $parts)) { 
   array_shift($parts); //rerira o '/www' -> para server local
}

	/*$sec = $parts[0];
	$pag = $parts[1];
	$item = $parts[2];
	$valor = $parts[3];*/
//var_dump($parts);

//Define o idioma
switch($parts[0]){
	case '':
	case 'pt':
	default:
		$idioma = 'pt';
		break;
	case 'en':
		$idioma = 'en';
		break;
}

$_SESSION['idioma'] = $idioma;

if($parts[0] == 'pt' || $parts[0] == 'es' || $parts[0] == 'en' || $parts[0] == 'de'){
	array_shift($parts); //rerira o idioma da url
}

if (isset($parts[0])) {

	$urlget = explode('?', $parts[0]);

	$parts[0] = $urlget[0];

	$sessao = $parts[0];
} else {
	$sessao = '';
}

if (isset($parts[1])) {
	$pag = $parts[1];
} else {
	$pag = '';
}

if (isset($parts[2])) {
	$item = $parts[2];
} else {
	$item = '';
}

if (isset($parts[3])) {
	$valor = $parts[3];
} else {
	$valor = '';
}
?>