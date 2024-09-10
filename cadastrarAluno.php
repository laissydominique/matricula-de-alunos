<?php

require_once 'config.php';
require_once 'Classes/Aluno.php';
require_once 'Classes/Curso.php';

class cadastrarAluno{

    public function __construct(){

        if(isset($_POST['aluno']) && isset($_POST['cpf']) && isset($_POST['data_nascimento']) && isset($_POST['estado']) && isset($_POST['curso'])) {

            $aluno = trim($_POST['aluno']);
            $cpf = trim($_POST['cpf']);
            $data_nascimento = trim($_POST['data_nascimento']);
            $estado = trim($_POST['estado']);
            $curso = trim($_POST['curso']);

            if ($aluno && $cpf && $data_nascimento && $estado && $curso) {
                if(!Aluno::alunoExiste($GLOBALS['pdo'], $cpf)) {

                    $newAluno = new Aluno(null, $aluno, $cpf, $data_nascimento, $estado, null, $curso);
                    $newAluno->cadastrarAluno($GLOBALS['pdo']);
                    header("location: cadastrarAlunoView.php?matricula-realizada");
                }
                else{
                    header("location: cadastrarAlunoView.php?error=cliente-existe");
                    throw new Exception("Cliente já existe!");
                    exit;
                }
            }
            else{
                throw new Exception("Existem campos que não foram preenchidos!");
            }
        }
    }
}
    try{
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            new cadastrarAluno();
        }
    }catch(PDOException $e){
        throw new Exception('Erro ao cadastrar aluno!');
    }

