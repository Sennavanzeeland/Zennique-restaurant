<?php
session_start(); 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['uname'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE user_name='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
      
        $_SESSION['username'] = $username;
        header("location: home-admin.php"); 
        exit;
    } else {
        $error = "Gebruikersnaam of wachtwoord is onjuist";
    } 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zennique-Login</title>
    <link rel="stylesheet" href="style/login.css" />
    <link rel="stylesheet" href="style/navbar.css" />
    <link rel="icon" type="image/icon" href="fotos/logo black background.png">
</head>

<body>
    <?php
    include('navbar.html');
    ?>

    <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <label>Gebruikersnaam</label>
        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Wachtwoord</label>
        <input type="password" name="password" placeholder="Password"><br>

        <button type="submit">Login</button>
        <div class="registreren">Heb je nog geen account ><a href="register.php"
                class="registreren-button">registreren</a>
        </div>
    </form>
</body>

</html>