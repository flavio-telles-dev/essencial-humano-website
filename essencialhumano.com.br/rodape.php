<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="footer1">
					<div class="row">
						<div class="col-md-6 text-dados">
							<div class="icon"><i class="fas fa-whatsapp" aria-hidden="true"></i></div>
							<span>Fale Conosco</span>
							<p class="tel"><a href="https://api.whatsapp.com/send?phone=55<?php echo preg_replace("/[^0-9]/", "", TEL1) ?>"><?php if(TEL1!="") echo TEL1; ?></a></p>
					
						</div>
						<div class="col-md-6 text-dados">
							
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<ul class="list-unstyled menu-footer">
								<li><a href="<?php echo URL1 ?>">Home</a></li>
								<li><a href="<?php echo URL1 ?>/sobrenos">Sobre N&oacute;s</a></li>
								<li><a href="<?php echo URL1 ?>/blog">Blog</a></li>
								<li><a href="<?php echo URL1 ?>/equipe">Nossa Equipe </a></li>
								<li><a href="<?php echo URL1 ?>/vagas">Vagas</a></li>
								
							</ul>
						</div>
						<div class="col-md-4">
							<ul class="list-unstyled menu-footer">
								<li><a href="<?php echo URL1 ?>/clientes">Clientes</a></li>
								<li><a href="<?php echo URL1 ?>/enviar-cv">Cadastro de Curr&iacute;culo</a></li>
								<li><a href="<?php echo URL1 ?>/servicos">Servi&ccedil;os</a></li>
								<li><a href="<?php echo URL1 ?>/contato">Contato</a></li>
								<li><a href="<?php echo URL1 ?>/politica-de-privacidade">Pol&iacute;tica de Privacidade </a></li>
							</ul>
						</div>
						<div class="col-md-5">
							<ul class="list-unstyled redes-sociais">
								<?php if(FACE !="") {?>
								<li><a href="https://www.facebook.com/<?php echo FACE ?>" target="_blank" class="facebook"><i class="fab fa-facebook"></i></a></li>
								<?php } ?> 
								<?php if(INST !="") {?>
								<li><a href="https://www.instagram.com/<?php echo INST ?>" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a></li>
								<?php } ?> 
								<?php if(TWIT !="") {?>
								<li><a href="https://www.twitter.com/<?php echo TWIT ?>" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a></li>
								<?php } ?> 
								<?php if(GOOG !="") {?>
								<li><a href="https://plus.google.com/<?php echo GOOG ?>" target="_blank" class="google"><i class="fab fa-google-plus-g"></i></a></li>
								<?php } ?> 
								<?php if(YTBE !="") {?>
								<li><a href="https://www.youtube.com/channel/<?php echo YTBE ?>" target="_blank" class="youtube"><i class="fab fa-youtube"></i></a></li>
								<?php } ?>
								<?php if(LNKD !="") {?>
								<li><a href="https://br.linkedin.com/in/<?php echo LNKD ?>" target="_blank" class="linkedin"><i class="fab fa-linkedin"></i></a></li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="footer2">
					<p class="tit">AONDE ESTAMOS</p>
					<p class="end"><?php echo END1 ?>, <?php echo BAI1 ?>, <?php echo CID1 ?> - <?php echo EST1 ?></p>
					<a href="<?php echo MAP2; ?>" target="_blank">Como Chegar</a>
				</div>
			</div>
			<div class="col-md-6 copyright">
				<p class="foot-e">&#169; <span id="copyright-year"></span> <?php echo EMP1 ?></p>
			</div>
			<div class="col-md-6 copyright">
				<p class="foot-d"><?php echo WEB; ?></p>
			</div>
		</div>
	</div>
</footer>



<!-- Botões flutuantes -->
<div class="botoes-flutuantes">

    <!-- Botão WhatsApp -->
    <a href="https://api.whatsapp.com/send?phone=556241033117"
       class="botao-flutuante botao-whatsapp"
       target="_blank"
       rel="noopener noreferrer"
       aria-label="Falar pelo WhatsApp"
       title="Fale connosco pelo WhatsApp">

        <svg viewBox="0 0 24 24" aria-hidden="true">
            <path fill="currentColor" d="M20.52 3.48A11.82 11.82 0 0 0 12.08 0C5.5 0 .15 5.35.15 11.93c0 2.1.55 4.15 1.6 5.96L.05 24l6.27-1.64a11.9 11.9 0 0 0 5.76 1.47h.01c6.58 0 11.93-5.35 11.93-11.93 0-3.19-1.24-6.19-3.5-8.42ZM12.09 21.8a9.9 9.9 0 0 1-5.04-1.38l-.36-.21-3.72.97.99-3.63-.24-.37a9.85 9.85 0 0 1-1.51-5.25c0-5.46 4.45-9.9 9.91-9.9 2.65 0 5.14 1.03 7.01 2.9a9.85 9.85 0 0 1 2.9 7.01c0 5.46-4.45 9.9-9.91 9.9Zm5.43-7.42c-.3-.15-1.77-.87-2.05-.97-.28-.1-.47-.15-.67.15-.2.3-.77.97-.95 1.17-.17.2-.35.22-.65.07-.3-.15-1.25-.46-2.38-1.47-.88-.79-1.47-1.76-1.64-2.06-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.18.2-.3.3-.5.1-.2.05-.37-.02-.52-.08-.15-.67-1.62-.92-2.22-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.8.37-.27.3-1.04 1.02-1.04 2.49 0 1.47 1.07 2.89 1.22 3.09.15.2 2.1 3.2 5.08 4.49.71.3 1.27.49 1.7.62.71.23 1.36.2 1.87.12.57-.08 1.77-.72 2.02-1.42.25-.7.25-1.3.17-1.42-.07-.13-.27-.2-.57-.35Z"/>
        </svg>
    </a>

    <!-- Botão voltar ao topo -->
    <button type="button"
            class="botao-flutuante botao-topo"
            id="botaoTopo"
            aria-label="Voltar ao topo"
            title="Voltar ao topo">

        <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M12 19V5M5 12l7-7 7 7"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"/>
        </svg>
    </button>

</div>
<script type="text/javascript">

(function () {
    var botaoTopo = document.getElementById('botaoTopo');

    if (!botaoTopo) return;

    // Mostrar o botão ao descer a página
    function verificarScroll() {
        if (window.scrollY > 250 ||
            document.documentElement.scrollTop > 250) {
            botaoTopo.classList.add('visivel');
        } else {
            botaoTopo.classList.remove('visivel');
        }
    }

    // Subir suavemente ao topo
    botaoTopo.addEventListener('click', function () {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    window.addEventListener('scroll', verificarScroll, {
        passive: true
    });

    verificarScroll();
})();

</script>