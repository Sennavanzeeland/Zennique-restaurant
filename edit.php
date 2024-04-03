<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connectie mislukt: " . $conn->connect_error);
}


if(isset($_GET['naam'])) {

    $naam = $_GET['naam'];

    $sql = "SELECT * FROM menu WHERE naam = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $naam);

 
    $stmt->execute();

   
    $result = $stmt->get_result();


    if ($result->num_rows > 0) {
   
        $row = $result->fetch_assoc();
        $naam = $row['naam'];
        $beschrijving = $row['beschrijving'];
        $prijs = $row['prijs'];
    } else {
     
        echo "Item niet gevonden.";
        exit(); 
    }


    $stmt->close();
    $conn->close();
} else {
  
    echo "Itemnaam niet opgegeven in de URL.";   
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Item</title>
    <link rel="stylesheet" href="style/edit.css" />
    <link rel="icon" type="image/icon" href="fotos/logo black background.png">

</head>

<body>
    <div class="container">
        <h2>Edit Item</h2>
        <form method="post" action="eten-admin.php">
            <input type="hidden" name="originele_naam" value="<?php echo $naam; ?>">
            <label for="naam">Naam:</label><br>
            <input type="text" id="naam" name="naam" value="<?php echo $naam; ?>"><br>
            <label for="beschrijving">Beschrijving:</label><br>
            <textarea id="beschrijving" name="beschrijving"><?php echo $beschrijving; ?></textarea><br>
            <label for="prijs">Prijs:</label><br>
            <input type="text" id="prijs" name="prijs" value="<?php echo $prijs; ?>"><br><br>
            <input type="submit" value="Opslaan">
        </form>

    </div>
</body>

</html>