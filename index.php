<?php include 'Obra/Obra.php'; 
include 'Nacionalidades/Nacionalidade.php';
include 'Operador/Operador.php';
include 'Aluno/Aluno.php';
include 'Idioma/idioma.php';
include 'Editora/Editora.php';
include 'Emprestimo/Emprestimo.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="img/logos/icon.png" type="image/x-icon" />

  <title>Biblioteca</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Biblioteca Online</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#cadastrar">Cadastrar</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#consultar">Consultar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#realizar">Realizar</a>
          </li>
                   <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Time</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#sobre">Sobre</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">A Leitura abre as janelas do entendimento e desperta do sono a Sabedoria.
          <h3 class="section-subheading text-muted">Rafael Mendes de Oliveira
          </h3>
        </div>
      
    </div>
  </header>

   <!--Cadastrar-->
  <section class="bg-light page-section" id="cadastrar">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Cadastrar</h2>
        
      </div>
   
  
      <div class="col-sm-4">
        <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/Consultar/Book_1.png"alt="">
          <h4>Obra</h4>
          <p class="text-muted">
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCadObra">
 Cadastrar
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCadObra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Obra</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="main">
          <div class="container">
          <div class="signup-content">
     <form method="post" action="index.php" >
        <div class="input-group">
            <label>Código:</label>
            <input type="text" name="codigo" value="">
        </div>
        <div class="input-group">
            <label>Nome:</label>
            <input type="text" name="nome" value="">
        </div>
         <div class="input-group">
              <button class="btn btn-primary" type="submit" name="cadastrar" >Cadastrar</button>
         </div>
    </form>
    <?php
        if (isset($_POST['cadastrar'])) {
            $codigo = $_POST['codigo'];
            $nome   = $_POST['nome'];
            
            $c = new Obra();
            $c->insere($codigo, $nome);

           
        }
    ?>
          </div>
          </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 
       
      </div>
    </div>
  </div>
</div>
          
          
        </div>
      </div>
    

    
      <div class="col-sm-4">
        <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/Consultar/nacionalidade.png" alt="">
          <h4>Nacionalidade</h4>
          <p class="text-muted">
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCadNacionalidade">
 Cadastrar
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCadNacionalidade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Nacionalidade</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="main">
          <div class="container">
          <div class="signup-content">
     <form method="post" action="index.php" >
        <div class="input-group">
            <label>Código:</label>
            <input type="text" name="codigo" value="">
        </div>
        <div class="input-group">
            <label>Nome:</label>
            <input type="text" name="nome" value="">
        </div>
         <div class="input-group">
              <button class="btn btn-primary" type="submit" name="cadastrar" >Cadastrar</button>
         </div>
    </form>
    <?php
        if (isset($_POST['cadastrar'])) {
            $codigo = $_POST['codigo'];
            $nome   = $_POST['nome'];
            
            $c = new Obra();
            $c->insere($codigo, $nome);

           
        }
    ?>
          </div>
          </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 
       
      </div>
    </div>
  </div>
