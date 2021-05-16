<html>
	<head>
		<meta charset="utf-8">
		<title>Your Ticket</title>
		<link rel="stylesheet" href="style/reservationFormStyle.css">		
	</head>
	<body>
    <?php if (isset($_POST['form_submitted'])): ?>
		<header>
			<h1>Freshness Restaurant Reservation Ticket</h1>
			<address>
				<p>Prishtine</p>
				<p>Rr. Skenderbeu<br>Orange, 10000</p>
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
        <p>Click to go <a href="reservations.php">BACK</a> to the form</p>
        <?php endif; ?> 
	</body>
</html>