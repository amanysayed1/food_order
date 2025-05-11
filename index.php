<?php
require_once 'connection.php';
$searchResults = [];
if (isset($_GET['query'])) {
    $search = trim($_GET['query']);
    $sql = "SELECT * FROM tbl_food WHERE title LIKE :search OR description LIKE :search";
    $stmt = $conn->prepare($sql);
    $searchParam = "%$search%";
    $stmt->bindParam(':search', $searchParam, PDO::PARAM_STR);
    $stmt->execute();
    $searchResults = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- Navbar Section  -->
    
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
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
                   <div class="clearfix"></div>
        </div>
    </section>
   

    <!-- food search Section -->
    <section class="food-search text-center">
        <div class="container">

            <h1 class="content">Welcome To <span class="primary-text">Food Lover</span> Restaurant</h1>
            <p>Here you can find the most delecious food in the world...</p>
            <form action="#food-menu" method="get" >
                
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
                
            </form>

        </div>
    </section>
    <main>
        <section id="about">
            <div class="container">
                <div class="title">
                    <h2> Food Lover History</h2>
                    <p>More than +25 years of experience</p>
                </div>
                <div class="about-content">
                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quis doloribus impedit expedita sed voluptates obcaecati dolorem animi! Laudantium odio, ullam vitae voluptatibus eveniet quae tenetur distinctio reprehenderit assumenda consequuntur?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quod unde veritatis eveniet, ad tempora nisi natus quo corrupti cum? Incidunt quam vero maiores quisquam inventore qui deserunt natus quas.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quod unde veritatis eveniet, ad tempora nisi natus quo corrupti cum? Incidunt quam vero maiores quisquam inventore qui deserunt natus quas.</p>
                        <a href="#" class="btn btn-primary"> LEARN MORE</a>
                    </div>
                    <img src="images/fried.jpeg" alt="pizza">
                </div>
            </div>
        </section>
    </main>
    <!--Offers-->
    <section id="offers">
        <div class="container">
            <div class="title">
                    <h2>Our Special Offers</h2>
                    <p>More than +25 years of experience</p>
            </div>
            <div class="offer-items">
                <div>
                    <img src="images/offer1.png" alt="pasta">
                    <div>
                        <h3>Pasta</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, nisi.</p>
                        <p><del>$2.3</del><span class="primary-text">$1.00</span></p>
                    </div>
                </div>
                <div>
                    <img src="images/pizza.png" alt="Pizza">
                    <div>
                        <h3>Pepperoni Pizza</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, nisi.</p>
                        <p><del>$4.00</del><span class="primary-text">$2.00</span></p>
                    </div>
                </div>
                <div>
                    <img src="images/deliciousburger.png" alt="smokey burger">
                    <div>
                        <h3>Smokey Burger</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, nisi.</p>
                        <p><del>$4.00</del><span class="primary-text">$2.00</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section id="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

            <a href="#piz1">
               <div class="box-3 float-container">
                    <img src="images/DeliciousPizza.jpeg" alt="Pizza" class="img-responsive img-curve">
                    <h3 class="float-text text-black">Pizza</h3>
               </div>
            </a>

            <a href="#burg1">
                <div class="box-3 float-container">
                   <img src="images/chicken.jpeg" alt="Burger" class="img-responsive img-curve">
                   <h3 class="float-text text-black">Burger</h3>
                </div>
            </a>

            <a href="#pas1">
                <div class="box-3 float-container">
                   <img src="images/pasta.jpeg" alt="pasta" class="img-responsive img-curve">
                    <h3 class="float-text text-black">Pasta</h3>
                </div>
            </a>

            <a href="#st1">
                <div class="box-3 float-container">
                    <img src="images/stea.jpeg" alt="Steak" class="img-responsive img-curve">
                    <h3 class="float-text text-black">Steak</h3>
                </div>
            </a>
                    <div class="clearfix"></div>
        </div>
    </section>

    <!-- food menu -->
    <section id="food-menu">
        <div class="container">
            <h2 class="text-center" id="f0f0f0">Our Special Menu</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/pizza.jpeg" alt="Pepperoni Pizza" class="img-responsive img-curve" class="monaa" width="80px">
                </div>

                <div class="food-menu-desc">
                    <h4 id="piz1">Pepperoni Pizza</h4>
                    <p class="food-price">$2.3</p>
                    <p>with Italian Sauce, Chicken, and organic vegetables.</p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                    
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/burger.jpeg" alt="burger" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4 id="burg1">Smoky Burger</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, beef, and organic vegetables.
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/pasta.jpeg" alt="pasta" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4 id="pas1">Pasta</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organic vegetables.
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/steak.jpeg" alt="meat" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4 id="st1">Steak</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Meat, and organic vegetables.
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/fries.jpeg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Fries</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Cheese Sauce, and organic vegetables.
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/crispy.jpeg" alt="friedchicken" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Fried Chicken</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organic vegetables.
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>


            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="#f0f0f0">See All Foods</a>
        </p>
    </section>

    <!-- footer Section  -->
     <footer id="footer">
        <p>Copyright &copy; 2025 All rights reserved | Made by Developer <b><a href="https://github.com/amanysayed1" 
            target="_blank">Amany Sayed</a></b> </p>
     </footer>
   

</body>
</html>