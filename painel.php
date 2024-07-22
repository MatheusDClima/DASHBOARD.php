<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-bg-primary mb-3" style="max-width: 25rem;">
                    <div class="card-header" style="text-align: center">Total Clientes / Ano</div>
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center; font-size: 40px">
                            <?php 
                                include('conexao/conexao.php');
                                $sql = "SELECT SUM(quantidade) AS total FROM clientes";
                                $consulta = mysqli_query($conexao, $sql);
                                $dados = mysqli_fetch_array($consulta);
                                echo $dados['total'];
                            ?> 
                            <span style="font-size: 15px"> / unid</span>
                        </h5>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="card text-bg-success mb-3" style="max-width: 25rem;">
                    <div class="card-header" style="text-align: center">Faturamento / Ano</div>
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center; font-size: 40px">
                            <?php 
                                include('conexao/conexao.php');
                                $sql = "SELECT SUM(valor_vendas) AS total_vendas FROM `vendas`;";
                                $consulta = mysqli_query($conexao, $sql);
                                $dados = mysqli_fetch_array($consulta);
                                $valor = $dados['total_vendas'];
                                echo 'R$ ' . number_format($valor,2,',','');
                            ?>
                            <span style="font-size: 15px"> / BRL</span>
                        </h5>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="card text-bg-danger mb-3" style="max-width: 25rem;">
                    <div class="card-header" style="text-align: center">Total Vendas / Ano</div>
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center; font-size: 40px">
                        <?php 
                                include('conexao/conexao.php');
                                $sql = "SELECT SUM(qtd_vendas) AS total_quantidade FROM `vendas`;";
                                $consulta = mysqli_query($conexao, $sql);
                                $dados = mysqli_fetch_array($consulta);
                                echo $valor = $dados['total_quantidade'];
                                
                            ?>
                            <span style="font-size: 15px"> / qtd</span>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>