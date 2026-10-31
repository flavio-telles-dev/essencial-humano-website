<div class="midas-sociais">
	<h2>Siga nas mídias sociais</h2>

	<?php if(FACE !="") {?>
	<a href="https://www.facebook.com/<?php echo FACE ?>" target="_blank" class="facebook"><span><i class="fab fa-facebook"></i> Acompanhe nosso Facebook</span></a></li>
	<?php } ?> 
	<?php if(INST !="") {?>
	<a href="https://www.instagram.com/<?php echo INST ?>" target="_blank" class="instagram"><span><i class="fab fa-instagram"></i>Visite nossa página no Instagram</span></a>
	<?php } ?> 
	<?php if(TWIT !="") {?>
	<a href="https://www.twitter.com/<?php echo TWIT ?>" target="_blank" class="twitter"><span><i class="fab fa-twitter"></i>Acompanhe nosso Twitter</span></a>
	<?php } ?> 
	<?php if(GOOG !="") {?>
	<a href="https://plus.google.com/<?php echo GOOG ?>" target="_blank" class="google"><span><i class="fab fa-google-plus-g"></i>Acompanhe nosso Google Plus</span></a>
	<?php } ?> 
	<?php if(YTBE !="") {?>
	<a href="https://www.youtube.com/channel/<?php echo YTBE ?>" target="_blank" class="youtube"><span><i class="fab fa-youtube"></i>Acompanhe nosso Canal do Youtube</span></a>
	<?php } ?>
	<?php if(LNKD !="") {?>
	<a href="https://br.linkedin.com/in/<?php echo LNKD ?>" target="_blank" class="linkedin"><span><i class="fab fa-linkedin"></i>Visite nossa página no Linkedin</span></a>
	<?php } ?>

</div>
<div class="endereco">
	<h2>Endereço</h2>
	<p><?php echo END1; ?>, <?php echo BAI1; ?>, <?php echo CID1; ?> - <?php echo EST1; ?> <?php echo CEP0; ?></p>
	<p><?php echo MAP1; ?><br>
	<a href="<?php echo MAP2; ?>" target="_blank"><i class="fas fa-map-marker-alt"></i> Ver mapa de localização</a></p>
</div> 