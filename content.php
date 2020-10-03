<?php
  include 'inc/header.php';
  Session::CheckLogin();

  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {

    $register = $users->userRegistration($_POST);
  }

  if (isset($register)) {
    echo $register;
  }

?>


<div class="card ">

    <div class="card-header">
      <h3 class='text-center'>Wellcome to kma</h3>
    </div>

    <div class="card-body">
      <div style="width:600px; margin:0px auto" class="card-row">
        <div class="card-avatar">
          <img src="./image/download.jpg" alt="avatar" class="avatar-img">
        </div>

        <div class="card-info">
          <h2>Võ Văn Linh</h2>
          <p>AT130629</p>
          <p>STT: 25</p>
        </div>
      </div>
    </div>

</div>


<?php
  include 'inc/footer.php';

?>
