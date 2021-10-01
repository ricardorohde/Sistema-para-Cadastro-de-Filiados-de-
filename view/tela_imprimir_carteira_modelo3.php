<?php
  require 'header.php';
  require_once "../db/config.php";

      $sql="SELECT * FROM filiado ";
      $sql=$pdo->query($sql);

    	 	   $matricula = $_GET['matricula'];
     
      $sql = "SELECT * FROM filiado WHERE matricula ='$matricula' LIMIT 1";
      $sql = $pdo->query($sql);	 
    
     

  if($sql->rowCount() > 0) {
      foreach($sql->fetchAll() as $linhas){   
  ?>
   <nav aria-label="Page navigation example">
            <ul class="pagination">
         
            <li class="page-item"><a class="page-link" href="../view/tela_imprimir_carteira_modelo2.php?&matricula=<?php echo $linhas['matricula']; ?>">Obreiro</a></li>
            <li class="page-item"><a class="page-link" href="../view/tela_imprimir_carteira_modelo3.php?&matricula=<?php echo $linhas['matricula']; ?>">Membro</a></li>
            <li class="page-item"><a class="page-link" href="../view/tela_imprimir_carteira_modelo4.php?&matricula=<?php echo $linhas['matricula']; ?>">Congregado</a></li>
           
            <li class="page-item"><a class="page-link" href="../view/tela_imprimir_envelope.php?&matricula=<?php echo $linhas['matricula']; ?>">Envelope de Dizimo</a></li>
            <li class="page-item"><a class="page-link" href="#" onclick="window.print();" style="text-decoration:none;">Imprimir página</a></li>
          </ul>
      </nav>
 <div class="conteiner"> 
	  <div class="row">
		<div id="frente_carteira">
        
     
          <div class="topo">
          	  <img id="fundo" src="../imagens/img_carteira/carteirinha_frente.png" alt="">
          	  
          	

          </div>
          
          <div id="corpo_membro3">
           
             <p id="dados_frente"style="color:#000;">Matricula: <?php echo $matricula;?></p>
             <p id="dados_frente"style="color:#000;">Nome:  <?php echo $linhas['nome'];?></p>
             <p id="dados_frente"style="color:#000;">Cargo:  <?php echo $linhas['funcao'];?></p>
             <p id="dados_frente"style="color:#000;">Congregação:  <?php echo $linhas['congregacao'];?></p>
            
          </div>           	  
                           	
                  	
		 </div>
      <h4 id="cab_cartao_membro3">CARTÃO DE IDENTIFICAÇÃO</h4>
     <img id="foto_carteira"src="../imagens/<?php echo $linhas['arquivo'];?>" width="120" height="150" style="border-radius:10px;">

		<div id="verso_carteira">	  	
         <img id="fundo_verso" src="../imagens/img_carteira/laranja.jpg" alt="">
        <div id="corpo_verso">
                         
             <p id="dados_verso"style="color:#000;"><label id="tex_documento">Documento:</label>&nbsp;<?php echo $linhas['documento'];?>
              <label id="tex_nascimento">Nascimento:</label>&nbsp;
              <?php echo date("d/m/Y",strtotime($linhas['dataNascimento']));?></p>
             <p id="dados_verso"style="color:#000;"><label id="tex_batizado">Batizado em:&nbsp;</label><?php echo date("d/m/Y",strtotime($linhas['dataBatismo']));?>
              <label id="tex_estadocivil">Estado Civil:</label>&nbsp;<?php echo $linhas['estadoCivil'];?></p>
             <p id="dados_verso"style="color:#000;"><label id="tex_mae">Mãe:</label>&nbsp;<?php echo $linhas['mae'];?></p>
             <p id="dados_verso"style="color:#000;"><label id="tex_pai">Pai:</label>&nbsp;<?php echo $linhas['pai'];?></p>
          </div>
                
         <p class="central"style="color:#000;">
          A Constituição Federal assegura a qualquer cidadão o direito a livre manifestação de pensamento,   
         á liberdade de crença ,ao livre exercicio de cultos religiosos,
         sendo o seu local e liturgia protegidos e a prestação assistência reliciosa nas instituições de internamento.CRRB/1988,art 5º,IV,VI,VII e VIII.Capitulo 1º,Art 5. CONSTITUIÇÃO FEDERAL
         <br>
         Esta credencial é nominal e intransferivel.O titular somente poderá porta-lá
         enquanto proceder conforme os principios da palavra de Deus.
        </p>

          <img  id="assinatura" src="../imagens/img_carteira/assinatura.png"/>  
          <div id="assinatura_imagem">       
                 
          <p id="dados_verso1"style="color:#000;">-------------------------------------------------------</strong></p> 
          <p id="dados_verso2"style="color:#000;">Pastor Presidente - <strong>Eribaldo Medeiros Coelho </strong></p>     
   </div> 

		</div>
	  </div><!--Fim linha 1 -->	

 

 </div><!--Fim conteiner -->



<?php 
       }
      } 
    ?>



<?php require 'footer.php';?>