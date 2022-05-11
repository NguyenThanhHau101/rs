<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="main-profile">
  <div class="frofile-left">
    <div class="avatar"></div>
  </div>
  <div class="frofile-right">
    <p>Name: <?php echo $_SESSION['user_name'];?> </p>
    <p>Email: <?php echo $_SESSION['user_email'];?> </p>
    <p>Your ID: <?php echo $_SESSION['user_id'];?> </p>
  </div>
</div>

<div class="main-footer">
        <div class="footer-left">
          <h1>Sunny restaurant</h1>
          <div class="wrap-container">
            <ion-icon name="mail-outline"></ion-icon>
            <p>sunnyhp@gmail.com</p>
          </div>
          <div class="wrap-container">
            <ion-icon name="call-outline"></ion-icon>
            <p>0909 0903 0907</p>
          </div>
          <div class="wrap-container">
          <ion-icon name="heart-outline"></ion-icon>
            <p>www.twitter.com/sunny/</p>
          </div>
        </div>
        <div class="footer-mid">
            <p>Designer: Nguyen Thanh Hau</p>
            <p>Design support: canva.com</p>
            <p>Build support: Udemy.com</p>
        </div>
        <div class="footer-right">
          <p>
          Sunny wishes you a delicious meal.
          </p>
        </div>
      </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>