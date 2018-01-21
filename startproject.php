<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Rocketfox | Start a Project</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/bundle.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Halant:300,400" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <script>
      function aboutFun(){
        window.location="about.html" ;
      }
    </script>
  </head>

  <body>
    <!-- Preloader-->
    <div id="loader">
      <div class="centrize">
        <div class="v-center">
          <div id="mask">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </div>
    <!-- End Preloader-->
    <!-- Navigation Bar-->
    <header id="topnav">
      <div class="container" style="width: 100%">
        <!-- Logo container-->
        <div class="logo" style="padding-left: 3%">
          <a href="index.html">
            <img src="images/logo_light.png" alt="" class="logo-light">
            <img src="images/logo_dark.png" alt="" class="logo-dark">
          </a>
        </div>
        <!-- End Logo container-->
        <div class="menu-extras">
          <div class="menu-item">
            <!-- Mobile menu toggle-->
            <a class="navbar-toggle">
              <div class="lines">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </a>
            <!-- End mobile menu toggle-->
          </div>
        </div>
        <div id="navigation">
          <!-- Navigation Menu-->
          <ul class="navigation-menu">
            <li>
              <a href="#">
                Work
              </a>
            </li>
            <li>
              <a href="#" onclick="aboutFun()">
                About
              </a>
            </li>
            <li>
              <a href="#">
                Careers
              </a>
            </li>
            <li>
              <a href="#">
                Contact
              </a>
            </li>
            <li>
              <a href="#">
                +64 7 802 4323
              </a>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <!-- End Navigation Bar-->
    <section class="page-title parallax">
      <div data-parallax="scroll" data-image-src="images/bg/banner3.jpg" class="parallax-bg"></div>
      <div class="parallax-overlay light">
        <div class="centrize">
          <div class="v-center">
            <div class="container">
              <div class="title center">
                <h2 class="mb-25 white-text">Rocket Fox | Professional Web Design<span class="red-dot"></span></h2>
                <h4 class="white-text">Launch Gorgerous Appearance for Your Idea Today</h4>
                <hr>
              </div>
            </div>
            <!-- end of container-->
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="title center">
          <h3 class="fw-400">Start a Project</h3>
          <hr>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-5 mb-25">
              <div class="form-group">
                <h4>Website name:</h4>
                <input id="wname" type="text" placeholder="Name of Project" class="form-control">
              </div>
              <div class="form-group">
                  <h4>Contact Person</h4>
                  <input id="conpn" type="text" placeholder="Contact Person" class="form-control">
                </div>
                <div class="form-group">
                    <h4>Contact Detail</h4>
                    <input id="condtail" type="text" placeholder="Contact Detail" class="form-control">
                  </div>
              <div class="form-group">
                <h4>What is your Business? </h4>
                <textarea id="bcontent" placeholder="Business Range" class="form-control"></textarea>
              </div>
            </div>
            <div class="col-md-5 col-md-offset-1">
			  <?php
			    $user = 'root';
				$passwd = '@llc0m';
				$db = 'rfw';
				$mysqli = new mysqli('localhost',$user,$passwd,$db);
				//get project types
				if($mysqli){
					$num = 0;
					$projectP = Array();
					$query = 'SELECT * FROM projecttype where typ_pid=0';
					$result = $mysqli->query($query);
					if($result){
						if($result->num_rows>0){
							while($row = $result->fetch_array()){
								$projectP[$num] = $row;
								$num++;
							}
						}
					}
					foreach($projectP as $p){
						echo '<div class="form-group">';
						echo '<h4>'.$p['typ_name'].'</h4>';
						$query = 'SELECT * FROM projecttype where typ_pid='.$p['typ_id'];
						$result = $mysqli->query($query);
						if($result){
							if($result->num_rows>0){
								while($row = $result->fetch_array()){
									echo '<label class="checkbox-inline">';
									echo '<input type="checkbox" m="'.$row['typ_price'].'" value="'.$row['typ_id'].'">'.$row['typ_name'].'</label> <br>';
								}
							}
						}
						echo '</div">';
					}
				}else{
					echo 'Connect databse fail!';
				}
				$mysqli->close();
			  ?>
              <div class="form-group">
                <div class="checkout-submit" >
                  <button type="button" class="btn btn-color btn-block">Submit Button</button>
                </div>
				<div style="float:left;margin-left:100%;margin-top:-6%;display:block;position:absolute;width:40%;">
					<font color="red" id="totalFont" t="0.0" size="5">Total($):0.00</font>
				</div>
              </div>
            </div>
          </div>
          <!-- end of row-->
        </div>
        <!-- end of section content-->
      </div>
      <!-- end of container-->
    </section>
    <!-- Footer-->
    <footer id="footer">
      <div class="container">
        <div class="footer-wrap">
          <div class="row">
            <div class="col-md-4">
              <div class="copy-text">
                <p><i class="icon-heart red mr-15"></i>© 2017 Rocket fox.</p>
              </div>
            </div>
            <div class="col-md-4">
              <ul class="list-inline">
                <li>
                  <a href="#">About</a>
                </li>
                <li>
                  <a href="#">Services</a>
                </li>
                <li>
                  <a href="#">Blog</a>
                </li>
                <li>
                  <a href="#">Contact</a>
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <div class="footer-social">
                <ul>
                  <li>
                    <a target="_blank" href="#"><i class="ti-facebook"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="#"><i class="ti-twitter-alt"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="#"><i class="ti-linkedin"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="#"><i class="ti-instagram"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="#"><i class="ti-dribbble"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- end of row-->
        </div>
      </div>
      <!-- end of container-->
    </footer>
    <!-- end of footer-->
    <!-- start of dialog window -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="z-index: 1040">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        Message
                    </h4>
                </div>
                <div class="modal-body" id="msgBody"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
    </div>
    <!-- end of dialog window -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bundle.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/startproject.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/navbar.js"></script>
  </body>

</html>