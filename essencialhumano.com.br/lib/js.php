<!-- Arquivos js-->
<?php if($tipo_pagina == 4) {?>
<script type="text/javascript" src="<?php echo URL1 ?>/dist/js/jquery-1.8.3.min.js"></script>
<?php }else{ ?>
<script src="<?php echo URL1 ?>/dist/js/jquery-3.3.1.min.js"></script>
<?php } ?>
<script src="<?php echo URL1 ?>/dist/js/bootstrap.min.js"></script>
<?php if($tipo_pagina == 0) {?>
<script src="<?php echo URL1 ?>/dist/js/21.owl.carousel.min.js" defer></script><?php } ?>
<?php if($tipo_pagina!=0 && $tipo_pagina!=1 && $tipo_pagina!=2 && $tipo_pagina!=3 && $tipo_pagina!=4 && $tipo_pagina!=5 && $tipo_pagina!=6 && $tipo_pagina!=8 && $tipo_pagina!=9 && $tipo_pagina!=10) {?>
<script src="<?php echo URL1 ?>/dist/js/22.jquery.mask.min.js" defer></script>
<?php } ?>
<script src="<?php echo URL1 ?>/dist/js/template.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js" defer></script>
<?php if($tipo_pagina!=0 && $tipo_pagina!=1 && $tipo_pagina!=2 && $tipo_pagina!=3 && $tipo_pagina!=4 && $tipo_pagina!=6 && $tipo_pagina!=8 && $tipo_pagina!=9 && $tipo_pagina!=10) {?>
<!-- form js -->
<script type="text/javascript" src="<?php echo URL1 ?>/dist/js/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo URL1 ?>/dist/js/additional-methods.js"></script>
<script type="text/javascript" src="<?php echo URL1 ?>/dist/js/solicitar_cadastro.js"></script>
<?php } ?>
<?php if($tipo_pagina!=0 && $tipo_pagina!=1 && $tipo_pagina!=2 && $tipo_pagina!=3 && $tipo_pagina!=5 && $tipo_pagina!=6 && $tipo_pagina!=7 && $tipo_pagina!=8 && $tipo_pagina!=9 && $tipo_pagina!=10) {?>
<script type="text/javascript" src="<?php echo URL1 ?>/dist/js/jquery.validate1.js"></script>
<script type="text/javascript" src="<?php echo URL1 ?>/dist/js/solicitar_cadastro1.js"></script>

<script type="text/javascript" src="<?php echo URL1 ?>/dist/js/validations.js"></script>
<script type="text/javascript" src="<?php echo URL1 ?>/dist/js/jquery.maskedinput.js"></script>
<script type="text/javascript" src="<?php echo URL1 ?>/dist/js/jquery.maskMoney.js"></script>
<script type="text/javascript" src="<?php echo URL1 ?>/dist/js/jquery.mask.min.js"></script>

<script type="text/javascript"> $(document).ready(function() { inicializaTela(); }); </script>
<script type="text/javascript">
$(document).tooltip({ selector: "[title]",
                              trigger: "focus"}); 
</script>
<?php } ?>
