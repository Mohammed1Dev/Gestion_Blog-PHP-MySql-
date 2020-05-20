<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>

  <?php include('session.php');?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="afficher.php"><i class="fas fa-user" style="font-size:30px"></i> <?php echo $_SESSION["user"]; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto ">
        <li class="nav-item active">
          <a class="nav-link" href="afficher.php">afficher <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="recherche.php">recherche</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="logout.php">logout</a>
        </li>
      </ul>
    </div>
  </nav>

<?php
 include('database/connexion.php');

 if(isset($_GET["id"]))
 {
     $id = $_GET["id"];
 $query="SELECT * from posts where id_user = $id";
 $result=$conn->query($query);
 $data=$result->fetchAll();

 $id_post = $data[0]["id_post"];
 $id_user = $data[0]["id_user"];
 $image = $data[0]["image"];
 $content = $data[0]
 }

 if(isset($_POST["nom"]) && isset($_POST["age"]))
 {
    $cin=$_GET["cin"];
    $nom=$_POST["nom"];
    $age=$_POST["age"];
 $query="UPDATE employer set nom='$nom',age=$age where cin=$cin";
 $conn->exec($query);
header("location:afficher.php");
}
?>
<div class="container">
  <div class="col-6">


 <form action="" method="post">
 <div class="col-12 d-flex justify-content-center" style="margin:20px">
<h1>modifier employer</h1>
</div>
  nom  <input class="form-control" type="text" placeholder="Default input" value="<?php echo $nom ?>" name="nom">
   age <input class="form-control" type="text" placeholder="Default input" value="<?php echo $age ?>" name="age">
   <div class="col-12 d-flex justify-content-center" style="margin:10px">
   <input type="submit" value="modifier"  class="btn btn-primary">
   </div>

    </form>
    </div>
    </div>
    <?php include "includes/footer.php" ?>
