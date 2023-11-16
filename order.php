<?php
	@$name = $_POST['name'];
	@$food = $_POST['food'];
	@$specificf = $_POST['specificf'];
	@$address = $_POST['address'];
   @$number = $_POST['number'];
	@$many = $_POST['many'];
   @$date = $_POST['date'];

	// Database connection
	$conn = new mysqli('localhost','root','','testt');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into bookk(name, food, specificf, address, number, many, date) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssiss", $name, $food, $specificf, $address, $number, $many, $date);
		$execval = $stmt->execute();
		echo $execval;
		echo "order successfull...";
		$stmt->close();
		$conn->close();
	}

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive hospital website design </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link  rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->



<section class="order" id="order">

   <div class="heading">
      <span>order now</span>
      <h3>fast home delivery</h3>
   </div>

   <form action="order.php" method="post">
      <div class="box-container">
         <div class="box">
            <div class="inputBox">
               <span>full name</span>
               <input type="text" name="name" id="name" placeholder="enter your name">
            </div>
            <div class="inputBox">
               <span>food name</span>
               <input type="food" name="food" id="food" placeholder="food you want">
            </div>
            <div class="inputBox">
               <span>order details</span>
               <input type="specificf" name="specificf" id="specificf" placeholder="specifics with food">
            </div>
            <div class="inputBox">
               <span>your address</span>
               <textarea name="address" placeholder="enter your address" id="address" cols="30" rows="10"></textarea>
            </div>
         </div>
         <div class="box">
            <div class="inputBox">
               <span>number</span>
               <input type="number" name="number" id="number" placeholder="enter your number">
            </div>
            <div class="inputBox">
               <span>how much</span>
               <input type="many" name="many" id="many" placeholder="how many you want">
            </div>
            <div class="inputBox">
               <span>date</span>
               <input type="datetime-local"  name="date" id="date" placeholder="date">
               
            </div>
            <div class="inputBox">
               <span>our address</span>
               <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59469.28193502025!2d76.18299468787094!3d21.317727885503565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd832de63ee1613%3A0xe72164fedc061d8b!2sBurhanpur%2C%20Madhya%20Pradesh%20450331!5e0!3m2!1sen!2sin!4v1667641944685!5m2!1sen!2sin"  allowfullscreen="" loading="lazy"></iframe>
            </div>
         </div>
      </div>
      <input type="submit" value="order now" class="btn">
   </form>
   
</section>