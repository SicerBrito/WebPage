
<?php
require_once './database/database.php';

$db = new Clases\Database();
$conn = $db->getConnection('mysql');

if ($conn instanceof \PDO) {
    session_start();

    if (isset($_SESSION['email'])) {
        header('location: ../../../../index.php');
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $password = md5($password); // Encriptamos la contraseña con MD5 (puedes usar un método más seguro)

        $stmt = $conn->prepare("SELECT * FROM users WHERE emailUser = :email AND passwordUser = :password");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        $user = $stmt->fetch(\PDO::FETCH_ASSOC);

        if ($user) {
            $_SESSION['email'] = $email;
            header('location: home.php');
            exit;
        } else {
            $error = "Usuario o contraseña incorrectos.";
        }
    }
}
?>