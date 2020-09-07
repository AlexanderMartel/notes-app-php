<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <title>todo list</title>
</head>
<body>
    
    <form id="formulario">
        <div class="form">
            <h1>registro</h1>
            <div class="grupo">
                <input type="text" name="usuario" id="usuario" required>
                <span class="barra"></span>
                <label for="usuario">usuario</label>
            </div>
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
            <button type="submit">Registrarme</button>
        </div>
    </form>
</body>
</html>