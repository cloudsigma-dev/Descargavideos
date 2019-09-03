<?php

class Atresplayer extends cadena{

function calcula(){
	$imagen = entre1y2($this->web_descargada, 'og:image" content="', '"');
	$titulo = entre1y2($this->web_descargada, 'og:title" content="', '"');
	$titulo = limpiaTitulo($titulo);
	
	$referer = 'aHR0cDovL2Rpc25leWNoYW5uZWwuZXM';
	$url = entre1y2('http://gatekeeper.asociaciondevecinospoligononorte.tk/descargavideos/'. $this->web_descargada, '"url":"', '"');
	dbug_($url);
	$redir = CargaWebCurl($url, '', true, '', array(), false);
	dbug_($redir);
	$url = entre1y2($redir, 'Location: ', "\r");
	$obtenido=array(
		'titulo' => $titulo,
		'imagen' => $imagen,
		'enlaces' => array(
			array(
				//'url_txt' => 'Descargar',
				'url' => $url,
				'tipo' => 'm3u8'
			)
		)
	);
	$obtenido['alerta_especifica'] = 'No funciona con JDownloader.';
	finalCadena($obtenido);
}

}

class A3 extends cadena{

function calcula(){
	header("HTTP/1.1 302 Found");
	header("Location: http://descargavid.blogspot.com/2014/11/atresmedia-c-d.html");
	exit;
}

}
