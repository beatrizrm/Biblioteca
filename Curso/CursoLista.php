<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php  include('Curso.php'); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
       <!--Icon -->
    <link rel="icon" type="image/icon" href="images/icon.png"/>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
     <!--Icon -->
    <link rel="icon" type="image/icon" href="images/icon.png"/>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
   <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
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
        
        <?php
            if (isset($_GET['exclusao'])) {
                if ($_GET['exclusao'] == 0){
                    $msg  = "<p name = 'msg' id='msg' class = 'msg_erro'>";
                    $msg .= "Exclusão não pôde ser realizada.</p>";                  
                    echo $msg;
                }
            }
        ?>    
         <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    </body>
</html>
