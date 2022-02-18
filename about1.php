<?php
  include_once('connection.php');
  $email="". $_COOKIE['email'];
  $query= "SELECT title, name, email, mobile, password FROM register WHERE email='$email'";
  $result=mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="view port" content="width=device-width, initial-scale=1">
  <!-- <title>ROUNAK SUTHAR</title> -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome-all.css">
  </head>
<body style="background-image: url('Image/ccc.jpg');background-size: contain;">
  <!-- <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="Image\123.png" width="90" height="60" class="d-inline-block align-top" alt="">
      </a>
      <span style="display: inline-block;">
      <h1 font-family= "Monotype corsiva"><i>&ensp;The Contents are Build Here...</i> </h1>
    </span>
    <img src="Image\456.png" width="200" height="100" class="pull-right img-responsive navbar navbar-light bg-light" alt="">
    
  </nav>   -->
  <!-- navbar  -->
  <nav style="float: right;" class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup" >
      <div class="navbar-nav mr-auto">
        <ul class="nav navbar-nav mr-auto">

      <!-- /#wrapper -->
        <li><a href="index1.html" style="color: black;">Home</a></li>
        <li><a href="about1.php" style="color: black;">About</a></li>
        <li><a href="index.php" target="_self"  style="color: black;">LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Large modal -->
       
  <div id="wrapper">
       <!--   <div class="overlay"></div> -->
          <!-- Sidebar -->
          <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
              <ul class="nav sidebar-nav">
                  <li class="sidebar-brand">
                      <a>
                         U CONTENT
                      </a>
                  </li>
                  <li>
                      <a href="index1.html">Home</a>
                  </li>
                  <li>
                      <a href="about1.php">about</a>
                  </li>
                  <li>
                      <a class="#">Current & World Affairs</a>
                  </li>
                  <li>
                      <a href="about.html">History & Heritage</a>
                  </li>
                  <li>
                      <a href="#">Quotes</a>
                  </li>
                  <li>
                      <a href="#">Short Story</a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Entertainment <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li class="dropdown-header">Entertainment</li>
                      <li><a href="#">Movies</a></li>
                      <li><a href="#">Comedy</a></li>
                      <li><a href="#">Sports</a></li>
                      <li><a href="#">Music</a></li>
                      <li><a href="#">Others</a></li>
                    </ul>
                  </li>
                  <li>
                      <a class="#">Sports & Technology</a>
                  </li>
              </ul>
          </nav>
          <!-- /#sidebar-wrapper -->
          <!-- Page Content -->
          <div id="page-content-wrapper">
              <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                  <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
          <span class="hamb-bottom"></span>
              </button>
          </div>
          <?php
                while($rows=mysqli_fetch_assoc($result))
                {
              ?>
            <div id="about" class="container">
              
              
                      <h1>Profile:</h1>
                      <hr>
                      <label for="First name"><b>Name:</b></label><br>
                      <label><?php echo $rows['title'] ?></label>
                      <label><?php echo $rows['name'] ?></label>
                      <br>
                      <br>
                      <label for="email"><b>E-mail:</b></label>
                      <label><?php echo $rows['email'] ?></label>
                      <br>
                      <br>
                      <label for="Last name"><b>Mobile No.:</b></label><br>
                      <label><?php echo $rows['mobile'] ?></label>
                      &emsp;&emsp;
                      <br>
                      <br>
                      <label for="psw"><b>Password:</b></label><br>
                      <label>*********</label>
                      
                      <br>
                      <br> 
                     <!--  
                      <label for="gen"><b>Gender:</b></label><br>
                      <label class="radio-inline"><input type="radio" name="optradio" checked>Male</label>
                      <label class="radio-inline"><input type="radio" name="optradio">Female</label>
                      <label class="radio-inline"><input type="radio" name="optradio">Other</label> -->
                    <hr>
                

          </div>
          <?php
                }
                ?>

          <!-- Footer -->
<footer class="page-footer font-small blue-grey lighten-5">

  <div style="background-color: #21d192;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0"><b>Get connected with us on social networks!<b></h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->  
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          &ensp;
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          &ensp;
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
          </a>
          &ensp;
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
          </a>
          &ensp;
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3 dark-grey-text">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Connect with us</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>CONTENT SPECIAL</p>
        <a href="#Contact" data-target="#Contact" data-toggle="modal">Message Us</a>


      </div>
      
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" style="float: right;">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact us</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> SHREE L. R. TIWARI COLLEGE OF ENGINEERING</p>
        <p>
          <i class="fas fa-envelope mr-3"></i>slrtce.in</p>
        <p>
          <i class="fas fa-phone mr-3"></i>+917715080048</p>
        <p>
          <i class="fas fa-print mr-3"></i>+917507595806</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center text-black-50 py-3">© 2019 Copyright:
    <a class="dark-grey-text" href="https://slrtce.in"> SLRTCE</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
          <!-- /#page-content-wrapper -->
      </div>


<!-- contact -->
<div class="modal fade" tabindex="-1" id="Contact"
        data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    &times;
                </button>
                <h4 class="modal-title">Contact Us Now!</h4>
            </div>
            <div class="modal-body">
                <form action="Contact">
          <div class="container">
             <p>Please fill this form.</p>
                <input type="text" placeholder="Enter Full Name" name="Full Name" required>
                <br>
                <br>
                <input type="text" placeholder="Enter Email" name="email" required>
                <br>
                <br> 
                <input type="text" placeholder="Enter Number" name="Number" required>
                <br>
                <br>
                <textarea name="comments" id="comments" placeholder="Any comments">
              </textarea>
        </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-primary"
                        data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/js.js"></script>
  

</body>
</html>