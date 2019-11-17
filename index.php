<?php include 'Obra/Obra.php'; ?>
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
         <img class="mx-auto rounded-circle" src="img/Consultar/Book.png" alt="">
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
            <img class="mx-auto rounded-circle" src="img/Consultar/Book.png" alt="">
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
                        <a href="Obra/ObraExclui.php?excluir=<?php echo $lst_obra->getIdobra(); ?>" 
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
   
  
        <!--Fim-->
        
      </div>
  
  </div>
        
     
</section>


  

  <!-- Team -->
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">#FocoForçaFé</h2>
          <h3 class="section-subheading text-muted">na força do ódio</h3>
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
