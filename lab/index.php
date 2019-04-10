
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <style>
   
   .num_{
     position:absolute;
     top:1px;
   }
   
   </style>  
<head>  <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script></head>
<nav class="#40c4ff light-blue accent-2 ">

    <div class="nav-wrapper container">
 <h4 class="num_"> LAB-206</h4> 
    </div>
  </nav>
        

<h4 class="center-align"> Cadastro Interno de projetos</h4>
<div class="form container"> 
<form method="POST" action="proc_upload.php" enctype="multipart/form-data">
Nome Completo: <input type="text" name="nome"><br><br>
	
	<spam>Projeto</spam><input type="text" name="projeto"><br><br>
	<spam>Contato</spam><input type="text" name="contato"><br><br>

 <label>Curso</label>
  <select class="browser-default"  name="curso">
  <option value="ELETRONICA">ENGENHARIA ELETR&Ocirc;NICA</option>
      <option value="AUTOMACAO">ENGENHARIA DE CONTROLE E AUTOMA&Ccedil;&Atilde;O</option>

  </select>
    <br><br>
    Fotinho marota: <input name="arquivo" type="file"><br><br>


<br><br>
	
	<input type="submit" class="btn  light-blue accent-2" value="Cadastrar">
</form>

  <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });</script>