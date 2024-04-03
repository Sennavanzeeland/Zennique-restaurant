<?php
session_start(); // Start de sessie (indien nog niet gestart)

// Databaseverbinding
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";

$conn = new mysqli($servername, $username, $password, $dbname);

// Controleer de databaseverbinding
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Als het formulier is verzonden
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ontvang de ingevoerde gegevens van het formulier
    $username = $_POST['uname'];
    $password = $_POST['password'];

    // Voeg de gebruiker toe aan de 'users'-tabel
    $sql = "INSERT INTO users (user_name, password) VALUES ('$username', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: login.php"); 
    exit();
    
    } else {
        echo "Er is iets misgegaan " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zennique-Contact</title>
    <link rel="stylesheet" href="style/register.css" />
    <link rel="icon" type="image/icon" href="fotos/logo black background.png" />
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Registratie</h2>
        <label>Gebruikersnaam</label>
        <input type="text" name="uname" placeholder="Gebruikersnaam" required><br>

        <label>Wachtwoord</label>
        <input type="password" name="password" placeholder="Wachtwoord" required><br>


        <button type="submit">Registreren</button>
    </form>
</body>

</html>