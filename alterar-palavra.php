<?php
    
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $rm = $_POST["rm"];
    $curso = $_POST["curso"];
    $ddn = $_POST["ddn"];
    $modulo = $_POST["modulo"];
    
    

    include("conexao.php");

    try {
        $stmt = $pdo->prepare("update tbcadastro set nome = '$nome', cpf = '$cpf', rm = '$rm', curso = '$curso', ddn = '$ddn', modulo = '$modulo' where idcadastro = '$id'");

        $stmt ->execute();

        echo "<script>alert('Dados enviados com sucesso')</script>";

        $pdo = null;

        header("Location:palavra.php");

    }
    catch (PDOException $e) {
        echo "Erro: " . $e -> getmessage();
    }

?>