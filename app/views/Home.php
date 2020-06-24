<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Principal</title>
  </head>
  <body>
    <h2>Lista de tarefas</h2>
   

<form action="/home/cadastro" method="post">
<input type="text" name="tarefas" />
<button>adicionar</button>

</form>
<?php
    $user = $this->dados;

  
foreach($user as $key => $value)  {
  echo "<li>".$value['tarefas'] . "</li>";
  ?>
    <a href="/home/editar/<?php echo  $value['id']?>"><button type="button">editar</button></a>

    <form action="/home/deletar/<?php echo $value['id']?>" method="post"> 
     <input type="hidden"  name="_METHOD" value="delete">
  <button>deletar</button>
  </form>
  <?php
}

  ?>

  </body>
</html>