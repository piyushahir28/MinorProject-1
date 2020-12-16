<?php

	session_start();

	$price="";
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: index.html');
	}
	if (isset($_GET['basicpackage'])) {
	
		$_SESSION['price'] = 6000;
		$_SESSION['packageName'] = 'Basic';
		header('location: payment.php');
	}
	if (isset($_GET['propackage'])) {
	
		$_SESSION['price'] = 8000;
		$_SESSION['packageName'] = 'Pro';
		header('location: payment.php');
	}
	if (isset($_GET['premiumpackage'])) {
	
		$_SESSION['price'] = 10000;
		$_SESSION['packageName'] = 'Premium';
		header('location: payment.php');
	}
	if (isset($_GET['gallery'])) {
	
		header('location: gallery.php');
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ujjain Tourism</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  	
  		<!--The given link is for Bootstrap(Version-4.5.2)-->
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  		
  		<!--The given link is for Social Media Icons-->
  		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />



  		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  		<!--The given link is for CSS(External)-->
  		<link rel="stylesheet" type="text/css" href="mycss.css">
	</head>
	<body>
		<!--Given below is the code for NavBar(I created this navbar using Bootstrap)-->
		<div class="bg-img">
			<nav id="navbar_top" class="navbar navbar-expand-lg navbar-light fixed-top">
				<a href="#" class="navbar-brand"><img src="images/uj3.png" alt="Ujjain Tourism" width="270px"></a>
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#herewecollapse">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="herewecollapse">
					<ul class="nav navbar-nav">
						<li class="nav-item"><a href="#" class="nav-link active">Home</a></li>
						<li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
						<li class="nav-item"><a href="#Packages" class="nav-link">Packages</a></li>
	        			<li class="nav-item"><a href="#Sharings" class="nav-link">Sharings</a></li>
	        			<li class="nav-item"><a href="#AboutUS" class="nav-link">About-Us</a></li>
	        			<li class="nav-item"><a href="#ContactUs" class="nav-link">Contact-Us</a></li>
	      			</ul>
	      			<ul class="navbar-nav ml-auto">
	        			<div class="nav-item dropdown">
	        				<?php if (isset($_SESSION['username'])) : ?>
                    		<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user-check"></i><strong><?php echo $_SESSION['username']  ?></strong></a>
		                    <div class="dropdown-menu">
		                        <a href="#" class="dropdown-item"><i class="fas far fa-id-badge"></i>&nbsp;&nbsp;Profile</a>
		                        <a href="#" class="dropdown-item"><i class="fas fas fa-cog"></i>&nbsp;&nbsp;Setting</a>
		                        <a href="admin.php?logout='1'" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Logout</a>
		                    </div>
		                	<?php endif ?>
		                </div>
	      			</ul>
				</div>
			</nav>
		</div>
		
		<br><br>
		<!--Code for Packages-->
		<section id="Packages">
        	<div style="max-width: 1400px" class="container-fluid">
  				<div class="col-md-12 text-center">
                	<h1 style="color: #00adbf">Packages</h1>
            		<h4 style="color: #00adbf">Choose a package plan that works for you</h4>
            	</div>
            	<br>
  				<div class="row">
    				<div class="col-sm-4">
      					<div class="panel panel-default text-center">
        					<div class="panel-heading">
          						<h1>Basic</h1>
        					</div>
        					<div class="panel-body">
						        <br>
						        <p><i class="fas fa-calendar-alt"></i></strong>  2 Nights/3 Days</p>
						        <p><strong>&#11088;&#11088;&#11088;</strong> Hotel</p>
						        <p><strong>Guide</strong>   &#10060;</p>
						        <p><strong><i class="fas fa-bus	"></i>   &#10060;</strong></p>
	          				</div>
        					<div class="panel-footer">
          						<h3>Rs. 6000</h3>
          						<?php if (isset($_SESSION['username'])) : ?>
          						<a href="admin.php?basicpackage='1'"><button name="basicpackage" class="btn btn-lg">Book Now!</button></a>
          						<?php endif ?>
        					</div>
      					</div>
    				</div>
	    			<div class="col-sm-4">
					    <div class="panel panel-default text-center">
					    	<div class="panel-heading">
					          <h1>Pro</h1>
					        </div>
					        <div class="panel-body">
					        	<br>
					        	<p><strong><i class="fas fa-calendar-alt"></i></strong>  3 Nights/4 Days</p>
					          	<p><strong>&#11088;&#11088;&#11088;&#11088;</strong> Hotel</p>
					          	<p><strong>Guide</strong>   &#10060;</p>
					          	<p><strong><i class="fas fa-bus	"></i>   &#9989;</strong></p>
					        </div>
					        <div class="panel-footer">
					        	<h3>Rs. 8000</h3>
					          	<?php if (isset($_SESSION['username'])) : ?>
					          	<a href="admin.php?propackage='1'"><button name="propackage" class="btn btn-lg">Book Now!</button></a>
					        	<?php endif ?>
					        </div>
					    </div>
					</div>
				   	<div class="col-sm-4">
				      	<div class="panel panel-default text-center">
				        	<div class="panel-heading">
				          		<h1>Premium</h1>
				        	</div>
				        	<div class="panel-body">
				        		<br>
						        <p><strong><i class="fas fa-calendar-alt"></i></strong>  4 Nights/5 Days</p>
						        <p><strong>&#11088;&#11088;&#11088;&#11088;&#11088;</strong> Hotel</p>
						        <p><strong>Guide</strong>   &#9989;</p>
						        <p><strong><i class="fas fa-bus	"></i>   &#9989;</strong></p>
				        	</div>
			        		<div class="panel-footer">
			          			<h3>Rs. 10000</h3> 
			          			<?php if (isset($_SESSION['username'])) : ?>
			          			<a href="admin.php?premiumpackage='1'"><button name="premiumpackage" class="btn btn-lg">Book Now!</button></a>
			        			<?php endif ?>
			        		</div>
			      		</div>
			    	</div>
				</div>
			</div>
		</section>

			<br>
			<div>
				<a href="#ContactUs" class="nav-link"><button type="button" class="btn btn-primary btn-lg btn-block">Customised Package</button></a>
			</div>

		<!--Code for Sharing Section-->
		<section id="Sharings">
			<div class="testimonials">
		    	<div class="testimonial-inner">
		      		<h1 style="color: #00adbf">What our client say about us?</h1>
		      		<div id="rowsd" class="row">
			        	<div id="colsd" class="col">
			          		<div class="testimonial">
			            		<img src="images/kanieloutis.jpeg" alt="">
			            		<div id="names" class="name">Kaniel Outis</div>
				            	<div class="stars">
							        <i class="fas fa-star"></i>
						            <i class="fas fa-star"></i>
						            <i class="fas fa-star"></i>
						            <i class="fas fa-star"></i>
						            <i class="fas fa-star"></i>
			            		</div>
			            		<p>This ujjain tourism website helped me alot in exploring different places of the city, Specially travel advisors did a great job. They gave personal attention to each and every person travelling with me, since it was a group trip!</p>
			          		</div>
			        	</div>
			        
				        <div id="colsd" class="col">
				          	<div class="testimonial">
				            	<img src="images/SaraTancredi.jpg" alt="">
					            <div id="names" class="name">Sara Tancredi</div>
					            <div class="stars">
					              <i class="fas fa-star"></i>
					              <i class="fas fa-star"></i>
					              <i class="fas fa-star"></i>
					              <i class="fas fa-star"></i>
					              <i class="far fa-star"></i>
					        	</div>
			            		<p>At first I thought i have invested in wrong place but you people/guys did a very fantastic job. The hotel was very convenient and I was very amazed after my Ujjain Darshan.</p>
				          	</div>
				        </div>
			        
				        <div id="colsd" class="col">
				          	<div class="testimonial">
				            	<img src="images/lincon.jpg" alt="">
					            <div id="names" class="name">Lincon Burrows</div>
					            <div class="stars">
				    	        	<i class="fas fa-star"></i>
						            <i class="fas fa-star"></i>
						            <i class="fas fa-star"></i>
						            <i class="fas fa-star"></i>
						            <i class="fas fa-star"></i>
						        </div>
					            <p>Your site was recommended by my friend because he had pleasent experience with you. And So am I the process was so hassel free from booking till travelling. Thankyou for a wonderful experience.</p>
					        </div>
			        	</div>
			    	</div>
				</div>
			</div>
		</section>


		<!--Code for About US-->
		<section id="AboutUS">
			<div>
	  			<div class="container py-1">
	    			<div class="row h-100 align-items-center py-5">
	      				<div class="col-lg-6">
	        				<h1 style="color: #004469" class="display-4">About Ujjain Tourism</h1>
	        				<p  class="lead mb-0">We are here to help you in exploring the ancient city UJJAIN. Together we enjoy it. Have a Happy and Safe Journey.</p>
	        				</p>
	      				</div>
	      				<div class="col-lg-6 d-none d-lg-block"><img src="images/icon.png" alt="" class="img-fluid"></div>
	    			</div>
	  			</div>
			</div>
			<!--Code for Why to select us-->
			<div style="background-color: transparent" class="jumbotron text-center">
  				<h1 style="color: #00adbf">Why use a Travel Website</h1>
  				<p >Planning a trip today can be confusing and time consuming. A travel website not only arranges the various modes of transportation,<br> but may also be able to save you money with early booking discounts, special fares, hotel deals and travel advisories. </p>
			</div>
			<div class="container">
  				<div class="row">
					<div class="col-sm-3">
						<img class="img-responsive center-block d-block mx-auto" src="images/Convenience.svg" alt="Travel Advisor Convenience" width="100px" />
    					<br>
						<p style="text-align: center;"><b>Convenience</b></p>
						<p>Instead of sifting through countless websites, guidebooks or post from your friends on social media, you deserve a hassle-free vacation planned by a professional, saving your valuable time.
					</div>

					<div class="col-sm-3">
						<img class="img-responsive center-block d-block mx-auto" src="images/SaveMoney.svg" alt="Travel Advisors Can Save You Money" width="100px" /></p>
						<p style="text-align: center;"><b>Save Money</b></p>
						<p>Travel advisors have exclusive access to special travel fares and discounts, guaranteeing you&#8217;re getting the best value. You want real benefits and a travel advisor can provide that for you.
					</div>


					<div class="col-sm-3">
						<img class="img-responsive center-block d-block mx-auto" src="images/travelAdvisor.svg" alt="Travel Advisor" width="100px" /></p>
						<p style="text-align: center;"><b>Personal Attention</b></p>
						<p>Travel advisors take pride in helping make your trip one-of-a-kind. When using online booking sites, you never know who to contact or where to get guidance from. From planning until you return, you have someone by your side just a phone call or email away.
					</div>


					<div class="col-sm-3">
						<img class="img-responsive center-block d-block mx-auto" src="images/ExpertAdvise.svg" alt="Travel Advisors have Expert Advise" width="100px" /></p>
						<p style="text-align: center;"><b>Expert Advice</b></p>
						<p>Travel advisors are educated travelers who know the world, they will guide you where you want to go. So take advantage of their expertise to help create your dream vacation. Go to places you cannot Google!
					</div>
            	</div>
        	</div>

        	<!--Code for Our Team-->
			<div class="col-md-12 text-center">    
            	<h1 style="color: #00adbf">Our Team</h1>
            </div>
			<div id="team-wrapper">
	         	<div class="team-item">
	            	<img class="member-img" src="images/shivangi.jpg" alt="">
	            	<p class="member-message">Third year Computer Science and Engg, MIT. Entrepreneur, Web Dev enthusiast, Buisness development expert.
	            	</p>
		            <div>
		               <a href="https://instagram.com/shivangi_dargar?igshid=jiukuang6sya" target="_blank" class="social-link"><i class="fab fa-instagram"></i></a>
		               <a href="https://www.linkedin.com/in/shivangi-dargar-82b73b172" target="_blank" class="social-link"><i class="fab fa-linkedin"></i></a>
		               <a href="https://twitter.com/ShivangiDargar?s=09" target="_blank" class="social-link"><i class="fab fa-twitter"></i></a>
		               <i class="fab fa-facebook"></i>
		            </div>
		            <h3 class="member-name">Shivangi Dargar</h3>
		            <p class="designation">Position</p>    
	         	</div>
		        
		        <div class="team-item">
		        	<img class="member-img" src="images/piyush.jpg" alt="">
		            <p class="member-message">Third year Computer Science and Engg, MIT. Entrepreneur, Web Dev enthusiast, Buisness development expert.
		            </p>
		            <div>
		               <a href="https://www.instagram.com/piyushonweb/" target="_blank" class="social-link"><i class="fab fa-instagram"></i></a>
		               <a href="https://www.linkedin.com/in/piyushahir28" target="_blank"class="social-link"><i class="fab fa-linkedin"></i></a>
		               <a href="https://twitter.com/piyushahir28" class="social-link" target="_blank"><i class="fab fa-twitter"></i></a>
		               <a href="https://www.facebook.com/piyushahir280" target="_blank"><i class="fab fa-facebook"></i></a>
		         	</div>
		         	<h3 class="member-name">Piyush Ahir</h3>
		            <p class="designation">Position</p>    
		        </div>
		        
		        <div class="team-item">
	            	<img class="member-img" src="images/priya.jpg" alt="">
	            	<p class="member-message">Third year Computer Science and Engg, MIT. Entrepreneur, Web Dev enthusiast, Buisness development expert.
	            	</p>
		            <div>
		               <i class="fab fa-instagram"></i>
		               <i class="fab fa-linkedin"></i>
		               <a href="https://twitter.com/priyaratnaprke1?s=09" target="_blank" class="social-link"><i class="fab fa-twitter"></i></a>
		               <a href="https://www.facebook.com/priya.ratnaparkhe.1" target="_blank" class="social-link"><i class="fab fa-facebook"></i></a>
		            </div>
	            	<h3 class="member-name">Priya Ratnaparkhe</h3>
	            	<p class="designation">Position</p>    
	         	</div>
	      	</div>
      	</section>

		<!--Here the code of Contact US (Bat karo Humse)-->
		<section  id="ContactUs">
    		<h2 class="h1-responsive font-weight-bold text-center my-4" style="color: #00adbf" >Contact us</h2>
    		<p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        	a matter of hours to help you.</p>

		   <div class="row">
		      <div class="col-md-5 text-center">
		         <ul class="list-unstyled mb-0">
		            <li><i class="fas fa-map-marker-alt fa-2x"></i>
	                  <p>MIT Ujjain, Behind Air Strip, Karcha Road, 
	                     Ujjain, Madhya Pradesh - 456664</p>
		            </li>
		            <li><i class="fas fa-phone mt-4 fa-2x"></i>
		               <p>+91 82258-63117</p>
		            </li>
					   <li><i class="fas fa-envelope mt-4 fa-2x"></i>
		           		<p>contact@ujjaintourism.com</p>
		            </li>
		         </ul>
		      </div>
			   <div class="col-md-6 mb-md-0 mb-5">
			      	<form action="contactus.php" id="contact-form" name="contact-form" method="post">
				    	<!--Grid row-->
			        	<div class="row">
		            	<!--Grid column-->
				         	<div class="col-md-6">
				               <div class="md-form mb-0">
				                  <input type="text" name="name" id="name" required class="form-control">
				                  <label for="name" class="">Your name</label>
				               </div>
				            </div>
				            <!--Grid column-->
				            <div class="col-md-6">
				               <div class="md-form mb-0">
				                  <input type="email" id="email" name="email" class="form-control">
				                  <label for="email" class="">Your email</label>
				               </div>
				            </div>
			        	</div>
				        <div class="row">
				            <div class="col-md-6">
				               <div class="md-form mb-0">
				                  <input type="text" id="number" name="number" required pattern="[0-9]{10}" class="form-control">
				                  <label for="subject" class="">Your Contact Number</label>
				               </div>
				            </div>
				        </div>
				        <div class="row">
				           <div class="col-md-12">
		 				         <div class="md-form">
				                  <textarea id='message' name='message' desciption='message' rows="2" class="form-control md-textarea"></textarea>
				                  <label for="message">Your message</label>
				               </div>
				            </div>
				        </div>
						<div class="text-center text-md-left">
							<input name="contactus" type="submit" value="Send" class="btns solid"/>
				      	</div>
				   	</form>
			      	<div class="status"></div>
			   	</div>
			</div>
		</section>

		<!--Here is the Footer Code design using pure Bootstrap by piyushonweb-->
		<footer  style="background-color: #333A40; bottom: 0; width: 100%; margin-top: 0px;">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 text-center text-md-left ">
                    
                    <div class="py-0">
                        <h3 class="my-4 text-white">About<span class="mx-2">Ujjain Tourism</span></h3>

                        <p class="footer-links font-weight-bold">
                            <a class="text-white" href="#">Home</a>
                            |
                            <a class="text-white" href="#Packages">Packages</a>
                            |
                            <a class="text-white" href="#AboutUS">About</a>
                            |
                            <a class="text-white" href="#ContactUs">Contact</a>
                        </p>
                        <p class="text-light py-4 mb-4">&copy;2020 Ujjain Tourism All Rights Reserved.</p>
                    </div>
                </div>
                
                <div class="col-md-4 text-white text-center text-md-left ">
                    <div class="py-2 my-4">
                        <div>
                            <p class="text-white"> <i class="fa fa-map-marker mx-2 "></i>
                                    MIT Ujjain,
                                   Behind Air Strip, Karcha Road,
                                  Ujjain, Madhya Pradesh - 456664</p>
                        </div>

                        <div> 
                            <p><i class="fa fa-phone  mx-2 "></i> +91 82258-63117</p>
                        </div>
                        <div>
                            <p><i class="fas fa-envelope  mx-2"></i><a href="mailto:support@ujjaintourism.com">support@ujjaintourism.com</a></p>
                        </div>  
                    </div>  
                </div>
                
                <div class="col-md-4 text-white my-4 text-center text-md-left ">
                    <span class=" font-weight-bold ">About Ujjain Tourism</span>
					<p class=" my-2" >We are here to help you in exploring the ancient city UJJAIN. Together we enjoy it. Have a Happy and Safe Journey.</p>
                    <div class="py-2">
                        <a href="#"><i class="fab fa-facebook fa-2x text-primary mx-3"></i></a>
                        <a href="#"><i class="fab fa-google-plus fa-2x text-danger mx-3"></i></a>
                        <a href="#"><i class="fab fa-twitter fa-2x text-info mx-3"></i></a>
                        <a href="#"><i class="fab fa-youtube fa-2x text-danger mx-3"></i></a>
                        <a href="#" title="To Top">
    					<span class="fa fa-angle-double-up"></span></a>
                    </div>
                </div>
            </div>  
        </div>
     </footer>
		<!--Code to link the JavaScript File-->
		<script type="text/javascript" src="myscript.js"></script>
	</body>
</html>