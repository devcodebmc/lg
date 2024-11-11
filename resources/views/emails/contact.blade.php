<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Mensaje de Contacto</title>
</head>
<body>
    <h2>Nuevo Mensaje de Contacto</h2>
    <p><strong>Nombre:</strong> {{ $data['nombre'] }} {{ $data['apellido'] ?? '' }}</p>
    <p><strong>Teléfono:</strong> {{ $data['telefono'] ?? 'No proporcionado' }}</p>
    <p><strong>Correo:</strong> {{ $data['correo'] }}</p>
    <p><strong>Mensaje:</strong></p>
    <p>{{ $data['mensaje'] }}</p>
</body>
</html>
