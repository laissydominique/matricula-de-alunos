<?php


class Curso
{
    public $cursoId;
    public $curso;
    public $duracao;

    function __construct($cursoId, $curso, $duracao){
        $this->cursoId = $cursoId;
        $this->curso = $curso;
        $this->duracao = $duracao;
    }

    public static function trazerCursos($pdo)
    {
        $sql = "SELECT * FROM cursos";
        $stmt = $pdo->prepare($sql);

        if ($stmt->execute()) {
            return $stmt->fetchAll();
        }else{
            throw new Exception("Erro ao trazer os alunos");
        }
    }
}