</div>
          
          
        </div>
     
    
  </div>
  </div>
  </div>
  </section>
   
  
 
 <!-- Consultar -->
 <section class="bg-light page-section" id="consultar">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Realizar Consultas</h2>
    </div>
   <!--Obra-->
      <div class="col-sm-4">
        <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/Consultar/Book_1.png" alt="">
          <h4>Obra</h4>
          <p class="text-muted">
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalConObra">
 Consultar 
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalConObra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lista de Obras</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="main">
          <div class="container">
          <div class="signup-content">
      <table>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th colspan="2">Ação</th>
                </tr>
            </thead>
            
            <?php 
                $c = new Obra(); 
                $lista_obra = $c->lista();
                foreach($lista_obra as $lst_obra) { ?>
                <tr>
                    <td><?php echo $lst_obra->getIdobra(); ?></td>
                    <td><?php echo $lst_obra->getNoobra() ?></td>
                    <td>
                        <a href="Obra/ObraAltera.php?editar=<?php echo $lst_obra->getIdobra(); ?>" class="edit_btn">Alterar</a>
                    </td>
                    <td>
                        <a href="Obra/ObraExclui.php?excluir=<?php echo $lst_obra->getIdobra();?>" 
                           class="del_btn">Remover</a>
                    </td>
                </tr>
            <?php } ?>
            
        </table>
        <?php
            if (isset($_GET['exclusao'])) {
                if ($_GET['exclusao'] == 0){
                    $msg  = "<p name = 'msg' id='msg' class = 'msg_erro'>";
                    $msg .= "Exclusão não pôde ser realizada.</p>";                  
                    echo $msg;
                }
            }
        ?>    
              
          </div>
          </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
          </p>
          
        </div>
      </div>
   
   <!--Nacionalidade-->
         <div class="col-sm-4">
        <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/Consultar/nacionalidade.png" alt="">
          <h4>Nacionalidade</h4>
          <p class="text-muted">
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalConNacionalidade">
 Consultar 
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalConNacionalidade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lista de Obras</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="main">
          <div class="container">
          <div class="signup-content">
        <table>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th colspan="2">Ação</th>
                </tr>
            </thead>
    
            <?php 
                $n = new Nacionalidade(); 
                $lista_nacionalidade = $n->lista();
                foreach($lista_nacionalidade as $lst_nasc) { ?>
                <tr>
                    <td><?php echo $lst_nasc->getIdnacionalidade(); ?></td>
                    <td><?php echo $lst_nasc->getNonacionalidade(); ?></td>
                    <td>
                        <a href="Nacionalidades/NacionalidadeAltera.php?editar=<?php echo $lst_nasc->getIdnacionalidade() ?>" class="edit_btn">Alterar</a>
                    </td>
                    <td>
                        <a href="Nacionalidades/NacionalidadeExclui.php?excluir=<?php echo $lst_nasc->getIdnacionalidade() ?>" 
                           class="del_btn">Remover</a>
                    </td>
                </tr>
            <?php } ?>
           
        </table>
        <?php
            if (isset($_GET['exclusao'])) {
                if ($_GET['exclusao'] == 0){
                    $msg  = "<p name = 'msg' id='msg' class = 'msg_erro'>";
                    $msg .= "Exclusão não pôde ser realizada.</p>";                  
                    echo $msg;
                }
            }
        ?>       
          </div>
          </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  </div>
         </div>
   
   <!--idioma-->
   <div class="col-sm-4">
        <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/Consultar/idioma.png" alt="">
          <h4>Idioma</h4>
          <p class="text-muted">
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalConIdioma">
 Consultar 
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalConIdioma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lista de Idiomas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="main">
          <div class="container">
          <div class="signup-content">
    <table>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th colspan="2">Ação</th>
                </tr>
            </thead>
          
            <?php 
                $c = new idioma(); 
                $lista_idioma = $c->lista();
                foreach($lista_idioma as $lst_idioma) { ?>
                <tr>
                    <td><?php echo $lst_idioma->getIdidioma(); ?></td>
                    <td><?php echo $lst_idioma->getNoidioma() ?></td>
                    <td>
                        <a href="Idioma/idiomaAltera.php?editar=<?php echo $lst_idioma->getIdidioma(); ?>" class="edit_btn">Alterar</a>
                    </td>
                    <td>
                        <a href="Idioma/idiomaExclui.php?excluir=<?php echo $lst_idioma->getIdidioma(); ?>" 
                           class="del_btn">Remover</a>
                    </td>
                </tr>
            <?php } ?>
           
        </table>
        <?php
            if (isset($_GET['exclusao'])) {
                if ($_GET['exclusao'] == 0){
                    $msg  = "<p name = 'msg' id='msg' class = 'msg_erro'>";
                    $msg .= "Exclusão não pôde ser realizada.</p>";                  
                    echo $msg;
                }
            }
        ?>       
          </div>
          </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  </div>
         </div>
   <!--Editora-->  
   
    <div class="col-sm-4">
        <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/Consultar/editora.png" alt="">
          <h4>Editora</h4>
          <p class="text-muted">
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalConEditora">
 Consultar 
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalConEditora" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lista de Editoras</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="main">
          <div class="container">
          <div class="signup-content">
    <table>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th colspan="2">Ação</th>
                </tr>
            </thead>
          
            <?php 
                $e = new Editora(); 
                $lista_editora = $e->lista();
                foreach($lista_editora as $lst_ed) { ?>
                <tr>
                    <td><?php echo $lst_ed->getIdeditora(); ?></td>
                    <td><?php echo $lst_ed->getNoeditora();?></td>
                    <td>
                        <a href="Editora/EditoraAltera.php?editar=<?php echo $lst_ed->getIdeditora(); ?>" class="edit_btn">Alterar</a>
                    </td>
                    <td>
                        <a href="Editora/EditoraExclui.php?excluir=<?php echo $lst_ed->getIdeditora(); ?>" 
                           class="del_btn">Remover</a>
                    </td>
                </tr>
            <?php } ?>
           
        </table>
        <?php
            if (isset($_GET['exclusao'])) {
                if ($_GET['exclusao'] == 0){
                    $msg  = "<p name = 'msg' id='msg' class = 'msg_erro'>";
                    $msg .= "Exclusão não pôde ser realizada.</p>";                  
                    echo $msg;
                }
            }
        ?>       
          </div>
          </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  </div>
         </div>
   <!--Operador-->    
   <div class="col-sm-4">
        <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/Consultar/operador.png" alt="">
          <h4>Operador</h4>
          <p class="text-muted">
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalConOperador">
 Consultar 
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalConOperador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lista de Operadores</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="main">
          <div class="container">
          <div class="signup-content">
    <table>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th colspan="2">Ação</th>
                </tr>
            </thead>
          
            <?php 
                $c = new Operador(); 
                $lista_Operador = $c->lista();
                foreach($lista_Operador as $lst_Operador) { ?>
                <tr>
                    <td><?php echo $lst_Operador->getIdOperador(); ?></td>
                    <td><?php echo $lst_Operador->getNoOperador() ?></td>
                    <td>
                        <a href="Operador/OperadorAltera.php?editar=<?php echo $lst_Operador->getIdOperador(); ?>" class="edit_btn">Alterar</a>
                    </td>
                    <td>
                        <a href="Operador/OperadorExclui.php?excluir=<?php echo $lst_Operador->getIdOperador(); ?>" 
                           class="del_btn">Remover</a>
                    </td>
                </tr>
            <?php } ?>
           
        </table>
        <?php
            if (isset($_GET['exclusao'])) {
                if ($_GET['exclusao'] == 0){
                    $msg  = "<p name = 'msg' id='msg' class = 'msg_erro'>";
                    $msg .= "Exclusão não pôde ser realizada.</p>";                  
                    echo $msg;
                }
            }
        ?>        
          </div>
          </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  </div>
         </div>
   
   <!--Aluno-->    
   
      <div class="col-sm-4">
        <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/Consultar/Aluno.png" alt="">
          <h4>Aluno</h4>
          <p class="text-muted">
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalConAluno">
 Consultar 
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalConAluno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lista de Alunos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="main">
          <div class="container">
          <div class="signup-content">
  <table>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Curso</th>
                    <th colspan="2">Ação</th>
                </tr>
            </thead>
           
            <?php 
                $a = new Aluno(); 
                $lista_aluno = $a->lista();
                foreach($lista_aluno as $lst_alun) { ?>
                <tr>
                    <td><?php echo $lst_alun->getNumatricula(); ?></td>
                    <td><?php echo $lst_alun->getNoaluno();?></td>
                    <td><?php echo $lst_alun->getNocurso();?></td>
                    <td>
                        <a href="Aluno/AlunoAltera.php?editar=<?php echo $lst_alun->getNumatricula(); ?>" class="edit_btn">Alterar</a>
                    </td>
                    <td>
                        <a href="Aluno/AlunoExclui.php?excluir=<?php echo $lst_alun->getNumatricula(); ?>" 
                           class="del_btn">Remover</a>
                    </td>
                </tr>
            <?php } ?>
            <tfoot>
                <td colspan="4" align="center">
                    <br> <button class="btn" name="listar" type="button" onclick="location.href='AlunoCadastra.php';">Cadastrar Aluno</button>
                </td>
            </tfoot>
        </table>
        <?php
            if (isset($_GET['exclusao'])) {
                if ($_GET['exclusao'] == 0){
                    $msg  = "<p name = 'msg' id='msg' class = 'msg_erro'>";
                    $msg .= "Exclusão não pôde ser realizada.</p>";                  
                    echo $msg;
                }
            }
        ?>       
          </div>
          </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  </div>
      </div>
         
   <!--Emprestimos-->  
     <div class="col-sm-4">
        <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/Consultar/emprestimo.png" alt="">
          <h4>Empréstimos</h4>
          <p class="text-muted">
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalConEmprestimo">
 Consultar 
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalConEmprestimo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Empréstimos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="main">
          <div class="container">
          <div class="signup-content">
  <table>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Aluno</th>
                   
                    <th>Data Prevista Devolução</th>
                    <th>Operador</th>
                    <th colspan="2">Ação</th>
                </tr>
            </thead>
           
            <?php 
                $e = new Emprestimo(); 
                $lista = $e->lista();
                
                foreach($lista as $lst_empre) { ?>
            
            <tr class="container">
                
                <td class="form-group submit"><?php echo $lst_empre->getIdemprestimo(); ?></td>
                <td class="form-group submit"><?php echo $lst_empre->getNuMatricula(); ?></td>
                    <td class="form-group submit"><?php echo $lst_empre->getDaPrevisaoDevolucao();?></td>
                    <td class="form-group submit"><?php echo $lst_empre->getNooperador();?></td>
                    <td>
                        <a href="Emprestimo/EmprestimoAltera.php?editar=<?php echo $lst_empre->getIdemprestimo(); ?>" class="form-submit submmit">Alterar</a>
                    </td>
                    <td>
                        <a href="Emprestimo/EmprestimoExclui.php?excluir=<?php echo $lst_empre->getIdemprestimo(); ?>" 
                           class="form-submit subimit">Remover</a>
                    </td>
                </tr>
            <?php } ?>
            
        </table>
            </div>
            </div>
            </div>
        
        <?php
            if (isset($_GET['exclusao'])) {
                if ($_GET['exclusao'] == 0){
                    $msg  = "<p name = 'msg' id='msg' class = 'msg_erro'>";
                    $msg .= "Exclusão não pôde ser realizada.</p>";                  
                    echo $msg;
                }
            }
        ?>  
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
          </div>
          </div>
      </div>
    
    </div>

