<!DOCTYPE html>
<html lang="en" manifest="https://ndriqa.github.io/PWWW20-21_Gr10/meny.html">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
		integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
		crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="style/style_reservation.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">

	<title>Menu</title>

	<style>
		.nav-link-active {
			color: #959595 !important;
		}

		.fixed-bg {
			background-image: url("Images/reservation/1.jpg");
			min-height: 300px;
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			filter: brightness(50%);

		}


		.fixed-bg-2 {
			background-image: url("Images/reservation/lobsterr.jfif");
			min-height: 300px;
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}

		.fixed-bg-3 {
			background-image: url("Images/reservation/pancake-background.jfif");
			min-height: 300px;
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			filter: brightness(50%);

		}

		.fixed-bg-4 {
			background-image: url("Images/reservation/meat-background.jfif");
			min-height: 300px;
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			filter: brightness(50%);
		}

		.fixed-bg-5 {
			background-image: url("Images/reservation/cheers.jfif");
			min-height: 300px;
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			filter: brightness(50%);
		}
	</style>

</head>


<body>


	<header>
		<div class="social-top" id="social-top">
			<div class="social-top-content">
				<div class="social-icons">
					<a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
					<a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
					<a href="https://www.pinterest.com/"><i class="fab fa-pinterest"></i></a>
					<a href="https://www.google.com/"><i class="fab fa-google-plus-g"></i></a>
					<a href="https://www.rss.com"><i class="fas fa-rss-square"></i></a>
				</div>


				<div class="header-right">
					<input type="text" name="" id="searchBox" placeholder="Search Our Website...." />
					<input type="submit" value="SUBMIT" />
				</div>
			</div>
		</div>

		<div class="the-header">
			<div class="homepage-description">
				<h1>
					Freshness
				</h1>
				<p>
					Eat healthy, eat fresh!
				</p>
			</div>

			<nav class="header-nav-bar ">
				<ul id="menu">
					<li class="nav-item"><a class="nav-link" href="index.php">HOME</a> </li>
					<li class="nav-item"><a class="nav-link" href="about.php">ABOUT US </a></li>
					<li class="nav-item"><a class="nav-link nav-active" href="meny.php">MENU </a></li>
					<li class="nav-item"><a class="nav-link" href="order.php">ORDER NOW </a></li>
					<li class="nav-item"><a class="nav-link" href="reservations.php">RESERVATION </a></li>
					<li class="nav-item">
						<div class="dropdown">
							<a>OUR STAFF</a>
							<div class="dropdown-content">
								<a href="board.php" class="dr">BOARD</a>
								<hr>
								<a href="chefs.php" class="dr">CHEFS</a>
							</div>
						</div>
					</li>
					<li class="nav-item"><a href="contact.php">CONTACT </a></li>
				</ul>
			</nav>
		</div>

	</header>
	<main>
		<div class="container">
			<hr class="separator">
			<!--     <div id="foto1" >  
            <div>
                <img id="foto"  src="Images/reservation/restaurant.jfif" height="400px" width="100%">

            </div>
            <div id="tekst1">
                <h4 id="rezervimi">Menu</h4>
            </div>
        </div>  -->
			<div class="menu-image">
				<img src="Images/reservation/restaurant.jfif" alt="restaurant" class="img1"
					style="width: 100%; height: 400px">
				<div class="menu-image-text">

					<span class="subheading1"><?php echo substr("Please Find Your favorite food",6);?></span>
					<h2 class="subheading2" style="margin-bottom: 1.5rem">-Restaurant-</h2>
					<p class="subheading2" style="margin-bottom: 1rem">Its All about this <?php echo strlen("Food"); ?> letters word: "FOOD"</p>
				</div>
			</div>



			<div class="col-md-7 text-center heading-section ftco-animate fadeInUp ftco-animated">
				<span class="subheading">Find your Favorite Food</span>
				<h2 class="mb-4" style="margin-bottom: 1.5rem">scroll down</h2>

			</div>


			<div class="fixed-bg"></div>
			<div class="col-md-7 text-center heading-section ftco-animate fadeInUp ftco-animated">
				<?php
				$foodTypes = array("Pasta", "Pizza","Starters");
				$comma_separated_food = implode(", ", $foodTypes);
				?>
				<span class="subheading">Specialties</span>
				<h2 class="mb-4" style="margin-bottom: 1.5rem">Our Menu</h2>
				<h2 class="mb-4"><?php echo $comma_separated_food;?></h2>
			</div>

			<div class="reservation-form">


				<div style="height:auto;background-color:white;">
					<div class="menut">

						<div class="menu-wrap" style="padding: 60px;">
							<div class="heading-menu text-center ftco-animate fadeInUp ftco-animated">
								<h3 style="color:black"><?php echo $foodTypes[0];?></h3>
							</div>
							<?php
								
								// Defining variables
								$pasta = array("Spaghetti Bolognese", "Four Cheese Pasta", "Pasta Con Pomodoro","Lasagna", "Pasta Arrabiata");
								$pizza = array("Cheese Pizza", "Pepperoni", "Veggie Pizza","Margherita Pizza", "BBQ Chicken Pizza");
								$starters = array("Stir Fried Chilli Chicken", "Chicken Satay", "Cheese Balls","French Fries", "Microwave Paneer Tikkas");
							
								// Define an associative array
								$pastaPrices = array("Spaghetti Bolognese"=>20, "Four Cheese Pasta"=>19, "Pasta Con Pomodoro"=>15, "Lasagna"=>13, "Pasta Arrabiata"=>21);
								$pizzaPrices = array("Cheese Pizza"=>15, "Pepperoni"=>19, "Veggie Pizza"=>15, "Margherita Pizza"=>13, "BBQ Chicken Pizza"=>17);
								$startersPrices = array("Stir Fried Chilli Chicken"=>22, "Chicken Satay"=>13, "Cheese Balls"=>12, "French Fries"=>13, "Microwave Paneer Tikkas"=>14);
							?>



							<div class="menus d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/bolognese.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3><?php echo $pasta[0];?></h3>
										</div>
										<div class="one-forth">
											<span
												class="price">$<?php echo $pastaPrices["Spaghetti Bolognese"];?></span>
										</div>
									</div>
									<p><span>Beef</span>, <span>Red chilli</span>, <span>Tomatoe puree</span></p>
								</div>
								<hr>
							</div>
							<div class="menus d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/fourcheese.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3><?php echo $pasta[1];?></h3>
										</div>
										<div class="one-forth">
											<span class="price">$<?php echo $pastaPrices["Four Cheese Pasta"];?></span>
										</div>
									</div>
									<p><span>Mozzarella</span>, <span>Gorgonzola</span>, <span>Parmesan</span>,
										<span>Fresh creaamy cheese</span></p>
								</div>
								<hr>

							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/pomodorini.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3><?php echo $pasta[2];?></h3>
										</div>
										<div class="one-forth">
											<span class="price">$<?php echo $pastaPrices["Pasta Con Pomodoro"];?></span>
										</div>
									</div>
									<p><span>Tomatoes</span>, <span>Basil</span>, <span>Peppers</span>,
										<span>Garlic</span></p>
								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/lasagna.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3><?php echo $pasta[3];?></h3>
										</div>
										<div class="one-forth">
											<span class="price">$<?php echo $pastaPrices["Lasagna"];?></span>
										</div>
									</div>
									<p><span>Rag??</span>, <span>Basil</span>, <span>Cheese</span>,
										<span>Seasonings</span></p>
								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/arrabiata.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3><?php echo $pasta[4];?></h3>
										</div>
										<div class="one-forth">
											<span class="price">$<?php echo $pastaPrices["Pasta Arrabiata"];?></span>
										</div>
									</div>
									<p><span>Meat</span>, <span>Tomatoe</span>, <span>Hot sauce</span>,
										<span>Basil</span></p>
								</div>
								<hr>
							</div>

						</div>
						<div class="menu-wrap" style="padding: 60px;">
							<div class="heading-menu text-center ftco-animate fadeInUp ftco-animated">
								<h3><?php echo $foodTypes[1];?></h3>
							</div>
							<div class="menus d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/cheesepizza.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3><?php echo $pizza[0];?></h3>
										</div>
										<div class="one-forth">
											<span class="price">$<?php echo $pizzaPrices["Cheese Pizza"];?></span>
										</div>
									</div>
									<!--  <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p> -->
								</div>
								<hr>
							</div>
							<div class="menus d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/pepperonipizza.webp);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3><?php echo $pizza[1];?></h3>
										</div>
										<div class="one-forth">
											<span class="price">$<?php echo $pizzaPrices["Pepperoni"];?></span>
										</div>
									</div>
									<!--  <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p> -->
								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/veggiepizza.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3><?php echo $pizza[2];?></h3>
										</div>
										<div class="one-forth">
											<span class="price">$<?php echo $pizzaPrices["Veggie Pizza"];?></span>
										</div>
									</div>
									<!--<p><span>Meat</span>, <span>Rice</span></p> -->
								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/margheritapizza.jfif);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3><?php echo $pizza[03];?></h3>
										</div>
										<div class="one-forth">
											<span class="price">$<?php echo $pizzaPrices["Margherita Pizza"];?></span>
										</div>
									</div>
									<!--<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p> -->
								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/bbqpizza.jfif);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3><?php echo $pizza[4];?></h3>
										</div>
										<div class="one-forth">
											<span class="price">$<?php echo $pizzaPrices["BBQ Chicken Pizza"];?></span>
										</div>
									</div>
									<!--<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p> -->
								</div>
								<hr>
							</div>
						</div>
						<div class="menu-wrap" style="padding: 60px;">
							<div class="heading-menu text-center ftco-animate fadeInUp ftco-animated">
								<h3><?php echo $foodTypes[2];?></h3>
							</div>
							<div class="menus d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/fried.webp);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3><?php echo $starters[0];?></h3>
										</div>
										<div class="one-forth">
											<span
												class="price">$<?php echo $startersPrices["Stir Fried Chilli Chicken"];?></span>
										</div>
									</div>
									<p><span>Chicken</span>, <span>Chilli sauce</span>, <span>Tomatoe puree</span>, </p>
								</div>
								<hr>
							</div>
							<div class="menus d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/chickensatay.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3><?php echo $starters[1];?></h3>
										</div>
										<div class="one-forth">
											<span class="price">$<?php echo $startersPrices["Chicken Satay"];?></span>
										</div>
									</div>
									<p><span>Chicken breast</span>, <span>Soy sauce</span>, <span>Peanut butter</span>
									</p>
								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/cheeseballs.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3><?php echo $starters[2];?></h3>
										</div>
										<div class="one-forth">
											<span class="price">$<?php echo $startersPrices["Cheese Balls"];?></span>
										</div>
									</div>
									<p><span>Cream cheese</span>, <span>Grated semi-soft</span>, <span>Flavorings</span>
									</p>
								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/fries.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3><?php echo $starters[3];?></h3>
										</div>
										<div class="one-forth">
											<span class="price">$<?php echo $startersPrices["French Fries"];?></span>
										</div>
									</div>
									<!--<p><span>Meat</span>, <span>Tomatoe</span>, <span>Hot sauce</span>, <span>Basil</span></p> -->
								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/microwave.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3><?php echo $starters[4];?></h3>
										</div>
										<div class="one-forth">
											<span
												class="price">$<?php echo $startersPrices["Microwave Paneer Tikkas"];?></span>
										</div>
									</div>
									<p><span>Paneer cubes</span>, <span>chaat masala</span>, <span>Chilli powder</span>
									</p>
								</div>
								<hr>
							</div>
						</div>


					</div>
					<div class="fixed-bg-3"></div>
					<div class="col-md-7 text-center heading-section ftco-animate fadeInUp ftco-animated">
						<span class="subheading">Specialties</span>
						<h2 class="mb-4">Breakfast</h2>
					</div>
					<?php
						// Defining variables
						$col1 = array("Egg and Bacon", "Breakfast Champion", "Vegetarian Omelette","Avocado Omelette", "Sea Omlet");
						$col2 = array("Blueberry Pancakes", "Strawberry Pancakes", "Oat Meal","French Toast", "Breakfast Burrito");
						$col3 = array("Waffle", "Bagel", "Cereal","Toast", "Crepes");
						sort($col1);
					?>
					<div class="menut">
						<div class="menu-wrap" style="padding: 60px;">
							<div class="heading-menu text-center ftco-animate fadeInUp ftco-animated">
								<!--<h3 style="color:darkgray">Eggs</h3> -->
							</div>
							<div class="menus d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/baconEgg.JPG);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3><?php echo $col1[0];?></h3>
										</div>
										<div class="one-forth">
											<span class="price">$11</span>
										</div>
									</div>
									<p><span>2xEggs</span>, <span>Bacon</span>, <span>Patatoes</span></p>
								</div>
								<hr>
							</div>
							<div class="menus d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/breakfast-champion.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3><?php echo $col1[1];?></h3>
										</div>
										<div class="one-forth">
											<span class="price">$15</span>
										</div>
									</div>
									<p><span>2xEggs</span>, <span>Bacon</span>, <span>Sausage</span>,
										<span>Pancakes</span>, <span>Home Patatoes</span></p>
								</div>
								<hr>

							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/vegetarianomelette.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3><?php echo $col1[2];?></h3>
										</div>
										<div class="one-forth">
											<span class="price">$11</span>
										</div>
									</div>
									<p><span>Eggs</span>, <span>Tomatoes</span>, <span>Peppers</span>,
										<span>Onions</span></p>
								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/avocadoomelette.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3><?php echo $col1[3];?></h3>
										</div>
										<div class="one-forth">
											<span class="price">$11</span>
										</div>
									</div>
									<p><span>Eggs</span>, <span>Avocado</span>, <span>Cheese</span>, <span>Bacon</span>
									</p>
								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/seaomelette.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3><?php echo $col1[4];?></h3>
										</div>
										<div class="one-forth">
											<span class="price">$15</span>
										</div>
									</div>
									<p><span>Eggs</span>, <span>Cheese</span>, <span>Sea Fruits</span>,
										<span>Basil</span></p>
								</div>
								<hr>
							</div>
						</div>
						<div class="menu-wrap" style="padding: 60px;">
							<div class="heading-menu text-center ftco-animate fadeInUp ftco-animated">
								<!--<h3>Pancakes</h3> -->
							</div>
							<div class="menus d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/blueberrypancakes.jpeg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3><?php echo $col2[0];?></h3>
										</div>
										<div class="one-forth">
											<span class="price">$9</span>
										</div>
									</div>
									<p><span>Blueberry</span></p>
								</div>
								<hr>
							</div>
							<div class="menus d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/strawberrypancakes.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3><?php echo $col2[1];?></h3>
										</div>
										<div class="one-forth">
											<span class="price">$9</span>
										</div>
									</div>
									<p><span>Strawberry</span></p>
								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/oatmeal.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3><?php echo $col2[2];?></h3>
										</div>
										<div class="one-forth">
											<span class="price">$8</span>
										</div>
									</div>
									<p><span>Oatmeal</span></p>
								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/frenchtoast.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3><?php echo $col2[3];?></h3>
										</div>
										<div class="one-forth">
											<span class="price">$9</span>
										</div>
									</div>
									<!--<p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p> -->
								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/breakfastburrito.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3><?php echo $col2[4];?></h3>
										</div>
										<div class="one-forth">
											<span class="price">$11</span>
										</div>
									</div>
									<p><span>Meat</span>, <span>Vegetable</span>, <span>Eggs</span>,
										<span>Potatoes</span></p>
								</div>
								<hr>
							</div>
						</div>
						<div class="menu-wrap" style="padding: 60px;">
							<div class="heading-menu text-center ftco-animate fadeInUp ftco-animated">
								<!--<h3>Drinks</h3> -->
							</div>
							<div class="menus d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/waffle.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3><?php echo $col3[0];?></h3>
										</div>
										<div class="one-forth">
											<span class="price">$6</span>
										</div>
									</div>
									<!--<p><span>Orange</span>, <span>Apple</span>, <span>Strawberry</span>, <span>Lemon</span></p> -->
								</div>
								<hr>
							</div>
							<div class="menus d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/bagel.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3><?php echo $col3[1];?></h3>
										</div>
										<div class="one-forth">
											<span class="price">$4</span>
										</div>
									</div>
									<p><span>w/ cream</span></p>
								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/cereal.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3><?php echo $col3[2];?></h3>
										</div>
										<div class="one-forth">
											<span class="price">$4</span>
										</div>
									</div>
									<!--<p><span>Meat</span>, <span>Tomatoe</span>, <span>Hot sauce</span>, <span>Basil</span></p> -->
								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/toast.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3><?php echo $col3[3];?></h3>
										</div>
										<div class="one-forth">
											<span class="price">$5</span>
										</div>
									</div>
									<!--<p><span>Coca-Cola</span>, <span>Fanta</span>, <span>Schweppes</span>, <span>Sprite</span></p> -->
								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/crepes.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3><?php echo $col3[4];?></h3>
										</div>
										<div class="one-forth">
											<span class="price">$4</span>
										</div>
									</div>
									<!--<p><span>Meat</span>, <span>Tomatoe</span>, <span>Hot sauce</span>, <span>Basil</span></p> -->
								</div>
								<hr>
							</div>
						</div>



					</div>
					<div class="fixed-bg-4"></div>
					<div class="col-md-7 text-center heading-section ftco-animate fadeInUp ftco-animated">
						<span class="subheading">Lunch</span>
						<h2 class="mb-4" style="margin-bottom: 1.5rem">Lunch</h2>

					</div>
					<div class="menut">

						<div class="menu-wrap" style="padding: 60px;">
							<div class="heading-menu text-center ftco-animate fadeInUp ftco-animated">
								<!--	<h3 style="color:darkgray">Pasta</h3> -->
							</div>
							<div class="menus d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/chilli-con-corne.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3>Chilli con Carne</h3>
										</div>
										<div class="one-forth">
											<span class="price">$22</span>
										</div>
									</div>
									<p><span>Beef</span>, <span>Red chilli</span>, <span>Tomatoe puree</span></p>
								</div>
								<hr>
							</div>
							<div class="menus d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/butterchichken.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3>Butter Chicken</h3>
										</div>
										<div class="one-forth">
											<span class="price">$18</span>
										</div>
									</div>
									<p><span>Chicken</span>, <span>Cream</span>, <span>Tomatoe</span></p>
								</div>
								<hr>

							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/meatloaf.jpeg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3>Meatloaf</h3>
										</div>
										<div class="one-forth">
											<span class="price">$18</span>
										</div>
									</div>
									<p><span>Ground meat</span>, <span>Bread crumbs</span>, <span>Tomatoe sauce</span>
									</p>
								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/Chicken%20Parmigiana.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3>Chicken Parmigiana</h3>
										</div>
										<div class="one-forth">
											<span class="price">$20</span>
										</div>
									</div>
									<p><span>Chicken breasts</span>, <span>italian, mozzarella cheese</span>,
										<span>Parmesan cheese</span></p>
								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/Steak%20tartare.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3>Steak tartare</h3>
										</div>
										<div class="one-forth">
											<span class="price">$17</span>
										</div>
									</div>
									<p><span>Beef tenderloin</span>, <span>Worcerster sauce</span>, <span>Pickled
											cucumber</span></p>
								</div>
								<hr>
							</div>
						</div>
						<div class="menu-wrap" style="padding: 60px;">
							<div class="heading-menu text-center ftco-animate fadeInUp ftco-animated">
								<!--<h3>Pizza</h3> -->
							</div>
							<div class="menus d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/Sunday%20Roast.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3>Sunday Roast</h3>
										</div>
										<div class="one-forth">
											<span class="price">$21</span>
										</div>
									</div>
									<p><span>Roasting</span>, <span>Potatoes</span>, <span>Chicken</span>,
										<span>Beef</span></p>
								</div>
								<hr>
							</div>
							<div class="menus d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/Salisbury%20Steak.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3>Salisbury Steak</h3>
										</div>
										<div class="one-forth">
											<span class="price">$19</span>
										</div>
									</div>
									<p><span>Ground meat</span>, <span>Beef</span>, <span>Mushroom</span></p>
								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/Pot%20Roast.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3>Pot Roast</h3>
										</div>
										<div class="one-forth">
											<span class="price">$22</span>
										</div>
									</div>
									<p><span>Pound chuck roast</span>, <span>Red wine</span></p>
								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/Buffalo%20Wings.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3>Buffalo Wings</h3>
										</div>
										<div class="one-forth">
											<span class="price">$22</span>
										</div>
									</div>
									<p><span>Wings</span>, <span>Buffalo sauce</span></p>
								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/Barbecue%20Ribs.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3>Barbecue Ribs</h3>
										</div>
										<div class="one-forth">
											<span class="price">$23</span>
										</div>
									</div>
									<p><span>Pork</span>, <span>Barbecue sauce</span>, <span>Chilli</span></p>
								</div>
								<hr>
							</div>
						</div>
						<div class="menu-wrap" style="padding: 60px;">
							<div class="heading-menu text-center ftco-animate fadeInUp ftco-animated">
								<!--<h3>Starters</h3> -->
							</div>
							<div class="menus d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/Surf%20and%20Turf.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3>Surf and Turf</h3>
										</div>
										<div class="one-forth">
											<span class="price">$20</span>
										</div>
									</div>
									<p><span>New york strip</span>, <span>Jumbo shrimp</span></p>
								</div>
								<hr>
							</div>
							<div class="menus d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/Chicken%20Fried%20Steak.jpg);">
								</div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3>Chicken Fried Steak</h3>
										</div>
										<div class="one-forth">
											<span class="price">$20</span>
										</div>
									</div>
									<p><span>Cube steak</span>, <span>Potatoes</span>, <span>Pepper</span></p>
								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/general.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3>General Tso's Chicken</h3>
										</div>
										<div class="one-forth">
											<span class="price">$21</span>
										</div>
									</div>
									<p><span>Chicken</span>, <span>Sauce</span>, <span>Hoisin sauce</span>,
										<span>Chicken breast</span></p>
								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/Orange%20Chicken.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3>Orange Chicken</h3>
										</div>
										<div class="one-forth">
											<span class="price">$16</span>
										</div>
									</div>
									<p><span>Chicken breast</span>, <span>Orange</span></p>
								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/Chop%20Suey.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3>Chop Suey</h3>
										</div>
										<div class="one-forth">
											<span class="price">$15</span>
										</div>
									</div>
									<p><span>Pork</span>, <span>Vegetable</span>, <span>Oyster sauce</span></p>
								</div>
								<hr>
							</div>
						</div>


					</div>
					<div class="fixed-bg-5"></div>
					<div class="col-md-7 text-center heading-section ftco-animate fadeInUp ftco-animated">
						<span class="subheading">Lunch</span>
						<h2 class="mb-4" style="margin-bottom: 1.5rem">Drinks</h2>
					</div>
					<div class="menut">

						<div class="menu-wrap" style="padding: 60px;">
							<div class="heading-menu text-center ftco-animate fadeInUp ftco-animated">
								<!--	<h3 style="color:darkgray">Pasta</h3> -->
							</div>
							<div class="menus d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/juice1.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3>Fresh Juice</h3>
										</div>
										<div class="one-forth">
											<span class="price">$9</span>
										</div>
									</div>

								</div>
								<hr>
							</div>
							<div class="menus d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/lemonade.jfif);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3>Lemonade</h3>
										</div>
										<div class="one-forth">
											<span class="price">$11</span>
										</div>
									</div>

								</div>
								<hr>

							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img" style="background-image: url(./Images/reservation/soda.jpg);">
								</div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3>Soda</h3>
										</div>
										<div class="one-forth">
											<span class="price">$6</span>
										</div>
									</div>

								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/milkshake.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3>Milkshake</h3>
										</div>
										<div class="one-forth">
											<span class="price">$11</span>
										</div>
									</div>

								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/smoothie.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3>Smoothie</h3>
										</div>
										<div class="one-forth">
											<span class="price">$10</span>
										</div>
									</div>

								</div>
								<hr>
							</div>
						</div>
						<div class="menu-wrap" style="padding: 60px;">
							<div class="heading-menu text-center ftco-animate fadeInUp ftco-animated">
								<!--<h3>Pizza</h3> -->
							</div>
							<div class="menus d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/coffee.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3>Coffee</h3>
										</div>
										<div class="one-forth">
											<span class="price">$5</span>
										</div>
									</div>

								</div>
								<hr>
							</div>
							<div class="menus d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/icedcoffe.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3>Iced Coffee</h3>
										</div>
										<div class="one-forth">
											<span class="price">$6</span>
										</div>
									</div>

								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/hotchocolate.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3>Hot chocolate</h3>
										</div>
										<div class="one-forth">
											<span class="price">$6</span>
										</div>
									</div>

								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/coffemilkshake.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3>Coffee Milkshake</h3>
										</div>
										<div class="one-forth">
											<span class="price">$8</span>
										</div>
									</div>

								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/frappe.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3>Frapp?? </h3>
										</div>
										<div class="one-forth">
											<span class="price">$6</span>
										</div>
									</div>

								</div>
								<hr>
							</div>
						</div>
						<div class="menu-wrap" style="padding: 60px;">
							<div class="heading-menu text-center ftco-animate fadeInUp ftco-animated">
								<!--<h3>Starters</h3> -->
							</div>
							<div class="menus d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/coctail.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3>Coctail</h3>
										</div>
										<div class="one-forth">
											<span class="price">$15</span>
										</div>
									</div>

								</div>
								<hr>
							</div>
							<div class="menus d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img" style="background-image: url(./Images/reservation/beer.jpg);">
								</div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3>Beer</h3>
										</div>
										<div class="one-forth">
											<span class="price">$10</span>
										</div>

									</div>

								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/blodymary.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3>Blody Mary</h3>
										</div>
										<div class="one-forth">
											<span class="price">$18</span>

										</div>

									</div>

								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/mimosa.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3>Mimosa</h3>
										</div>
										<div class="one-forth">
											<span class="price">$15</span>
										</div>
									</div>

								</div>
								<hr>
							</div>
							<div class="menus border-bottom-0 d-flex ftco-animate fadeInUp ftco-animated">
								<div class="menu-img img"
									style="background-image: url(./Images/reservation/champagne.jpg);"></div>
								<div class="text">
									<div class="d-flex">
										<div class="one-half">
											<h3>Champagne</h3>
										</div>
										<div class="one-forth">
											<span class="price">$15</span>
										</div>
									</div>

								</div>
								<hr>
							</div>
						</div>


					</div>

	</main>

	<footer>

		<div class="main-footer">
			<div id="contact-details" class="sector">
				<h1>Contact Details </h1>
				<pre>
