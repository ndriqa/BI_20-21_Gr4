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
                        <td><?php echo ($_POST['radio']); ?></td>
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

        <?php echo ($_POST['fname']); ?>

        <?php
        echo ($_POST['fname']);
        echo ($_POST['lname']);
        echo ($_POST['num']);
        echo ($_POST['address']);
        echo ($_POST['food_name']);
        echo ($_POST['drink_name']);
        echo ($_POST['total_price']);
        echo ($_POST['radio']);
        ?>
        <a href="order.php">return back</a>
        <?php
        $db = mysqli_connect("localhost", "root", "", "freshness_db");
        if (!$db) {
            die("Connection failed: " . mysqli_connect_error());
        }
        ?>
    <?php endif; ?>
</body>

</html>