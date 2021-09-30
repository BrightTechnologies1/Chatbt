<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="img-bg" style="background-image: url('img-bg.jpg');">
    <div class="wrapper">
      <section class="users">
        <header>
          <div class="content">
            <?php 
              $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
              if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
              }
            ?>
            <img src="php/images/<?php echo $row['img']; ?>" alt="">
            <div class="details">
              <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
              <p><?php echo $row['status']; ?></p>
            </div>
          </div>
          <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
        </header>
        <div class="search">
          <span class="text">Start a chat</span>
          <input type="text" placeholder="Search...">
          <button><i class="fas fa-search"></i></button>
        </div>
        <div class="users-list">
    
        </div>
      </section>
    </div>
  </div>

  <script src="javascript/users.js"></script>
  <script src="fontawesome/js/all.js"></script>
  <script src="https://kit.fontawesome.com/5e335d38a4.js" crossorigin="anonymous"></script>

</body>
</html>
