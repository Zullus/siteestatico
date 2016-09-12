<?php
session_start();

// Evita URL´s muito longas, segurança contra Injections
if(strlen($_SERVER['REQUEST_URI'])>200){
	header("HTTP/1.1 404 Not Found");
	exit();
}

//Includes de trabalho da URL
require 'partes_url.php';
require 'url_seo.php';
require 'paginas_sem_head.php';
require 'paginas_sem_footer.php';

//X-Frame-Options Header block
header("X-Frame-Options: SAMEORIGIN");

//Carrega o conteúdo da Página

if($parts[0] != ''){

	//Local do arquivo

	$localdoarquivo = str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']) . "view/$idioma/" . $parts[0] . '.php';

	//Veifica se existe o arquivo e carrega o head

	if (file_exists($localdoarquivo)) {

		//Carrega o head

		if (!(in_array($sessao, $paginas_sem_head)) && !(in_array($pag, $paginas_sem_head))) {
			include "view/$idioma/head.php";
		}

		//Carrega a página

		include "view/$idioma/" . $parts[0] . '.php';

	}
	else{

		//Se não existe, carrega o 404

		include "view/$idioma/404.php";

	}

	//Carrega o footer
	if (!(in_array($sessao, $paginas_sem_footer)) && !(in_array($pag, $paginas_sem_head))) {
		include "view/$idioma/footer.php";
	}

}
else{

	include "view/$idioma/head.php";

	include "view/$idioma/home.php";

	include "view/$idioma/footer.php";
}

?>