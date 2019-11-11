<?php
include_once("ConexaoBD.php");
try{
$conn = ConexaoBD::conecta();
echo 'conexão funcionou!';
}
catch(PDOException $e) {
echo "ERRO: ".$e->getMessage();
}
?>