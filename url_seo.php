<?php
if($_SERVER['HTTP_HOST']=="192.168.0.10"){
	$_SESSION['url_seo'] = 'http://192.168.0.10/siteestatico/www/';
}
elseif($_SERVER['HTTP_HOST']=="192.168.0.102"){
	$_SESSION['url_seo'] = 'http://192.168.0.102/siteestatico/www/';
}
elseif($_SERVER['HTTP_HOST']=="siteestatico.xs"){
	$_SESSION['url_seo'] = 'http://siteestatico.xs/';
}
elseif($_SERVER['HTTP_HOST']=="siteestatico.xsw"){
	$_SESSION['url_seo'] = 'http://siteestatico.xs/';
}
elseif($_SERVER['HTTP_HOST']=="interno.xsinformatica.com.br:1701"){
	$_SESSION['url_seo'] = 'http://interno.xsinformatica.com.br:1701/siteestatico/';
}
/*elseif($_SERVER['HTTP_HOST']=="interno.xsinformatica.com.br:1701"){
	$_SESSION['url_seo'] = 'http://interno.xsinformatica.com.br:1701/siteestatico/www/';
}*/
elseif($_SERVER['HTTP_HOST']=="interno.xsinformatica.com.br:1702"){
	$_SESSION['url_seo'] = 'http://interno.xsinformatica.com.br:1702/siteestatico/www/';
}
elseif($_SERVER['HTTP_HOST']=="interno.xsinformatica.com.br:1703"){
	$_SESSION['url_seo'] = 'http://interno.xsinformatica.com.br:1703/siteestatico/www/';
}
elseif($_SERVER['HTTP_HOST'] == 'siteestatico.com.br'){
	if($_SERVER['SERVER_PORT']=="443"){
		$_SESSION['url_seo'] = 'https://siteestatico.com.br/';
	}
	else{
		$_SESSION['url_seo'] = 'http://siteestatico.com.br/';
	}
}
else{
	if($_SERVER['SERVER_PORT']=="443"){
		$_SESSION['url_seo'] = 'https://siteestatico.com.br/';
	}
	else{
		$_SESSION['url_seo'] = 'http://siteestatico.com.br/';
	}
}

//Verifica se o ambiente é local (de teste) ou de produção (remoto)
if( strpos($_SESSION['url_seo'], 'xsinformatica') !== false && strpos($_SESSION['url_seo'], '192.168.0.') !== false){
    $_SESSION['ambiente'] = 'remoto';
}
else{
    $_SESSION['ambiente'] = 'local';
}
?>