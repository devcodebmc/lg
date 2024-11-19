<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Mensaje de Contacto</title>
</head>
<body>
    <h1>Solicitud de Cotización</h1>
    <p><strong>Nombre:</strong> {{ $data['nombre'] }}</p>
    <p><strong>Correo Electrónico:</strong> {{ $data['correo'] }}</p>
    <p><strong>Teléfono:</strong> {{ $data['telefono'] }}</p>
    <p><strong>Tipo de Servicio:</strong> {{ $data['servicio'] }}</p>
    <p><strong>Área Aproximada:</strong> {{ $data['area'] }} m²</p>
    <p><strong>Materiales Preferidos:</strong> {{ $data['materiales'] ?? 'No especificado' }}</p>
    <p><strong>Presupuesto Estimado:</strong> {{ $data['presupuesto'] ?? 'No especificado' }}</p>
    <p><strong>Descripción Adicional:</strong> {{ $data['mensaje'] ?? 'No especificado' }}</p>

</body>
</html>
