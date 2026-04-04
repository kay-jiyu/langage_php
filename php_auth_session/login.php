<?php
session_start();

$erreur = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($email === "admin@test.fr" && $password === "azerty") {
        $_SESSION['user'] = $email;
        header("Location: index.php");
        exit();
    } else {
        $erreur = "Email ou mot de passe incorrect";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
</head>
<body>

<h1>Connexion</h1>

<?php
if ($erreur !== null) {
    echo "<p style='color:red;'>$erreur</p>";
}
?>

<form method="POST">
    <input type="email" name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Mot de passe"><br>
    <button type="submit">Connexion</button>
</form>

</body>
</html>