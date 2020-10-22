<?php 
include 'inc/header.php';
Session::CheckLogin();
?>

<?php 

if (isset($_GET['email'])) {
    $email = (string)$_GET['email'];
 
  } 

// if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_otp'])) {
    
    // $confirmOtp = $users->confirmOtpByEmail($email, $_POST);
    // }

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['otp_password'])) {
    $confirmOtp = $users->confirmOTP($_POST['otp_password']);
}

if (isset( $confirmOtp)) {
    echo  $confirmOtp;
  } 
?>


<div class="card ">
    <div class="card-header">
        <h3 class='text-center'><i class="fas fa-sign-in-alt mr-2"></i>Confirm OTP</h3>
</div>
    <div class="card-body">


        <div style="width:450px; margin:0px auto">

            <form class="" action="" method="post">
                <div class="form-group">
                    <label for="otp">OTP Password</label>
                    <input type="password" id="otp" name='otp_password' class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" name="submit_otp" class="btn btn-success">Submit</button>
                </div>
            </form>

        </div>


    </div>
</div>



<?php
include 'inc/footer.php';

?>