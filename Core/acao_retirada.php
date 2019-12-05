<script src="assets/js/jquery.js"></script>
<script src="assets/js/sweetalert2.all.js"></script>

<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    if(isset($_SESSION['id_pedido']))
    {
        if($_SESSION['status']==1)
        {
            if(isset($_SESSION['id_pedido1']))
            {
                echo "<script>
                            $(document).ready(function sweetalertclick() 
                            {
                                Swal.fire
                                (
                                    'Seu pedido ainda aguarda aprovação',
                                    'Se mantenha nesta tela para receber as notificações',
                                    ''
                                )
                           } );
                    </script>";
                unset($_SESSION['id_pedido1']);
            }
        }
        if($_SESSION['status']==2)
        {
            if(isset($_SESSION['id_pedido2']))
            {
                echo "<script> 
                        $(document).ready(function sweetalertclick() 
                        {
                            Swal.fire
                            (
                                'Seu pedido foi aprovado',
                                'Você já pode se direcionar ao estabelecimento',
                                'success'
                            )
                        } );
                        </script>";
                unset($_SESSION['id_pedido2']);
            }
        }
        
        if($_SESSION['status']==0)
        {
            if(isset($_SESSION['id_pedido']))
            {
                echo "<script> 
                        $(document).ready(function sweetalertclick() 
                         {
                            Swal.fire(
                                'Seu pedido foi negado =(',
                                'Clique em ok para ser redirecionado ao cardápio novamente',
                                'error'
                            )
                        } );
                        window.onclick = function() 
                        {
                            window.location.href='cardapio';
                        }
                    </script>";
                unset($_SESSION['id_pedido']);
            }
        }
    }
    