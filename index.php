<?php
	include_once('connection.php');
	$query= "SELECT contentadd.contenttype, contentadd.content, register.name
			FROM contentadd, register 
			WHERE contentadd.email=register.email";
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
<body style="background-image: url('Image/ddd.jpg');background-size: contain;">
	<!-- <nav class="navbar navbar-light bg-light">
	  	<a class="navbar-brand" href="#">
	    	<img src="Image\123.png" width="90" height="60" class="d-inline-block align-top" alt="">
	  	</a>
	  	<span style="display: inline-block;">
			<h1 font-family= "Monotype corsiva"><i>&ensp;The Contents are Build Here...</i>	</h1>
		</span>
		<img src="Image\456.png" width="200" height="100" class="pull-right img-responsive navbar navbar-light bg-light" alt="">
		
	</nav>	 -->
	<!-- navbar	 -->
	<nav style="float: right;" class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup" >
	    <div class="navbar-nav mr-auto">
	      <ul class="nav navbar-nav mr-auto">

	    <!-- /#wrapper -->
				<li><a href="index.php" style="color: black;"><b>Home</b></a></li>
				<li><a href="#aboutus" style="color: black;"><b>About us</b></a></li>
				<li><a href="#login&register" style="color: black;" data-toggle="modal" data-target="#myModal"><b>Login&ensp;/&ensp;Registration</b></a></li>
				<!-- Large modal -->
				<div class="modal fade" id="myModal">
				    <div class="modal-dialog modal-lg">
				        <div class="modal-content">
				            <div class="modal-header">
				                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
				                    ×</button>
				                <h4>Login&ensp;/&ensp;Registration</h4>
				            </div>
				            <div class="modal-body">
				                <div class="row">
				                    <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
				                        <!-- Nav tabs -->
				                        <ul class="nav nav-tabs">
				                            <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
				                            <li><a href="#Registration" data-toggle="tab">Registration</a></li>
				                        </ul>
				                        <!-- Tab panes -->
				                        <div class="tab-content">
				                            <div class="tab-pane active" id="Login">
				                                <form action="login.php" method="POST" role="form" class="form-horizontal">
				                                <div class="form-group">
				                                    <label for="email" class="col-sm-2 control-label">
				                                        Email</label>
				                                    <div class="col-sm-10">
				                                        <input type="email" class="form-control" name="email" required />
				                                    </div>
				                                </div>
				                                <div class="form-group">
				                                    <label for="exampleInputPassword1" class="col-sm-2 control-label">
				                                        Password</label>
				                                    <div class="col-sm-10">
				                                        <input type="password" class="form-control" name="password" required />
				                                    </div>
				                                </div>
				                                <div class="row">
				                                    <div class="col-sm-2">
				                                    </div>
				                                    <div class="col-sm-10">
				                                        <button type="submit" class="btn btn-primary btn-sm">
				                                            Submit</button>
				                                        <a href="#">Forgot your password?</a>
				                                    </div>
				                                </div>
				                                </form>
				                            </div>
				                            <div class="tab-pane" id="Registration">
				                               <form action="register.php" method="POST" role="form" class="form-horizontal">
				                                <div class="form-group">
				                                    <label for="email" class="col-sm-2 control-label">
				                                        Name</label>
				                                    <div class="col-sm-10">
				                                        <div class="row">
				                                            <div class="col-md-3">
				                                                <select name="title" class="form-control">
				                                                    <option name="title">Mr.</option>
				                                                    <option name="title">Ms.</option>
				                                                </select>
				                                            </div>
				                                            <div class="col-md-9">
				                                                <input type="text" class="form-control" name="name" placeholder="Name" />
				                                            </div>
				                                        </div>
				                                    </div>
				                                </div>
				                                <div class="form-group">
				                                    <label for="email" class="col-sm-2 control-label">
				                                        Email</label>
				                                    <div class="col-sm-10">
				                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" />
				                                    </div>
				                                </div>
				                                <div class="form-group">
				                                    <label for="mobile" class="col-sm-2 control-label">
				                                        Mobile</label>
				                                    <div class="col-sm-10">
				                                        <input type="number" name="mobile" class="form-control" id="mobile" placeholder="Mobile" />
				                                    </div>
				                                </div>
				                                <div class="form-group">
				                                    <label for="password" class="col-sm-2 control-label">
				                                        Password</label>
				                                    <div class="col-sm-10">
				                                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" />
				                                    </div>
				                                </div>
				                                <div class="row">
				                                    <div class="col-sm-2">
				                                    </div>
				                                    <div class="col-sm-10">
				                                        <button type="submit" class="btn btn-primary btn-sm">Save & Continue</button>
				                                        <!-- <button type="button" class="btn btn-default btn-sm">
				                                            Cancel</button> -->
				                                    </div>
				                                </div>
				                               </form>
				                            </div>
				                        </div>
				                        <div id="OR">OR</div>
				                    </div>
				                    <div class="col-md-4">
				                        <div class="row text-center sign-with">
				                            <div class="col-md-12">
				                                <h3>Sign in with</h3>
				                            </div>
				                            <div class="col-md-12">
				                                <div class="btn-group btn-group-justified">
				                                    <a href="#" class="btn btn-primary">Facebook</a> 
				                                    <a href="#" class="btn btn-danger">Google</a>
				                                </div>
				                            </div>
				                        </div>
				                    </div>
				                </div>
				            </div>
				        </div>
				    </div>
				</div>
			</ul>
		</div>
	</div>
