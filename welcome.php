<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-compatiable" content="ie=edge">

<link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script type="text/javascript" src="js/cookies.js"></script>

<link rel="stylesheet" type="text/css" href="css/nav_logo.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Bakery</title>
</head>
<body>
    <div class="arrow-btn">
    <a href="#"><span class="fas fa-angle-up"></span></a>
</div>
    <header class="header">
        <nav class="navbar navbar-style">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                <a href="#"><img class="logo" src="img/img1.jpeg"></a>
                </div>
                <div class="collapse navbar-collapse" id="micon">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#container" class="nav-link"><span class="glyphicon glyphicon-home"></span> Home </a></li>
                    <li><a href="#about" class="nav-link"><span class="glyphicon glyphicon-info-sign"></span> About us </a></li>
                    <li><a href="menu.html"><span class="glyphicon glyphicon-cutlery"></span> Menu </a></li>
                    <li><a href="#menu" class="nav-link"><span class="glyphicon glyphicon-earphone"></span> Contact </a></li>
                    <li><a href="#gallery" class="nav-link"><span class="glyphicon glyphicon-film"></span> Gallery </a></li>
                    <li><a href="order.html"><span class="glyphicon glyphicon-shopping-cart"></span> Order A Cake </a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Login/Sign up </a></li>
                </ul>
            </div>
        </nav>

        <div class="container" id="container">
            <div class="row">

                <div class="col-sm-6">
                    <h1 class="big-text"> THE CAKE<br> COTTAGE</p></h1>
                    <p class="small-text"> <q><em> Life's too short to say no to cake </em></q></p>
                    <p class="para"> Where there is cake, there is hope and there is always cake </p>
                    <a class="btn btn-first" href="special.html"> OUR SPECIAL ITEMS</a>

                </div>
                <div class="col-sm-6">
                    <img src="img/img.jpeg" class="img-responsive">
                    <p>A legacy of gifting love and happiness</p>

                </div>
            </div>
            <hr class="mt-5" />
        </div>
        <section class="ftco-section bg-light" id="gallery">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                    <div class="section-title normal-title">
                        <div class="row justify-content-center mb-5 pb-2">
                            <div class="col-md-12 text-center heading-section ftco-animate">
                                <p class="subheading">Gallery</p>
                                  <h2 class="mb-4">Our Hot Cakes and cookies</h2>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-3 col-md-4 col-6 p-0">
                      <div class="gallery__pic">
                          <img src="img/image.png" class="img-responsive">
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6 p-0">
                      <div class="gallery__pic">
                          <img src="img/image1.png" class="img-responsive">
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6 p-0">
                      <div class="gallery__pic">
                          <img src="img/img2.png" class="img-responsive">
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6 p-0">
                      <div class="gallery__pic">
                          <img src="img/img3.png" alt="">
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6 p-0">
                      <div class="gallery__pic">
                          <img src="img/img4.png" alt="">
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6 p-0">
                      <div class="gallery__pic">
                          <img src="img/img5.png" alt="">
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6 p-0">
                      <div class="gallery__pic">
                          <img src="img/img6.png" alt="">
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6 p-0">
                      <div class="gallery__pic">
                          <img src="img/img7.png" alt="">
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="img/img8.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="img/img9.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="img/img10.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="img/img11.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="img/img12.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="img/img13.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="img/img14.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="img/img15.png" alt="">
                    </div>
                </div>
              </div>
          </div>
          <hr class="mt-5" />
      </section>
        
        <section id="about" class="about">
            <div class="container">
              <div class="row align-items-lg-center">
                <div class="col-12 col-md-6 text-center text-md-left" data-aos="fade-right">
                  <div class="section-heading mb-3">
                    <h4>About Us</h4>
                    <h1 class="display-4">The Cake Cottage</h1>
                  </div>
                  <p><b>
                    The Cake Cottage expects to be the main Cake Store regarding quality, benefit, 
                    esteem for cash and consumer loyalty.
                    We offer our clients a full scope of breads, forte breads, 
                    morning merchandise, cakes and baked goods.
                    <br>
                    We serve and take all type of cake orders. You can personalised cake of your own choice. 
                    We have the best chef in the city working for us and happying serving to you.
                  </p></b>
                  <a class="btn mt-4 mb-5 mb-md-0" href="#">Home</a>
                </div>
                <div class="col-12 col-md-6" data-aos="fade-left">
                  <img class="img-fluid" src="img/pic.jpeg" alt="">
                </div>
              </div>
              <hr class="mt-5" />
            </div>
          </section>
    </header>

    
    <footer class="footer-content">
       
        <section id="menu" class="menu">
            <div class="container">
              <div class="row text-center text-white">
                <div class="col-12 col-md-4 mb-4 mb-md-0" data-aos="fade-up">
                  <div class="shop-info">
                    <i class="far fa-clock mb-3"></i>
                    <h1 class="mb-4"><span class = "glyphicon glyphicon-time"></span>Hours of operation</h1>
                    <p>Mon to Fri: 9:00am - 6:00pm</p>
                    <p>Sat to Sun: 9:00am - 1:00pm</p>
                  </div>
                </div>
                <div class="col-12 col-md-4 mb-4 mb-md-0" data-aos="fade-down">
                  <div class="shop-info">
                    <i class="fas fa-map-marked-alt mb-3"></i>
                    <h1 class="mb-4"><span class = "glyphicon glyphicon-map-marker"></span>Our Location</h1>
                    <address>
                      1234 First Avenue <br />
                      New Haven, CP 0987
                    </address>
                  </div>
                </div>
                <div class="col-12 col-md-4 mb-4 mb-md-0" data-aos="fade-right">
                  <div class="shop-info">
                    <i class="fas fa-mobile-alt mb-3"></i>
                    <h1 class="mb-4"><span class= "glyphicon glyphicon-phone"></span>Get in touch</h1>
                    <p>#: 912-123-6789</p>
                    <p>Email: contact@backery.com</p>
                  </div>
                </div>
              </div>
              <hr class="mt-5" />
            </div>
            </section>

        <p>Copyright@The cake cottage 2021</p>
    
    </footer>
    </body>
</html>
