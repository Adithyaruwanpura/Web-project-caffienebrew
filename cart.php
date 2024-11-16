<?php
    include "connection.php";

    // Query to get cart items
    $sql = "SELECT * FROM cart";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    $grandTotal = 0; // Variable to store the total price

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="cart.css">
</head>
<body>
    <div class="container">
        <section class="scart">
            <h1 class="heading">Cart</h1>
            <table>
                <thead>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Quantity</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $product_id = $row['cid'];
                            $product_name = $row['name'];
                            $product_price = $row['price'];
                            $product_quantity = $row['quantity'];
                            $total_price = $product_price * $product_quantity;

                            // Add the total price of this product to the grand total
                            $grandTotal += $total_price;

                            echo "<tr>";
                            echo "<td>{$product_id}</td>";
                            echo "<td>{$product_name}</td>";
                            echo "<td>\${$product_price}</td>";
                            echo "<td>{$product_quantity}</td>";
                            echo "<td>\${$total_price}</td>";
                            echo "<td><button class='btn btn-danger' onclick='removeFromCart({$product_id})'>Remove</button></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<script>alert('No items in the cart');</script>";
                    }
                    ?>
                </tbody>
            </table>
            <div class="total-price">
                <!-- Display the calculated grand total -->
                <span id="total-price">Total Price: $<?php echo number_format($grandTotal, 2); ?></span>
            </div>
            <div class="table-footer">
                <a href="products.php" class="btn btn-secondary">Continue Shopping</a>
                <a href="checkout.php?total=<?php echo $grandTotal; ?>" class="btn btn-primary">Checkout</a>
                <button class="btn btn-danger" onclick="clearCart()">Clear Cart</button>
            </div>
        </section>
    </div>

    <script>
        function removeFromCart(productId) {
            if (confirm('Are you sure you want to remove this item from the cart?')) {
                window.location.href = `remove-from-cart.php?id=${productId}`;
            }
        }

        function clearCart() {
            if (confirm('Are you sure you want to clear the cart?')) {
                window.location.href = 'clear-cart.php';
            }
        }
    </script>
</body>
</html>
