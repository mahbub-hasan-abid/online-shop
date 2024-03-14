<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>orders</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>your orders</h3>
   <p> <a href="home.php">home</a> / orders </p>
</div>

<section class="placed-orders">

   <h1 class="title">placed orders</h1>

   <div class="box-container">

      <?php
         $order_query = mysqli_query($conn, "SELECT * FROM `orders` WHERE user_id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($order_query) > 0){
            while($fetch_orders = mysqli_fetch_assoc($order_query)){
      ?>
      <div class="col-xl-4">
                              <form method="post" name="pay_now" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
                              <input type="hidden" name="business" value="sb-cwe0i29548039@business.example.com">
                              <input type="hidden" name="item_name" value="<?php echo $fetch_orders['placed_on']; ?>">
                              <input type="hidden" name="item_number" value="<?php echo $fetch_orders['number']; ?>">
                              <input type="hidden" name="amount" value="<?php echo $fetch_orders['total_price']; ?>">
                              <input type="hidden" name="currency_code" value="USD">
                              <input type="hidden" name="no_shipping" value="1">
                              <input type="hidden" name="cmd" value="_xclick">
                              <input type="hidden" name="return"            value="https://mahbubhasanabid.study/orders.php">
                              <input type="hidden" name="cancel_return" value="https://mahbubhasanabid.study/orders.php">
      <div class="box">
         <p> placed on : <span><?php echo $fetch_orders['placed_on']; ?></span> </p>
         <p> name : <span><?php echo $fetch_orders['name']; ?></span> </p>
         <p> number : <span><?php echo $fetch_orders['number']; ?></span> </p>
         <p> email : <span><?php echo $fetch_orders['email']; ?></span> </p>
         <p> address : <span><?php echo $fetch_orders['address']; ?></span> </p>
         <p> payment method : <span><?php echo $fetch_orders['method']; ?></span> </p>
         <p> your orders : <span><?php echo $fetch_orders['total_products']; ?></span> </p>
         <p> total price : <span>$<?php echo $fetch_orders['total_price']; ?>/-</span> </p>
         <p> payment status : <span style="color:<?php if($fetch_orders['payment_status'] == 'pending'){ echo 'red'; }else{ echo 'green'; } ?>;"><?php echo $fetch_orders['payment_status']; ?></span> </p>

         <form name="pdf_gen" action="print.php" method="post">
            <input type="hidden" value="'.$id.'" name="id">
            <!-- <input type="submit" class="btn" value="Download invoice"> -->
            <button type="submit" name="pay_now" class="btn btn-primary">Pay Now</button>
         </form>
        
         <a href="print.php?id=<?php echo $fetch_orders['id']; ?>" class="btn btn-primary">Download Invoice</a>


       
      </div>

</div>
      <?php
       }
      }else{
         echo '<p class="empty">no orders placed yet!</p>';
      }
      ?>
   </div>

</section>








<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>