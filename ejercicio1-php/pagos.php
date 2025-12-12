<?php

/*
 Array indexado:
 $arrayIndexado = ["valor1", "valor2", "valor3"]; // índices numéricos 0,1,2...

 Array asociativo:
 $arrayAsociativo = [
 "clave1" => "valor1",
 "clave2" => "valor2"
 ];

 Array multidimensional:
 $arrayMulti = [
 "persona1" => ["nombre" => "Juan", "edad" => 30],
 "persona2" => ["nombre" => "Ana", "edad" => 25]
 ];
*/

$socios = [
    101 => [
        "id" => 101,
        "nombre" => "Carlos",
        "apellidos" => "García López",
        "DNI" => "12345678A",
        "email" => "carlos@example.com",
        "telefono" => "600123456",
        "pagos" => [
            "2025-01" => ["mes" => "Enero", "importe" => 20, "estado" => "Pagado", "fecha" => "2025-01-05"],
            "2025-02" => ["mes" => "Febrero", "importe" => 20, "estado" => "Pagado", "fecha" => "2025-02-04"],
            "2025-03" => ["mes" => "Marzo", "importe" => 20, "estado" => "Pendiente", "fecha" => null],
            "2025-04" => ["mes" => "Abril", "importe" => 20, "estado" => "Pagado", "fecha" => "2025-04-03"],
            "2025-05" => ["mes" => "Mayo", "importe" => 20, "estado" => "Pendiente", "fecha" => null],
            "2025-06" => ["mes" => "Junio", "importe" => 20, "estado" => "Pagado", "fecha" => "2025-06-02"],
            "2025-07" => ["mes" => "Julio", "importe" => 20, "estado" => "Pagado", "fecha" => "2025-07-01"],
            "2025-08" => ["mes" => "Agosto", "importe" => 20, "estado" => "Pendiente", "fecha" => null],
            "2025-09" => ["mes" => "Septiembre", "importe" => 20, "estado" => "Pagado", "fecha" => "2025-09-06"],
            "2025-10" => ["mes" => "Octubre", "importe" => 20, "estado" => "Pendiente", "fecha" => null],
            "2025-11" => ["mes" => "Noviembre", "importe" => 20, "estado" => "Pagado", "fecha" => "2025-11-02"],
            "2025-12" => ["mes" => "Diciembre", "importe" => 20, "estado" => "Pendiente", "fecha" => null]
        ]
        ],
    102 => [
        "id" => 102,
        "nombre" => "Alvaro",
        "apellidos" => "Millanes Sabate",
        "DNI" => "12345678A",
        "email" => "carlos@example.com",
        "telefono" => "600123456",
        "pagos" => [
            "2025-01" => ["mes" => "Enero", "importe" => 20, "estado" => "Pagado", "fecha" => "2025-01-05"],
            "2025-02" => ["mes" => "Febrero", "importe" => 20, "estado" => "Pagado", "fecha" => "2025-02-04"],
            "2025-03" => ["mes" => "Marzo", "importe" => 20, "estado" => "Pendiente", "fecha" => null],
            "2025-04" => ["mes" => "Abril", "importe" => 20, "estado" => "Pagado", "fecha" => "2025-04-03"],
            "2025-05" => ["mes" => "Mayo", "importe" => 20, "estado" => "Pendiente", "fecha" => null],
            "2025-06" => ["mes" => "Junio", "importe" => 20, "estado" => "Pagado", "fecha" => "2025-06-02"],
            "2025-07" => ["mes" => "Julio", "importe" => 20, "estado" => "Pagado", "fecha" => "2025-07-01"],
            "2025-08" => ["mes" => "Agosto", "importe" => 20, "estado" => "Pendiente", "fecha" => null],
            "2025-09" => ["mes" => "Septiembre", "importe" => 20, "estado" => "Pagado", "fecha" => "2025-09-06"],
            "2025-10" => ["mes" => "Octubre", "importe" => 20, "estado" => "Pendiente", "fecha" => null],
            "2025-11" => ["mes" => "Noviembre", "importe" => 20, "estado" => "Pagado", "fecha" => "2025-11-02"],
            "2025-12" => ["mes" => "Diciembre", "importe" => 20, "estado" => "Pendiente", "fecha" => null]
        ]
        ],
    103 => [
        "id" => 101,
        "nombre" => "Orabla",
        "apellidos" => "Sabate Millanes",
        "DNI" => "12345678A",
        "email" => "orabla@example.com",
        "telefono" => "600123456",
        "pagos" => [
            "2025-01" => ["mes" => "Enero", "importe" => 20, "estado" => "Pagado", "fecha" => "2025-01-05"],
            "2025-02" => ["mes" => "Febrero", "importe" => 20, "estado" => "Pagado", "fecha" => "2025-02-04"],
            "2025-03" => ["mes" => "Marzo", "importe" => 20, "estado" => "Pendiente", "fecha" => null],
            "2025-04" => ["mes" => "Abril", "importe" => 20, "estado" => "Pagado", "fecha" => "2025-04-03"],
            "2025-05" => ["mes" => "Mayo", "importe" => 20, "estado" => "Pendiente", "fecha" => null],
            "2025-06" => ["mes" => "Junio", "importe" => 20, "estado" => "Pagado", "fecha" => "2025-06-02"],
            "2025-07" => ["mes" => "Julio", "importe" => 20, "estado" => "Pagado", "fecha" => "2025-07-01"],
            "2025-08" => ["mes" => "Agosto", "importe" => 20, "estado" => "Pendiente", "fecha" => null],
            "2025-09" => ["mes" => "Septiembre", "importe" => 20, "estado" => "Pagado", "fecha" => "2025-09-06"],
            "2025-10" => ["mes" => "Octubre", "importe" => 20, "estado" => "Pendiente", "fecha" => null],
            "2025-11" => ["mes" => "Noviembre", "importe" => 20, "estado" => "Pagado", "fecha" => "2025-11-02"],
            "2025-12" => ["mes" => "Diciembre", "importe" => 20, "estado" => "Pendiente", "fecha" => null]
        ]
    ]
    
];

