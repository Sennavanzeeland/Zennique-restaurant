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
    <title>Zennique-Wijnkaart</title>
    <link rel="stylesheet" href="style/wijnkaart.css" />
    <link rel="stylesheet" href="style/navbar.css" />
    <link rel="icon" type="image/icon" href="fotos/logo black background.png" />

</head>

<body>
    <?php
    include ('navbar.html');
    ?>
    <div class="container">
        <div class="wijn-1">
            <div class="wijn-1-titel">Red Wine</div>
            <div class="wijn-1-wijn">
                <?php
        $sql = "SELECT titel, beschrijving, prijs FROM redwine";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='producten'>";
                echo "<div class='titel'>";
                echo  $row["titel"]. "<br>";
                echo "</div>";
                echo "<div class='beschrijving'>";
                echo  $row["beschrijving"]. "<br>";
                echo "</div>";
                echo "<div class='prijs'>";
                echo  "€ " . $row["prijs"]. "<br><br>";
                echo "</div>";
                echo "<div class='lijn'>";
                echo "</div>";
                echo "<div class='lijn-2'>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "Geen resultaten gevonden";
        }

        ?>
            </div>
        </div>
        <div class="wijn-2">
            <img class="wine-menu-pic-1" src="fotos/wine-menu.jpg" alt="eten" />
            <div class="wine-menu-titel">Wine <br>menu</div>
            <div class="wine-menu-titel-2">Premium <br>Quality</div>
            <div class="wine-menu-titel-3">Sinds 1976</div>
            <img class="wine-menu-pic-2" src="fotos/Schermafbeelding_2024-03-18_085748-removebg-preview.png"
                alt="eten" />
        </div>
        <div class="wijn-3">
            <div class="wijn-3-titel">White Wine</div>
            <div class="wijn-3-wijn">
                <?php
        $sql = "SELECT titel, beschrijving, prijs FROM whitewine";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='producten'>";
                echo "<div class='titel'>";
                echo  $row["titel"]. "<br>";
                echo "</div>";
                echo "<div class='beschrijving'>";
                echo  $row["beschrijving"]. "<br>";
                echo "</div>";
                echo "<div class='prijs'>";
                echo  "€ " . $row["prijs"]. "<br><br>";
                echo "</div>";
                echo "<div class='lijn'>";
                echo "</div>";
                echo "<div class='lijn-2'>";
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
    </div>
    <div class="container-2">
        <div class="landen">
            <div class="spanje">
                <div class="spanje-afbeelding">
                    <img class="spanje-img" src="fotos/paint.jpg" alt="eten" />

                </div>
                <div class="spanje-text">
                    <div class="spanje-text-1">Spanje</div>
                    <div class="spanje-text-2">doordrenkt met rijke traditie,
                        Van zonnige wijngaarden tot aan smaakvolle creatie.
                        Met een erfenis die diep in de geschiedenis wortelt,
                        Betoverend elke ziel die naar zijn diepte hunkert.</div>
                </div>
            </div>
            <div class="frankrijk">
                <div class="frankrijk-afbeelding">

                    <img class="frankrijk-img" src="fotos/france.jpg" alt="eten" />

                </div>

                <div class="frankrijk-text">

                    <div class="frankrijk-text-1">Frankrijk</div>
                    <div class="frankrijk-text-2">een symfonie van terroir en savoir-faire,
                        Geworteld in eeuwenoude wijngaarden, vol raffinement en flair.
                        Een ode aan passie en traditie, met elke druppel gedronken,
                        Een reis door de geschiedenis, een smaak die blijft lonken.</div>
                </div>
            </div>

            <div class="italie">
                <div class="italie-afbeelding">

                    <img class="italie-img" src="fotos/italy.jpg" alt="eten" />

                </div>
                <div class="italie-text">

                    <div class="italie-text-1">Italie</div>
                    <div class="italie-text-2">een kunstwerk van passie en smaak,
                        Geboren uit de glooiende heuvels, een eeuwenoude zaak.
                        Een dans van druiven, in de schaduw van oude olijfbomen,
                        Een symfonie van aroma's, die harten blijven bekoren.</div>
                </div>
            </div>
            <div class="margin"></div>
        </div>
    </div>
    </div>


</body>

</html>