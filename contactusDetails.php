<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="contact-page.css"> 
</head>
<body>

    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">
        <img src="img/logo.png" alt="Logo" class="navbar-logo">
        <span class="brand-name">Caffeine Brew</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="main-page.html">Home</a></li>
            <li class="nav-item"><a class="nav-link  " href="about-page.html">About</a></li>
            <li class="nav-item"><a class="nav-link active" href="contactusDetails.php">Contact Us</a></li>
            <li class="nav-item"><a class="nav-link"  href="products.php">Products</a></li>
            <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
<!-- Cart and Search Icons -->
<li class="nav-item">
    <form class="search-form" onsubmit="performSearch(event)">
        <input type="text" class="search-input" placeholder="Search...">
        <button type="submit" class="search-button"><i class="fas fa-search"></i></button>
    </form>
</li>
<li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a></li>
        </ul>
    </div>
</nav>

<!-- Contact Banner with Background Image -->
<section class="banner-section text-center">
    <div class="banner-content">
        <h1>CONTACT US</h1>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section container my-5">
    <div class="row">
        <!-- Contact Info -->
        <div class="col-md-6 contact-info">
            <h3 class="section-title">Get in touch</h3>
            <p class="description">Feel free to reach out. We’d love to hear from you!Lorem ipsum dolor sit amet, consectetuer adipiscing cum elit. Aenean commodo ligula egetur cam sociiis dolor. Aenean cum massa. Cum sociiis massa natoque qi penatibus et magnis dis parturient </p>
            <div class="contact-details">
                <p><i class="fas fa-map-marker-alt"></i> 1234 Cafe St, Main City, USA</p>
                <p><i class="fas fa-phone"></i> +1 234 567 890</p>
                <p><i class="fas fa-envelope"></i> info@caffeinebrew.com</p>
            </div>
            <hr>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
        <!-- Contact Form -->
        <div class="col-md-6">
            <h3 class="section-title">Your Details</h3>
            <form id="contactForm" onsubmit="return validateForm()" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                </div>
                <div class="form-group">
                    <label for="message">Comment / Questions</label>
                    <textarea class="form-control" id="message" rows="4" name ="comment" placeholder="Write your message here"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Contact Us</button>
            </form>
        </div>
    </div>
</section>

    <!-- Reservation Section -->
<section class="reservation-section text-center py-5">
    <h3 class="reservation-title">Reserve A Table Now</h3>
    <p class="reservation-description">Enjoy a cozy experience with our delightful range of treats and freshly brewed coffee.</p>
    <a href="reservation.php" class="btn btn-warning reservation-btn">Make a Reservation</a>
</section>
<br>





<!-- Footer Section -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- About Section -->
            <div class="footer-col">
                <h4>About Us</h4>
                <p>Caffeine Brew offers the finest coffee and beverages with a cozy ambiance. Come and enjoy a perfect cup with us.</p>
            </div>

            <!-- Quick Links -->
            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="main-page.html">Home</a></li>
                    <li><a href="about-page.html">About</a></li>
                    <li><a href="contactusDetails.php">Contact</a></li>
                    <li><a href="products.php">Products</a></li>
                </ul>
            </div>

            <!-- Contact Section -->
            <div class="footer-col">
                <h4>Contact Us</h4>
                <ul>
                    <li>Email: info@caffeinebrew.com</li>
                    <li>Phone: +1 (123) 456-7890</li>
                    <li>Address: 123 Coffee St, Mocha City</li>
                </ul>
            </div>

            <!-- Social Media Links -->
            <div class="footer-col">
                <h4>Follow Us</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 Caffeine Brew. All rights reserved.</p>
    </div>
</footer>



    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="contact-page.js"></script>
</body>
</html>


<?php 
    include ('connection.php'); 
    if(isset($_POST['submit'])){
        $name =$_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $comment = $_POST['comment'];
        $query = mysqli_query($conn, "INSERT INTO contactus (name, email, subject, comment) VALUES ('$name', '$email', '$subject', '$comment')");
        if($query){
            echo "<script> alert('Thank You for your feedback !'); </script>";
        }
        else{
            echo "Error: ".mysqli_error($conn);
        }
    }



?>