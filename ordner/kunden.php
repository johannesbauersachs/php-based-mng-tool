<?php
global $titel_kunde;
global $anrede_kunde;
global $name_kunde;
global $vorname_kunde;
global $street_kunde;
global $mobil_kunde;
global $telefon_kunde;
global $fax_kunde;
global $email1_kunde;
global $email2_kunde;
global $plz_kunde;
global $ort_kunde;
//kunden id´s
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kunden</title> <!-- Änderungen -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="style.css" type="stylesheet/css">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/code/bootstrap/index.php" role="button">Home</a>
            </li>
            <li class="nav-item dropdown"> 
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">Infos</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="vertragsangaben.php">Vertragsangaben</a></li>
                    <li><a class="dropdown-item" href="kunden.php">Kunden</a></li>
                    <li><a class="dropdown-item" href="schuldaten.php">Schuldaten</a></li>
                    <li><a class="dropdown-item" href="auswahl.php">Auswahl Schule</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">    
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">Bezahlung</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/code/bootstrap/ordner2/sepa.php">SEPA</a></li>
                    <li><a class="dropdown-item" href="/code/bootstrap/ordner2/miete.php">Miete buchen</a></li>
                    <li><a class="dropdown-item" href="/code/bootstrap/ordner2/delete.php">Löschen</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">Anderes</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/code/bootstrap/ordner3/seriendruck.php">Seriendruck</a></li>
                    <li><a class="dropdown-item" href="/code/bootstrap/ordner3/web-import.php">Web-Import</a></li>
                    <li><a class="dropdown-item" href="/code/bootstrap/ordner3/mail-import.php">Mail-Import</a></li>
                </ul>
            </li>
        </ul>
        <img src="image.svg" class="w-25" href="index.php">
    </div>
</nav>
<div class="container pb-3">
    <div class="row">
        <form class="col-lg-6">
            <div class="input-group pt-2">
                <h1 class="col pb-3">Kundendaten:</h1>
            </div>
        </form>
        <form class="col-lg-3" method="get">
            <div class="input-group pt-2">
                <input class="form-control mt-3 mb-3" type="text" name="kunden-id-web" placeholder="Kunden ID Web">
                <button class="input-group-text mt-3 mb-3" type="submit" name="kunden-id-web-suchen" value="id-web">Suchen</button>
            </div>
        </form>
        <form class="col-lg-3" method="get">
            <div class="input-group pt-2">
                <input class="form-control mt-3 mb-3" type="text" name="kunden-id" placeholder="Kunden ID">
                <button class="input-group-text mt-3 mb-3" type="submit" name="kunden-id-suchen" value="kunden-id-suchen">Suchen</button>
            </div>
        </form>
    </div>
</div>
<?php
$servername = "localhost";
$username = "root";
$password = "";//qkzevt8C9NHySD5M
$db = "sicher";


$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    printf("Connect failed: %s\n", $conn->connect_error);
    echo "Connect failed";
    exit();
}

//daten fetching
if ($_GET["kunden-id-suchen"] == "kunden-id-suchen") {
    //echo"<script>window.location.reload();</script>";
    $sql_abfrage = "SELECT * FROM `Kunden` WHERE `Kunden-ID` = $kunden_id;";
    
    if (!$ergebnis = $conn->query($sql_abfrage)) {
        printf("Error: %s\n", $conn->error);
        $result->close();
    }

    while($row = $ergebnis->fetch_assoc()) {
        $titel_kunde = $row["K_Titel"];
        $anrede_kunde = $row["K_Anrede"];
        $name_kunde = $row["K_Name"];
        $vorname_kunde = $row["K_Vorname"];
        $street_kunde = $row["K_Straße"];
        $mobil_kunde = $row["K_Mobil"];
        echo $name_kunde;
    }

    mysqli_close($conn);
 

} elseif ($_GET["kunden-id-web-suchen"] == "web-id") {
    $sql_abfrage2 = "SELECT * FROM `Kunden` WHERE 'Kunden-ID' = $kunden_id_web;";

    if (!$ergebnis2 = $conn->query($sql_abfrage2)) {
        printf("Error: %s\n", $conn->error);
        $result->close();
    }
        
    while($row = $ergebnis2->fetch_assoc()){
        $titel_kunde = $row["K_Titel"];
        $anrede_kunde = $row["K_Anrede"];
        $name_kunde = $row["K_Name"];
        $vorname_kunde = $row["K_Vorname"];
        $street_kunde = $row["K_Straße"];
        $mobil_kunde = $row["K_Mobil"];
        
    }
  
    mysqli_close($conn);
}

//$conn->close();
?>
<div class="container">
    <div class="row">
        <form class="col-lg-6" method="get">
            <div class="input-group pb-2">
                <span class="input-group-text">Titel</span>
                <input type="text" name="titel-kunde" value="<?php echo $titel_kunde; ?>" class="form-control">
            </div>
            <div class="input-group pb-2">
                <span class="input-group-text">Name</span>
                <input type="text" name="name-kunde" value="<?php echo $name_kunde; ?>" class="form-control">
            </div>
            <div class="input-group pb-2">
                <span class="input-group-text">Straße</span>
                <input type="text" name="street-kunde" value="<?php echo $street_kunde; ?>" class="form-control">
            </div>
            <div class="input-group pb-3">
                <span class="input-group-text">PLZ</span>
                <input type="text" name="plz-kunde" value="<?php echo $plz_kunde; ?>" class="form-control">
                <span class="input-group-text">Ort</span>
                <input type="text" name="ort-kunde" value="<?php echo $ort_kunde; ?>" class="form-control">
            </div>
        </form>
        <form class="col-lg-6" method="get">
            <div class="input-group pb-2">
                <span class="input-group-text">Anrede</span>
                <input type="text" name="andrede-kunde" value="<?php echo $anrede_kund; ?>" class="form-control">
            </div>
            <div class="input-group pb-2">
                <span class="input-group-text">Vorname</span>
                <input type="text" name="vorname-kunde" value="<?php echo $vorname_kunde; ?>" class="form-control">
            </div>
        </form>
    </div>
