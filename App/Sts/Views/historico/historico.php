
<div class="wrapper text-center" id="table_hist">
    <div class="container">
        <table class="table table-bordered table-responsive" >
            <tr>
                <td style="width: 20%;">
                    <h3>Identificação</h3>
                </td>
                <td>
                    <h3>Preço</h3>
                </td>
                <td>
                    <h3>Status</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    $cont=0;


                    foreach ($this->Dados as $dados):
                        extract($dados);

                    ?>
                        <h3><?=$id?></h3>
                    <?php
                    $cont++;
                    endforeach;
                    ?>
                </td>
                <td>
                    <?php
                    $cont =0;

                    foreach ($this->Dados as $dados):
                        extract($dados);
                        ?>
                        <h3><?=number_format($preco,"2",",",".")?></h3>
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
                        switch ($status):
                            case 0:
                                $status = "Pedido negado";
                            break;
                            case 1:
                                $status = "Pedido Pendente <a href='entrega?id_pedido=$id'>Acompanhar</a>";
                                break;
                            case 2:
                                $status = "Pedido Aceito <a href='entrega?id_pedido=$id'>Acompanhar</a>";
                                break;
                            case 3:
                                $status = "Saiu para entrega <a href='entrega?id_pedido=$id'>Acompanhar</a>";
                                break;
                            case 4:
                                $status = "<h3>Pedido Finalizado</h3>";
                                break;

                        endswitch;
                        ?>
                        <h3><?=$status?></h3>
                        <?php
                        $cont++;
                    endforeach;
                    ?>
                </td>
            </tr>
        </table>
    </div>
    <nav aria-label="...">
        <ul class="pagination pagination-lg">
            <li class="page-item">
                <a class="page-link" href="#">Anterior</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item">
                <a class="page-link">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Próximo</a>
            </li>
        </ul>
    </nav>
</div>
