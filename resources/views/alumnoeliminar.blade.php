<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eliminar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <h1>Seguro que desea eliminar?
        </h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col"># Cuenta</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Telefono</th>
            <th scope="col">Action</th>
            </th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{$alumno->numeroCuenta}}</th>
                <td>{{$alumno->nombre}}</td>
                <td>{{$alumno->apellido}}</td>
                <td>{{$alumno->telefono}}</td>
                <td><a href="{{route('alumno.elimnar.salvar',$alumno->numeroCuenta)}}">Eliminar</a></td>
              </tr>
        </tbody>
      </table>
</body>
</html>