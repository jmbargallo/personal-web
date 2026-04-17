<?php
$hostname = gethostname();
$ip = $_SERVER['SERVER_ADDR'] ?? 'unknown';
$date = date("Y-m-d H:i:s");
?>

<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Homelab Kubernetes 🚀</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #0f172a;
            color: #e2e8f0;
            text-align: center;
            padding: 50px;
        }
        .card {
            background: #1e293b;
            padding: 30px;
            border-radius: 15px;
            display: inline-block;
            box-shadow: 0 0 20px rgba(0,0,0,0.5);
        }
        h1 {
            color: #38bdf8;
        }
        .info {
            margin-top: 20px;
            text-align: left;
        }
        .info p {
            margin: 5px 0;
        }
        .badge {
            margin-top: 20px;
            padding: 10px;
            background: #22c55e;
            color: black;
            border-radius: 8px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>🚀 Kubernetes está funcionando</h1>
    <p>Tu aplicación está desplegada correctamente</p>

```
<div class="info">
    <p><strong>Pod:</strong> <?php echo $hostname; ?></p>
    <p><strong>IP:</strong> <?php echo $ip; ?></p>
    <p><strong>Fecha:</strong> <?php echo $date; ?></p>
</div>

<div class="badge">
    ✅ Deploy OK en tu homelab
</div>
```

</div>

</body>
</html>

