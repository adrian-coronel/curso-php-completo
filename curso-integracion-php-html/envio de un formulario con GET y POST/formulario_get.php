<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fomrulario por GET</title>
</head>
<body>
  
  <form action="./server_get.php" method="get">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre"> <!-- A travéz del name el servidor se guia -->
  
    <label for="edad">Edad:</label> <!-- El label conecta con el id del input -->
    <input type="text" name="edad" id="edad">
    <button type="submit" >Mandar formulario</button>
  </form>

</body>
</html>