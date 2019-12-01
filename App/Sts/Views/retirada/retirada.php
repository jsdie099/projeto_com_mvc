<div class="wrapper text-center">
    <script src="js/jquery.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script>
        $(document).ready(function () {
            atualiza();
        });
        function atualiza() {
            $.get("acao_retirada.php",function (resultado) {
                $('#notificacao').html(resultado);
            });
            setTimeout('atualiza()',5000);
        }
    </script>
    <h1 id="notificacao"></h1>
    <h3 id="texto_cliente">O estabelecimento recebeu a notificação de seu pedido,<br>
        você pode aguardar a notificação de aprovação ou pode ir direto ao estabelecimento,<br>
        agradecemos a escolha e desejamos que volte novamente a escolher o nosso humilde estabelecimento =)</h3>

    <a href="cardapio"><p style="font-size: 25px; margin-top: 30px">Voltar para o cardápio</p></a>
</div>
