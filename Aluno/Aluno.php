<?php

include_once('ConexaoBD.php');
class Aluno {
    private $numatricula;
    private $noaluno;
    private $nocurso;
    
    function getNocurso() {
        return $this->nocurso;
    }

    function setNocurso($nocurso) {
        $this->nocurso = $nocurso;
    }

        
    function getNumatricula() {
        return $this->numatricula;
    }

    function getNoaluno() {
        return $this->noaluno;
    }

    function setNumatricula($numatricula) {
        $this->numatricula = $numatricula;
    }

    function setNoaluno($noaluno) {
        $this->noaluno = $noaluno;
    }

    function __construct($numatricula = null, $noaluno = null, $nocurso = null) {
        $this->numatricula = $numatricula;
        $this->noaluno = $noaluno;
        $this->nocurso = $nocurso;
    }

    public function lista(){
        try {
            $sql  = "SELECT a.numatricula, a.noaluno, a.txingresso, b.nocurso from tbaluno as a 
INNER JOIN tbcurso as b 
on a.IdCurso = b.IdCurso ORDER BY a.NoAluno";
            $conn = ConexaoBD::conecta();
            $sql  = $conn->query($sql);
            $res = array();  
            while($row = $sql->fetch(PDO::FETCH_OBJ)) {
                $aluno = new Aluno();
                $aluno->setNoaluno($row->NoAluno);
                $aluno->setNumatricula($row->NuMatricula);
                $aluno->setNocurso($row->noCurso);
                $res [] = $aluno;
            }
            return $res;
        } catch (Exception $e) {
             echo "ERRO: ".$e->getMessage()."<br><br>";
        }     
    }
    
    public function consulta($numatricula){
        try {
            $sql  = "SELECT a.numatricula, a.noaluno, a.txingresso, b.nocurso from tbaluno as a 
INNER JOIN tbcurso as b 
on a.IdCurso = b.IdCurso WHERE a.IdCurso ='$numatricula'. ORDER BY a.NoAluno";
            $conn = ConexaoBD::conecta();
            $sql  = $conn->query($sql);

            $res = array();  
            while($row = $sql->fetch(PDO::FETCH_OBJ)) {
                 $aluno = new Aluno();
                $aluno->setNoaluno($row->NoAluno);
                $aluno->setNumatricula($row->NuMatricula);
                $aluno->setNocurso($row->NoCurso);
                $res [] = $aluno;
            }
            return $res;
        } catch (Exception $e) {
             return "ERRO: ".$e->getMessage()."<br><br>";
        }     
    }
    
    public function altera($nome, $codigo){
        try {
            $sql = "UPDATE TbAluno
                       SET NoAluno = ? 
                     WHERE NuMatricula = ?"; 
            $conn = ConexaoBD::conecta();

            $stm = $conn->prepare($sql);
            $stm->bindParam(1, $nome);
            $stm->bindParam(2, $codigo);
            $stm->execute();
            return 1; 
	} catch (Exception $e) {
            return 0; 
        } //try-catch     
    } //método altera
    
    public function insere($id, $nome){
      try {
        $sql = "INSERT INTO TbAluno(NuMatricula, NoAluno)
                VALUES (?, ?)";
        $conn = ConexaoBD::conecta();

        $stm  = $conn->prepare($sql);              
        $stm->bindParam(1, $id);
        $stm->bindParam(2, $nome); 
	$stm->execute();
        return 1;
      } catch (Exception $e) {
        return 0; 
      }     
    } //método insere
    
    public function exclui($codigo){
      try {
	      $sql = "DELETE FROM TbAluno WHERE NuMatricula = ?"; 
	      $conn = ConexaoBD::conecta();
                                       
	      $stm = $conn->prepare($sql);
	      $stm->bindParam(1, $codigo);
	      $stm->execute();
              return 1; 
	    } catch (Exception $e) {
              return 0; 
      } //try-catch     
    } //método exclui

}