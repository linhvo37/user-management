<?php
include 'inc/header.php';
Session::CheckLogin();
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
                  <input type="email" id="email"  class="form-control">
                </div>
 
                <div class="form-group">
                    <?php 
                        echo "<button type=\"submit\" name=\"login\" class=\"btn btn-success\" onclick=\"".
                            $users->generate_password('<script>document.getElementById("email").value</script>')
                    ."\">Submit</button>";

                    sleep(2);
                  ?>

                </div>
            </form>

          </div>


        </div>
      </div>


  <?php
  include 'inc/footer.php';
    
  ?>
