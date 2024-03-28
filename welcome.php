<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}

?>

  <!DOCTYPE html>
<html lang="en">
<head>

   <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Welcome - <?php  $_SESSION['username'] ?></title>
  
  

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My online meal</title>
   <link rel="stylesheet" href="css/index.css">
   <link rel="stylesheet" media="screen and (max-width: 1250px )" href="css/phone.css">
   <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
</head>
<body>

<?php //require  'partial/nav.php' ?> 
  <!-- Welcome -<?php echo $_SESSION['username'] ?> -->



    <div id="navbar">
        <div id="logo">
        <img src="image/logo 2.png" alt="myonlinemeal.com">
    </div>
  
    <ul>
       <li class="item"><a href="#home">Home</a></li>
       <li class="item"><a href="#services-container"> Services</a></li>
       <li class="item"><a href="#client-section">Our Clients</a></li>
       <li class="item"><a href="#center">Blog</a></li>
       <li class="item"><a href="#contact ">contact</a></li>
    </ul>

    <div class="right-container">
        <input type="text" class="search-box" placeholder="Search">
      <a href="/food order/signup.php" class="sub-btn">SIGN IN</a>  
        <a href="/food order/logout.php" class="login-link">LOGOUT</a> 
    </div>
</nav>


</div>
    <section id= "home">
        <h1 class="h-primary">Welcome to Myonlinemeal</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque doloribus veritatis vero </p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit..</p>
        <button class="btn">Order Now</button>
    </section>
    <br>

   
    <section id="services-container">
        <h1 class="h-primary center">Our Services</h1>
        <div id="services">
            <div class="box">
                <img src="image/4.png" alt="" height="150cm" width="350px">
                <h2 class="h-secondary center">Food Catering</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                    
                   .</p>
            </div>
            <div class="box">
                <img src="image/1.png" alt="" height="180cm" width="400px">
                <h2 class="h-secondary center">Bulk Ordering</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                

                    </p>
            </div>
      
            <div class="box">
                <img src="image/deliver.png" alt="" height="150cm" width="350px">
                <h2 class="h-secondary center">Food Ordering</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                   
                    .</p>
            </div>
        </div>
        <hr>
        <section id="client-section">
            <h1 class="h-primary center">Our Clients</h1>
            <div id="clients">
                <div class="client-item">
                    <img class="apple" src="image/logo3.png" alt="Our Client">
                </div>
                <div class="client-item">
                    <img class="microsoft"  src="image/logo4.png" alt="Our Client">
                </div>
              
                <div class="client-item">
                    <img  class="acer" src="image/logo6.png" alt="Our Client">
                </div>
                <div class="client-item">
                    <img class="swiggy" src="image/logo5.png" alt="Our Client">
                </div>
               
            </div>
    </section>
    </section>
   

    <hr>

<section id="contact">
    <h1 class="h-primary center">Contact Us</h1>
    <div id="contact-box">
        <form action="">
            <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" name="name" id="name" placeholder="Enter your name">
            </div>
            
            <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" name="name" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="phone">Phone Number: </label>
                <input type="phone" name="name" id="phone" placeholder="Enter your phone">
            </div>
            <div class="form-group">
                <label for="message">Message: </label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
            </div>
        </form>
    </div>
</section>

<footer>
    <div id="center">
        Copyright &copy; www.myOnlineMeal.com. All rights reserved!
    </div>
</footer>
  



   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

  </html>