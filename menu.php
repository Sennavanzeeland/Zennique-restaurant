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
    <title>Zennique-menu</title>
    <link rel="stylesheet" href="style/menu.css" />
    <link rel="stylesheet" href="style/navbar.css" />
    <link rel="icon" type="image/icon" href="fotos/logo black background.png" />
</head>

<body>
    <?php
    include ('navbar.html');
    ?>
    <div class="container">


        <div class="menu-1">
            <div class="menu-titel">MENU
                <a class="wijnkaart" href="wijnkaart.php">klik hier om de wijnkaart te zien

                </a>
            </div>
            <div class="menu-eten">
                <?php
        $sql = "SELECT naam, beschrijving, prijs FROM menu";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='producten'>";
                echo "<div class='titel'>";
                echo  $row["naam"]. "<br>";
                echo "</div>";
                echo "<div class='beschrijving'>";
                echo  $row["beschrijving"]. "<br>";
                echo "</div>";
                echo "<div class='prijs'>";
                echo  "€ " . $row["prijs"]. "<br><br>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "Geen resultaten gevonden";
        }

        $conn->close();
        ?>
            </div>
        </div>
        <div class="picture">
            <div class="pic-1">
                <img src="fotos/menu-1.avif">
            </div>
            <div class="pic-2">
                <img src="fotos/menu-2.avif">
            </div>
            <div class="pic-3">
                <img src="fotos/menu-3.avif">
            </div>
            <div class="pic-4">
                <img src="fotos/menu-4.avif">
            </div>

        </div>

    </div>

    <div class="container-2">

        <div class="menu-2">
            <div class="menu-eten-2">
            </div>
        </div>
        <div class="picture-2">
            <div class="pic-5">
                <img src="fotos/menu-5.webp">
            </div>
            <div class="pic-6">
                <img src="fotos/menu-6.jpg">
            </div>
            <div class="pic-7">
                <img src="fotos/menu-7.webp">
            </div>
            <div class="pic-8">
                <img src="fotos/menu-8.avif">
            </div>


        </div>

    </div>
    </div>
    <div class="container-3">

        <div class="menu-3">
            <div class="menu-eten-3">
            </div>
        </div>
        <div class="picture-4">
            <div class="pic-9">
                <img src="fotos/menu-5.webp">
            </div>
            <div class="pic-10">
                <img src="fotos/menu-6.jpg">
            </div>
            <div class="pic-11">
                <img src="fotos/menu-7.webp">
            </div>
            <div class="pic-12">
                <img src="fotos/menu-8.avif">
            </div>


        </div>

    </div>
    </div>
    <div class="container-4">

        <div class="menu-4">
            <div class="menu-eten-4">
            </div>
        </div>
        <div class="picture-4">
            <div class="pic-9">
                <img src="fotos/menu-5.webp">
            </div>
            <div class="pic-10">
                <img src="fotos/menu-6.jpg">
            </div>
            <div class="pic-11">
                <img src="fotos/menu-7.webp">
            </div>
            <div class="pic-12">
                <img src="fotos/menu-8.avif">
            </div>


        </div>

    </div>
    </div>
</body>

</html>