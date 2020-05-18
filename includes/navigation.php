<!-- Navigation-->
<?php include("../session.php") ?>
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="Home.php">BloggerGo</a><button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <?php
          session_start();
          if (isset($_SESSION["user"])) {

           ?>
            <ul class="navbar-nav ml-auto">
              <?php
              if($_SESSION["Admin"] == 1)
              {
              ?>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="User.php">Users</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="Post.php">Posts</a></li>

            <?php }else {

            ?>

                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="Post.php">Posts</a></li>

            <?php } ?>

            </ul>
        <?php } ?>
        </div>
        <div class="dropdown" style="'padding-left: 20px;'">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Connexion
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="registration.php">Registration</a>
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="login.php">Log In</a>
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logout.php">Log Out</a>
          </div>
        </div>
    </div>
</nav>
Copy
