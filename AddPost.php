<?php  include "includes/header.php"; ?>

<?php include "includes/navigation.php" ?>

<?php
include('database/connexion.php');
include('session.php');
if(isset($_POST["id_post"]) && isset($_POST["content"]) && isset($_POST["date"])){
    $id_post = $_POST["id_post"] ;
    $id_user = $_SESSION["idUser"];
    $imagename = time() . '' . $_FILES['image']['name'];
    $content = $_POST["content"] ;
    $date = $_POST["date"] ;

    $n = 0;

    $query="INSERT into posts values('".$id_post."','".$id_user."','".$imagename."','".$content."','".$date."')";
    $destination = "img/" . $image_name;

    move_uploaded_file($_FILES['image']['tmp_name'], $destination);
    $conn->query($query);
      header('location:login.php');



}
?>
<section class="page-section" id="contact">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">---  Add New Post  ---</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form id="contactForm" name="sentMessage" novalidate="novalidate" enctype="multipart/form-data" method="POST">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Id_Post</label><input class="form-control" name="id_post" type="text" placeholder="ID" required="required" data-validation-required-message=" enter your post id." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="form-group">
                       <label for="exampleFormControlFile1">Add your Post Image</label>
                       <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Email address</label><input class="form-control" name="content" type="textarea" placeholder="Email address" required="required" data-validation-required-message="Please Fill The Content." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Password</label><input class="form-control" name="date" type="date" required="required" data-validation-required-message="Please chek your Date.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <!-- <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Admin</label><input class="form-control" name="admin" type="number" placeholder="Enter 0 or 1"  data-validation-required-message="Please are you a Admin.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div> -->
                    <br />
                    <div id="success"></div>
                    <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Create</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
