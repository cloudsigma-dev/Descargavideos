<div class="error_res"><?php echo $R['error_texto'];?></div>

<?php
if($R['WEB'] !== '' && !(defined('IGNORA_AVISO_RAPIDO') || !IGNORA_AVISO_RAPIDO)) include 'plantillas/extras/aviso_rapido_js.php';
$error_tracker_msg = defined('ERROR_TRACK_NAME') ? json_encode(ERROR_TRACK_NAME) : '"Versión sin info extra"';
?>

<center><?php if (ADS) echo getPubliJS(300, 250, true)?></center>

<script>_gaq.push(["_trackEvent","Descargas URL fallidas",<?=json_encode($web)?>]);</script>