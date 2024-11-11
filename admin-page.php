
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="admin-page.css">
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
                <li class="nav-item"><a class="nav-link active" href="main-page.html">Home</a></li>
                <li class="nav-item"><a class="nav-link " href="about-page.html">About</a></li>
                <li class="nav-item"><a class="nav-link" href="contact-page.html">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
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

    <div class="banner-section text-center">
        <div class="banner-content">
            <h1>ADMIN PAGE</h1>
            <p>Manage products</p>
        </div>

    <div class="container">
        <?php include 'addproducts.php'; ?>
    </div>

    
</body>


</html>