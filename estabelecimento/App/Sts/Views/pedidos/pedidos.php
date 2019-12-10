
<div class="wrapper text-center">
    <h1 class="titulo">Pedidos Pendentes</h1><br><br>        
            <script>
                $(document).ready(function () {
                    atualiza();
                });
                function atualiza() 
                {
                    $.get("Core/acao_funcionario.php",function (resultado) {
                    $('#notificacao').html(resultado);
                });
                setTimeout('atualiza()',5000);
            }
        </script>
    <h1 id="notificacao">
        <?php
            require_once "Core/acao_funcionario.php";
        ?>
    </h1>
</div>