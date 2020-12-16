<?php

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: index.html');
  }
  if (isset($_GET['home'])) {
    
    header('location: admin.php');
  }
  if (isset($_GET['gallery'])) {
    
    header('location: gallery.php');
  }
  if (isset($_GET['package'])) {
    
    header('location: admin.php#Packages');
  }
  if (isset($_GET['sharing'])) {
    
    header('location: admin.php#Sharings');
  }
  if (isset($_GET['aboutus'])) {
    
    header('location: admin.php#AboutUs');
  }
  if (isset($_GET['contactus'])) {
    
    header('location: admin.php#ContactUs');
  }


?>
<?php include('server.php') ?>
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

      <!--The given link is for CSS(External)-->
      <link rel="stylesheet" type="text/css" href="mycss.css">
  </head>
  <body class="bg-light">

    <nav id="navbar_top" class="navbar navbar-expand-lg bg-white navbar-light fixed-top">
        <a href="#" class="navbar-brand"><img src="images/uj3.png" alt="Ujjain Tourism" width="270px"></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#herewecollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="herewecollapse">
          <ul class="nav navbar-nav">
            <?php if (isset($_SESSION['username'])) : ?>
            <li class="nav-item"><a href="admin.php?home='1'" class="nav-link active">Home</a></li>
            <li class="nav-item"><a href="admin.php?gallery='1'" class="nav-link">Gallery</a></li>
            <li class="nav-item"><a href="admin.php?package='1'" class="nav-link">Packages</a></li>
                <li class="nav-item"><a href="admin.php?sharing='1'" class="nav-link">Sharings</a></li>
                <li class="nav-item"><a href="admin.php?aboutus='1'" class="nav-link">About-Us</a></li>
                <li class="nav-item"><a href="admin.php?contactus='1'" class="nav-link">Contact-Us</a></li>
              </ul>
              <ul class="navbar-nav ml-auto">
                <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user-check"></i><strong><?php echo $_SESSION['username']  ?></strong></a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item"><i class="far fa-id-badge"></i>&nbsp;&nbsp;Profile</a>
                            <a href="#" class="dropdown-item"><i class="fas fa-cog"></i>&nbsp;&nbsp;Setting</a>
                            <a href="admin.php?logout='1'" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Logout</a>
                        </div>
                      <?php endif ?>
                    </div>
              </ul>
        </div>
      </nav>
      <br><br>

    
   
  
    
<div class="container" id="mypayment">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="uj3.png" alt="" width="300px">
      <h2>Package Checkout</h2>
      <p class="lead">Below is the checkout form of your selected package, please enter the valid details, if you get any query please mail us at - support@ujjaintourism.com . Have a safe and happy journey!</p>
    </div>

    <div class="row g-3">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Your cart</span>
          <span class="badge bg-secondary rounded-pill">2</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <?php if (isset($_SESSION['username'])) : ?>
              <h6 class="my-0">Package Name</h6>
              <small class="text-muted"><?php echo $_SESSION['packageName']  ?></small>
            </div>
            <span class="text-muted">Rs. <?php echo $_SESSION['price']  ?></span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <label for="country" class="form-label">Persons</label>
              <select name="totalPersons" class="form-control" onchange="fun(this.value)">
                <option value="1">Choose...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <label for="country" class="form-label">Hotel</label>
              <select>
                <option value="1">Choose...</option>
                <option value="1">Hotel Kalpana Palace</option>
                <option value="2">Hotel Imperial</option>
                <option value="3">Hotel Abika Elite</option>
                <option value="4">Hotel Midland</option>
                <option value="5">Anjushree Hotel</option>
                <option value="6">Rudraksh Club and Resorts</option>
                <option value="7">Hotel Satyug</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">Promo code</h6>
              <small>NONE</small>
            </div>
            <span class="text-success">Rs. 0</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (INR)</span>
            <strong>Rs. <input type="" name="totalPrice" id="totalPrice" readonly=""></strong>
          </li>
        </ul>
        

        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </form>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Explore Ujjain!</h4>
        <form action="payment.php" method="post" class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input name="firstname" type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input name="lastname" type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Username</label>
              <div class="input-group">
                <span class="input-group-text">@</span>
                <input name="uname" type="text" class="form-control" id="username" placeholder="Username" required>
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
              <input name="email" type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input name="address" type="text" class="form-control" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
              <input name="address2" type="text" class="form-control" id="address2" placeholder="Apartment or suite">
            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">Country</label>
              <select name="country" class="form-control" id="country" required>
                <option value="">Choose...</option>
                <option>India</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">State</label>
              <select name="state" class="form-control" id="state" required>
                <option value="">Choose...</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Postal Code</label>
              <input name="postalcode" type="text" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Pick me up from Railway Station/Airpot/BUS Stop.</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Save this information for next time</label>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Payment</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Credit card</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Debit card</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Name on card</label>
              <input name="cardname" type="text" class="form-control" id="cc-name" placeholder="" required>
              <small class="text-muted">Full name as displayed on card</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Card number</label>
              <input name="cardnumber" type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Expiration</label>
              <input name="dateoncard" type="text" class="form-control" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input name="cardcvv" type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button name="paymentcheckout" class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
        </form>
      </div>
    </div>
  </main>
</div>
<br><br>
  <footer  style="background-color: #333A40; bottom: 0; width: 100%; margin-top: 0px;">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 text-center text-md-left ">
                    
                    <div class="py-0">
                        <h3 class="my-4 text-white">About<span class="mx-2">Ujjain Tourism</span></h3>

                        <p class="footer-links font-weight-bold">
                            <a class="text-white" href="admin.php?home='1'">Home</a>
                            |
                            <a class="text-white" href="admin.php?package='1'">Packages</a>
                            |
                            <a class="text-white" href="admin.php?aboutus='1'">About</a>
                            |
                            <a class="text-white" href="admin.php?contactus='1'">Contact</a>
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

     <?php endif ?>

    

      <script>
        function fun(val){
          document.getElementById("totalPrice").value = val * <?php echo $_SESSION['price']?>;
        }

        // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
      </script>
  </body>
</html>