</div>
  </div>
         </div>
    
 </section>
 
     
<!--Realizar-->
  <section class="bg-light page-section" id="realizar">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Realizar</h2>
        
      </div>
   
  
      <div class="col-sm-4">
        <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/Consultar/emprestimo.png" alt="">
          <h4>Emprestimo</h4>
          <p class="text-muted">
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCadObra">
 Cadastrar
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCadObra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Obra</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="main">
          <div class="container">
          <div class="signup-content">
     <form method="post" action="index.php" >
        <div class="input-group">
            <label>Código:</label>
            <input type="text" name="codigo" value="">
        </div>
        <div class="input-group">
            <label>Nome:</label>
            <input type="text" name="nome" value="">
        </div>
         <div class="input-group">
              <button class="btn btn-primary" type="submit" name="cadastrar" >Cadastrar</button>
         </div>
    </form>
    <?php
        if (isset($_POST['cadastrar'])) {
            $codigo = $_POST['codigo'];
            $nome   = $_POST['nome'];
            
            $c = new Obra();
            $c->insere($codigo, $nome);

           
        }
    ?>
          </div>
          </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 
       
      </div>
    </div>
  </div>
</div>
          
          
        </div>
      </div>
    

    
      <div class="col-sm-4">
        <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/Consultar/" alt="">
          <h4>Devolução</h4>
          <p class="text-muted">
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCadDevolucao">
 Cadastrar
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCadDevolucao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Realizar Devolução</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="main">
          <div class="container">
          <div class="signup-content">
     <form method="post" action="index.php" >
        <div class="input-group">
            <label>Código:</label>
            <input type="text" name="codigo" value="">
        </div>
        <div class="input-group">
            <label>Nome:</label>
            <input type="text" name="nome" value="">
        </div>
         <div class="input-group">
              <button class="btn btn-primary" type="submit" name="cadastrar" >Cadastrar</button>
         </div>
    </form>
    <?php
        if (isset($_POST['cadastrar'])) {
            $codigo = $_POST['codigo'];
            $nome   = $_POST['nome'];
            
            $c = new Obra();
            $c->insere($codigo, $nome);

           
        }
    ?>
          </div>
          </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 
       
      </div>
    </div>
  </div>
