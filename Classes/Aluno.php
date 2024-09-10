<?php

require_once 'Curso.php';

class Aluno extends Curso
{
    public $alunoId;
    public $aluno;
    public $cpf;
    public $data_nascimento;
    public $estado;

    function __construct($alunoId, $aluno, $cpf, $data_nascimento, $estado, $cursoId, $curso){

        parent::__construct($cursoId, $curso);

        $this->alunoId = $alunoId;
        $this->aluno = $aluno;
        $this->cpf = $cpf;
        $this->data_nascimento = $data_nascimento;
        $this->estado = $estado;
    }

    public function cadastrarAluno($pdo){

        $sql = "INSERT INTO alunos (aluno, data_nascimento, cpf, estado, curso) VALUES(:aluno, :data_nascimento, :cpf, :estado, :curso)";

        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":aluno", $this->aluno);
        $stmt->bindValue(":data_nascimento", $this->data_nascimento);
        $stmt->bindValue(":cpf", $this->cpf);
        $stmt->bindValue(":estado", $this->estado);
        $stmt->bindValue(":curso", $this->curso);

        if ($stmt->execute()) {
            return true;
        } else {
            throw new Exception("Erro ao cadastrar o produto");
        }
    }

    public static function alunoExiste($pdo, $cpf){
        $sql = "SELECT COUNT(*) FROM alunos WHERE cpf = :cpf";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':cpf', $cpf, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchColumn() > 0;
    }

    public static function trazerAlunos($pdo){

        $sql = "SELECT * FROM alunos ORDER BY aluno ASC";
        $stmt = $pdo->prepare($sql);

        if ($stmt->execute()) {
            return $stmt->fetchAll();
        }else{
            throw new Exception("Erro ao trazer os alunos");
        }
    }
}