$socio = $socios[101];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pagos del socio</title>
    <style>
        .pendiente { background-color: #f8d7da; color: #721c24; }
        table { border-collapse: collapse; width: 60%; }
        th, td { border: 1px solid #000; padding: 6px; text-align: center; }
    </style>
</head>
<body>

<h1>Información del socio</h1>
<p><strong>Nombre:</strong> <?= htmlspecialchars($socio["nombre"] . " " . $socio["apellidos"]) ?></p>
<p><strong>DNI:</strong> <?= htmlspecialchars($socio["DNI"]) ?></p>
<p><strong>Teléfono:</strong> <?= htmlspecialchars($socio["telefono"]) ?></p>
<p><strong>Email:</strong> <?= htmlspecialchars($socio["email"]) ?></p>

<h2>Pagos del año 2025</h2>
<table>
    <tr>
        <th>Mes</th>
        <th>Importe (€)</th>
        <th>Estado</th>
        <th>Fecha pago</th>
    </tr>

    <?php
    $total = 0;
    foreach ($socio["pagos"] as $mes => $datos) :
        $clase = ($datos["estado"] === "Pendiente") ? "pendiente" : "";
        if ($datos["estado"] === "Pagado") {
            $total += $datos["importe"];
        }
    ?>
        <tr class="<?= $clase ?>">
            <td><?= htmlspecialchars($datos["mes"]) ?></td>
            <td><?= htmlspecialchars($datos["importe"]) ?></td>
            <td><?= htmlspecialchars($datos["estado"]) ?></td>
            <td><?= $datos["fecha"] ?? "-" ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<h3>Total abonado en el año: <?= $total ?> €</h3>

</body>
</html>
