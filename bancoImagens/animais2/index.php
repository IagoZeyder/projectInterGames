<?php

include("conexao.php");

if (isset($_GET['deletar'])) {

    $id = intval($_GET['deletar']);
    $sql_query = $mysqli -> query("SELECT * FROM imagens WHERE id = '$id'") or die($mysqli -> error);
    $arquivo = $sql_query -> fetch_assoc();

    if (unlink($arquivo['path'])) {

        $deu_certo = $sql_query = $mysqli -> query("DELETE FROM imagens WHERE id = '$id'") or die($mysqli -> error);
        if ($deu_certo)
            echo "<p>Arquivo excluido com Sucesso!!</p>";
    }

}

function enviarArquivo($error, $size, $name, $tmp_name){
    
    include("conexao.php");

    if ($error)
        die("Falha ao enviar arquivo.");

    if ($size > 2097152)
        die("Arquivo muito grande!! Máx: 2MB.");

    $pasta = "arquivos";
    $nomeDoArquivo = $name;
    $novoNomeDoArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
    
    if ($extensao != "jpg" && $extensao != 'png' && $extensao != 'svg')
        die("Tipo de arquivo não aceito.");

    $path = $pasta . $novoNomeDoArquivo . "." . $extensao;

    $deu_certo = move_uploaded_file($tmp_name, $path);

    if ($deu_certo) {
        $mysqli -> query("INSERT INTO imagens (nome, path) VALUES ('$nomeDoArquivo', '$path')") or die($mysqli -> error);

        return true;
    }
    else {
        return false;
    }
}

if (isset($_FILES['arquivos'])) {
    $arquivos = $_FILES['arquivos'];
    $tudo_certo = true;
    foreach($arquivos['name'] as $index => $arq) {
        $deu_certo = enviarArquivo($arquivos['error'][$index], $arquivos['size'][$index], $arquivos['name'][$index], $arquivos['tmp_name'][$index]);
        if (!$deu_certo)
            $tudo_certo = false;
    }

    if ($tudo_certo)
        echo "<p>Todos os arquivos foram enviados com sucesso!</p>";
    else
        echo "<p>Falha no envio do(s) arquivo(s).</p>";
}

$sql_query = $mysqli -> query("SELECT * FROM imagens") or die($mysqli -> error);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Database Mysql</title>
</head>
<body>

    <form action="" method="POST" enctype="multipart/form-data">
        <p>
            <label for="">Selecione o arquivo</label>
            <input multiple name="arquivos[]" type="file" />
        </p>

        <button name="upload" type="submit">Enviar Arquivo</button>
    </form>

    <h1>Lista de Arquivos</h1>
    <table border="1" cellpadding="10">
        <thead>
            <th>Preview</th>
            <th>Arquivo</th>
            <th>Data de Envio</th>
            <th>Delete</th>
        </thead>
        <tbody>
            <?php
            while ($arquivo = $sql_query -> fetch_assoc()) {
            ?>
            <tr>
                <td><img height="50" src="<?php echo $arquivo['path']; ?>" alt="" /></td>
                <td> <a target="_blank" href="<?php echo $arquivo['path']; ?>"> <?php echo $arquivo['nome']; ?> </a> </td>
                <td><?php echo date("d/m/Y H:i", strtotime($arquivo['data'])); ?></td>
                <td><a href="index.php?deletar=<?php echo $arquivo['id']; ?>">Deletar</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</body>
</html>