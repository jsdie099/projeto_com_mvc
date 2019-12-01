<div class="wrapper text-center">
    <div class="container" style="margin-bottom: 50px;">
        <table class="table table-responsive">
            <tr>
                <td><h3>N°</h3></td>
                <td><h3>Descrição</h3></td>
                <td><h3>Preço</h3></td>
            </tr>
            <tr>
                <td>
                    <?php
                    $cont = 0;
                    foreach ($this->Dados as $dados):
                        extract($dados);
                        ?>
                        <h3><?=$id?> - </h3>
                        <?php
                        $cont++;
                    endforeach;
                    ?>
                </td>
                <td>
                    <?php
                    $cont = 0;
                    foreach ($this->Dados as $dados):
                        extract($dados);
                        ?>
                        <h3><?=$descricao?></h3>
                        <?php
                        $cont++;
                    endforeach;
                    ?>
                </td>
                <td>
                    <?php
                    $cont = 0;
                    foreach ($this->Dados as $dados):
                        extract($dados);
                        ?>
                        <h3>R$<?=number_format($preco,"2",',','.')?></h3>
                        <?php
                        $cont++;
                    endforeach;
                    ?>
                </td>
            </tr>
        </table>
    </div>

    <form method="post">
        <label for="numalimento">Digite o número do alimento que você deseja:<br><br>
            <input type="number" name="numalimento" required placeholder="Número do alimento"></label><br><br>
        <label for="qtdalimento">Digite a quantidade desejada (máx. 30):<br><br>
            <input type="number" name="qtdalimento" min="1" required placeholder="Quantidade do alimento"></label><br><br>
        <input type="submit" value="Enviar">
    </form>
</div>
