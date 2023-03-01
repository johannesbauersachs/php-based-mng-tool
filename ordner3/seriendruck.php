<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seriendruck</title> <!-- Änderungen -->
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
<div class="container d-flex align-items-center justify-content-center p-5">
    <h1>Seriendruck</h1> <!-- Änderungen -->
</div>
</body>
</html>