</nav>
	<div id="wrapper">
       <!-- 	<div class="overlay"></div> -->
	        <!-- Sidebar -->
	        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
	            <ul class="nav sidebar-nav">
	                <li class="sidebar-brand">
	                    <a>
	                       U CONTENT
	                    </a>
	                </li>
	                <li>
	                    <a href="index.php">Home</a>
	                </li>
	                <li>
	                    <a href="#aboutus">about us</a>
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

	        <div>	
	        		
	        </div>

	         <div class="box">
        <div class="container">
          <div class="row">
           
              <?php
                while($rows=mysqli_fetch_assoc($result))
                {
              ?> 
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            	 <div class="box-part text-center">

                <div class="title">
                  <h4><?php echo $rows['name'] ?></h4>
                </div>
                      <label><?php echo $rows['contenttype'] ?></label>
                      <br>
                      <label><?php echo $rows['content'] ?></label>
                    <hr>
                 </div>

          </div>
          		<?php
                }
                ?>
            </div>   
            
             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                   
              <div class="box-part text-center">
                        
                <div class="title">
                  <h4>Sachin</h4>
                </div>
                            
                <div class="text">
                  <span>“Read a thousand books, and your words will flow like a river.”</span>
                </div>
                            
               </div>
            </div>   
            
             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                   
              <div class="box-part text-center">
                   
                <div class="title">
                  <h4>Nitish</h4>
                </div>
                            
                <div class="text">
                  <span>"History repeats itself, first as tragedy, second as farce."</span>
               </div>
            </div>   
            
            <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                   
              <div class="box-part text-center">
                    
                <div class="title">
                  <h4>Jaydeep</h4>
                </div>
                            
                <div class="text">
                  <span>“The day science begins to study non-physical phenomena, it will make more progress in one decade than in all the previous centuries of its existence.”</span>
                </div>

               </div>
            </div>   
            
             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                   
              <div class="box-part text-center">
              	<form action="content.php" method="POST">
                  
                <div class="title">
                  <h4>Darshit</h4>
                </div>
                            
                <div class="text">
                  <span>“Invention arises directly from idleness, possibly also from laziness. To save oneself trouble.”</span>
                </div>
              	 </div>
            	</div> -->
            <!--  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                   
              <div class="box-part text-center">
               
                <div class="title"> 
                  <h4>Github</h4>
                </div>
                            
                <div class="text">
                  <span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
                </div>
                            
                <a href="#">Learn More</a>
                            
               </div>
            </div>
         -->
        </div>    
        </div>
    </div>

    <div id="aboutus">
		<center><b><h1>FOR THE CONTENT LOVERS</h1><b></center>
			<center><b><h4>FROM THE CREATORS</h4><b></center>
			<center><b><i><h5>“Start writing, no matter what. The water does not flow until the faucet is turned on.”<br>
— Louis L’Amour
</h5><i><b></center>
		<div class="box">
        <div class="container">
          <div class="row">
           
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                   
              <div class="box-part text-center">
                            
                            <img src="Image\ss.jpg" width="200" height="200" alt="">
                            
                <div class="title">
                  <h4>Sachin Tripathi</h4>
                </div>
                            
                <div class="text">
                  <span>B.E. in Information Technology <br>Shree L.R. Tiwari College of Engineering Mumbai,India <br>fritttzace@gmail.com</span>
                </div>      
               </div>
            </div>   
            
             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                   
              <div class="box-part text-center">
                  
                  <img src="Image\rr.jpg" width="200" height="200" alt="">
                        
                <div class="title">
                  <h4>Rounak Suthar</h4>
                </div>
                            
                <div class="text">
                  <span>B.E. in Information Technology <br>Shree L.R. Tiwari College of Engineering Mumbai,India <br>rounaksolanki37@gmail.com</span>
                </div>          
               </div>
            </div>   
            
             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                   
              <div class="box-part text-center">
                            
                           <img src="Image\dd.jpg" width="200" height="200" alt="">
                            
                <div class="title">
                  <h4>Darshit Shah</h4>
                </div>
                            
                <div class="text">
                  <span>B.E. in Information Technology <br>Shree L.R. Tiwari College of Engineering Mumbai,India <br>darshit.shah33@gmail.com</span>
                </div>                         
               </div>
            </div>   
            
	</div>

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
      <!-- Grid column -->

      <!-- Grid column -->
      
      <!-- Grid column -->

      <!-- Grid column -->
     <!--  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4" >
        <h6 class="text-uppercase font-weight-bold">CONNECT WITH US</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="dark-grey-text" href="#login&register">SIGN UP NOW</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">ABOUT US</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">LEAVE A MESSAGE</a>
        </p>

      </div> -->
      <!-- Grid column -->

      <!-- Grid column -->
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

<!-- aboutus -->

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