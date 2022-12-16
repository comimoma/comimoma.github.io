<?php
   // include page data
   $data = $_SERVER['DOCUMENT_ROOT'];
   $data .= "/database.php";
   include_once($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Simple Webpage based on Bootstrap Components">
    <meta name="author" content="Connie Ou">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/resources/css/style.php">
    <title>Connie's Website</title>
</head>

<body class="font-monospace fw-normal" onload="clearURLtag()">
    <!--Navigation Bar - HOME-->
    <nav class="navbar navbar-expand-lg bg-darkred navbar-dark py-2 fixed-top" id="mainNav">
        <div class="container">
            <a href="/index.php" class="navbar-brand tagRemove">
                <img src="/resources/img/COMOMA LOGO New rev2_180x100.png" style="height:65px;" class="px-2">Connie's Website
            </a>
            <div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <small>MENU</small><span class="navbar-toggler-icon"></span>
                </button>
                <button class="navbar-toggler border-0" type="button">
                    <span class="bi bi-search"></span>
                </button>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#login-canvas" aria-controls="login-canvas">
                    <span class="bi bi-cart fs-3"></span><span class="ps-2 fs-5">0</span>
                </button>
            </div>
            <div class="collapse navbar-collapse px-4" id="navmenu">
                <ul class="navbar-nav me-auto">
                    <?php
                        foreach($CategoryTag as $navkey=>$navValue) {
                            if ($navkey != "Services"){
                    ?>
                    <li class="nav-item text-uppercase"><a href="<?php echo $navValue["tag"]; ?>" class="nav-link tagRemove"><?php echo $navkey; ?></a>
                    </li>
                    <?php
                            } else {
                    ?>

                    <li class="nav-item dropdown text-uppercase">
                        <a class="nav-link dropdown-toggle" href="/pages/services/services.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                        <ul class="dropdown-menu bg-darkred" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-md-white tagRemove" href="/pages/services/shop.php">shop</a></li>
                            <li><a class="dropdown-item text-md-white tagRemove" href="/pages/services/behavior_consult.php">Behavior Consult</a></li>
                            <li><a class="dropdown-item text-md-white tagRemove" href="/pages/services/travel_support.php">Travel Support</a></li>
                        </ul>
                    </li>
                    <?php
                            }
                        }
                    ?>
                </ul>
                <div class="navbar-nav d-none d-lg-block">
                    <button class="nav-link btn border-0 text-md-white" type="button">
                        <span class="bi bi-search fs-4 pe-3"></span>
                    </button>
                </div>
                <div class="navbar-nav d-none d-lg-block">
                    <button class="nav-link btn border-0 text-md-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#login-canvas" aria-controls="login-canvas">
                        <span class="bi bi-cart fs-3"></span><span class="ps-2 fs-5">0</span>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <!--Main-->
    <div class="d-flex flex-column" style="min-height: 100vh">
        <main class="flex-grow-1">