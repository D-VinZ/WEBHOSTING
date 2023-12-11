<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>
<?php

$conn = mysqli_connect("localhost", "id21649923_admdatabase", "@Furbase01", "id21649923_furbase01");

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $address = mysqli_real_escape_string($conn, $_POST['address']);
   $province = mysqli_real_escape_string($conn, $_POST['province']);
   $street = mysqli_real_escape_string($conn, $_POST['street']);
   $municipal = mysqli_real_escape_string($conn, $_POST['municipal']);

   $insert = mysqli_query($conn, "INSERT INTO `payment_form`(name, email, number,address, province , street, municipal) VALUES('$name','$email','$number','$address','$province','$street','$municipal')") or die('query failed');

   if ($insert) {
    $message[] = 'Appointment sent successfully!';
    echo '<script>alert("Checkout successful!"); window.location.href = "checkout.php";</script>';
    exit();
   }else{
      $message[] = 'Appointment failed';
   }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Fur Solution</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="mainstyle.css">
</head>
<body>
   



<!-- contact section starts  -->


<section class="contact" id="contact">
  <a href="home.php#shop">
  
  <button style="background-color: black; color: white; padding: 10px 15px; border: none; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; cursor: pointer;">
    Back
  </button>
</a>

   <h1 class="heading">Checkout</h1>

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
      
      <span>Name :</span>
      <input type="text" name="name" placeholder="Enter your Name" class="box" required>
      <span>E/Gmail :</span>
      <input type="email" name="email" placeholder="Enter your Email" class="box" required>
      <span>Phone Number :</span>
      <input type="number" name="number" placeholder="Enter your Phone Number" class="box" required>
      <span> Cash on Delivery Full Address: </span>
      <input type="text" name="address" placeholder="Enter your full address" class="box">

   
      <span>Province:</span>

      <select id="municipal" name="province" aria-placeholder="Choose PROVINCE" class="box">

		<option>Pampanga</option>	
        				
			</select>




      			
      <span>Municipality</span>
         
		<select id="municipal" name="municipal" aria-placeholder="Choose Municipality" class="box">
		
        <option>Magalang</option>					
		
    </select>
      

     <span>Street</span>

    	<select id="street" name="street" aria-placeholder="Choose Street" class="box">
			
					<option>Dolores</option>
					<option>San Agustin</option>
					<option>San Miguel</option>
					<option>San Nicolas</option>

			</select>
	
      
						
				
      <input type="submit" value="Place Order" name="submit" class="link-btn1">
    
 
      
   </form>  
   
     

</section>
<!-- contact section ends -->

<!-- custom js file link  -->
<script src="script.js"></script>




</body>
</html>