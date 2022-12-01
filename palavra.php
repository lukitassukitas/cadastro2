<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palavras</title>


    <link href="./css/estilo_palavra.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/home.css" rel="stylesheet">

</head>

<body>
<header>
    <nav>
        <a class="logo">Cadastro</a>
    </nav>
</header>

<script src="mobile-navbar.js"></script>


    <section class="campos">
        <form method="post" action="action.php">

            <div>
                <input type="hidden" name="id" value="<?php echo @$_GET['id']; ?>" />
            </div>

            <div>
                <input type="text" placeholder="Nome" name="nome" value="<?php echo @$_GET['nome'] ?>" />
            </div>

            <div>
                <input type="text" placeholder="Cpf" name="cpf" value="<?php echo @$_GET['cpf'] ?>" />
            </div>

            <div>
                <input type="text" placeholder="RM" name="rm" value="<?php echo @$_GET['rm'] ?>" />
            </div>

            <div>
                <input type="text" placeholder="Curso" name="curso" value="<?php echo @$_GET['curso'] ?>" />
            </div>

            <div>
                <input type="text" placeholder="Data de nascimento" name="ddn" value="<?php echo @$_GET['ddn'] ?>" />
            </div>

            <div>
                <input type="text" placeholder="Módulo" name="modulo" value="<?php echo @$_GET['modulo'] ?>" />
            </div>


            <div>
                <input type="submit" value="Salvar" name="salvar" class="botao" />
            </div>
        </form>
    </section>
    <section>
    
        <div class="tbl-header">
            <table>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Cpf</th>
                        <th scope="col">RM</th>
                        <th scope="col">Curso</th>
                        <th scope="col">Data</th>
                        <th scope="col">Módulo</th>
                        <th scope="col">Alterar</th>
                        <th scope="col">Apagar</th>

                    </tr>
                </thead>
            </table>
        </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" >
                    <tbody>
                        <?php
                        include("conexao.php");

                        try {
                        $stmt = $pdo->prepare("select * from tbcadastro");

                        $stmt->execute();

                        while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
                            echo "<tr>";
                            echo "<th scope=\"row\"> $row[0] </th>";
                            echo "<td> " . $row[1] . " </td>";
                            echo "<td>" . $row[2] . " </td>";
                            echo "<td>" . $row[3] . " </td>";
                            echo "<td>" . $row[4] . "</td>";
                            echo "<td>" . $row[5] . "</td>";
                            echo "<td>" . $row[6] . "</td>";
                            echo "<td><a href='?id=$row[0]&nome=$row[1]&cpf=$row[2]&rm=$row[3]&curso=$row[4]&ddn=$row[5]&modulo=$row[6]'> Editar </a> </td>";
                            echo "<td><a href='excluir-palavra.php?id=$row[0]'> Excluir </a></td>";
                            echo "</tr>";

                        }
                        } catch (PDOException $e) {
                            echo "Erro: " . $e->getmessage();
                        }

                        ?>
                    </tbody>
                </table>
            </div>

    </section>
    
    <footer>
        <p>Todos os Direitos Reservados</p>
    </footer>
    

</body>
<script src="scroll.js"></script>
</html>
