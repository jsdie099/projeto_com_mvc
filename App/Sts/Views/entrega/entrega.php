<script src="assets/js/jquery.js"></script>
<script src="assets/js/sweetalert2.all.min.js"></script>
<script>
            $(document).ready(function () {
                atualiza();
            });
            function atualiza() {
                $.get("acao_entrega.php",function (resultado) {
                    $('#notificacao').html(resultado);
                });
                setTimeout('atualiza()',3500);
            }
</script>
<div id="notificacao" class="text-center">
</div>
<?php
unset($_SESSION['endereco']);
if(!$this->Dados):
    $_SESSION['id_pedido']=$_GET['id_pedido'];
    $_SESSION['id_pedido']=$_GET['id_pedido'];
    $_SESSION['id_pedido2']=$_GET['id_pedido'];
    $_SESSION['id_pedido3']=$_GET['id_pedido'];
else:
    foreach($this->Dados['dados'] as $dados): 
        extract($dados);
        $_SESSION['id_pedido'] = $id;
        $_SESSION['id_pedido1'] = $id;
        $_SESSION['id_pedido2'] = $id;
        $_SESSION['id_pedido3'] = $id;
        $_SESSION['status'] = $status;
    endforeach;
endif;
require_once "acao_entrega.php";
?>
