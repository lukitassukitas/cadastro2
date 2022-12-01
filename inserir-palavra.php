<?php
    include("PalavraClasse.php");
    
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $rm = $_POST["rm"];
    $curso = $_POST["curso"];
    $ddn = $_POST["ddn"];
    $modulo = $_POST["modulo"];

    
    
    include("conexao.php");

    try {
        $stmt = $pdo->prepare("insert into tbcadastro values(null, '$nome', '$cpf', '$rm', '$curso', '$ddn', '$modulo')");

        $stmt ->execute();

        $pdo = null;

        header("Location:palavra.php");

    }
    catch (PDOException $e) {
        echo "Erro: " . $e -> getmessage();
    }

?>