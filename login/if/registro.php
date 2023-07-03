<?php
require_once './database/database.php';

$db = new Clases\Database();
$conn = $db->getConnection('mysql');

// Iniciar sesión (asegúrate de tener esta línea al comienzo de todos los archivos que utilizan sesiones)
session_start();

// Verificar si el formulario de registro se ha enviado
if (isset($_POST['reg_user'])) {
    // Obtener los datos del formulario
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];

    // Validar los datos del formulario (puedes agregar más validaciones según tus necesidades)
    if (empty($username) || empty($email) || empty($password_1) || empty($password_2)) {
        $error = "Por favor, completa todos los campos.";
    } elseif ($password_1 !== $password_2) {
        $error = "Las contraseñas no coinciden.";
    } else {
        // Encriptar la contraseña (puedes usar un método más seguro)
        $password = md5($password_1);

        // Insertar el nuevo usuario en la base de datos
        $stmt = $conn->prepare("INSERT INTO users (usernameUser, emailUser, passwordUser) VALUES (:username, :email :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        // Marcar el registro como exitoso utilizando una variable de sesión
        $_SESSION['registro_exitoso'] = true;

        // Redirigir a una página de éxito o a otra página de tu elección
        header('Location: ../../registroExitoso.php');
        exit;
    }
}
?>