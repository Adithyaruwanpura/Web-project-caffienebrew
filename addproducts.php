<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
    <link rel="stylesheet" href="addproduct.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container">
        <section>
            <h3 class="heading">
                Add Products
            </h3>
            <form action="addproducts.php" method="post" class="addproduct" enctype="multipart/form-data">
                <input type="text" name="productname" placeholder="Product Name" required class="infield">
                <input type="text" name="productprice" placeholder="Product Price" required class="infield">
                <select name="category" class="infield" required>
                    <option value="" disabled selected>Select Category</option>
                    <option value="Coffees">Coffees</option>
                    <option value="Buns">Buns</option>
                    <option value="Icecreams">Icecreams</option>
                </select>
                <input type = "file" name = "productimage" required class="infield" accept="image/jpg,image/jpeg,image/png">
                <br>
                <input type="submit" value="Add Product" class="submit" name="addproduct">
            </form>

        </section>
    </div>
</body>
</html>

<?php
    include 'connection.php';
    if(isset($_POST['addproduct'])){
        $productname=$_POST['productname'];
        $productprice=$_POST['productprice'];
        $category=$_POST['category'];
        $productimage=$_FILES['productimage']['name'];
        $tempname=$_FILES['productimage']['tmp_name'];
        $productImgFolder='proImg/'.$productimage;

        //insert querry

        $insertquery = mysqli_query($conn,"INSERT INTO products(name,price,category,img) VALUES('$productname','$productprice','$category','$productimage')") or die("Failed to insert data into database");
        if($insertquery){
            move_uploaded_file($tempname,$productImgFolder);
            $dismessage = "Product added successfully";
        }
        else{
            $dismessage = "Failed to insert product";
        }
    }
?>

<?php
    if (isset($dismessage)) {
        echo "<script>alert('$dismessage');</script>";  // Show JavaScript alert box with $dismessage
    }
?>