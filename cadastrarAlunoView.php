<?php

require_once "Classes/Curso.php";
require_once "Classes/Aluno.php";
require_once "cadastrarAluno.php";
require_once "config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Matricula | DevAcademy</title>
    <link rel="stylesheet" href="css/cad-alunos.css">
</head>
<body>
<div class="container">
    <header>
        <div class="header">
            <a href="cursos.php"><p>Cursos</p> </a>
            <a href="alunos.php"> <p>Alunos</p></a>
            <a href="cadastrarAlunoView.php"> <p>Home</p> </a>
        </div>
    </header>

    <div class="titulo">
        <h1>Matricule - se </h1>
        <h3>e inicie seus estudos!</h3>
    </div>

    <div class="subtitle">
        <h4>Faça sua matrícula e inicie o curso de <span>imediato</span> na <span class="span1">Dev</span><span class="span2">Academy</span</h4>
    </div>

    <div>
        <form method="post" action="cadastrarAluno.php">
            <div class="form">

            <div class="aluno">
                <label>Nome</label>
                <input type="text" name="aluno" class="nomeinput" required>
            </div>

            <div class="cpf">
                <label>CPF</label>
                <input type="number" name="cpf" class="cpfinput" required>
            </div>

            <div class="data_nascimento">
                <label>Data de Nascimento</label>
                <input type="date" name="data_nascimento" class="data_nascimentoinput" required>
            </div>

            <div class="estado">
                <label>UF</label>
                <select name="estado" required>
                    <option value="" ></option>
                    <option value="AC">AC</option>
                    <option value="AL">AL</option>
                    <option value="AP">AP</option>
                    <option value="AM">AM</option>
                    <option value="BA">BA</option>
                    <option value="CE">CE</option>
                    <option value="DF">DF</option>
                    <option value="ES">ES</option>
                    <option value="GO">GO</option>
                    <option value="MA">MA</option>
                    <option value="MT">MT</option>
                    <option value="MS">MS</option>
                    <option value="MG">MG</option>
                    <option value="PA">PA</option>
                    <option value="PB">PB</option>
                    <option value="PR">PR</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="RJ">RJ</option>
                    <option value="RN">RN</option>
                    <option value="RS">RS</option>
                    <option value="RO">RO</option>
                    <option value="RR">RR</option>
                    <option value="SC">SC</option>
                    <option value="SP">SP</option>
                    <option value="SE">SE</option>
                    <option value="TO">TO</option>

                </select required required>
            </div>

            <div class="curso">
                <label>Curso</label>
                <select name="curso" required>
                    <option value="" ></option>
                    <option value="PHP" >PHP</option>
                    <option value="MySQL"  > MySQL</option>
                </select>
            </div>
                <div class="button" >
            <button type="submit" >Enviar</button>
                </div>
        </form>
    </div>

    <?php
        if (isset($_GET['error'])) {
            $errorMessage = htmlspecialchars($_GET['error']);
            echo "<div class='error' > 
            <p style='color: red;'>Aluno já matriculado</p>
            </div>";
        }
        ?>

        <?php
        if (isset($_GET['matricula-realizada'])) {
            $errorMessage = htmlspecialchars($_GET['matricula-realizada']);
            echo "
            <div class='matricula-realizada' > 
            <p style='color: #9aff2f;'>Matrícula realizada com sucesso!</p>
            </div>";
        }
        ?>
    </div>


</div>
</body>
</html>
