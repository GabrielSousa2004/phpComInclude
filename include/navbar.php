<!DOCTYPE html>
    <html lang="pt-br">
     <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calcule seu Imc</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="../include/style.css">
        
    </head>

    <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
            
            <button class="navbar-toggler mx-2" type="button" data-bs-toggle="collapse" data-bs-target="#navCelular" >
                <span class="navbar-toggler-icon"></span>
            </button>
            <img class= "icon" src="../exercicio form/image/cpsLogo.png" id="usuario" class="iconUsuario navbar-brand" style="height: 8vh;">
            <div class="container justify-content-center">
                <div class="navbar-collapse collapse p-1 flex-lg-grow-0" id="navCelular">
                    <ul id="conteudo" class="navbar-nav nav-underline text-center">
                        <li class="nav-item ">
                            <a  href="../exercicio form/form.php" type="button" class="nav-link">Cadastre-se</a>
                        </li>
                    

                        <!-- <button type="button" onclick="addAtivo()" class="bg-transparent border-0"> -->
                            
                        <!-- </button> -->
                            <li  class="nav-item">
                                <a href="../exercicio imc/imc.php" class="nav-link">Calculadora de imc</a>
                            </li>
                            <li  class="nav-item">
                                <a href="../exercicio triangulos/triangulo.php" class="nav-link">Calculadora de Triangulo</a>
                            </li>
                            <li  class="nav-item">
                                <a href="../exercicio tabuada/tabuada.php" class="nav-link">Tabuada</a>
                            </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
       
        <script>
            function addAtivo(){
                var cadastra = document.getElementById("linkLaranja")
                cadastra.classList.add("active");
            }
        

        </script>
    </body>