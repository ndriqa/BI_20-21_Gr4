<html>
	<head>
		<meta charset="utf-8">
		<title>Your Ticket</title>
		<link rel="stylesheet" href="style/reservationFormStyle.css">
		<style>
			.butoni {
				display: inline-block;
				background-color: #3BAFBE;
				border-radius: 10px;
				border: 4px double #cccccc;
				color: #eeeeee;
				text-align: center;
				font-size: 15px;
				padding: 10px;
				width: 100px;
				-webkit-transition: all 0.5s;
				-moz-transition: all 0.5s;
				-o-transition: all 0.5s;
				transition: all 0.5s;
				cursor: pointer;
				margin: 5px;
			}
    	</style>		
	</head>
	<body>
    <?php if (isset($_POST['form_submitted'])): ?>
		<header>
			<h1>Freshness Restaurant Reservation Ticket</h1>
			<address>
				<p>Prishtine</p>
				<p>Rr. Skenderbeu<br>PR, 10000</p>
				<p>(383) 123456789</p>
			</address>
		</header>
		<article>
			<h1>Recipient</h1>
			<address >
				<p>Freshness<br>Restaurant</p>
			</address>
			<table class="meta">
				<tr>
					<th><span >ID</span></th>
					<td><span ><?php echo $_POST['data_3'] . ' ' . $_POST['data_4']; ?></span></td>
				</tr>
				<tr>
					<th><span >Data</span></th>
					<td><span ><?php echo $_POST['data_7']; ?> </span></td>
				</tr>
			
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span >Emri</span></th>
						<th><span >Mbiemri</span></th>
						<th><span >Nr Telefonit</span></th>
						<th><span >Email</span></th>
						<th><span >Nr Personave</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><span ><?php echo $_POST['data_3']; ?> </span></td>
						<td><span ><?php echo $_POST['data_4']; ?> </span></td>
						<td><span><?php echo $_POST['data_5']; ?> </span></td>
						<td><span ><?php echo $_POST['data_6']; ?> </span></td>
						<td><span><?php echo $_POST['data_9']; ?> </span></td>
					</tr>
				</tbody>
			</table>
      <br>
      <br>
      <br>
			<table class="balance">
				<tr>
					<th><span >Cmimi</span></th>
					<td><span>Nuk eshte percaktuar</span></td>
				</tr>
				<tr>
					<th><span >Koha</span></th>
					<td><span><?php echo $_POST['data_8']; ?> </span></td>
				</tr>
				
			</table>
		</article>
		<aside>
      <br>
      <br>
      <br>
      <br>
			<h1><span >Falemnderit!</span></h1>
			<div>
				<p>Ju lutem ruani tiketen e rezervimit!</p>
			</div>
		</aside>
        <br>
        <br> 
         <a class="butoni" href="reservations.php">return back</a>
		 <br>
		 
		<?php
        $db = mysqli_connect("localhost", "root", "", "freshness_db");
        if (!$db) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $firstname = $_POST['data_3'];
        $lastname = $_POST['data_4'];
        $num = str_replace("+", "", $_POST['data_5']);
        $email = str_replace(",", "/", $_POST['data_6']);
		$date = $_POST['data_7'];
		$time = str_replace(",", "/", $_POST['data_8']);
        $attendees = $_POST['data_9'];
        $comment = str_replace("$", "", $_POST['data_10']);

        $sql = "INSERT INTO reservations (firstname, lastname, phone, email, date, time, attendees, comment) VALUES ('$firstname', '$lastname', '$num', '$email', '$date', '$time', '$attendees', '$comment')";

        if (mysqli_query($db, $sql)) {
            echo "";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }
        mysqli_close($db);

        ?>
        <?php endif; ?>
		
		
		<button class="butoni" onclick ="myfun()">Print Ticket</button>
		<script type= "text/javascript">
			function myfun(){
			window.print();
			}
		</script>
		

	</body>
</html>	