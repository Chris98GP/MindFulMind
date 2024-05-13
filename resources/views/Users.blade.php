<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>
<body>
    <h1>Lista de Usuarios</h1>
    <ul>
        @foreach ($usuarios as $usuario)
        <li>{{ $usuario->nombre }} - {{ $usuario->apellido }}</li>
    @endforeach
    </ul>
</body>