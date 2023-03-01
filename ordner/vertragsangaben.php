<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vertragsangaben</title> <!-- Änderungen -->
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
                    <li><a class="dropdown-item" href="/code/bootstrap/ordner/vertragsangaben.php">Vertragsangaben</a></li>
                    <li><a class="dropdown-item" href="/code/bootstrap/ordner/kunden.php">Kunden</a></li>
                    <li><a class="dropdown-item" href="/code/bootstrap/ordner/schuldaten.php">Schuldaten</a></li>
                    <li><a class="dropdown-item" href="/code/bootstrap/ordner/auswahl.php">Auswahl Schule</a></li>
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
<div class="container pb-4">
    <div class="row">
        <form class="col-lg-6">
            <div class="input-group pt-2">
                <h1>Vertragsangaben:</h1>
            </div>
        </form>
        <form class="col-lg-3">
            <div class="input-group">
                <input class="form-control mt-3 mb-3" type="text" name="suchen" placeholder="Nummer" required>
            </div>
        </form>
        <form class="col-lg-3">
            <div class="input-group">
                <input class="form-control mt-3 mb-3" type="text" name="suchen" placeholder="Kunden-ID" required>
                <button class="input-group-text mt-3 mb-3" type="submit" name="kundenSuchen">Suchen</button>
            </div>
        </form>
    </div>
</div>
<div class="container pb-2">
    <div class="row">
        <form class="col-lg-6" method="get">
            <div class="input-group">
                <span class="input-group-text">Name</span>
                <input type="text" name="name-vertragsangaben" class="form-control">
            </div>
        </form>
        <form class="col-lg-3">
            <div class="input-group">
                <span class="input-group-text">Schüler</span>
                <input type="text" name="schüler-vertragsangaben" class="form-control">
            </div>
        </form>
        <form class="col-lg-3">
            <div class="input-group">
                <span class="input-group-text">Körpergröße</span>
                <input type="text" name="korp-vertragsangaben" class="form-control">
                <span class="input-group-text">cm</span>
            </div>
        </form>
    </div>
</div>
<div class="container pb-2">
    <div class="row">
        <form class="col-lg-6">
            <div class="input-group">
                <span class="input-group-text">K_Straße</span>
                <input type="text" name="street-vertragsangaben" class="form-control">
            </div>
        </form>
        <form class="col-lg-6">
            <div class="input-group">
                <span class="input-group-text">gewün. Fach-Ort</span>
                <input type="text" name="fach-ort-vertragsangaben" class="form-control">
            </div>
        </form>
    </div>
</div>
<div class="container">
    <div class="row">
        <form class="col-lg-3">
            <div class="input-group pb-2">
                <span class="input-group-text">K_PLZ</span>
                <input type="text" name="plz-vertrag" class="form-control">
            </div>
            <div class="input-group pb-2">
                <span class="input-group-text">PLZ</span>
                <input type="text" name="plz-vertragsangaben" class="form-control">
            </div>
        </form>
        <form class="col-lg-3">
            <div class="input-group pb-2">
                <span class="input-group-text">Ort</span>
                <input type="text" name="ort-vertragsangaben" class="form-control">
            </div>
            <div class="input-group pb-2">
                <span class="input-group-text">Ort</span>
                <input type="text" name="ort2-vertragsangaben" class="form-control">
            </div>
        </form>
        <form class="col-lg-6">
            <div class="input-group pb-2">
                <span class="input-group-text">K_Email</span>
                <input type="text" name="email-vertragsangaben" class="form-control">
            </div>
            <div class="input-group pb-2">
                <span class="input-group-text">Straße</span>
                <input type="text" name="street2-vertragsangaben" class="form-control">
            </div>
        </form>
    </div>
</div>
<div class="container">
    <div class="row">
        <form class="col-lg-2">
            <div class="input-group pb-2">
                <div class="input-group-prepend">
                    <span class="input-group-text">Rabatt</span>
                </div>
                <input type="checkbox" class="form-control">
            </div>
        </form>
        <form class="col-lg-2">
            <div class="input-group pb-2">
                <span class="input-group-text">Einzug</span>
                <input type="checkbox" name="einzug-vertragsangaben" class="form-control">
            </div>
        </form>
        <form class="col-lg-2">
            <div class="input-group pb-2">
                <span class="input-group-text">K_Telefon</span>
                <input type="text" name="tel-vertragsangaben" class="form-control">
            </div>
        </form>
        <form class="col-lg-6">
            <div class="input-group pb-2">
                <span class="input-group-text">K_Inhaber</span>
                <input type="text" name="inhaber-vertragsangaben" class="form-control">
            </div>
        </form>
    </div>
</div>
<div class="container pb-2">
    <div class="row">
        <form class="col-lg-3">
            <div class="input-group">
                <span class="input-group-text">Konto</span>
                <input type="text" name="konto-vertragsangaben" class="form-control">
            </div>
        </form>
        <form class="col-lg-3">
            <div class="input-group">
                <span class="input-group-text">BLZ</span>
                <input type="text" name="blz-vertragsangaben" class="form-control">
            </div>
        </form>
        <form class="col-lg-6">
            <div class="input-group">
                <span class="input-group-text">K-Inhaber</span>
                <input type="text" name="inhaber-vertragsangaben" class="form-control">
            </div>
        </form>
    </div>
</div>
<div class="container pb-5">
    <div class="row">
        <form class="col-lg-6">
            <div class="input-group">
                <span class="input-group-text">IBAN</span>
                <input type="text" name="iban-vertragsangaben" class="form-control">
            </div>
        </form>
        <form class="col-lg-3">
            <div class="input-group">
                <span class="input-group-text">BIC</span>
                <input type="text" name="bic-vertragsangaben" class="form-control">
            </div>
        </form>
        <form class="col-lg-3">
            <div class="input-group">
                <span class="input-group-text">Konten-ID</span>
                <input type="text" name="konten-id-vertragsangaben" class="form-control">
            </div>
        </form>
    </div>
