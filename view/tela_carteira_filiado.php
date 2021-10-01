<?php   
      require_once "../db/config.php";
      $sql = "SELECT * FROM filiado  LIMIT 0";
      $sql = $pdo->query($sql);	 
?>
<?php require_once'header.php';?>

<div class="container">
<br>
<h1>CARTÃO DE IDENTIFICAÇÃO</h1>  
<div>
  <img src="../imagens/diversas_imagens/cartao-de-credito.png" width="400" height="250">
</div>
<br>
<div class="col-sm-8 form-group ">
  <form class="form-group "action="../view/tela_imprimir_carteira_modelo2.php" method="get">
      <input name="matricula" id="txt_consulta" placeholder="Digite a Matricula do Filiado" type="text" class="form-control"><br>
      <button type="submit" class="form-group btn btn-primary">Pesquisar</button>
  </form>
</div>
   


<?php require'footer.php';?>

 