<script>
	_gaq.push(["_trackEvent","Descargas Realizadas","<?php echo $R['CANAL'];?>"]);
	_gaq.push(["_trackEvent","Descargas URL",<?=json_encode($web)?>]);
</script>

<div class="titulo_res">
	<span id="titulo_res"><?php echo $R['titulo_res'];?></span><br/>
	<div class="descripcion_res" id="descripcion_res"><?php echo $R['descripcion_res'];?></div>
</div>
<?php if(isset($R['alerta_especifica'])){ ?>
	<div class="alerta_especifica bloque"><?php echo $R['alerta_especifica'];?></div>
<?php } ?>
<div id="enlaces" class="bloque">

<?php

// Aquí va la selección de qué tipo de resultado(s) van para luego completarlos

generaInnerResultado();

?>

</div>

<?php /*
<div class="bloque publi_res" id="contendor_publi_res">
<?php echo getPubliJS(300, 250)?>
</div>
*/?>

<div class="instrucciones_descarga bloque">
	<b>Cómo descargar:</b><br/>
	Clic derecho sobre el botón naranja, clic sobre "Guardar enlace Como...".<br/>
	<a href="http://www.youtube.com/watch?v=7-Xvmz-jNrg">Ver en YouTube cómo descargar un enlace.</a>
</div>

<?php
if(!defined('IGNORA_AVISO_RAPIDO')) include 'plantillas/extras/aviso_rapido_js.php'
?>