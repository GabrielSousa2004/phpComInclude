 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  
</head>
<body>
    
    <?php 
        include "../include/navbar.php";
       
    ?> 
    

    <main class="">
        <!-- Div que organiza todo o formulario-->
        <div id ="boxForm " class="container-fluid bg-white gap-2 flex-column  w-50 rounded-4 m-3 mt-0 p-2 d-flex" style="height: 55vh;">
            <p class="d-flex m-0 p-0  h1">Cadastre-se</p>
            <form action=" " method="post" class="d-flex flex-column border-none ">
                    <div class="row gap-2">
                        <div class=" col-xs-12 col-md-6 col-lg-6">
                            <label for="" class="form-label">Nome: </label>
                            <input type="text" name="nome" placeholder="Digite o nome"  class="d-flex form-control" required>
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="email" placeholder="Digite o email"  class="d-flex form-control" required>
                            <label for="" class="form-label">Idade: </label>
                            <input type="number" name="idade" placeholder="Digite a idade" class="d-flex form-control" required>
                            <label for="" class="form-label">Senha: </label>
                            <input type="password" name="senha" placeholder="Digite a senha"  class="d-flex form-control" required>
                        </div>    
                       
                        <!--div que organiza a parte do genero-->   
                        <div class="col-xs-12 col-md-6 col-lg-3">
                            <label for="" class="form-label p-2">Sexo: <img src="../exercicio form/image/mascFemi.png" class="icon"></label>
                            <div class="org  d-flex flex-row">

                                <!--Organiza o Radio Masculino-->
                                <div class="form-check m-1">
                                    <label class="form-check-label" for="masc">
                                        <input class="form-check-input bg-dark" type="radio" name="sexo" id="masc" value="Masculino">
                                    Masculino <img src="../exercicio form/image/masculino.png" class="icon">
                                    </label>
                                </div>

                                <!--Organiza o Radio Masculino-->
                                <div class="form-check m-1">
                                    <label class="form-check-label" for="femi">
                                        <input class="form-check-input bg-dark" type="radio" name="sexo" id="fem" value="Feminino">
                                        Feminino  <img src="../exercicio form/image/femininoR.png" class="icon">
                                    </label>
                                </div>
                            </div>

                            <!--Select para o usuario colocar o estado de onde ele nasceu-->
                        <label class="form-check-label" for="estado">Estado</label>
                        <select name="estado" id="estado" class="form-select" required>
                            <option value="Acre">Acre</option>
                            <option value="Alagoas">Alagoas</option>
                            <option value="Amapá">Amapá</option>
                            <option value="Amazonas">Amazonas</option>
                            <option value="Bahia">Bahia</option>
                            <option value="Ceará">Ceará</option>
                            <option value="Distrito federal">Distrito Federal</option>
                            <option value="Espirito Santo">Espirito Santo</option>
                            <option value="Goiás">Goiás</option>
                            <option value="Maranhão">Maranhão</option>
                            <option value="Mato Grosso">Mato Grosso</option>
                            <option value="Mato Grosso do Sul">Mato Grosso do sul</option>
                            <option value="Minas Gerais">Minas Gerais</option>
                            <option value="Pará">Pará</option>
                            <option value="Paraíba">Paraíba</option>
                            <option value="Paraná">Paraná</option>
                            <option value="Pernambucop">Pernambuco</option>
                            <option value="Piauí">Piauí</option>
                            <option value="Rio de Janeiro">Rio de Janeiro</option>
                            <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                            <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                            <option value="Rondônia">Rondônia</option>
                            <option value="Roraíma">Roraima</option>
                            <option value="Santa Catarina">Santa Catarina</option>
                            <option value="São Paulo ">São Paulo</option>
                            <option value="Sergipe">Sergipe</option>
                            <option value="Tocantins">Tocantins</option>
                            <option value="não citado">Selecione o Estado</option>
                        </select>

                            <!--Organiza os interesses-->
                            <label for="" class="form-label">Interesses </label>
                            <div class="org d-flex flex-row m-1">
        
                                <!--Esportes-->
                                <div class="form-check m-1">
                                    <label class="form-check-label" for="futebol">
                                        <input class="form-check-input bg-dark" type="checkbox" name="interesses[]" value="Esportes" id="esporte">
                                        Esportes <img src="../exercicio form/image/esportes.png" class="icon">
                                    </label>
                                </div>
        
                                <!--Cursos-->
                                <div class="form-check m-1">
                                    <label class="form-check-label" for="cursos">
                                        <input class="form-check-input bg-dark" type="checkbox" name="interesses[]" value="Cursos" id="cursos">
                                        Cursos <img src="../exercicio form/image/livros.png" class="icon">
                                    </label>
                                </div>
        
                                <!--Modas-->
                                <div class="form-check m-1">
                                    <label class="form-check-label" for="modas">
                                        <input class="form-check-input bg-dark" type="checkbox" name="interesses[]" value="Moda" id="modas">
                                        Moda <img src="../exercicio form/image/moda.png" class="icon">
                                    </label>
                                </div>
                            </div>
                        
                        </div>
                        <!--Botão-->
                        <div class="d-flex  botaoOr">
                            <a href="#resposta"><button type="submit" name="botaoEnviar"id="botaoEnviar" class="btn btn-outline-dark botao scrollButton">Cadastrar</button></a>
                        </div>
                </form>
            </div>            
                                
                               
        </div>
        
                            <?php 
                                $nome = $_POST['nome'] ?? null;
                                $idade =$_POST['idade'] ?? null;
                                $email =$_POST['email'] ?? null;
                                $sexo =$_POST['sexo'] ?? null;
                                $estado =$_POST['estado'] ?? null;
                                $interesses = isset($_POST['interesses']) ? $_POST['interesses'] : null;
                                
                                
                                                
                            ?>
            
            <?php
            if ($nome !=null) {
            ?>
            
            <div id="resposta"  class="container-fluid  bg-white ml-1   rounded-4  d-flex   flex-column collapse" data-bs-toggle="collapse" data-bs-target="#resposta">
                <img src="../exercicio form/image/imgResposta.png" class="d-flex text-center img-fluid">
                <div class="d-flex flex-column">
                    <ul >
                        <li class="respostaCadastro" >
                            Nome: 

                            <span class="apresenta">
                                <?php
                                    echo $nome;
                                ?>
                            </span>    
                            </li>

                            <li class="respostaCadastro" >
                                Idade: 
                                <span class="apresenta">
                                    <?php
                                
                                        echo $idade." anos";
                                      
                                    ?>
                                    </span>
                            </li>

                            <li class="respostaCadastro" >
                                E-mail: 

                            <span class="apresenta">
                                <?php
                                    echo $email;
                                ?>
                            </span>
                            </li class="respostaCadastro" >
                            
                            <li class="respostaCadastro" >
                                Sexo: 
                            <span class="apresenta">
                                <?php
                                    echo $sexo
                                ?>
                            </span>

                            </li>
                            
                            <li class="respostaCadastro" >
                                Estado:
                                <span class="apresenta">
                                    <?php 
                                        
                                        echo $estado
                                    ?>
                               </span> 
                            </li>

                            <li class="respostaCadastro" >
                                Interesses: 
                            <span class="apresenta">
                                <?php
                                if ( $interesses != null) {
                                    
                                
                                    for($i = 0;$i <count($interesses); $i++){
                                        echo $interesses[$i]. " ";
                                    }
                                }   
                        
                                ?>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        <?php
            }
        ?>
    </main>
    <script src="script.js"></script>
</body>
</html>


