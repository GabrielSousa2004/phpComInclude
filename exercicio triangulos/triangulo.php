<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../exercici triangulos/css/style.css">
    <title>Calcule triângulo</title>
</head>
<body class = "w-100 h-100">
<?php 
        include "../include/navbar.php";
       
    ?> 
    
    <main class = "p-2 d-flex justify-content align-items-center">
        <div class="row">
            <div class="col-md-6">
                <div class="container border border-primary rounded mb-2">
                    <form  method = "POST" class = "p-2">
                        <div class="row">
                            <div class="col-12">
                                <label for="" class="form-label">Primeiro lado do triângulo:</label>
                                <input type="number" name="lado1" placeholder="Digite o valor"  class="d-flex form-control" required>
                            </div>
                            <div class="col-12">
                                <label for="" class="form-label">Segundo lado do triângulo:</label>
                                <input type="number" name="lado2" placeholder="Digite o valor"  class="d-flex form-control" required>
                            </div>
                            <div class="col-12">
                                <label for="" class="form-label">Terceiro lado do triângulo:</label>
                                <input type="number" name="lado3" placeholder="Digite o valor"  class="d-flex form-control" required>
                            </div>
                            <div class="col-8"></div>
                            <div class="col-4">
                                <button type="submit" name="botaoEnviar"id="botaoEnviar" class="btn btn-outline-dark ms-4 mt-4">Calcular</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php
                    //Passando os dados do form para a variavel
                    $lado1 = $_POST['lado1'] ?? null;
                    $lado2 = $_POST['lado2'] ?? null;
                    $lado3 = $_POST['lado3'] ?? null;
                    
                    //Definindo o tipo de triangulo
                    // 1 = Triangulo Equilatero 
                    // 2 = Triangulo Escaleno
                    // 3 = Triangulo Isóceles
                    if($lado1 == $lado2 && $lado2 == $lado3){
                        $tpTriangulo = 1;
                    } else if($lado1 != $lado2 && $lado2 != $lado3 && $lado1 != $lado3){
                        $tpTriangulo = 2;
                    } else{
                        $tpTriangulo = 3;
                    }
             ?>
             <?php
                if($lado1 != null && $lado2 != null && $lado3 != null){
             ?>
                    <div class="col-md-6 border border-primary justify-content-center align-items-center d-flex flex-column rounded">
                    <?php
                        if($tpTriangulo == 1){
                    ?>    
                            <img src="../exercicio triangulos/image/tEqui.png" alt="">
                            <p>Triângulo Equilátero (os 3 lados são iguais).</p>
                    <?php
                        } else if($tpTriangulo == 2){
                    ?>
                            <img src="../exercicio triangulos/image/tEsca.png" alt="">
                            <p>Triângulo Escaleno (os 3 lados são diferentes).</p>
                    <?php
                        } else{
                    ?>
                           <img src="../exercicio triangulos/image/tIso.png" alt="">
                            <p>Triângulo Isósceles (2 lados iguais e 1 diferente).</p>
                    <?php
                        }
                    ?>
                    </div>

            <?php
                }
            ?>
        </div>
    </main>
</body>
</html>