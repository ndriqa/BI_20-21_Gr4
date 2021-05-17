<html>

<head>
    <meta charset="utf-8">
    <title>Your Order</title>
    <link rel="stylesheet" href="./style/order_receipt.css">
</head>

<body>
    <?php if (isset($_POST['form1_submitted'])) : ?>
        <?php session_start(); ?>

        <header>
            <h1>Freshness Restaurant Order</h1>
        </header>
        <main>
            <div class="ushqimet">
                <h3>Meal Info</h3>
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
                        <td><?php echo ("$" . number_format(str_replace("$", "", $_POST['total_price']), 2)); ?></td>
                    </tr>
                </table>
            </div>
            <br>
            <br>
            <br>
            <div class="info">
                <h3>Personal Info</h3>
                <table>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Phone</th>
                        <th>Address</th>
                    </tr>
                    <tr>
                        <td><?php
                            $_SESSION['first_name'] = $_POST['fname'];
                            echo ($_POST['fname']); ?></td>
                        <td><?php
                            $_SESSION['last_name'] = $_POST['lname'];
                            echo ($_POST['lname']); ?></td>
                        <td><?php
                            $_SESSION['number'] = $_POST['num'];
                            echo ($_POST['num']); ?></td>
                        <td><?php
                            $_SESSION['address'] = $_POST['address'];
                            echo ($_POST['address']); ?></td>
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
        $fname = trim($_POST['fname']);
        $lname = trim($_POST['lname']);
        $num = trim(str_replace("+", "", $_POST['num']));
        $address = trim(str_replace(",", "/", $_POST['address']));
        $food = trim($_POST['food_name']);
        $drink = trim($_POST['drink_name']);
        $pay = trim($_POST['payment']);
        $price = trim(number_format(str_replace("$", "", $_POST['total_price']), 2));

        $sql = "INSERT INTO orders (first_name, last_name, number, address, food, drink, price, payment_method) VALUES ('$fname', '$lname', '$num', '$address', '$food', '$drink', '$price', '$pay')";

        if (mysqli_query($db, $sql)) {
            echo '<h5 class="message">New record created successfully</h5>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }
        mysqli_close($db);

        ?>
        <br>

    <?php endif; ?>

    <div class="buttons">
        <a class="back" href="order.php">return back</a>
        <button class="butoni" onclick="myfun()">Print Ticket</button>
    </div>
    <script type="text/javascript">
        function myfun() {
            window.print();
        }
    </script>

</body>

</html>