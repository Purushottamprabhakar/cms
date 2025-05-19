<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if not logged in
    header("Location: index.php");
    exit();
}

// Fetch the username from the session
$username = $_SESSION['username'];
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Management Website</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
    <style>
        .user-menu {
            position: relative;
            display: inline-block;
        }

        .logout {
            display: none;
            position: absolute;
            background-color: white;
            border: 1px solid #ccc;
            padding: 10px;
            z-index: 1;
        }

        .user-menu:hover .logout {
            display: block;
        }
        .Dishes .box-container .box img{
    width: 100%;
}
.Menu .box-container .box .image{
    width: 100%;
}
    </style>
</head>

<body>

    <header>
        <a href="#" class="logo"><i class="fas fa-utensils"></i>Cafe.</a>
        <nav class="navbar">
            <a class="active" href="#Home">Home</a>
            <a href="#Dishes">Dishes</a>
            <a href="#About">About</a>
            <a href="#Menu">Menu</a>
            <a href="#Review">Review</a>
            <!-- <a href="#Order">Order</a> -->
            <div class="user-menu">
                <a><?php echo $username; ?></a>
                <div class="logout">
                    <a href="logout.php">Logout</a> <!-- Redirect to a logout page -->
                </div>
            </div>


        </nav>
        </nav>
        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <!-- <a href="#" class="fas fa-heart"></a> -->
            <a href="#Order" class="fas fa-shopping-cart"></a>
        </div>
    </header>

    <form action="" id="search-form">
        <input type="search" placeholder="search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>

    <!-- Home section starts -->

    <section class="Home" id="Home">
        <div class="swiper-container Home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Our Special Dish</span>
                        <h3>Spicy Noodles</h3>
                        <p>Taste the Difference, Feel the Love.</p>
                        <a href="#Order" class="btn">Order Now</a>
                    </div>
                    <div class="image">
                        <img src="./images/image11.jpg" alt="Spicy Noodles">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Our Special Dish</span>
                        <h3>Pizza</h3>
                        <p>Taste the Difference, Feel the Love.</p>
                        <a href="#Order" class="btn">Order Now</a>
                    </div>
                    <div class="image">
                        <img src="./images/image2.jpg" alt="Hot Pizza">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Our Special Dish</span>
                        <h3>alfredo pasta</h3>
                        <p>Taste the Difference, Feel the Love.</p>
                        <a href="#Order" class="btn">Order Now</a>
                    </div>
                    <div class="image">
                        <img src="./images/pasta 5.jpg" alt="Pasta">
                    </div>
                </div>
            </div>
            <div class="swiper-pagination problem"></div>
        </div>
    </section>

    <!-- Home section end -->

    <!--dishes section start-->


    <section class="Dishes" id="Dishes">

        <h3 class="Sub-Heading">Our Dishes</h3>
        <h1 class="Heading">Popular Dishes</h1>


        <div class="box-container">

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="./images/photo f.jpg" class="section2img" style="width:100%; ">
                <h3>French Fries</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>

                </div>
                <span>$3.54</span>
                <a href="#Order" class="btn">Order Now</a>
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/coffee.jpg" class="section2img">
                <h3>Cappuccino</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>

                </div>
                <span>$4.56</span>
                <a href="#Order" class="btn">Order Now</a>


            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="./images/sandwitch.jpg" class="section2img">
                <h3>Sandwich</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>

                </div>
                <span>$1.56</span>
                <a href="#Order" class="btn">Order Now</a>


            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="./images/noodles.jpg" class="section2img">
                <h3>Tasty Noodles</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>

                </div>
                <span>$2</span>
                <a href="#Order" class="btn">Order Now</a>


            </div>
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="./images/c.jpg" class="section2img">
                <h3>Croissant</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>

                </div>
                <span>$2.5</span>
                <a href="#Order"class="btn">Order Now</a>


            </div>
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="./images/ice cream.jpg" class="section2img">
                <h3>Ice cream</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>

                </div>
                <span>$1.5</span>
                <a href="#Order"class="btn">Order Now</a>


            </div>
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="./images/black coffee.jpg" class="section2img">
                <h3>black coffee</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>

                </div>
                <span>$2</span>
                <a href="#Order" class="btn">Order Now</a>


            </div>
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="./images/milkshak.jpg" class="section2img">
                <h3>milkshak</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>

                </div>
                <span>$3</span>
                <a href="#Order" class="btn">Order Now</a>

            </div>
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="./images/spicy pizza.jpg" class="section2img">
                <h3>Spicy Pizza</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>

                </div>
                <span>$4.5</span>
                <a href="#Order" class="btn">Order Now</a>

            </div>
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="./images/momo.jpg" class="section2img">
                <h3>Veg Momos</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>

                </div>
                <span>$1.5</span>
                <a href="#Order" class="btn">Order Now</a>

            </div>
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="./images/lemon.jpg" class="section2img">
                
                <h3> lemon tea</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>

                </div>
                <span>$3</span>
                <a href="#Order" class="btn">Order Now</a>

            </div>
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="./images/taco.jpg" class="section2img">
                <h3>Taco</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>

                </div>
                <span>$3.5</span>
                <a href="#Order" class="btn">Order Now</a>
                

            </div>
        </div>

    </section>


    <!--dishes section end-->


    <!--about section start-->

    <section class="About" id="About">
        <h3 class="Sub-Heading">About Us</h3>
        <h1 class="Heading">Why Choose Us?</h1>

        <div class="row">
            <div class="image">
                <img src="./images/pasta2.jpg" alt="About Us Image">
            </div>

            <div class="content">
                <h3>Best Food In Our State</h3>
                <p> My cafe is a cozy place with a friendly vibe. it smells great from the fresh coffee and baked goods.
                    they have tasty pastries, sandwiches and alfredo pasta is very good and a variety of drinks. The
                    staff is always welcomming, making it feels like a second home. its a perfect sport to relax, read,
                    or chatwith friends.</p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-shipping-fast"></i>
                        <span>Free Delivery</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-rupee-sign"></i> <!-- Fixed icon class -->
                        <span>Easy Payment</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>24/7 Service</span>
                    </div>
                </div>
                <a href="#" class="btn">Learn More</a>
            </div>
        </div>
    </section>

    <!--about section end-->


    <!--menu section starts-->

    <section class="Menu" id="Menu">

        <h3 class="Sub-Heading">Our Menu</h3>
        <h1 class="Heading">Today's Seciality</h1>

        <div class="box-container">

            <div class="box">
                <div class="image" style="width:100%">
                    <img src="./images/cake.jpg" alt="" >
                    <a href="#" class="fas fa-heart"></a>
                </div>

                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>

                    </div>
                    <h3>Cake</h3>
                    <p>best food</p>
                    <a href="#Order" class="btn">Order Now</a>
                    <span class="price">$5.8</span>
                </div>

            </div>

            <div class="box">
                <div class="image">
                    <img src="./images/fride moms.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>

                </div>

                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>

                    </div>
                    <h3>Fride  Moms</h3>
                    <p>best food</p>
                    <a href="#Order" class="btn">Order Now</a>
                    <span class="price">$3.9</span>
                </div>

            </div>

            <div class="box">
                <div class="image">
                    <img src="./images/burrito.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>

                </div>

                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>

                    </div>
                    <h3>Burrito</h3>
                    <p>best food</p>
                    <a href="#Order" class="btn">Order Now</a>
                    <span class="price">$10.7</span>
                </div>

            </div>
            <div class="box">
                <div class="image">
                    <img src="./images/veg burger.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>

                </div>

                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>

                    </div>
                    <h3>Veg Burger</h3>
                    <p>best food</p>
                    <a href="#Order" class="btn">Order Now</a>
                    <span class="price">$5.3</span>
                </div>

            </div>

            <div class="box">
                <div class="image">
                    <img src="./images/muffin.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>

                </div>

                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>

                    </div>
                    <h3>Muffin</h3>
                    <p>best food</p>
                    <a href="#Order" class="btn">Order Now</a>
                    <span class="price">$6.4</span>
                </div>

            </div>
            <div class="box">
                <div class="image">
                    <img src="images/vanilla shak.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>

                </div>

                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>

                    </div>
                    <h3>Vanilla Shak</h3>
                    <p>best food</p>
                    <a href="#Order" class="btn">Order Now</a>
                    <span class="price">$7.9</span>
                </div>

            </div>

            <div class="box">
                <div class="image">
                    <img src="images/hot chocolate.webp" alt="">
                    <a href="#" class="fas fa-heart"></a>

                </div>

                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>

                    </div>
                    <h3>Hot Chocolate</h3>
                    <p>best food</p>
                    <a href="#Order" class="btn">Order Now</a>
                    <span class="price">$5.6</span>
                </div>

            </div>

            <div class="box">
                <div class="image">
                    <img src="./images/pasta2.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>

                </div>

                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>

                    </div>

                    <h3>Pasta</h3>
                    <p>best food</p>
                    <a href="#Order" class="btn">Order Now</a>
                    <span class="price">$4.5</span>
                    
                </div>

            </div>

        </div>

    </section>

    <!--menu section end-->


    <!--review section start-->


    <section class="review" id="Review">

        <h3 class="sub-heading"> Customer's review </h3>
        <h1 class="heading"> what they say</h1>


        <div class="swiper-container Review-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="./images/photo1.jpeg" alt="">
                        <div class="user-info">
                            <h3>Rahul</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Amazing cafe! the food is of decent quality and the portions served are good. the pizza and the
                        pasta are really good.</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="./images/man-business-2-1.jpg" alt="">
                        <div class="user-info">
                            <h3>Mukesh</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Beautiful cafe with great food, an amazing atmosphere, and excellent service. Our server was very
                        knowledgeable and friendly.</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="./images/image5.jpeg" alt="">
                        <div class="user-info">
                            <h3>Vipin</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Such a great place with very friendly staff and, of course, excellent food, coffee, and desserts!
                        Highly recommend this place for all visitors.</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="./images/image4.jpeg" alt="">
                        <div class="user-info">
                            <h3>Suraj</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Nice cafe! I loved the food, value for money, and unique taste. I suggest anyone wanting to try
                        something new should visit Savory Express.</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="./images/busness 2.jpg" alt="">
                        <div class="user-info">
                            <h3>Vishal</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>The staff here are really helpful and polite, and the food is delicious. The vibe is great! You
                        couldn't ask for a better place to go for lunch.</p>
                </div>

            </div>

        </div>

    </section>




    <!--review section end-->


    <!--order section starts-->

    <section class="order" id="Order">
    <h3 class="sub-heading">order now</h3>
    <h1 class="heading">free and fast</h1>

    <form id="orderForm" method="POST" action="">
        <div class="inputBox">
            <div class="input">
                <span>your name </span>
                <input type="text" name="name" placeholder="enter your name" required>
            </div>
            <div class="input">
                <span>your number</span>
                <input type="text" name="number" placeholder="enter your number" required>
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>your order </span>
                <input type="text" name="food_name" placeholder="enter food name" required>
            </div>
            <div class="input">
                <span>additional food</span>
                <input type="text" name="additional_food" placeholder="extra with food">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>your much </span>
                <input type="number" name="quantity" placeholder="how many orders" required>
            </div>
            
        </div>
        
        <input type="submit" value="order now" class="btn">
    </form>

    <?php
    // Database connection settings
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = "cafe_db";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $number = $_POST['number'];
        $food_name = $_POST['food_name'];
        $additional_food = $_POST['additional_food'];
        $quantity = $_POST['quantity'];
        

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO orders (name, number, food_name, additional_food, quantity ) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $number, $food_name, $additional_food, $quantity );

        if ($stmt->execute()) {
            echo "<script>
                    alert('Order placed successfully!');
                    window.location.href = 'home.php';
                  </script>";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    $conn->close();
    ?>
</section>


    <!--order section end-->


    <!--footer section start-->


    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>locations</h3>
                <a href="#">Nirman Vihar</a>
                <a href="#">Rajiv Chowk</a>
                <a href="#">Kashmere Gate</a>
                <a href="#">Karol Bagh</a>
                <a href="#">Mandi House</a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#">Home</a>
                <a href="#">Dishes</a>
                <a href="#">About</a>
                <a href="#">Menu</a>
                <a href="#">Review</a>
                <a href="#">Order</a>

            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#">6785038430</a>
                <a href="#">7342487539</a>
                <a href="#">rahulshah@gmail.com</a>
                <a href="#">pawankumar@gmail.com</a>
                <a href="#">haryana india 131029</a>

            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#">facebook</a>
                <a href="#">twitter</a>
                <a href="#">instagram</a>
                <a href="#">linkedin</a>

            </div>
        </div>
        <div class="credit">copyright @ 2021 by <span>mr. web designer</span></div>
    </section>

    <!--footer seection ends-->

































    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>