
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     
<head>  <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script></head>
<nav class="#40c4ff light-blue accent-2 ">

    <div class="nav-wrapper container">
     
     
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <form>
<li>Pesquisar Patente:</li><li><input type="text"></li><li><button class="btn #0277bd light-blue darken-3"> Pesquisar</button></li>
        <li><a href="https://wp.ufpel.edu.br/cit/">CIT</a></li>
        <li><a href="http://ufpel.edu.br">UFPEL</a></li>
          <li><a href="edit.html">Editar Patente</a></li>
  
      </ul>
      </form>
    </div>
  </nav>
        

<h4 class="center-align"> Cadastro de Patentes</h4>
<div class="form container"> 
<form method="POST" action="proc_upload.php" enctype="multipart/form-data">
Nº do pedido: <input type="text" name="npedido"><br><br>
	
	<spam>Data de depósito</spam><input type="text" name="deposito"><br><br>
	<spam>Classificação do IPC</spam><input type="text" name="ipc"><br><br>

 <label>Área</label>
  <select class="browser-default"  name="afim">
  <option value="BIOTECNOLOGIA">BIOTECNOLOGIA</option>
      <option value="FARMACIA">FARMÁCIA</option>
      <option value="ENGENHARIA">ENGENHARIA</option>
      <option value="QUIMICA">QUÍMICA</option>
      <option value="OUTROS">OUTROS</option>
  </select>
    <br><br>
    Imagem: <input name="arquivo" type="file"><br><br>
	<spam>Titulo</spam><input type="text" name="titulo"><br><br>


  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
        	     <label for="textarea1">resumo</label>
          <textarea id="resumo" name="resumo" class="materialize-textarea"></textarea>
     
        </div>
      </div>

<br><br>
	
	<input type="submit" value="Cadastrar">
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