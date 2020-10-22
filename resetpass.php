  <?php
  include 'inc/header.php';
  Session::CheckLogin();
  ?>

  <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'])) {

    $status = $users->generate_password($_POST); 
    echo $status; 
  }


  
  //if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'])) {
  //  $status = $users->generate_password($_POST);
  //  if ($status == TRUE) {
  //    echo "<script>location.href='confirmOTP.php';</script>";
  //  } else {
 //     echo $status;
  //  }
 // }

  ?> 


  <div class="card ">
    <div class="card-header">
      <h3 class='text-center'><i class="fas fa-sign-in-alt mr-2"></i>Reset Password</h3>
    </div>
    <div class="card-body">
      <div style="width:450px; margin:0px auto">

        <form class="" action="" method="post">
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" id="email" name='email' class="form-control">
          </div>

          <div class="form-group">
            <button type="submit" name="forgot" class="btn btn-success">Submit</button>
          </div>
        </form>

      </div>
    </div>
  </div>



  <?php
  include 'inc/footer.php';

  ?>