Freshness
Dardania
Prishtine
10000
        </pre>
				<p>Tel: +383 45 123 456</p>
				<p>Fax: 1234 56789</p>
				<p>Email: <a href="mailto::username@domain.com">username@domain.com</a></p>
			</div>
			<div id="quick-links" class="sector">
				<h1>Quick Links</h1>
				<a href="#">Our specialities</a>
				<hr class="sep">
				<a href="#">Our wonderful staff</a>
				<hr class="sep">
				<a href="#">Make a reservation</a>
				<hr class="sep">
				<a href="#">Order now</a>
				<hr class="sep">
			</div>
			<div id="from-the-blog" class="sector">
				<h1>From The Blog</h1>
				<pre>
<strong>Preparing Tuna Fish</strong>
<small>Posted by </small>Admin on 00.00.0000
This is usually a coast side 
dish with the calories needed
to last throughout the day
        </pre>
				<a href="#" style="float: right;">See More &#187;</a>
			</div>
			<div id="newsletter" class="sector">
				<h1>Newsletter</h1>
				<input type="text" placeholder="Name">
				<input type="text" placeholder="Email">
				<input type="submit" style="font-weight: bold;">

			</div>
		</div>
		<div class="end-footer">
			<p>Copyright &copy; <sub>2013</sub> Domain Name - All Rights Reserved</p>
			<p>Made By Group 10</p>
		</div>

	</footer>



	<script src="https://code.jquery.com/jquery-3.5.1.min.js"
		integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

	<script type="text/javascript">
		function validateForm() {
			if (isEmpty(document.getElementById('data_3').value.trim())) {
				alert('Name is required!');
				return false;
			}
			if (!validateEmail(document.getElementById('data_5').value.trim())) {
				alert('Email must be a valid email address!');
				return false;
			}
			if (isEmpty(document.getElementById('data_6').value.trim())) {
				alert('Date is required!');
				return false;
			}
			if (isEmpty(document.getElementById('data_7').value.trim())) {
				alert('Time is required!');
				return false;
			}
			return true;
		}

		function isEmpty(str) {
			return (str.length === 0 || !str.trim());
		}

		function validateEmail(email) {
			var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
			return isEmpty(email) || re.test(email);
		}
	</script>




	<!-- Change Color Based on Time -->
	<script>
		function updateBackground() {
			var
				hr = (new Date()).getHours(),
				body = document.body,
				bstyle = body.style,
				headertopstyle = document.querySelector('.social-top'),
				headertitle = document.querySelector('.homepage-description h1'),
				headerdescription = document.querySelector('.homepage-description p'),
				footer = document.querySelector('.main-footer');

			if (hr < 8) {
				bstyle.backgroundColor = '#FFFFFF';
				headertopstyle.style.backgroundColor = '#FFFFFF';
				headertitle.style.color = '#3d3d3d';
				headerdescription.style.color = '#3d3d3d';
				// footer.style.backgroundColor = '#FFFFFF';
				bstyle.color = '#3d3d3d';
				document.querySelectorAll('.nav-item a').forEach(function (element) {
					element.style.color = '#3d3d3d';
				});
				document.querySelector('.mb-4').style.color = '#3d3d3d';
			} else if (hr > 8 && hr < 19) {
				bstyle.backgroundColor = '#FFFFFF';
				headertopstyle.style.backgroundColor = '#FFFFFF';
				headertitle.style.color = '#3d3d3d';
				headerdescription.style.color = '#3d3d3d';
				// footer.style.backgroundColor = '#FFFFFF';
				bstyle.color = '#a9a9a9';
				document.querySelectorAll('.nav-item a').forEach(function (element) {
					element.style.color = '#3d3d3d';
				});
				document.querySelector('.mb-4').style.color = '#3d3d3d';
			} else {
				bstyle.backgroundColor = '#3d3d3d';
				headertopstyle.style.backgroundColor = '#3d3d3d';
				headertitle.style.color = '#FFFFFF';
				headerdescription.style.color = '#FFFFFF';
				// footer.style.backgroundColor = '#000000';
				bstyle.color = '#FFFFFF';
				document.querySelectorAll('.nav-item a').forEach(function (element) {
					element.style.color = '#FFFFFF'
				});
				document.querySelector('.mb-4').style.color = '#FFFFFF';
				document.querySelectorAll('.dropdown-content').forEach(function (element) {
					element.style.backgroundColor = '#CCC'
				});
			}
		}

		setInterval(updateBackground, 1000 * 60);
		updateBackground();
	</script>

	<!-- Add NAV LINK ACTIVE CLASS FOR ACTIVE MENU PAGE 
  <script>
    $(document).ready(function () {
        var url = window.location.href;
        let me = $('ul#menu li a');
        $(me).map(function(idx, elem) {
          if(url.includes($(elem).attr("href"))){
            $(elem).addClass("nav-link-active");
          }
        });
      }
    );
  </script> -->
	</div>
	</div>
	</main>
</body>

</html>