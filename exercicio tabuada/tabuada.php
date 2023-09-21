<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../Tabuada/css/style.css">
    <title>Calcule triângulo</title>
</head>
<body class = "w-100 h-100 justify-content-center align-items-center">
    <?php 
        include "../include/navbar.php";
       
    ?> 

    <main class = "p-2 d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col-12">
                <div class="container border border-dark rounded mb-2" id = "boxConta">
                    <form method = "POST" class = "p-2">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-12">
                                <label for="" class="form-label">Digite o valor:</label>
                                <input type="number" name="numero" placeholder="Digite o valor"  class="d-flex form-control" required>
                            </div>
                            <div class="col-12">
                                <button type="submit" name="botaoEnviar"id="botaoEnviar" class="btn btn-outline-dark ms-4 mt-4">Calcular</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php
                //Passando os dados do form para a variavel
                $numero = $_POST['numero'] ?? null;
                if($numero != null){
             ?>
                    <div class="col-md-12 justify-content-center align-items-center d-flex flex-column rounded">
                    <?php
                       for($i = 1; $i <=10; $i++){
                    ?> 
                    <div class="row w-100 border border-dark justify-content-center align-items-center">
                        <div class="col">
                                <?php
                                     $resultado = $numero*$i;
                                     echo $numero . " x " . $i . " = " . $resultado; 
                                ?>
                        </div>
                    </div> 
                    <?php
                       }
                    ?>
            <?php
                }
            ?>
        </div>
    </main>
</body>
</html>