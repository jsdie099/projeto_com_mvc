<div class="wrapper text-center" id="cardapio">
    <div class="container" style="margin-bottom: 50px;">
        <table class="table table-bordered table-responsive">
            <tr>
                <td><h3>Identificação</h3></td>
                <td><h3>Preço</h3></td>
                <td><h3>Opções</h3></td>
                
            </tr>
            <tr>
                <td>
                    <?php
                    $cont = 0;
                    foreach ($this->Dados as $dados):
                        extract($dados);
                        ?>
                        <h3><?=$id?> - <?=$descricao?></h3>
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
                <td>
                <?php
                        $cont = 0;
                        foreach ($this->Dados as $dados):
                            extract($dados);
                            ?>
                            <h3><a href="editar">Editar</a></h3>
                            <?php
                            $cont++;
                        endforeach;
                    ?>
                    
                </td>
            </tr>
        </table>
    </div>
</div>
