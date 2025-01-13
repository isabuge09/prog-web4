<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar pelo código</title>
    <link rel="stylesheet" href="teste.css"> 
    
</head>
<body>
    
    <h2>Resultado Relatório de Clientes:</h2>

    <?php 
      $pessoa1 = array("codigo"=> "1", "nome"=> "Alberto Silva" );
      $pessoa2 = array("codigo"=> "2", "nome"=> "Bianca Duarte" );
      $pessoa3 = array("codigo"=> "3", "nome"=> "João Almeida" );
      $pessoa4 = array("codigo"=> "4", "nome"=> "Valéria Souza" );
      $pessoa5 = array("codigo"=> "5", "nome"=> "Augusto Silva" );
      $lista['pessoa'][] = $pessoa1;
      $lista['pessoa'][] = $pessoa2;
      $lista['pessoa'][] = $pessoa3;
      $lista['pessoa'][] = $pessoa4;
      $lista['pessoa'][] = $pessoa5;
      
      
      foreach($lista as  $listapessoas)
      {
       
     
      ?>
      
      <table id="tabela">
        <tr>
          <th>Código</th>
          <th>Nome</th>
        </tr>
        
        <?php foreach($listapessoas as  $itempessoa =>$valuepessoa){    ?>  
        <tr>           
        <?php  
          foreach($valuepessoa as $item =>$value) {                    
            echo "<td>" . $value . "</td>" ;     
        
          }?>
        </tr>
        <?php    }}?>
      </table> 
    
</body>
</html>
