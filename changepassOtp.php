
<?php
include 'inc/header.php';
Session::CheckSession();
 ?>
 <?php

 if (isset($_GET['id'])) {
   $userid = (int)$_GET['id'];

 }



 if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['changepass'])) {  
   if (isset($_SESSION['id_check_email'])) {
     $userid = $_SESSION['id_check_email'];
     $_SESSION['id'] = $_SESSION['ok']['id'];
     $_SESSION['roleid'] = $_SESSION['ok']['roleid'];
     $_SESSION['name'] = $_SESSION['ok']['name'];
     $_SESSION['email'] = $_SESSION['ok']['email'];
     $_SESSION['username'] = $_SESSION['ok']['username'];
      Session::set('logMsg', '<div class="alert alert-success alert-dismissible mt-3" id="flash-msg">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success !</strong> You are Logged In Successfully !</div>');
          echo "<script>location.href='index.php';</script>";
   }
  $changePass = $users->changePasswordBysingelUserId($userid, $_POST);
  
 }



 if (isset( $changePass)) {
   echo  $changePass;
 }
  ?>


 <div class="card ">
   <div class="card-header">
          <h3>Change your password <span class="float-right"> <a href="profile.php?id=<?php  ?>" class="btn btn-primary">Back</a> </h3>
        </div>
        <div class="card-body">



          <div style="width:600px; margin:0px auto">

          <form class="" action="" method="POST">
              <div class="form-group">
                <label for="new_password">New Password</label>
                <input type="password" name="new_password"  class="form-control">
              </div>
              <div class="form-group">
                <label for="re_new_password">Retype New Password</label>
                <input type="password" name="re_new_password"  class="form-control">
              </div>


              <div class="form-group">
                <button type="submit" name="changepass" class="btn btn-success">Change password</button>
              </div>


          </form>
        </div>


      </div>
    </div>


  <?php
  include 'inc/footer.php';

  ?>
