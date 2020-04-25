<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Principal</title>
  </head>
  <body>
    <h2>Cotação</h2>
  <?php 
  $user = $this->dados;
foreach($user as $key => $value)  {
  echo "<li>".$value['nome'] . "| " . $value['email'] . "</li>";
}
  ?>

  </body>
</html>
