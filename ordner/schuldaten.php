<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schuldaten</title> <!-- Änderungen -->
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
                    <li><a class="dropdown-item" href="/code/bootstrap/ordner3/seriendruck.php">Seriendruck</a></li>
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
                <h1>Schuldaten:</h1>
            </div>
        </form>
        <form class="col-lg-6">
            <div class="input-group">
                <input class="form-control mt-3 mb-3" type="text" name="suchen" placeholder="Kunde:" required>
                <button class="input-group-text mt-3 mb-3" type="submit" name="kundenSuchen">Suchen</button>
            </div>
        </form>
    </div>
</div>
<div class="container">
    <div class="row">
        <form class="col-lg-6">
            <div class="input-group pb-2">
                <span class="input-group-text">Kurzname: </span>
                <input type="text" name="kurzname" class="form-control">
            </div>
            <div class="input-group pb-2">
                <span class="input-group-text">Schul Straße: </span>
                <input type="text" name="schul-strase" class="form-control">
            </div>
            <div class="input-group pb-2">
                <span class="input-group-text">Schul PLZ/Ort: </span>
                <input type="text" name="plz" class="form-control">
            </div>
            <div class="input-group pb-2">
                <span class="input-group-text">Schul Tel: </span>
                <input type="text" name="telefon" class="form-control">
            </div>
            <div class="input-group pb-2">
                <span class="input-group-text">Direktor: </span>
                <input type="text" name="direktor" class="form-control">
            </div> 
            <div class="input-group pb-2">
                <span class="input-group-text">Rabatt 2 Jahre: </span>
                <input type="number" name="rabatt-2-jahre" class="form-control">
            </div>
            <div class="input-group pb-2">
                <span class="input-group-text">Info: </span>
                <input type="text" name="info" class="form-control">
            </div>
            <div class="input-group pb-2">
                <span class="input-group-text">IBAN: </span>
                <input type="text" name="iban" class="form-control">
            </div>
            <div class="input-group pb-2">
                <span class="input-group-text">Email: </span>
                <input type="text" name="email" class="form-control">
            </div>
        </form>
        <form class="col-lg-6">
            <div class="input-group pb-2">
                <span class="input-group-text">Schul Name 1:</span>
                <input type="text" name="schul-name" class="form-control">
            </div>
            <div class="input-group pb-2">
                <span class="input-group-text">Schul Name 2:</span>
                <input type="text"name="schul-name2" class="form-control">
            </div>
            <div class="input-group pb-2">
                <span class="input-group-text">letzte Klasse:</span>
                <input type="number" name="letzte-klasse" class="form-control">
                <span class="input-group-text">Schlüssel:</span>
                <input type="number" name="key" class="form-control">
            </div>
            <div class="input-group pb-2">
                <span class="input-group-text">Schul Fax:</span>
                <input type="text" name="fax" class="form-control">
            </div>
            <div class="input-group pb-2">
                <span class="input-group-text">Hausmeister:</span>
                <input type="text" name="hausmeister" class="form-control">
                <span class="input-group-text">Sekretariat:</span>
                <input type="text" name="sek" class="form-control">
            </div>
            <div class="input-group pb-2">
                <span class="input-group-text">4 Jahre:</span>
                <input type="number" name="rabatt-4-jahre" class="form-control">
                <span class="input-group-text">Spende:</span>
                <input type="number" name="spende" class="form-control">
            </div>
            <div class="input-group pb-2">
                <button action="" class="input-group-text">Historie</button>
                <button action="" class="input-group-text">MV</button>
            </div>
            <div class="input-group pb-2">
                <span class="input-group-text">BIC:</span>
                <input type="text" name="bic" class="form-control">
            </div>
        </form>
    </div>
</div>
</body>
</html>