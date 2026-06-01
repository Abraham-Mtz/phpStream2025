<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de - <?php echo "phpStem"; ?></title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f4f8;
            color: #1a202c;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        .card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            width: 100%;
            max-width: 480px;
            overflow: hidden;
            border-top: 6px solid #4f46e5;
        }
        .card-header {
            background: linear-gradient(135deg, #4f46e5, #4338ca);
            color: #ffffff;
            padding: 30px 25px 45px 25px;
            text-align: center;
        }
        .card-header h1 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 6px;
            letter-spacing: 0.5px;
        }
        .card-header p {
            font-size: 14px;
            opacity: 0.9;
        }
        .avatar-container {
            text-align: center;
            margin-top: -50px;
            position: relative;
            z-index: 10;
        }
        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 4px solid #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            object-fit: cover;
            background-color: #ffffff;
        }
        .card-body {
            padding: 20px 25px 30px 25px;
        }
        .info-group {
            margin-bottom: 20px;
            border-bottom: 1px solid #e2e8f0;
            padding-bottom: 12px;
        }
        .info-group:last-child {
            margin-bottom: 0;
            border-bottom: none;
            padding-bottom: 0;
        }
        .info-label {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #64748b;
            font-weight: 600;
            margin-bottom: 4px;
        }
        .info-value {
            font-size: 16px;
            color: #1e293b;
            font-weight: 500;
        }
        .card-footer {
            background: #f8fafc;
            padding: 15px 25px;
            text-align: center;
            font-size: 13px;
            color: #94a3b8;
            border-top: 1px solid #f1f5f9;
        }
        .btn-back {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 24px;
            background-color: #4f46e5;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            transition: background 0.2s;
        }
        .btn-back:hover {
            background-color: #4338ca;
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="card-header">
            <h1>ℹ️ Datos del Desarrollador</h1>
            <p>Información Académica del Proyecto STEM</p>
        </div>
         
        <div class="avatar-container">
            <img src="https://github.com/Abraham-Mtz.png" alt="Foto de Desarrollador" class="avatar">
        </div>
        
        <div class="card-body">
            <div class="info-group">
                <div class="info-label">Proyecto</div>
                <div class="info-value">🚀 <?php echo "phpStem"; ?></div>
            </div>

            <div class="info-group">
                <div class="info-label">Estudiante</div>
                <div class="info-value">👨‍💻 <?php echo "Martinez Olin Abraham Adir"; ?></div>
            </div>

            <div class="info-group">
                <div class="info-label">Número de Control</div>
                <div class="info-value">🆔 <?php echo "24090159"; ?></div>
            </div>

            <div class="info-group">
                <div class="info-label">Materia</div>
                <div class="info-value">📚 <?php echo "Programacion Web"; ?></div>
            </div>

            <div class="info-group">
                <div class="info-label">Grupo</div>
                <div class="info-value">👥 <?php echo "XB"; ?></div>
            </div>
             
            <div style="text-align: center;">
                <a href="index.php" class="btn-back">⬅️ Volver al Inicio</a>
            </div>
        </div>

        <div class="card-footer">
            🏫 <?php echo "Tecnologico de Zacatepec"; ?> • <?php echo date('Y'); ?>
        </div>
    </div>

</body>
</html>