</div>
<div class="container pt-5">
    <div class="row">
        <form class="col-lg-6" method="get">
            <div class="input-group pb-2">
                <span class="input-group-text">Telefon</span>
                <input type="text" name="telefon-kunde" value="<?php echo $telefon_kunde; ?>" class="form-control">
                <span class="input-group-text">Mobil</span>
                <input type="text" name="mobil-kunde" value="<?php echo $mobil_kunde; ?>" class="form-control">
            </div>
            <div class="input-group pb-2">
                <span class="input-group-text">Fax</span>
                <input type="text" name="fax-kunde" value="<?php echo $fax_kunde; ?>" class="form-control">
            </div>
            <div class="input-group pb-2">
                <span class="input-group-text">Email 1</span>
                <input type="text" name="email1-kunde" value="<?php echo $email1_kunde; ?>" class="form-control">
            </div>
            <div class="input-group pb-2">
                <span class="input-group-text">Email 2</span>
                <input type="text" name="email2-kunde" value="<?php echo $email2_kunde; ?>" class="form-control">
            </div>
        </form>
        <form class="col-lg-6" method="get">
            <div>
                <button type="submit" name="konten" value="kontenBtn" class="btn btn-success bg-dark btn-block">Konten</button>
                <button type="submit" name="vertrag" value="vertrag" class="btn btn-success bg-dark btn-block">Verträge</button>
                <button type="submit" name="safe" value="safe" class="btn btn-success bg-dark btn-block">Speichern</button>
                <button type="submit" name="btn" value="btn" class="btn btn-success bg-dark btn-block">Button</button>
            </div>
    </div>
</div>
</body>
</html>
<?php

error_reporting(-1);
ini_set('display_errors', 'On');


//kunden id´s
$kunden_id = $_GET["kunden-id"];
$kunden_id_web = $_GET["kunden-id-web"];
$kunden_id_suchen = $_GET["kunden-id-suchen"];
$kunden_id_web_suchen = $_GET["kunden-id-web-suchen"];
//variablen von den Inputs
$titel_kunde = $_GET["titel-kunde"];
$anrede_kunde = $_GET["anrede-kunde"];
$name_kunde = $_GET["name-kunde"];
$vorname_kunde = $_GET["vorname-kunde"];
$street_kunde = $_GET["street-kunde"];
$mobil_kunde = $_GET["mobil-kunde"];
$telefon_kunde = $_GET["telefon-kunde"];
$fax_kunde = $_GET["fax-kunde"];
$email1_kunde = $_GET["email1-kunde"];
$email2_kunde = $_GET["email2-kunde"];
$plz_kunde = $_GET["plz-kunde"];
$ort_kunde = $_GET["ort-kunde"];

$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    printf("Connect failed: %s\n", $conn->connect_error);
    echo "Connect failed";
    exit();
}



$sql_abfrage = "SELECT * FROM `Kunden` WHERE `Kunden-ID` = '1';";
if (!$ergebnis = $conn->query($sql_abfrage)) {
    printf("Error: %s\n", $conn->error);
    $result->close();
}
while($row = $ergebnis->fetch_assoc()) {
    $titel_kunde = $row["K_Titel"];
    $anrede_kunde = $row["K_Anrede"];
    $name_kunde = $row["K_Name"];
    $vorname_kunde = $row["K_Vorname"];
    $street_kunde = $row["K_Straße"];
    $mobil_kunde = $row["K_Mobil"];
    //bis hier hin funktionierts
}

function isNotSet($notSet){
    if ($notSet == ""){
        $notSet = NULL;
        return $notSet;
    }
}

if ($_GET["btn"] == "btn"){
    if (isNotSet($name_kunde)){
        echo "isNotSet läuft";
    }
}

$safe = $_GET["safe"];
$konten = $_GET["konten"];
$vertrag = $_GET["vertrag"];
//buttons
if ($safe == "safe") {
    $titel_kunde = $_GET["titel-kunde"];
    $anrede_kunde = $_GET["anrede-kunde"];
    $name_kunde = $_GET["name-kunde"];
    $vorname_kunde = $_GET["vorname-kunde"];
    $street_kunde = $_GET["street-kunde"];
    $mobil_kunde = $_GET["mobil-kunde"];
    $telefon_kunde = $_GET["telefon-kunde"];
    $fax_kunde = $_GET["fax-kunde"];
    $email1_kunde = $_GET["email1-kunde"];
    $email2_kunde = $_GET["email2-kunde"];
    $plz_kunde = $_GET["plz-kunde"];
    $ort_kunde = $_GET["ort-kunde"];
    echo "safed"; //test
    //sql insert
    $sql_safe = "INSERT INTO `Kunden`(`K_Titel`, `K_Name`, `K_Vorname`, `K_Ansprech`, `K_Straße`, `K_PLZ`, `K_Ort`, `K_Telefon`, `K_Mobil`, `K_Fax`, `K_eMail`, `K_eMail2`) VALUES ('$titel_kunde','$name_kunde','$vorname_kunde','$anrede_kunde','$street_kunde','$plz_kunde','$ort_kunde','$telefon_kunde','$mobil_kunde','$fax_kunde','$email1_kunde','$email2_kunde')";
    if ($conn->query($sql_safe) === TRUE) {
        $conn->close();
      }
} elseif ($konten == "kontenBtn") {
    echo "konten";
} elseif ($vertrag == "vertrag") {
    echo "Verträge";
}
?>