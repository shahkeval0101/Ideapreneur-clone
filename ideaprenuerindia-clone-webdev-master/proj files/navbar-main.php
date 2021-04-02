<?php
	session_start();
	require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <title>Ideaprenuer India!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<link rel="stylesheet" href="my-css.css">
    <style>
      /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
      /* .row.content {height: 1500px} */

      /* Set gray background color and 100% height */
      .sidenav {
        background-color: #f1f1f1;
        /* height: 100%; */
      }

      /* Set black background color, white text and some padding */
      footer {
        background-color: #555;
        color: white;
        padding: 15px;
      }

      /* On small screens, set height to 'auto' for sidenav and grid */
      @media screen and (max-width: 767px) {
        .sidenav {
          height: auto;
          padding: 15px;
        }
        .row.content {height: auto;}
      }
    </style>

  </head>


  <body >

<!-- upper navbar,non collapsable -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top navbar-template" >

    <ul class="navbar-nav">

    <li id="k1" class="nav-item">
      <a class="nav-link" href="about-us.php">ABOUT US</a>
    </li>

    <li id="k2" class="nav-item">
      <a class="nav-link" href="advertise.php">ADVERTISE</a>
    </li>

    <li id="k3" class="nav-item">
      <a class="nav-link" href="career.php">CAREER WITH US</a>
    </li>

    <li id="k4" class="nav-item">
      <a class="nav-link" href="submit-startup.php">SUBMIT YOUR STARTUP</a>
    </li>

  </ul>

  <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar7">

      <ul class="navbar-nav ml-auto flex-nowrap">
          <li class="nav-item"><a class="nav-link px-2" href="https://www.facebook.com"><i class="fab fa-facebook" ></i></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="https://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="https://www.youtube.com"><i class="fab fa-youtube"></i></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="https://www.instagraam.com"><i class="fab fa-instagram"></i></a></li>
      </ul>
  </div>
</nav>

<div class="container">

  <div class="row">
    <div class="col">
      <a href="homepage.php"><img src="http://ideapreneurindia.com/wp-content/uploads/2016/11/cropped-idealogo-1.png" alt="logo"></a>
    </div>

    <div class="col-sm-3 col align-self-center">
      <span class="ml-auto">
        <?php
         if (!isset($_SESSION['email']))
         {
           ?>
         <!-- //login and registration button -->
         <a href="user/login.php">
           <button type="button" class="btn btn-info">Login</button>
         </a>
         <a href="user/registration.php">
           <button type="button" class="btn btn-info">Register</button>
         </a>
         <?php
          }
         else{
           ?>
           <a href="controls/first.php">
             <button type="button" class="btn btn-info">Create</button>

           </a>
           <a href="controls/logout.php">
             <button type="button" class="btn btn-info">Logout</button>

           </a>
         <!-- //two button of create and logout -->
       <?php }
        ?>
      </span>
    </div>
  </div>




  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">

    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#menu" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id = "menu">

      <ul class="navbar-nav">

        <li id ="l1"class="nav-item active">
          <a class="nav-link " href="homepage.php">HOME</a>
        </li>
        <li id ="l2"class="nav-item">
          <a class="nav-link" href="category.php?cat=Tech">TECH</a>
        </li>
        <li id ="l3"class="nav-item">
          <a class="nav-link" href="category.php?cat=Innovation">INNOVATION</a>
        </li>
        <li id ="l4"class="nav-item">
          <a class="nav-link" href="category.php?cat=Interviews">INTERVIEWS</a>
        </li>
        <li id ="l5"class="nav-item">
          <a class="nav-link" href="category.php?cat=Business">BUSINESS</a>
        </li>
        <li id ="l6"class="nav-item">
          <a class="nav-link" href="category.php?cat=Women">WOMEN</a>
        </li>
        <li id="l7" class="nav-item">
          <a class="nav-link" href="category.php?cat=Stories">STORIES</a>
        </li>
        <li id="l8" class="nav-item">
          <a class="nav-link" href="category.php?cat=Governance">GOVERNANCE</a>
        </li>

      </ul>

    </div>

  </nav>

</div>
