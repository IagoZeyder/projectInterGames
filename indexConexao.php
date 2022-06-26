<?php 
/* Apos clicar em jogar, insere as informações no banco */

    include_once("indexBanco.php");
    $nome = filter_input(INPUT_GET,'username',FILTER_SANITIZE_STRING);
    $nomeTutor = filter_input(INPUT_GET,'tutor',FILTER_SANITIZE_STRING);
    echo "Nome: $nome<br>"; 
    echo "Nome: $nomeTutor<br>"; 
    if ($nome == null & $nomeTutor == null){    
        $nome = 'Jogador 1';          
        $nomeTutor = 'Tutor 1';          
    }
    if($nome != null){
        $result_usuario = "INSERT INTO usuarios (nome, acesso) VALUES('$nome',NOW() )";
        $result_usuarioTutor = "INSERT INTO tutores (nome, acesso) VALUES('$nomeTutor',NOW() )";
        $resultado_1 = mysqli_query($mysqli,$result_usuario);
        $resultado_2 = mysqli_query($mysqli,$result_usuarioTutor);
    }
    //$cod = rand(1,3);
    //$cod = 4;
    header('Location: http://localhost/interJogos/home/indexLoading.php');        
       
       