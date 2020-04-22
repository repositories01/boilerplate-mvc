<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro em php-MVC</title>
</head>
<body>
<?php

if(isset($viewName))
{
    $path = viewsPath() . $viewName . '.php';

    if(file_exists($path))
      {
      require_once $path;
      }
}


?>
    
</body>
</html>