</div>
          
          
        </div>
     
    
  </div>
  </div>
  </div>
  </section>


  

  <!-- Team -->
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">#FocoForçaFé</h2>
      
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
            <h4>Bya Martins</h4>
            <p class="text-muted">vai dar errado </p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="">
            <h4>Joyce Rayane Modas</h4>
            <p class="text-muted">vai dar certo</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://www.instagram.com/joyce_rayane_/">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
             
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="">
            <h4>Jardiane Cordeiro</h4>
            <p class="text-muted">Vamo fazer logo isso</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://www.instagram.com/mjardiane/">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="team-member">
          <img class="mx-auto rounded-circle" src="img/team/4.jpg" alt="">
          <h4>Gabrielle Borges</h4>
          <p class="text-muted">Decidam logo</p>
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="https://www.instagram.com/gabrielleborgees_/">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            
          </ul>
        </div>
      </div>
     
    </div>
  </section>

 
  <!-- Sobre -->
  <section class="bg-light page-section" id="sobre">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Projeto Biblioteca  </h2>
          <h3 class="section-subheading text-muted">Disciplinas Envolvidas</h3>
        </div>
      </div>
      <div class="row-center">
        <div class="col-sm-25>">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/5.png" alt="">
            <h4>Programação com Acesso a Banco de Dados</h4>
           <a href="https://sites.google.com/view/procopio-na-rede/p%C3%A1gina-inicial?authuser=0"> <p class="text-muted">Fabio Procopio  </p></a>
          </div>
        </div>
      
    
        <div class="row-center">
          <div class="col-sm-25">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/6.png" alt="">
              <h4>Autoria Web</h4>
              <a href="https://www.instagram.com/danilo_rodrigo/"><p class="text-muted">Danilo Rodrigo</p></a>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </section>
 

 





</section>
<!-- Footer -->
<footer class="bg-light py-5">
  <div class="container">
    <div class="small text-center text-muted">Copyright &copy; 2019 - Grafiteiras por #Amor</div>
  </div>
</footer>
  


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>

</html>
