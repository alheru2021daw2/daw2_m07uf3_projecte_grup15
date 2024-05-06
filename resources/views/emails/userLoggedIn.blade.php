<!DOCTYPE html>
<html>
<head>
    <title>Nuevo inicio de sesión</title>
</head>
<body>
    <h2>Nuevo inicio de sesión</h2>
    <p>Se ha iniciado sesión un usuario con el rol "basic".</p>
    <p>Usuario: {{ $user->name }}</p>
    <p>Hora de entrada: {{ $user->hora_entrada }}</p>
</body>
</html>

