<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="img-bg" style="background-image: url('img-bg.jpg');">
    <div class="wrapper">
      <section class="form login">
        <header>FOT ChatBot</header>
        <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
          <div class="error-text"></div>
          <div class="field input">
            <label>Email Address</label>
            <input type="text" name="email" placeholder="Enter Email" required>
          </div>
          <div class="field input">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter password" required>
            <i class="fas fa-eye"></i>
          </div>
          <div class="field button">
            <input type="submit" name="submit" value="Login">
          </div>
        </form>
        <div class="link">New here? <a href="index.php">Sign up</a></div>
      </section>
    </div>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>
  <script src="fontawesome/js/all.js"></script>
  <script src="https://kit.fontawesome.com/5e335d38a4.js" crossorigin="anonymous"></script>


</body>
</html>
