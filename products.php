<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="products.css"> 
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
                <li class="nav-item"><a class="nav-link " href="about-page.html">About</a></li>
                <li class="nav-item"><a class="nav-link" href="contact-page.html">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link active" href="#">Products</a></li>
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
        <!-- Banner Section -->
        <section class="banner-section text-center">
            <div class="banner-content">
                <h1>OUR MENU</h1>
                <p>Choose from our delicious selection</p>
            </div>
        </section>
    <?php
        include 'connection.php';
        // SQL query to fetch all products from the database
        $sql = "SELECT * FROM products";
        $result = mysqli_query($conn, $sql);

        // Check if there are any products
        if (mysqli_num_rows($result) > 0) {
            // Loop through all products and display them
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="product-card">';
                echo '<img src="proImg/' . $row['img'] . '" alt="' . $row['name'] . '" class="product-image">';
                echo '<h3 class="product-name">' . $row['name'] . '</h3>';
                echo '<p class="product-price">' . $row['price'] . '</p>';
                echo '<div class="btn">Add to Cart</div>';
                echo '</div>';
            }
        } else {
            echo "<p>No products found!</p>";
        }

        // Close the database connection
        mysqli_close($conn);
        
    ?>

<div class="product-card"></div>

</body>
</html>