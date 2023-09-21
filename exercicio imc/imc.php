<?php
    $peso = $_POST['peso'] ?? null;
    $altura = $_POST['altura'] ?? null;

    $altura /= 100;

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcule seu Imc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">   
  
</head>

<body>


    <?php 
        include "../include/navbar.php";
       
    ?> 


    <main class="d-flex justify-content-center">
        <div class="container">
            <div class="row">
                <p class="h1 text-center w-100 d-flex align-items-center justify-content-center p-2">Calcule seu IMC</p>
                <div class=" col-12 text-center d-flex justify-content-center align-items-center flex-column">
                    <?php
                    if ($peso == null) {
                    ?>
                        <img src="../exercicio imc/image/imagemDuvida.png" class=" img-imc  d-flex img-responsive img-fluid">
                    <?php
                    }
                    ?>
                    <?php
                    if ($peso != null) {
                    ?>

                        <?php
                        $imc = $peso / ($altura * $altura);
                        if ($imc <= 18.5) {
                        ?>

                            <img src="../exercicio imc/image/abaixoPeso.png" class="img-imc d-flex img-responsive justify-content-center align-items-center img-fluid">

                            <div class="">
                                <span class="text-primary">
                                    <p class="h1 text-center font-weight-bold">O seu imc é:
                                            <?php
                                            echo number_format($imc, 2);
                                            ?>
                                    </P>
                                    <p>
                                        Abaixo do Peso
                                    </p>
                                </span>
                            </div>
                        <?php
                        } else if ($imc <= 25) {
                        ?>

                            <img src="../exercicio imc/image/pesoNormal.png" class="img-imc d-flex img-responsive  img-fluid">

                            <div class="">
                                <span class="text-success">
                                    <p class="h1 text-center font-weight-bold">O seu imc é:
                                            <?php
                                            echo number_format($imc, 2);
                                            ?>
                                    </P>
                                    
                                    <p>
                                        Peso normal
                                    </p>
                                </span>
                            </div>
                        <?php
                        } else if ($imc <= 30) {
                        ?>


                            <img src="../exercicio imc/image/acimaPeso.png" class="img-imc d-flex img-responsive  img-fluid">

                            <div class="">
                                <span class="text-warning">
                                    <p class="h2 text-center font-weight-bold">O seu imc é:
                                            <?php
                                            echo number_format($imc, 2);
                                            ?>
                                    </P>
                                    
                                    <p>
                                        Acima do Peso
                                    </p>
                            </span>
                            </div>
                        <?php
                        } else if ($imc <= 40) {
                        ?>
                            <img src="../exercicio imc/image/acimaPesoGrau1.png" class="img-imc d-flex img-responsive  img-fluid">

                            <div class="">
                                <span class="text-warning">
                                    <p class="h2 text-center font-weight-bold">O seu imc é:
                                        <?php
                                        echo number_format($imc, 2);
                                        ?>
                                    </P>

                                    <p>
                                    OBESIDADE GRAU 1, procure um médico
                                </p>
                                </span>
                            </div>

                        <?php
                        } else {
                        ?>
                            <img src="../exercicio imc/image/acimaPesoGrau2.png" class="img-imc d-flex img-responsive  img-fluid">

                            <div class="">
                                <span class="text-danger">
                                    <p  class="h2 text-center font-weight-bold">O seu imc é:
                                        <?php
                                        echo number_format($imc, 2);
                                        ?>
                                    </P>

                                    <p>
                                    OBESIDADE GRAU 2, procure um médico Urgente!
                                </p>
                                </span>
                            </div>
                        <?php
                        }
                        ?>
                </div>
            <?php
                    }
                    ?>
        </div>
        <form action="imc.php" method="post" class="d-flex p-2 flex-column border-none justify-content-center align-items-center">
            <div class="col-12 text-center">
                <label class="form-label">
                    Digite sua altura: 
                    <input type="number" id="altura" name="altura" class="form-control" placeholder=" Altura" required>
                </label>
            </div>
            <div class="col-12 text-center">
                <label class="form-label">
                    Digite seu peso: 
                    <input type="number" id="peso" name="peso" class="form-control" placeholder=" Peso" required>
                </label>
            </div>
            <div class="d-flex p-2 botaoOr text-align-center justify-content-center">
                <button type="submit" name="botaoEnviar" id="botaoEnviar" class="btn btn-outline-dark">Calcular</button>
            </div>
        </form>
</div>       
</main>

</body>

</html>