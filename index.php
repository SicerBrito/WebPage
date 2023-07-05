<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/logo.png">
    <title>Page</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <div class="container">
        <div class="left-section">
            <img src="./img/logo.png" alt="logo" width="150px">
            <p class="color">Bienvenido<span class="smoky-text">C</span>a<span class="smoky-text">S</span>nuestra<span class="smoky-text">T</span>página.<span class="smoky-text">E</span>Descubre<span class="smoky-text">o</span>todo<span class="smoky-text">c</span>lo<span class="smoky-text">t</span>que<span class="smoky-text">f</span>tenemos<span class="smoky-text">e</span>para<span class="smoky-text">f</span>ofrecerte.</p>
        </div>
        <div class="right-section">
            <h2>Iniciar sesión</h2>

            <?php if (isset($error)): ?>
                <div class="error"><?php echo $error; ?></div>
            <?php endif; ?>

            <form action="home.php" method="POST" >
                <div class="input-group">
                    <label>Email:</label>
                    <input type="text" name="email" required>
                </div>
                <div class="input-group">
                    <label>Contraseña:</label>
                    <input type="password" name="password" required>
                </div>
                <div class="input-group">
                    <button type="submit" class="btn" name="guardar">Iniciar sesión</button>
                </div>
                <p>¿No tienes una cuenta? <a href="./login/registro.php">Regístrate</a></p>
            </form>
        </div>
    </div>
    
    <?php require_once './login/if/loginExitoso.php'; ?>
    <?php include_once './templates/footer.php'; ?>
</body>
</html>
