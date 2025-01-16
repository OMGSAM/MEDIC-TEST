<?php 
#session_start();
$host = "localhost"; // Remplacez par votre hôte
$username = "root"; // Remplacez par votre utilisateur
$password = ""; // Remplacez par votre mot de passe
$dbname = "bis"; // Remplacez par votre base de données
$conn = new mysqli($host, $username, $password, $dbname);
?>

 

<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>Katim-Health Care </title>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="Inaamajay" name="author">
    <meta content="width=device-width,initial-scale=1.0" name="viewport"/>
    <meta content="Elevate your online presence with Inaamajay - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 48+ ready demos."
          name="description">

    <link href="images/d.png" rel="shortcut icon">
    <link href="images/apple-touch-icon-57x57.png" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script> 


    <link crossorigin href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <link href="css/vendors.min.css" rel="stylesheet"/>
    <link href="css/icon.min.css" rel="stylesheet"/>
    <link href="css/style.min.css" rel="stylesheet"/>
    <link href="css/responsive.min.css" rel="stylesheet"/>
    <link href="demos/medical/medical.css" rel="stylesheet"/>
</head>
<body data-mobile-nav-style="classic">
    

 

<?php


// if ($conn) {
//     echo "<script>swal({
//         title: 'DATABASE CONNECTED',
//         icon: 'success',
//     });</script>";
//     }
     

//      ?>


<div class="box-layout">
 
 

    <header>
        

        <nav class="navbar navbar-expand-lg header-light bg-white disable-fixed">
            <div class="container-fluid">
                <div class="col-auto col-lg-2 me-lg-0 me-auto">
                    <a class="navbar-brand" href="index.php">
                        <img alt class="default-logo"
                             data-at2x="images/demo-medical-logo-black@2x.png" src="images/d.png">
                        <img alt class="alt-logo"
                             data-at2x="images/demo-medical-logo-black@2x.png" src="images/demo-medical-logo-black.png">
                        <img alt class="mobile-logo"
                             data-at2x="images/demo-medical-logo-black@2x.png" src="images/demo-medical-logo-black.png">
                    </a>
                </div>
                <div class="col-auto col-lg-8 menu-order position-static">
                    <button aria-controls="navbarNav" aria-label="Toggle navigation" class="navbar-toggler float-start"
                            data-bs-target="#navbarNav" data-bs-toggle="collapse" type="button">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="demo-medical-about.html">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="demo-medical-treatments.html">Treatments</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="demo-medical-doctors.html">Doctors</a></li>
                            <li class="nav-item"><a class="nav-link" href="demo-medical-timetable.html">Timetable</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="demo-medical-contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto col-lg-2 text-end d-none d-sm-flex">
                    <div class="header-icon">
                        <div class="header-button">
                            <a class="btn btn-small btn-switch-text btn-base-color left-icon btn-round-edge btn-box-shadow"
                               href="demo-medical-appointment.php">
<span>
<span><i class="feather icon-feather-calendar"></i></span>
<span class="btn-double-text" data-text="Book online">Book online</span>
</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </header>
 