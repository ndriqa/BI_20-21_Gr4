<html>
<head>
	<title>Registration Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<body>

    <?php if (isset($_POST['form_submitted'])): ?> //Ketu mund t'a shihni faturen tuaj.

        <h2>Falemnderit per rezervimin <?php echo $_POST['data_3']; ?>! </h2>

        <p>You have been registered as
            <?php echo $_POST['data_3'] . ' ' . $_POST['data_4']; ?>
        </p>

        <p>Go <a href="reservations.php">back</a> to the form</p>

        

      <?php endif; ?> 
</body> 
</html>