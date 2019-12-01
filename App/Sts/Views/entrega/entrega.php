<script>
        $(document).ready(function () {
            atualiza();
        });
        function atualiza() {
            $.get(function (resultado) {
                $('#notificacao').html(resultado);
            });
            setTimeout('atualiza()',5000);
        }
</script>
<div id="notificacao">
</div>
<?php
if(!$this->Dados):
    $_SESSION['id_pedido']=$_GET['id_pedido'];
    $_SESSION['id_pedido']=$_GET['id_pedido1'];
    $_SESSION['id_pedido2']=$_GET['id_pedido2'];
    $_SESSION['id_pedido3']=$_GET['id_pedido3'];
    $_SESSION['id_pedido4']=$_GET['id_pedido4'];
else:
    foreach($this->Dados['dados'] as $dados): 
        extract($dados);
        $_SESSION['id_pedido'] = $id;
        $_SESSION['id_pedido1'] = $id;
        $_SESSION['id_pedido2'] = $id;
        $_SESSION['id_pedido3'] = $id;
        $_SESSION['id_pedido4'] = $id;
    endforeach;
endif;

