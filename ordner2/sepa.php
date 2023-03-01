<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEPA</title> <!-- Änderungen -->
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
<div class="container">
    <div class="row">
        <h1 class="col-lg-6">SEPA:</h1>
    </div>
</div>
<div class="container pb-4">
    <div class="row">
        <form class="col-lg-4">
            <div class="input-group mt-3 mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Firma</label>
                </div>
                <select class="custom-select form-control" id="inputGroupSelect01">
                    <option selected>1</option>
                    <option value="1">2</option>
                    <option value="2">3</option>
                    <option value="3">4</option>
                </select>
            </div>
        </form>
        <form class="col-lg-4">
            <div class="input-group mt-3 mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">SEPA</label>
                </div>
                <select class="custom-select form-control" id="inputGroupSelect01">
                    <option selected>DD</option>
                    <option value="1">EE</option>
                    <option value="2">FF</option>
                    <option value="3">GG</option>
                </select>
            </div>
        </form>
        <form class="col-lg-4">
            <div class="input-group mt-3 mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Einzugsart</label>
                </div>
                <select class="custom-select form-control" id="inputGroupSelect01">
                    <option selected>COR1</option>
                    <option value="1">COR2</option>
                    <option value="2">COR3</option>
                    <option value="3">COR4</option>
                </select>
            </div>
        </form>
    </div>
</div>
<div class="container pb-2">
    <div class="row">
        
    </div>
</div>
</body>
</html>