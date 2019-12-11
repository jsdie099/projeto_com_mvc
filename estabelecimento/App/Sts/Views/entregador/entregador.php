
<div class="wrapper text-center">
    <h1 class="titulo">Pedidos Pendentes</h1><br><br>        
            <script>
                $(document).ready(function () {
                    atualiza();
                });
                function atualiza() 
                {
                    $.get("Core/acao_entregador.php",function (resultado) {
                    $('#notificacao').html(resultado);
                });
                setTimeout('atualiza()',5000);
            }
        </script>
        <h1 id="nenhum" style="display: none;">Nenhum pedido no momento!</h1>
    <h1 id="notificacao">
        <?php
            require_once "Core/acao_entregador.php";
        ?>
    </h1>
</div>
