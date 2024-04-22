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
    <link rel="stylesheet" href="style/eten-admin.css" />
    <link rel="icon" type="image/icon" href="fotos/logo black background.png">
</head>

<body>
    <?php
    include ('navbar-admin.html');
    ?>
    <div class="container">
        <div class="titel">
            <h2>Zennique gerechten</h2>
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
                    <?php if (isset($_POST['verwijderen'])) {
    if (!empty($_POST['item_id'])) {
        $item_id = $_POST['item_id'];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "restaurant";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connectie mislukt: " . $conn->connect_error);
        }

        $sql = "DELETE FROM menu WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $item_id);

        if ($stmt->execute()) {
           
        } else {
            echo "Er is een fout opgetreden bij het verwijderen van het item.";
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "<p>Item ID is niet opgegeven.</p>";
    }
}
?>
                    <h2>Item Verwijderen</h2>
                    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                        <label for="item_id">Item ID:</label><br>
                        <input type="text" id="item_id" name="item_id"><br><br>
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

        <div class="eten-lijst">
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
    </div>
    <div class="container-2"></div>
</body>

</html>