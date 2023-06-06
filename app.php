<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stock";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];

   
    $sql = "INSERT INTO participants (nom, prenom, telephone, email) VALUES ('$nom', '$prenom', '$telephone', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Participant enregistré avec succès.";
    } else {
        echo "Erreur lors de l'enregistrement du participant: " . $conn->error;
    }
}


$conn->close();
?>
