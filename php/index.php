<?php
require_once 'config.php';

session_start();

?>

<html>
<head>
    <title>september9</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/style/css/bootstrap.css" />
    <link rel="stylesheet" href="/style/css/style.css">
    <script src="/style/js//1.12.4/jquery.min.js"></script>
    <script src="/style/js/bootstrap.min.js"></script>

    <style type="text/css">
    body{
      padding-top: 60px;
    }
    .navbar-nav{
      padding-top: 8px;
    }
    </style>
</head>


<body>

  <header>
    <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="container">
        <div class="navbar-header">
          <div class="navbar-header">
                 <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
        <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="/">September9</a>
      </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <form class="navbar-form navbar-left">
                  <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search">
                      <span class="input-group-btn">
                          <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                      </span>
                  </div>
            </form>

          <?php
          if (!isset($_SESSION["email"])) {
          ?>
          <ul class="nav navbar-nav navbar-right">
            <li ><a href="login.php" >Log In</a></li>
            <li><a href="register.php" >Register</a></li>
            <?php
            } else  { ?>

                <li>
                 <a href="logout.php">Logout</a>
                </li>
            <?php
            }
            ?>
          </ul>
    </div>
    </div>
  </div>
  </nav>
  </header>
<!--slide bar-->

<div class="category" width:350 height:200>
  <div class="hovereffect">
      <img class="img-responsive" src="/images/mother.jpg" alt="">
      <div class="overlay">
         <h2>FOR MOTHER</h2>
         <a class="info" href="index-mother.php">Find here</a>
      </div>
  </div>
</div>

<div>
<div class="category">
  <div class="hovereffect">
<img class="img-responsive" src="/images/father.png" alt="">
<div class="overlay">
   <h2>FOR FATHER</h2>
   <a class="info" href="index-father.php">Find here</a>
</div>
  </div>
</div>

<div class="category">
  <div class="hovereffect">
<img class="img-responsive" src="/images/mother.jpg" alt="">
<div class="overlay">
   <h2>FOR GIRLS</h2>
   <a class="info" href="index-girls.php">Find here</a>
</div>
  </div>
</div>

<div class="category">
  <div class="hovereffect">
<img class="img-responsive" src="/images/mother.jpg" alt="">
<div class="overlay">
   <h2>FOR BOYS</h2>
   <a class="info" href="index-boys.php">Find here</a>
</div>
  </div>
</div>
</div>


<footer class="footer">
  <div class="class-footer" style='
      padding: 10px 20px;'>
      <p>&copy; September9 2017</p>
  </div>
</footer>
</body>
