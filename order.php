<?php
   require_once 'connection.php';

   if($_SERVER["REQUEST_METHOD"] == "POST"){
    $title = "Pepperoni Pizza"; 
    $price = 2.3; 
    $qty = $_POST['qty'];
    $full_name = $_POST['full-name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];

    $total = $price * $qty;

    $order_date = date("Y-m-d H:i:s");

    $status = "Ordered";

    $sql = "INSERT INTO tbl_order (title, price, quantity, total, order_date, status, customer_name, customer_contact, customer_address)
            VALUES ('$title', '$price', '$qty', '$total', '$order_date', '$status', '$full_name', '$contact', '$address')";

    if(mysqli_query($conn, $sql)){
        echo "<div style='color: green; text-align:center;'>Your Order Confirmed. On the Way </div>";
    } else {
        echo "<div style='color: red; text-align:center;'>Rong: " . mysqli_error($conn) . "</div>";
    }
   }

    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo"><img src="images/logo.jpeg" alt="Restaurant Logo" class="img-responsive"></a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#offers">Offers</a></li>
                    <li><a href="#categories">Categories</a></li>
                    <li><a href="#food-menu">Menu</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
                   <div class="clearfix"></div>
        </div>
    </section>
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white" >Fill this form to confirm your order.</h2>

            
           <form action="order.php" method="POST" class="order">
                <div class="order-flex">
                    <div class="order-food">
                        <fieldset>
                                <legend>Selected Food</legend>
                                <div class="food-menu-img">
                                    <img src="images/pizza.jpeg" alt="Pepperoni Pizza" class="img-responsive img-curve monaa" width="80px">
                                </div>
                           <div class="food-menu-desc">
                                <h3>Pepperoni Pizza</h3>
                                <p class="food-price">$2.3</p>
                                <div class="order-label">Quantity</div>
                                <input type="number" name="qty" class="input-responsive" value="1" required>
                            </div>
                      </fieldset>
                 </div>
                    
                   <div class="order-details">
                        <fieldset>
                            <legend>Delivery Details</legend>
                            <div class="order-label">Full Name</div>
                            <input type="text" name="full-name" placeholder="" class="input-responsive" required>
                            <div class="order-label">Phone Number</div>
                            <input type="tel" name="contact" placeholder="" class="input-responsive" required>
                            <div class="order-label">Email</div>
                            <input type="email" name="email" placeholder="" class="input-responsive" required>
                            <div class="order-label">Address</div>
                            <textarea name="address" rows="10" placeholder="" class="input-responsive" required></textarea>
                            <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                       </fieldset>
                    </div>
                </div>
           </form>
        </div>
    </section>

        </div>
    </section>
     <!-- footer Section  -->
     <footer id="footer">
        <p>Copyright &copy; 2025 All rights reserved | Made by Developer <b><a href="https://github.com/amanysayed1" 
            target="_blank">Amany Sayed</a></b> </p>
     </footer>
   
    
</body>
</html>