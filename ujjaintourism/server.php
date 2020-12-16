<?php
  session_start();

  //initialise variable

  $username = "";
  $password = "";

  $errors = array();

  //connect to database
  $db = mysqli_connect('localhost','id15492053_pokemon','Rakesh@63117','id15492053_mitut') or die("Could not connect to databases");

  //User Registration
  if(isset($_POST['sign_user'])){
  //Register Users
  $username = mysqli_real_escape_string($db, $_POST['uname']);
  $contact = mysqli_real_escape_string($db, $_POST['number']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $dob = mysqli_real_escape_string($db, $_POST['dob']);
  $pwd = mysqli_real_escape_string($db, $_POST['psw']);

  //form validations
  if(empty($username))array_push($errors, "username is required");
  if(empty($contact))array_push($errors, "contact number is required");
  if(empty($email))array_push($errors, "E-mail is required");
  if(empty($dob))array_push($errors, "DOB is required");
  if(empty($pwd))array_push($errors, "password is required");

  //Register the user if no error

  if (count($errors) == 0) {

    $password = md5($pwd);
    $query = "INSERT INTO user(username,contact,email,dob,password) VALUES('$username','$contact','$email','$dob','$password')";
    mysqli_query($db, $query);

    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";

    header('location: admin.php');
  }
  }

  //Login User

  if(isset($_POST['login_user'])){
    
    $username = mysqli_real_escape_string($db, $_POST['uname']);
    $pwd = mysqli_real_escape_string($db, $_POST['psw']);

    if(empty($username))array_push($errors, "username is required");
    if(empty($pwd))array_push($errors, "password is required");

    if (count($errors) == 0) {

      $password = md5($pwd);
      $query = "SELECT username, password FROM user WHERE username='$username' AND password='$password'";
      $results = mysqli_query($db, $query);

      if(mysqli_num_rows($results)) {
        
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Logged in Sucessfully";
        
        header('location: admin.php');
      }else{
        array_push($errors, "Wrong username and password");
      }
    }
  }

  //Payment Checkout
  if(isset($_POST['paymentcheckout'])){
  
  $firstName = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastName = mysqli_real_escape_string($db, $_POST['lastname']);
  $username = mysqli_real_escape_string($db, $_POST['uname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $country = mysqli_real_escape_string($db, $_POST['country']);
  $state = mysqli_real_escape_string($db, $_POST['state']);
  $postalcode = mysqli_real_escape_string($db, $_POST['postalcode']);
  $nameOnCard = mysqli_real_escape_string($db, $_POST['cardname']);
  $cardNumber = mysqli_real_escape_string($db, $_POST['cardnumber']);
  $dateOnCard = mysqli_real_escape_string($db, $_POST['dateoncard']);
  $cvv = mysqli_real_escape_string($db, $_POST['cardcvv']);

  $query = "INSERT INTO package(first_name,last_name,username,email,address,country,state,postal_code,name_on_card,card_number,date_on_card,cvv) VALUES('$firstName','$lastName','$username','$email','$address','$country','$state','$postalcode','$nameOnCard','$cardNumber','$dateOnCard','$cvv')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $_SESSION['username'];
    $_SESSION['success'] = "You are now logged in";

    header('location: admin.php');
  }

  //Contact us
  if(isset($_POST['contactus'])){
  //Register Users
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $contact = mysqli_real_escape_string($db, $_POST['number']);
  $message = mysqli_real_escape_string($db, $_POST['message']);
  
  $query = "INSERT INTO contactus(name,email,contact,message) VALUES('$name','$email','$contact','$message')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $_SESSION['username'];
    $_SESSION['success'] = "You are now logged in";

    header('location: admin.php');
  }
?>