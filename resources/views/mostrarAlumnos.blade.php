<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar</title>
</head>
<body>
    <h1>Alumnos</h1>
    @foreach ($alumnos as $alumno)
    <label for="">Numero de cuenta: {{$alumno->numeroCuenta}}</label>
    <label for="">Nombre: {{$alumno->nombre}}</label>
    <label for="">Apellido: {{$alumno->apellido}}</label>
    <label for="">Telefono: {{$alumno->telefono}}</label><p>.</p>
    @endforeach

</body>
</html>