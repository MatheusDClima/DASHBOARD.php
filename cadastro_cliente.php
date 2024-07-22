<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body>

    <div class="container">
    <h2>Cadastro de Clientes</h2>
   
        <form action="cadastro_cliente2.php" method="post">
            <div class="form-group mb-3 mt-3">
                <label class="form-label" for="">Selecione o Mês</label>
                <select class="form-control" name="mes" id="">
                    <option>Jan</option>
                    <option>Fev</option>
                    <option>Mar</option>
                    <option>Abr</option>
                    <option>Mai</option>
                    <option>Jun</option>
                    <option>Jul</option>
                    <option>Ago</option>
                    <option>Set</option>
                    <option>Out</option>
                    <option>Nov</option>
                    <option>Dez</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label class="form-label" for="">Digite a Quantidade</label>
                <input type="number" name="quantidade" class="form-control" autocomplete="off">
            </div>
          
            <div style="text-align: right ">
                <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>


</html>