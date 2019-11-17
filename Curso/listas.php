<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

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
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Biblioteca</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="listacadastro.php">Cadastrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="listas.php">Consultar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="sobre.php">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Time</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="main">
          <div class="container">
          <div class="signup-content">
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
              <h1 align="center">Lista de Cursos</h1>
              <?php 
                  $c = new Curso(); 
                  $lista_curso = $c->lista();
                  foreach($lista_curso as $lst_curso) { ?>
              <tr class="container">
                      <td class="form-group submit"><?php echo $lst_curso->getIdcurso(); ?></td>
                      <td class="form-group submit"><?php echo $lst_curso->getNocurso() ?></td>
                      <td>
                          <a href="CursoAltera.php?editar=<?php echo $lst_curso->getIdcurso(); ?>" class="form-submit submmit">Alterar</a>
                      </td>
                      <td>
                          <a href="CursoExclui.php?excluir=<?php echo $lst_curso->getIdcurso(); ?>" 
                             class="form-submit subimit">Remover</a>
                      </td>
                  </tr>
              <?php } ?>
              <tfoot>
                  <td colspan="4" align="center">
                      <br> <button class="form-submit submit" name="listar" type="button" onclick="location.href='CursoCadastra.php';">Cadastrar Curso</button>
                  </td>
              </tfoot>
          </table>
              </div>
              </div>
              </div>
          
          </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  
      
    </div>
  </header>

  

  

  

 
 

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Grafiteiras por Amor #2019</span>
        </div>
  
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Política de Privacidade- Segudo meu patrão</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Termos de uso inexistentes</a>
            </li>
          </ul>
        </div>
      </div>
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
