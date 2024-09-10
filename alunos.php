<?php

require_once "Classes/Curso.php";
require_once "Classes/Aluno.php";
require_once "cadastrarAluno.php";
require_once "config.php";

$alunos = Aluno::trazerAlunos($GLOBALS['pdo']);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alunos | DevAcademy</title>
    <link rel="stylesheet" href="css/alunos.css">
</head>
<body>
<div class="container" >
    <header>
        <div class="header">
            <a href="cursos.php"><p>Cursos</p> </a>
            <a href="alunos.php"> <p>Alunos</p></a>
            <a href="cadastrarAlunoView.php"> <p>Home</p> </a>
        </div>
    </header>

    <div class="titulo">
        <h1>ALUNOS</h1>
    </div>
    <div class="tabela">
        <table>
            <thead>
            <tr>
                <th>ALUNO</th>
                <th>CURSO</th>
                <th>UF</th>
            </tr>
            </thead>

            <tbody>
            <?php foreach ($alunos as $aluno): ?>
                <tr>
                    <td><?php echo htmlspecialchars($aluno['aluno']); ?> </td>
                    <td><?php echo htmlspecialchars($aluno['curso']); ?> </td>
                    <td><?php echo htmlspecialchars($aluno['estado']); ?> </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
