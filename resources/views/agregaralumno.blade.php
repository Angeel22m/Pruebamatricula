<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar</title>
</head>
<body>
    <form action="{{Route('alumno.guardar')}}" method="post">
        @csrf
        <div>
            <label for="">Nombre: </label>
            <input type="text" id="nombre" name="nombre" required></div>
        <div>
            <label for="">Apellido: </label>
            <input type="text" id="apellido" name="apellido" required></div>
        <div>
            <label for="">Telefono: </label>
            <input type="text" id="telefono" name="telefono" required></div>
        <div>
           <div> <button type="submit">guardar</button></div>
       
    </form>
</body>
</html>