//Function to change the color of navbar when we scroll
$(document).ready(function(){
  $(window).scroll(function(){
    var scroll = $(window).scrollTop();
    if (scroll > 300) {
      $("#navbar_top").css("background" , "white");
      $("#navbar_top").css("box-shadow", "0 2px 2px -2px rgba(0,0,0,.2)");
    }

    else{
      $("#navbar_top").css("background" , "transparent");   
    }
  })
})

//JS for navbar toggle whwn screen size is small
$('.nav a').on('click', function(){
    $('.btn-navbar').click();
    $('.navbar-toggle').click();
    $('.navbar-toggler').click();
});

//Function to validate form
function validateForm(frm){
  var name=frm.name.value.trim();
  if(name.length==0){
    alert("Name Required");
    frm.name.focus();
    return false;
  }
  var e=0;
  var v='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz .';
  while(e<name.length){
    if(v.indexOf(name.charAt(e))==-1){
      alert("Only Alphabets Allowed");
      frm.name.focus();
      return false;
    }
    e++;
  }
  var email=frm.email.value.trim();
  if(email.length==0){
    alert("Email Required");
    frm.email.focus();
    return false;
  }
  var number=frm.number.value.trim();
  if(number.length==0 ){
    alert("Contact Number Required");
    frm.number.focus();
    return false;
  }
  if(number.length!=10 ){
    alert("Invalid Contact Number");
    frm.number.focus();
    return false;
  }
  var e=0;
  var v='0123456789';
  while(e<number.length){
    if(v.indexOf(number.charAt(e))==-1){
      alert("Invalid Contact Number");
      frm.number.focus();
      return false;
    }
    e++;
  }
  var message=frm.message.value.trim();
  if(message.length==0){
    alert("Message Required");
    frm.message.focus();
    return false;
  }
  return true;
}

//Function for smooth scrolling
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

   // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    } // End if
  });
})