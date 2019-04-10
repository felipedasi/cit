<?php
require 'conection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="materialize/css/materialize.css">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    

  <!-- Compiled and minified JavaScript -->
  <script src="materialize/js/materialize.min.js"></script>
  <style>
     .tabs .tab a{
            color:#FFF;
        } /*Black color to the text*/

        .tabs .tab a:hover {
          
            color:#FFF;
        } /*Text color on hover*/

        .tabs .tab a.active {
           
            color:#FFF;
        } /*Background and text color when a tab is active*/

     
    .logo_cima{
position: absolute;
top:10%;
left:5%;
color:#FFF;
    }
    .logo_baixo{
position: absolute;
color:#FFF;
left:10.5%;
top:24%;
    }
    .navbar{
      position: absolute;
      top:58%
    }
    .staggered-test{
      position: absolute;
      top:95%;
     
    }
    .menu{
      position:relative;
      top:25%;

    }
   .tabs .tab a{
            color:#FFF;
        }
        .tabs .indicator {
            background-color:#01579b;
        } 
      
        .nave{
          position:absolute;
          top:90%;
        }
        .menubar{
          position:absolute;
        top:90%;
        }

.tabs{
  height:30px;
}
    </style>
          
    <title>Portal Tecnológico</title>
</head>
<body>
  <style>
.title_portal{
  font-family:roboto;

}
  </style>
   <style>
   .areas{
     font-size:8pt;
     position:relative;
     bottom:0;
   }
   
   
   </style>
 
    <div class="row">
   <div class="slider">
    <ul class="slides">
      <li>
        <img  class="img" src="materialize/img/header.jpg"> 
        <div class="caption center-align">
          <br><BR><br><br>
          <div class="col s8 pull-s3">
          <h2 class="title_portal">&nbsp;&nbsp;&nbsp;PORTAL TECNOL&Oacute;GICO</h2>
          <h6 class=" title_portal light grey-text text-lighten-3">COORDENA&Ccedil;&Atilde;O DE INOVA&Ccedil;&Atilde;O TECNOL&Oacute;GICA</h6>
        </div>
        </div>
      </li>
    
    </ul>
  
   <br><br>
      <nav class="nav-bar navbar #536dfe indigo accent-2 menubar "> -->
<ul class="tabs #536dfe indigo accent-2">

        <li class="tab col s2 "><a href="#test1"><h6 class="areas">Biotecnologia</h6></a></li>
        <li class="tab col s2"><a href="#test2"><h6 class="areas">Engenharia</h6></a></li>
       <li class="tab col s1"><a href="#test3"><h6 class="areas">Farm&Aacute;cia</h6></a></li>
       <li class="tab col s1"><a href="#test4"><h6 class="areas">Qu&Iacute;mica</h6></a></li>
       <li class="tab col s1"><a href="#test5"><h6 class="areas">Outros</h6></a></li>
      <li class="tab col s2"><a href="#test6"><h6 class="areas">Edital de chamamento</h6></a></li>
    <li class="tab col s2"><a href="#"><h6 class="areas">Guias e Normas</h6></a></li>
       <li class="tab col s2"><a href="#"><h6 class="areas">Empresas Parceiras</h6></a></li>

       </ul>
  </nav>
  
  </div>
      <style>
      .menu_tab{
       height:200px;
      }
      
      </style>

       <style>
       .edt_chamamento_titulo{
         color:#FFF;
     
       }
       .edt_chamamento_texto{
         font-weight:600;
       }
       
       </style>
<!--inicio-->

<br>
<div id="test6">
<div class="row">
<div class="col s10
 offset-s1">

<h4 class="edt_chamamento_titulo">Edital de Chamamento</h4>
&nbsp;&nbsp;&nbsp;&nbsp;<h6 class="edt_chamamento_texto">Edital de chamamento:
<div class="card-panel">
<h6>Edital de Chamamento:
<a href="edital/edital_001.pdf">    Edital_nº001</h6></a>

</div>
<h4 class="edt_chamamento_titulo">Formulário</h4>
&nbsp;&nbsp;&nbsp;&nbsp;<h6 class="edt_chamamento_texto">Formulário:
<div class="card-panel">
<h6>Formulário:
<a href="https://docs.google.com/forms/d/11oIex742g2Vxrh7rS0MjGpf56m3j3jlczMFdKPq2YQg/prefill" target="blank">   Formulário</h6></a>


  </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>

</div>
</div>
<div class="row">	
<div id="test1">
<div class="col s8 offset-s2 center-align">
<br><br>
<table class="highlight responsive-table">

        <thead>
          <tr >
           <th width="20%" > PEDIDO</th>
              <th>T&Iacute;TULO</th>
           
          </tr>
        </thead>

        <tbody>

  <?php   $select = $conexao->prepare("SELECT *FROM biotecnologia");
