<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="short cut icon" href="../img/logo.png">
    <title>Page</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>

    <div class="container">
        <div class="left-section">
            <img src="../img/logo.png" alt="logo" width="150px" style="margin-bottom: 10px">
            <h2>APasionados</h2>
        </div>
        <div class="right-section">
            <h2>Registrate</h2>

            <?php if (isset($error)): ?>
                <div class="error"><?php echo $error; ?></div>
            <?php endif; ?>

            <form action="./if/registroExitoso.php" method="POST">
                <div class="input-group">
                    <label>Usuario:</label>
                    <input type="text" name="username" required>
                </div>

                <div class="input-group">
                    <label>Email:</label>
                    <input type="text" name="email" required>
                </div>

                <div class="input-group">
                    <label>Contraseña:</label>
                    <input type="password" name="password_1" required>
                </div>

                <div class="input-group">
                    <label>Confirmar contraseña:</label>
                    <input type="password" name="password_2" required>
                </div>

                <div class="input-group">
                    <button type="submit" class="btn" name="reg_user">Registrar</button>
                </div>
                
                <p>¿Ya tienes una cuenta? <a href="../index.php">Inicia sesión</a></p>
            </form>
        </div>
    </div>

<?php require_once './login/if/loginExitoso.php'; ?>

<?php include_once '../templates/footer.php'; ?>