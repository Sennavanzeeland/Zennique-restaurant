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
    <title>Zennique-admin-eten</title>
    <link rel="stylesheet" href="style/wijn-admin.css" />
    <link rel="stylesheet" href="style/navbar-admin.css" />
    <link rel="icon" type="image/icon" href="fotos/logo black background.png">
</head>

<body>
    <?php
    include ('navbar-admin.html');
    ?>
    <div class="container">
        <div class="titel">
            <h2>Zennique Wijnen</h2>
        </div>
        <div class="buttons">
            <div class="buttons-1"></div>
            <div class="buttons-2">
                <div class="add">
                    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (!empty($_POST['naam']) && !empty($_POST['beschrijving']) && !empty($_POST['prijs'])) {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "restaurant";
        $conn = new mysqli($servername, $username, $password, $dbname);


        if ($conn->connect_error) {
            die("Connectie mislukt: " . $conn->connect_error);
        }


        $naam = $_POST['naam'];
        $beschrijving = $_POST['beschrijving'];
        $prijs = $_POST['prijs'];

        $sql = "INSERT INTO menu (naam, beschrijving, prijs) VALUES ('$naam', '$beschrijving', '$prijs')";


        if ($conn->query($sql) === TRUE) {
    
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

   
        $conn->close();
    } else {
 
    }
}
?>


                    <h2>Add item</h2>
                    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                        <label for="naam">Naam:</label><br>
                        <input type="text" id="naam" name="naam"><br>
                        <label for="beschrijving">Beschrijving:</label><br>
                        <textarea id="beschrijving" name="beschrijving"></textarea><br>
                        <label for="prijs">Prijs:</label><br>
                        <input type="text" id="prijs" name="prijs"><br><br>
                        <input type="submit" id="submit" value="Toevoegen">
                    </form>
                </div>


                <div class="delete">
                    <?php

if(isset($_POST['verwijderen'])){
    
    if(!empty($_POST['naam'])){
        
        $naam = $_POST['naam'];

        // Maak verbinding met de database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "restaurant";
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Controleer de verbinding
        if ($conn->connect_error) {
            die("Connectie mislukt: " . $conn->connect_error);
        }

        // Voorbereide instructie om SQL-injectie te voorkomen
        $sql = "DELETE FROM menu WHERE naam = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $naam);

        // Voer de query uit
        if ($stmt->execute()) {
            // echo "<p>Item is succesvol verwijderd.</p>";
        } else {
            echo "Er is een fout opgetreden bij het verwijderen van het item.";
        }

        // Sluit de verbinding
        $stmt->close();
        $conn->close();
    } else {
        echo "<p>Itemnaam is niet opgegeven.</p>";
    }
}
?>

                    <h2>Item Verwijderen</h2>
                    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                        <label for="naam">Naam:</label><br>
                        <input type="text" id="naam" name="naam"><br><br>
                        <input type="submit" name="verwijderen" value="Verwijderen">
                    </form>
                </div>
                <div class="edit">
                    <?php
                        if (isset($_POST['bewerken'])) {
                            if (!empty($_POST['naam'])) {

                                $naam = $_POST['naam'];
                                header("Location: edit.php?naam=$naam");
                                exit();
                            } else {
                                echo "<p>Itemnaam is niet opgegeven.</p>";
                            }
                        }
                    ?>

                    <h2>Bewerken</h2>
                    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                        <label for="naam">Naam:</label><br>
                        <input type="text" id="naam" name="naam"><br><br>
                        <input type="submit" name="bewerken" value="Bewerken">
                    </form>

                </div>
            </div>
        </div>

        <div class="wijn-lijst">
            <div class="menu-wijn">
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
                <div class="container-2"></div>
</body>

</html>