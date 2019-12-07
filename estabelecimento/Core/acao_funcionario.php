
<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    foreach($_SESSION['pedidos'] as $dados):
        extract($dados);
        ?>
        
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-4">
                <h3>
                    Pedido N° <?=$id?> <br>(Lanche: <?=$tipo?>,preço: R$<?=number_format($preco,2,',','.')?><br>
                    quantidade: <?=$quantidade?>, forma: <?=$forma?>)
                </h3>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <h3>Escolher:</h3>
                    <a href="" >
                        <img src="assets/imagens/teste.png" alt="" title="Aceitar" style="width:50px; height:50px;">
                        <img src="assets/imagens/images.png" alt="" title="Negar" style="width:50px; height:50px;">
                    </a>
                </div>
            </div>
        </div>

        <?php
    endforeach;
?>

    