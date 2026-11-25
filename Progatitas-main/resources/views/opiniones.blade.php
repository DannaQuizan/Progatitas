<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar</title>
</head>
<body>
  <h1> Registra tu opinion </h1>
  <form action="{{ url('/guardarOpinion') }}" method="post">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre">
    <br>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email">
    <br>
    <label for="opinion">Opinión:</label>
    <select id="opinion" name="opinion">
        <option value="">Seleccione una opción</option>
        <option value="1">Buena</option>
        <option value="2">Medio</option>
        <option value="3">Mala</option>
    </select>
    <br>
   
    <button type="submit">Enviar</button>
    <p id="mensajeError"></p>
</form>


</body>
</html>