</div>
<div class="container pb-2">
    <div class="row">
        <form class="col-lg-6">
            <div class="input-group">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Schule</label>
                </div>
                <input type="text" list="schulen" class="form-control"/>
                <datalist id="schulen">
                    <option>Schule1</option>
                    <option>Schule2</option>
                    <option>Schule3</option>
                    <option>Schule4</option>
                </datalist>
            </div>
        </form>
        <form class="col-lg-2">
            <div class="input-group">
                <span class="input-group-text">Kl.</span>
                <input type="text" name="kurzname" class="form-control">
            </div>
        </form>
        <form class="col-lg-2">
            <div class="input-group">
                <span class="input-group-text">T</span>
                <input type="text" name="kurzname" class="form-control">
            </div>
        </form>
        <form class="col-lg-2">
            <div class="input-group">
                <span class="input-group-text">F</span>
                <input type="text" name="kurzname" class="form-control">
            </div>
        </form>
    </div>
</div>
<div class="container pb-5">
    <div class="row">
        <form class="col-lg-2">
            <div class="input-group">
                <span class="input-group-text">FArt</span>
                <input type="text" name="kurzname" class="form-control">
            </div>
        </form>
        <form class="col-lg-2">
            <div class="input-group">
                <span class="input-group-text">FNr</span>
                <input type="text" name="kurzname" class="form-control">
            </div>
        </form>
        <form class="col-lg-1">
            <div class="input-group">
                <input type="text" name="kurzname" class="form-control">
            </div>
        </form>
        <form class="col-lg-1">
            <div class="input-group">
                <input type="text" name="kurzname" class="form-control">
            </div>
        </form>
        <form class="col-lg-2">
            <div class="input-group">
                <input type="text" name="kurzname" class="form-control">
            </div>
        </form>
        <form class="col-lg-2">
            <div class="input-group">
                <input type="text" name="kurzname" class="form-control">
            </div>
        </form>
        <form class="col-lg-2">
            <div class="input-group">
                <input type="text" name="kurzname" class="form-control">
            </div>
        </form>
    </div>
</div>
<div class="container pb-2">
    <div class="row">
        <form class="col-lg-3">
            <div class="input-group">
                <span class="input-group-text">B-Status</span>
                <input type="text" name="kurzname" class="form-control">
            </div>
        </form>
        <form class="col-lg-3">
            <div class="input-group">
                <span class="input-group-text">V-Status</span>
                <input type="text" name="kurzname" class="form-control">
            </div>
        </form>
        <form class="col-lg-3">
            <div class="input-group">
                <span class="input-group-text">kontrolliert am</span>
                <input type="text" name="kurzname" class="form-control">
            </div>
        </form>
        <form class="col-lg-3">
            <div class="input-group">
                <input type="text" name="kurzname" class="form-control">
                <span class="input-group-text">K-Status</span>
            </div>
        </form>
    </div>
</div>
<div class="container pb-5">
    <div class="row">
        <form class="col-lg-4">
            <div class="input-group">
                <span class="input-group-text">Mietbeginn</span>
                <input type="text" name="kurzname" class="form-control">
            </div>
        </form>
        <form class="col-lg-4">
            <div class="input-group">
                <span class="input-group-text">Mietende</span>
                <input type="text" name="kurzname" class="form-control">
            </div>
        </form>
        <form class="col-lg-4">
            <div class="input-group">
                <span class="input-group-text">Kündigung zum</span>
                <input type="text" name="kurzname" class="form-control">
            </div>
        </form>
    </div>
</div>
<div class="container pb-2">
    <div class="row">
        <form class="col-lg-1">
            <div class="input-group">
                <button type="submit" name="" class="btn btn-success bg-dark btn-block">Drucken</button>
            </div>
        </form>
        <form class="col-lg-1">
            <div class="input-group">
                <button type="submit" name="" class="btn btn-success bg-dark btn-block">Kopieren</button>
            </div>
        </form>
        <form class="col-lg-1">
            <div class="input-group">
                <button type="submit" name="" class="btn btn-success bg-dark btn-block">Speichern</button>
            </div>
        </form>
        <form class="col-lg-1">
            <div class="input-group">
                <button type="submit" name="" class="btn btn-success bg-dark btn-block">Scanner</button>
            </div>
        </form>
    </div>
</div>
<div class="container pb-5">
    <div class="row">
        <form class="col-lg-2">
            <div class="input-group">
                <button type="submit" name="" class="btn btn-success bg-dark btn-block">Wechsel/Tausch</button>
            </div>
        </form>
        <form class="col-lg-1">
            <div class="input-group">
                <button type="submit" name="" class="btn btn-success bg-dark btn-block">Historie</button>
            </div>
        </form>
        <form class="col-lg-1">
            <div class="input-group">
                <button type="submit" name="" class="btn btn-success bg-dark btn-block">Konto</button>
            </div>
        </form>
        <form class="col-lg-1">
            <div class="input-group">
                <button type="submit" name="" class="btn btn-success bg-dark btn-block">Exit</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
<?php
$servername = "localhost";
$username = "sicher";
$password = "qkzevt8C9NHySD5M";


/*
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
*/ //datenbank connection

$name_vertrag = $_GET["name-vertragsangaben"]; // works
$person_vertrag = $_GET["schüler-vertragsangaben"];
$korp_vertrag = $_GET["korp-vertragsangaben"];
$street_vertrag  =  $_GET["street-vertragsangaben"];


?>