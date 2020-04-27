<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Principal</title>
  </head>
  <body>
    <h2>Home</h2>
<?php
$moedas = $this->moedas;


foreach($moedas as $key =>$value)

{
  
  //  echo $value . "<br/>";
  
 
}

?>

<form action="/cadastro/moeda" method="post">
<input type="text" name="url" />
<button>adicionar</button>

</form>

  </body>
</html>
