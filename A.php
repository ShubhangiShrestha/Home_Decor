<?php 
if(isset($_POST['submit'])){
    $to = "sahayrina10@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<head>
<title>Contact Home Decorers</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home Decorer Website</title>
<script src="https://code.jquery.com/jquery-2.1.3.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="bootstrap.min.js">
<link rel="stylesheet" href="my.css">
</head>
<body style="background-color:snow;">
    
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
<button class="navbar-toggler" data-toggle="collapse" data-target="#collapsable_target">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsable_target">
<a class="navbar-brand"></a>
<span class="navbar-text" style="font-size:25px"> The Home Decorers</span>
<ul class="navbar-nav">
 <li class="nav-item"><a class="nav-link" href="#"></a></li>
 <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
 <li class="nav-item"><a class="nav-link" href="Room_decoration.html">Room Decor</a></li>
<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown-target" href="#">Accessories</a>
   <div class="dropdown-menu" aria-labelledby="dropdown-target">
   <a class="dropdown-item" href="Vases_Plants.html">Vases and Plants</a>
   <div class="dropdown-divider"></div>
   <a class="dropdown-item" href="Kitchen
   .html">Kitchen appliances</a>
    <div class="dropdown-divider"></div>
   <a class="dropdown-item" href="Artistic.html">Artistic Furniture</a>
   </div>
   </li>
 <li class="nav-item"><a class="nav-link" href="3dtiles.html">3-D Tiles</a></li>
 <li class="nav-item"><a class="nav-link" href="A.php">Contact Us</a></li>
</ul>
</div>
</nav>
<div class="container" style="text-align:center">
    <img src="company_contact.jpg" class="img-circle;">
</div>
<div class="container" style="background-color:darkblue;color:white;text-align:center;margin-top:30px;font-size:30px">
    Contact Us
</div>
<div class="container" style=" margin-bottom:30px; background-color:aliceblue;border:1px solid black;box-shadow:2px 2px 2px #ddd;">
    <div class="row">
        <div class="col-lg-12">
<form action="" method="post">
<h5 style="padding-top:12px">First Name: <input type="text" name="first_name"></h5><br>
<h5>Last Name: <input type="text" name="last_name"></h5><br>
<h5>Email: <input type="text" name="email"></h5><br>
<h5>Message:<br><textarea name="message"></textarea></h5><br>
<input type="submit" name="submit" class="btn btn-success"value="Submit">
</form>
<div class="text-center">
<i class="fa fa-envelope" style="text-align:center;font-size:60px;">
</i>
</div>
</div>
</div>
</div>

<footer>
<div class="footer-top">
 <div class="container">
<div class="row" style="margin-top:20px; background-color:black;">
 <div class="col-lg-6 segment-one">
  <h2 style="color:white;">About us</h2>
  <p style="color:white;">Interior design is the art and science of enhancing the interior of a building to achieve a healthier and more aesthetically pleasing environment for the people using the space. An interior designer is someone who plans, researches, coordinates, and manages such enhancement projects. </p>
  </div>
  
 <div class="col-lg-6 segment-two">
 <h2 style="color:white;">Contact</h2>
 <span class="fas fa-map-marker" style="color:white;font-size:25px"></span>
 <span class="text" style="color:white; font-size:20px;">Rospa Tower</span><br>
 <span class="fas fa-phone-alt" style="color:white;font-size:25px"></span>
 <span class="text" style="color:white; font-size:20px;">+91-6204747060</span><br>
 <span class="fas fa-envelope" style="color:white;font-size:25px"></span>
 <span class="text" style="color:white; font-size:20px;">shubhangish38@gmail.com</span>
 </div>
 </div>
</div>
</div>
</footer>

<div class="container" style="background-color:black;">
<div class="row" >
 <div class="col-xs-3">
<a href="https://www.facebook.com/shubhangi.shrestha" class="fa fa-facebook"></a>
</div>
 <div class="col-xs-3"> 
<a href="https://instagram.com/shubhangishrestha" class="fa fa-instagram"></a>
</div>
 <div class="col-xs-3 ">
<a href="https://www.linkedin.com/in/shubhangi-shrestha-3718911aa" class="fa fa-linkedin"></a>
</div>
 </div>
 

</body>
</html>