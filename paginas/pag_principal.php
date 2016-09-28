<div class="columna_izq">
	<div class="bloque_pagina bloqueMargin txt_centrado">
		<h3><?php echo TXT_TUTORIAL_YOUTUBE_TIT?></h3>
		<br/><br/>
		<div class="video_560 txt_centrado">
			<div id="ytapiplayer2" style="display:none;">
			</div>
			<img src="/img/prev_video_principal.jpg" id="imageID" style="cursor:pointer" alt="Haz click para ver el vídeo"/>
			<script>
			D.g('imageID').onclick = function(){
				D.g('ytapiplayer2').style.display="inherit";
				D.g('ytapiplayer2').innerHTML += '<iframe width="560" height="315" src="http://www.youtube.com/embed/7-Xvmz-jNrg?autoplay=1" frameborder="0" allowfullscreen></iframe>';
				D.g('imageID').style.display="none";
			};
			</script>
		</div>
		<br/><br/>
		<?php echo TXT_TUTORIAL_YOUTUBE_DESC?>
	</div>

	<div class="bloque_pagina bloqueMargin">
		<div class="txt_centrado">
			<?php echo TXT_ARRASTRA_BOOKMARKLET?><br/><br/>
			<a href="<?php echo BOOKMARKLET_V2?>" class="bookmarklet"><?php echo TXT_BOOKMARKLET?></a>
		</div><br/><br/>
		<?php echo TXT_BOOKMARKLET_DESC?>
	</div>
	<div class="bloque_pagina bloqueMargin">
		<h3><?php echo TXT_COMO_DESCARGAR_VIDEOS_TIT?></h3><br/><br/>
		<?php echo TXT_COMO_DESCARGAR_VIDEOS_DESC?>
		<br/><br/>
		
		<h3><?php echo TXT_COMO_DESCARGAR_VIDEOS_2_TIT?></h3><br/><br/>
		<?php echo TXT_COMO_DESCARGAR_VIDEOS_2_DESC?>
		<br/><br/>
		
		<h3><?php echo TXT_CANALES_SOPORTADOS_TIT?></h3><br/><br/>
		<?php echo TXT_CANALES_SOPORTADOS_DESC?>
	</div>
	<div class="bloque_pagina bloqueMargin">
		<h3><?php echo TXT_NO_PUEDO_DESCARGAR_TIT?></h3><br/><br/>
		<?php echo TXT_NO_PUEDO_DESCARGAR_DESC?>
	</div>
	<?php /*
	<div class="bloque_pagina bloqueMargin">
		<h3>Últimos vídeos calculados</h3><br/><br/>
		<?php
			$old = getDownloads();
			foreach($old as $elem){
				echo '<a target="blank" href="/web/b64/'.urlencode($elem['titulo']).'/'.urlencode(base64_encode($elem['web'])).'">'.$elem['titulo'].'</a><br/>';
			}
		?>
	</div>
	*/ ?>
</div>
<div class="columna_der">
	<div class="bloque_pagina bloqueMargin txt_centrado">
		<div class="bloque publi_res" id="contendor_publi_res">
			<?php echo getPubliJS(300, 250)?>
		</div>
	</div>
	<div class="bloque_pagina bloqueMargin txt_centrado">
		<a class="twitter-timeline"  href="https://twitter.com/descargavids"  data-widget-id="367404729648705536">Tweets por @descargavids</a>
	</div>
	<div class="bloque_pagina bloqueMargin txt_centrado">
		<?php echo TXT_BLOQUE_DV_EN_TU_WEB?>
	</div>
	<div class="bloque_pagina bloqueMargin txt_centrado">
		<?php echo TXT_BLOQUE_DONACION?>
		<br/><br/>
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="TWBMG8NXCKZJN">
			<input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
			<img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
		</form>
	</div>
</div>