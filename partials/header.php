<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Duoneos | Innovators in business!</title>
<meta name="description" content=""><!-- To be filled by content writer. -->
<meta name="keywords" content=""><!-- To be filled by seo specialist. -->
<meta name="author" content="Zubair Hasan">
<meta name="copyright" content="Duoneos">
<!-- Include Favicon -->

<!-- Including Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@300;400;700&display=swap" rel="stylesheet"> 
<!-- Including FontAwesome -->
<script src="https://kit.fontawesome.com/1c781ab882.js" crossorigin="anonymous"></script>
<!-- Including Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!-- Including Custom CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<?php $toggleMenuIcon = "bars"; include('components/navbar.php') ?>

<!-- Mobile Menu Starts -->
<div id="mobileMenu" class="d-none w-100 h-100 bg-theme-black position-fixed">
    <div class="w-100">
        <?php $toggleMenuIcon = "times"; include('components/navbar.php') ?>
        <div class="h-100 align-items-center justify-content-center d-flex flex-column">
            <a class="mobileNavLink text-uppercase" href="/">home</a>
            <a class="mobileNavLink text-uppercase" href="about.php">about</a>
            <a class="mobileNavLink text-uppercase" href="services.php">services</a>
            <a class="mobileNavLink text-uppercase" href="portfolio.php">portfolio</a>
        </div>
    </div>
</div>
<!-- Mobile Menu Ends -->