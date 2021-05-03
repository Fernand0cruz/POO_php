<?php
require_once "pessoa.php";

class Aluno extends Pessoa
{
    private $matr;
    private $curso;

    public function __construct($nome, $idade, $sexo, $matr, $curso)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->matr = $matr;
        $this->curso = $curso;
    }

    public function cancelarMatr()
    {
        echo "<p>Matricula sera cancelada ". $this->getNome() ." </p>";
    }

    /**
     * Get the value of matr
     */
    public function getMatr()
    {
        return $this->matr;
    }

    /**
     * Set the value of matr
     *
     * @return  self
     */
    public function setMatr($matr)
    {
        $this->matr = $matr;

        return $this;
    }

    /**
     * Get the value of curso
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     *
     * @return  self
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }
}
