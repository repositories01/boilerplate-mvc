<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Principal</title>
  </head>
  <body>
    <h2>Home</h2>
    <?php
    $user = $this->dados;

  
foreach($user as $key => $value)  {
  echo "<li>".$value['nome'] . "| " . $value['email'] . "</li>";
}
  ?>

<form action="/cadastro/tarefa" method="post">
<input type="text" name="url" />
<button>adicionar</button>

</form>

  </body>
</html>
