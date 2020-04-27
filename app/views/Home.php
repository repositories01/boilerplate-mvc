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
  
   echo $value . "<br/>";
  
 
}

?>
<form>
<input type="text" name="titulo" />
</form>

  </body>
</html>
