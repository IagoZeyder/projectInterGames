<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Jogo da Memória</title>
        <link rel="stylesheet" href="stylesMaterialEscolar_.css">
    </head>
    <body>     
        <img src="logoInterJogos.svg" id="logo"alt=""> <!--IMG lgo do Inter Jogos -->     
        <nav  >
            <h1  id="nomeJogo" onmousemove="aumentarOpacity()">Jogo da Memoria</h1>
        </nav>        
            <p id="temaJogo"> Tema: Material Escolar </p>            
            <p id="apoio">Acertos </p>  <!-- Quantidade de acertos durante o jogo-->

            <!-- Input para colocar o nome do usuario no banco de dados-->
            <div class="nomeUsuario"><?php
                include_once("IndexBanco.php");                               
                $consultaUsuario = "SELECT * FROM usuarios ORDER BY id DESC";                
                $resultUsuario = $mysqli -> query($consultaUsuario);               
                $usuario = mysqli_fetch_assoc($resultUsuario);                                  
                echo "Jogador:  ".$usuario['nome']."       " ;                 
                ?>                                  
            </div>    
            
            <!-- Input para colocar o nome do usuario no banco de dados --> 
            <div class="nomeTutor"><?php
                include_once("IndexBanco.php"); 
                $consultaTutor = "SELECT * FROM tutores ORDER BY id DESC";
                $resultTutor= $mysqli -> query($consultaTutor);
                $tutor = mysqli_fetch_assoc($resultTutor);  
                echo "Tutor: ".$tutor['nome'];                  
            ?>
            </div>        

            <!-- Area das cartas do jogo da memoria  -->   
            <button action="AMBIENTE_DE_JOGOS\home\test.php" type="submit" id="botaoVoltar" onclick="voltarInicio()"> Inicio </button>
        <section class="jogo-memoria" onmousemove="diminuirOpacity()">
            <div class="carta-memoria" data-framework="aurelia">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/materialEscolar/arquivos629bdaef1f9ee.svg" alt="Borracha" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/materialEscolar/arquivos629bdaef8db88.svg" alt="JS Badge" />
            </div>

            <div class="carta-memoria" data-framework="aurelia">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/materialEscolar/arquivos629bdaef1f9ee.svg" alt="Borracha"  />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/materialEscolar/arquivos629bdaef8db88.svg" alt="JS Badge" />
            </div>

            <div class="carta-memoria" data-framework="vue">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/materialEscolar/arquivos629bdaef6216e.svg" alt="Cadeira" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/materialEscolar/arquivos629bdaef8db88.svg" alt="JS Badge" />
            </div>

            <div class="carta-memoria" data-framework="vue">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/materialEscolar/arquivos629bdaef6216e.svg" alt="Cadeira" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/materialEscolar/arquivos629bdaef8db88.svg" alt="JS Badge" />
            </div>

            <div class="carta-memoria" data-framework="angular">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/materialEscolar/arquivos629bdaef7d0d9.svg" alt="Caderno" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/materialEscolar/arquivos629bdaef8db88.svg" alt="JS Badge" />
            </div>

            <div class="carta-memoria" data-framework="angular">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/materialEscolar/arquivos629bdaef7d0d9.svg" alt="Caderno" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/materialEscolar/arquivos629bdaef8db88.svg" alt="JS Badge" />
            </div>

            <div class="carta-memoria" data-framework="ember">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/materialEscolar/arquivos629bdaef9da96.svg" alt="lapis" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/materialEscolar/arquivos629bdaef8db88.svg" alt="JS Badge" />
            </div>

            <div class="carta-memoria" data-framework="ember">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/materialEscolar/arquivos629bdaef9da96.svg" alt="lapis"  />                
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/materialEscolar/arquivos629bdaef8db88.svg" alt="JS Badge" />                
            </div>

            <div class="carta-memoria" data-framework="backbone">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/materialEscolar/arquivos629bdaefd5562.svg" alt="Mochila" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/materialEscolar/arquivos629bdaef8db88.svg" alt="JS Badge" />                
            </div>

            <div class="carta-memoria" data-framework="backbone">
                <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/materialEscolar/arquivos629bdaefd5562.svg" alt="Mochila" />
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/materialEscolar/arquivos629bdaef8db88.svg" alt="JS Badge" />                
            </div>

            <div class="carta-memoria" data-framework="react">
            <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/materialEscolar/arquivos629bdaeff2490.svg" alt="Tesoura" />                
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/materialEscolar/arquivos629bdaef8db88.svg" alt="JS Badge" />
                
            </div>

            <div class="carta-memoria" data-framework="react">                    
            <img class="carta-frontal" src="http://localhost/interJogos/home/bancoImagens/materialEscolar/arquivos629bdaeff2490.svg" alt="Tesoura" />                           
                <img class="carta-traseira" src="http://localhost/interJogos/home/bancoImagens/materialEscolar/arquivos629bdaef8db88.svg" alt="JS Badge" />
            </div>            

        </section>

        <script src="scriptsMaterialEscolar.js"></script> 
        
        
    </body>
</html>