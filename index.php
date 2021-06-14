<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/fav.png"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>TSF Bank | Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
    
  <!-- Home Section Starts -->
  <section class="home" id="home">
    <div class="content">
    <h3>Welcome To TSF Banking System</h3>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad nesciunt corporis nam aspernatur accusantium reiciendis esse numquam impedit qui, laudantium adipisci voluptate nobis aliquid quisquam.</p>
    <a href="viewuser.php" class="btn"><span>view users</span>
    <i class="fas fa-arrow-circle-right"></i>
    </a>
    </div>
<div class="image">
    <img src="img/hero.png" alt="">
</div>
</section>
<!-- Home Section Ends -->



<!-- feature Section Starts -->
<section class="feature" id="feature">

<h1>Our Banking Features</h1>
<div class="box-container">
    <div class="box">
        <img src="img/users.png">
        <h3>Users</h3>
        <a href="viewuser.php" class="btn"><span>view users</span>
        <i class="fas fa-chevron-right"></i>
    </a>
    </div>

    <div class="box">
        <img src="img/transfer.png" alt="">
        <h3>Transactions</h3>
        <a href="transfer.php" class="btn"><span>Make a Transaction</span>
        <i class="fas fa-chevron-right"></i>
    </a>
    </div>

    <div class="box">
        <img src="img/history.png" alt="">
        <h3>Transaction History</h3>
        <a href="transhistory.php" class="btn"><span>Transaction History</span>
        <i class="fas fa-chevron-right"></i>
    </a>
    </div>
</div>
</section>
<!-- feature Section Ends -->


<!-- contact Section Starts -->
 <section class="contact" id="contact">
        <h1>Contact Us</h1>
        <div class="row">
            <div class="image">
            <img src="img/contact.png" alt="">
            </div>
            <form action="">
                <div class="inputbox">
                    <input type="text" placeholder="name">
                    <input type="email" placeholder="email">
                </div>
                <div class="inputbox">
                    <input type="number" placeholder="phone">
                </div>
                <textarea placeholder="message" cols="30" rows="10"></textarea>
                <a href="#" class="btn"><span>Submit</span>
                <i class="fa fa-paper-plane"></i>
                </a>
            </form>
        </div>
    </section>
<!-- contact Section Ends -->


<style>

</style>
<!-- footer strated -->
  <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved | TSF Bank <span>Made with <i class="fa fa-heart pulse"></i> by <a href="https://www.linkedin.com/in/jigar-sable/" target="_blank">Jigar</a>
            </span></p>
            
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li> 
              <li><a class="youtube" href="#"><i class="fab fa-youtube"></i></a></li>
              <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li> 
            </ul>
          </div>
        </div>
      </div>
</footer>
<!-- footer ended -->

<!-- scroll top btn -->
<a href="#home" class="fas fa-angle-up" id="scroll-top"></a>

<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>