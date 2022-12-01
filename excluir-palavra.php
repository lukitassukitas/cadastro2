<?php
    include("PalavraClasse.php");
    
    $id = $_GET['id'];
    
    include("conexao.php");

    try {
        $stmt = $pdo->prepare("delete from tbcadastro where idcadastro='$id'");

        $stmt ->execute();

        $pdo = null;

        header("Location:palavra.php");

    }
    catch (PDOException $e) {
        echo "Erro: " . $e -> getmessage();
    }

?>