$select->execute();
$fecth = $select->fetchAll();
  
  foreach($fecth as $produto) {  ?>
   <!--patente-->
  <?php
  echo 

'<tr>
            <td><a href="patente.php?id='.$produto['npedido'].'&titulo='.$produto['titulo'].'&descricao='.$produto['resumo'].'">'.$produto['npedido'].'</a></td>
            <td><a href="patente.php?id='.$produto['npedido'].'&titulo='.$produto['titulo'].'&descricao='.$produto['resumo'].'">'.$produto['titulo'].'</a></td></a>
            
          </tr>
    '

?>



<!--fim-->
  <?php }?>
   </tbody>
      </table>
</div>
</div>
</div>

<!--fim-->
       
<!--inicio-->

<div class="row">	
<div id="test2">
<div class="col s8 offset-s2 center-align">
<br><br>
<table class="highlight responsive-table">

        <thead>
          <tr >
           <th width="20%" > PEDIDO</th>
              <th>T&Iacute;TULO</th>
           
          </tr>
        </thead>

        <tbody>
 <?php   $select = $conexao->prepare("SELECT *FROM engenharia");
$select->execute();
$fecth = $select->fetchAll();
  
  foreach($fecth as $produto) {  ?>
   <!--patente-->
  <?php
  echo 

' <tr>
        <td><a href="patente.php?id='.$produto['npedido'].'&titulo='.$produto['titulo'].'&descricao='.$produto['resumo'].'">'.$produto['npedido'].'</a></td>
            <td><a href="patente.php?id='.$produto['npedido'].'&titulo='.$produto['titulo'].'&descricao='.$produto['resumo'].'">'.$produto['titulo'].'</a></td></a>
            
          </tr>
    '

?>

  <?php }?>
   </tbody>
      </table>
</div>

</div>

<!--farmacia-->
<!--inicio-->

<div class="row">	
<div id="test3">

<div class="col s8 offset-s2 center-align">
<br><br>
<table class="highlight responsive-table">

        <thead>
          <tr >
              <th width="20%" > PEDIDO</th>
              <th>T&Iacute;TULO</th>
           
          </tr>
        </thead>

        <tbody>
<?php   $select = $conexao->prepare("SELECT *FROM farmacia");
$select->execute();
$fecth = $select->fetchAll();
  
  foreach($fecth as $produto) {  ?>
   <!--patente-->
  <?php
  echo 

' <tr>
          <td><a href="patente.php?id='.$produto['npedido'].'&titulo='.$produto['titulo'].'&descricao='.$produto['resumo'].'">'.$produto['npedido'].'</a></td>
            <td><a href="patente.php?id='.$produto['npedido'].'&titulo='.$produto['titulo'].'&descricao='.$produto['resumo'].'">'.$produto['titulo'].'</a></td></a>
            
          </tr>
    '

?>



<!--fim-->

















  <?php }?>
   </tbody>
      </table>
</div>

</div>

<div class="row">	
<div id="test4">

<div class="col s8 offset-s2 center-align">
<br><br>
<table class="highlight responsive-table">

        <thead>
          <tr >
             <th width="20%" > PEDIDO</th>
              <th>T&Iacute;TULO</th>
           
          </tr>
        </thead>

        <tbody>

  <?php   $select = $conexao->prepare("SELECT *FROM quimica");
$select->execute();
$fecth = $select->fetchAll();
  
  foreach($fecth as $produto) {  ?>
   <!--patente-->
  <?php
  echo 

' <tr> <td><a href="patente.php?id='.$produto['npedido'].'&titulo='.$produto['titulo'].'&descricao='.$produto['resumo'].'">'.$produto['npedido'].'</a></td>
            <td><a href="patente.php?id='.$produto['npedido'].'&titulo='.$produto['titulo'].'&descricao='.$produto['resumo'].'">'.$produto['titulo'].'</a></td></a>
          </tr>
    '

?>



<!--fim-->

















  <?php }?>
   </tbody>
      </table>
</div>

</div>


<!--fim-->

<div class="row">	
<div id="test5">

<div class="col s8 offset-s2 center-align">
<br><br>
<table class="highlight responsive-table">

        <thead>
          <tr >
       <th width="20%" > PEDIDO</th>
              <th>T&Iacute;TULO</th>
           
          </tr>
        </thead>

        <tbody>  <?php   $select = $conexao->prepare("SELECT *FROM outros");
$select->execute();
$fecth = $select->fetchAll();
  
  foreach($fecth as $produto) {  ?>
   <!--patente-->
  <?php
  echo 

' <tr>
            <td><a href="patente.php?id='.$produto['npedido'].'&titulo='.$produto['titulo'].'&descricao='.$produto['resumo'].'">'.$produto['npedido'].'</a></td>
            <td><a href="patente.php?id='.$produto['npedido'].'&titulo='.$produto['titulo'].'&descricao='.$produto['resumo'].'">'.$produto['titulo'].'</a></td></a>
          </tr>
    '

?>



<!--fim-->

















  <?php }?>
   </tbody>
      </table>
      
</div>

</div>











      <!--Import jQuery before materialize.js-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <script type="text/javascript" src="materialize/js/materialize.js"></script>
      <script>    $(".button-collapse").sideNav();

       document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems, options);
  });

  // Or with jQuery

       $('.slider').slider({indicators:false});
    

    $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrainWidth: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
    }
  );
        

        
      
      </script>
     

     
</body>
</html>