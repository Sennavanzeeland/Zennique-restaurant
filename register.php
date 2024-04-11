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