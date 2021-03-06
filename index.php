<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>aplicacion de tareas</title>
</head>

<body>

    <form id="formulario" method="post">
        <div class="wave">
            <div style="height: 150px; overflow: hidden;">
                <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                    <path d="M0.00,49.98 C149.99,150.00 271.49,-49.98 500.00,49.98 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #514696;">
                    </path>
                </svg>
            </div>
        </div>
        <div class="form">
            <h1>iniciar sesion</h1>
            <div class="grupo">
                <input type="email" name="email" id="email" required>
                <span class="barra"></span>
                <label for="email">email</label>
            </div>
            <div class="grupo">
                <input type="password" name="password" id="password" required>
                <span class="barra"></span>
                <label for="password">password</label>
            </div>
            <button type="submit" id="btn">ingresar</button>
            <a href="registro.php">registrarme</a>
        </div>
    </form>
</body>

</html>