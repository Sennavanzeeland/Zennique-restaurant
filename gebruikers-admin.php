<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zennique-gebruikers-admin</title>
    <link rel="stylesheet" href="style/gebruikers-admin.css" />
    <link rel="icon" type="image/icon" href="fotos/logo black background.png">
</head>

<body>
    <?php
    include ('navbar-admin.html');
    ?>
    <div class="container">

        <div class="gebruikers-lijst">
            <div class="gebruikers">
                <?php
        $sql = "SELECT id, User_name FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='users'>";
                echo "<div class='id'>";
                echo  $row["id"]. "<br>";
                echo "</div>";
                echo "<div class='user-name'>";
                echo  $row["User_name"]. "<br>";
                echo "</div>";
            }
        } else {
            echo "Geen resultaten gevonden";
        }

        $conn->close();
        ?>
            </div>
        </div>
    </div>
    </div>
</body>

</html>