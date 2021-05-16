<html>

<head>
    <meta charset="utf-8">
    <title>Your Order</title>
    <link rel="stylesheet" href="./style/order_receipt.css">
</head>

<body>
    <?php if (isset($_POST['form1_submitted'])) : ?>
        <header>
            <h1>Freshness Restaurant Order</h1>
        </header>
        <main>
            <div class="ushqimet">
                <table>
                    <tr>
                        <th>Food</th>
                        <th>Drink</th>
                        <th>Payment Method</th>
                        <th>Total Price</th>
                    </tr>
                    <tr>
                        <td><?php echo ($_POST['food_name']); ?></td>
                        <td><?php echo ($_POST['drink_name']); ?></td>
                        <td><?php echo ($_POST['payment']); ?></td>
                        <td><?php echo ($_POST['total_price']); ?></td>
                    </tr>
                </table>
            </div>
            <br>
            <br>
            <br>
            <div class="info">
                <table>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Phone</th>
                        <th>Address</th>
                    </tr>
                    <tr>
                        <td><?php echo ($_POST['fname']); ?></td>
                        <td><?php echo ($_POST['lname']); ?></td>
                        <td><?php echo ($_POST['num']); ?></td>
                        <td><?php echo ($_POST['address']); ?></td>
                    </tr>
                </table>
            </div>
        </main>
        <br>
        <br>
        <br>

        <?php
        $db = mysqli_connect("localhost", "root", "", "freshness_db");
        if (!$db) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $num = str_replace("+", "", $_POST['num']);
        $address = str_replace(",", "/", $_POST['address']);
        $food = $_POST['food_name'];
        $drink = $_POST['drink_name'];
        $pay = $_POST['payment'];
        $price = str_replace("$", "", $_POST['total_price']);

        $sql = "INSERT INTO orders (first_name, last_name, number, address, food, drink, price, payment_method) VALUES ('$fname', '$lname', '$num', '$address', '$food', '$drink', '$price', '$pay')";

        if (mysqli_query($db, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }
        mysqli_close($db);

        ?>

        <a href="order.php">return back</a>

    <?php endif; ?>
</body>

</html>