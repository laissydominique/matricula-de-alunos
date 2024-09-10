<?php

require_once "Classes/Curso.php";
require_once "Classes/Aluno.php";
require_once "cadastrarAluno.php";
require_once "config.php";

$cursos = Curso::trazerCursos($GLOBALS['pdo']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cursos | DevAcademy</title>
    <link rel="stylesheet" href="css/cursos.css">
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
        <h1>NOSSOS CURSOS</h1>
        <h3 class="subt" > No momento temos 2 cursos disponíveis, </h3>
        <h3> mas pode ficar tranquilo que em breve teremos novidades. </h3>
    </div>
    <div class="tabela">
        <table>
            <thead>
            <tr>
                <th>CURSO</th>
                <th>DURAÇÃO</th>
            </tr>
            </thead>

            <tbody>
            <?php foreach ($cursos as $curso): ?>
                <tr>
                    <td><?php echo htmlspecialchars($curso['curso']); ?> </td>
                    <td><?php echo htmlspecialchars($curso['duracao']); ?> </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
