<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>


<form action="/home/cadastro/<?php echo $this->editar->id?>" method="post">

<input type="hidden" name="_METHOD" value="put">
<input type="text" name="tarefas"  value="<?php echo $this->editar->tarefas ?>"/>
<button>atualizar</button>

</form>

    
</body>
</html>
