<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>
    <?php
    include('database/connexion.php');
    if(isset($_POST["email"]) && isset($_POST["pass"])){

        $user = $_POST["email"];
        $password = $_POST["pass"];
        $query = "SELECT * FROM `users`";
        echo $user;
          echo $password;
        $result = $conn->query($query);
        $data = $result->fetchAll();


        if (isset($_POST["submit"])) {
          // code...
          for ($i=0; $i<count($data);$i++) {
              if($user==$data[$i]["email"] && $password == $data[$i]["pass"]){

               $_SESSION["user"] = $user;
               $_SESSION["Admin"] = $data[$i]["admin"];
               header('location:Home.php');
              }
              else{

                echo "login Failed .......";
                header('location:login.php');

           }
          }
        }

    }
    ?>
    <form  method="POST">
      <div class="form-group mt-5">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>



<?php include "includes/footer.php" ?>
