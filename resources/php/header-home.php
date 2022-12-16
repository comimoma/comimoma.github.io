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
        </div>
    </nav>
    <!--Main-->
    <div class="d-flex flex-column" style="min-height: 100vh">
        <main class="flex-grow-1">