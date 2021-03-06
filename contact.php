<!DOCTYPE html>
<html lang="en" manifest="https://ndriqa.github.io/PWWW20-21_Gr10/contact.html">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="style/contact.css">
  <link rel="stylesheet" href="./style/style.css">
  <title>Freshness</title>
  <script src="./js/contact.js"></script>

  <!--for testing purposes-->
  <!-- <meta http-equiv="refresh" content="1"> -->

  <!--needed font-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT&display=swap&weight=200" rel="stylesheet">
</head>

<body>
   <!--HEADER STUFF-->
   <header >
    <div class="social-top">
      <div class="social-top-content">
        <div class="social-icons">
          <a href="https://www.linkedin.com/"
            ><i class="fab fa-linkedin-in"></i
          ></a>
          <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
          <a href="https://www.pinterest.com/"
            ><i class="fab fa-pinterest"></i
          ></a>
          <a href="https://www.google.com/"
            ><i class="fab fa-google-plus-g"></i
          ></a>
          <a href="https://www.rss.com"><i class="fas fa-rss-square"></i></a>
        </div>

        <div>
          <input type="text"
            name=""id="searchBox"placeholder="Search Our Website...."/>
          <input type="submit" value="SEARCH" />
        </div>
      </div>
    </div>

    <div class="the-header">
      <div class="homepage-description">
        <h1>Freshness</h1>
        <p>Eat healthy, eat fresh!</p>
      </div>

      <nav class="header-nav-bar ">
        <ul id="menu">
          <li class="nav-item"><a class="nav-link " href="./index.php" >HOME</a> </li>
          <li class="nav-item"><a class="nav-link " href="./about.php" >ABOUT US </a></li>
          <li class="nav-item"><a class="nav-link " href="./meny.php" >MENU </a></li>
          <li class="nav-item"><a class="nav-link " href="./order.php" >ORDER NOW </a></li>
          <li class="nav-item"><a class="nav-link " href="./reservations.php" >RESERVATION </a></li>
          <li class="nav-item">
            <div class="dropdown">
              <a>OUR STAFF</a>
              <div class="dropdown-content">
                <a href="./board.php" class="nav-link " >BOARD</a> <hr>
                <a href="./chefs.php" class="nav-link " >CHEFS</a>
              </div>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link nav-active" href="./contact.php">CONTACT </a></li>
        </ul>
      </nav> 
    </div>
  </header>

  <hr class="separator"/>
   <!--ACTUAL PAGE STUFF-->
   <main>
    <div class="container">
     
      <section class="section1">
        <div class="sec1title">
          <h1 class="text-message">Get in touch</h1>
        </div>
      </section>
      
      <?php require_once("validator/ContactValidator.php");

    function showError($field, $text){
        if(isset($GLOBALS["errors"]) && isset($GLOBALS["errors"][$field]))
        {
            $errors = $GLOBALS["errors"];
            echo $errors[$field] . '" style= "border: 1px solid red; ';
        }
        else
        {
            $temp = "";

            if(isset($_POST[$field]))
            {
                $temp = $_POST[$field];
            }
            echo $text . '" value="'.$temp.'"';
        }
    }?>
    <script>
    function showTime() {
            var date = new Date();
            alert("Current time is: " + date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds() + "\nHave a nice day!");
        }
    </script>
    <div class ="showTime" >
<input type="button" onclick="showTime();" value="Show time"
            style="color: #E2494C; font-size: 
                  18px;text-decoration: underline; 
                  border-radius: 7px;width: 100px; margin-top: 40px;height: 35px; margin-bottom: 15px;position:absolute;right: 13em;" />
      </div>
      
      <div class="wrapper">
      
        <!-- RESTAURANT INFORMATION -->
        <div class="company-info">
          <h3>Freshness restaurant</h3>

          <ul>
            <li><i class="fa fa-road"></i> 44,Dardania, Prishtine</li>
            <li><i class="fa fa-phone"></i> (555) 555-5555</li>
            <li><i class="fa fa-envelope"></i> test@gmail.com</li>
          </ul>
        </div>
        
    

        <!-- CONTACT FORM -->
        <div class="contact">
          <h3 id="emailus">E-mail Us</h3>
          <h4 class="sent-notification"></h4>
          <form method="post" id="contact-form" autocomplete="on" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>">
            <p>
              <label for ="name">Name</label>
              <input class="name" type="text" name="name" id="name" placeholder="<?php showError('name', "First Name") ?>" required />
            </p>

            <p>
              <label for="lastname">Last Name</label>
              <input class="name" type="text" name="lname" id="lname" placeholder="<?php showError('lname', "Last Name") ?>" required  />
            </p>

            <p>
              <label for="email">E-mail Address</label>
              <input class="" type="email" name="email" id="email" placeholder="<?php showError('email', "Email") ?>" required/>
            </p>

            <p>
              <label for="phone">Phone Number</label>
              <input type="text" name="phone" id="phone" placeholder="<?php showError('phone', "Phone Number")?>" required />
            </p>
            
            <p class="full">
              <label for ="message">Message</label>
              <textarea class="" name="message"  rows="6" id="message" required placeholder="<?php showError('message', "Comments/Questions") ?>" ></textarea>
            </p>
            <form action="php/uploadFile.php" enctype="multipart/form-data" method="post" style="margin:20px 430px ;" required>
<label>Upload a file with your preferences:</label>


    <input type="file" name="uploadedfile"  />
    <!-- <input type="submit" value="Edit" name="editFile" style="background-color: #10498f;
    border: none;
    border-radius: 7px;
    color: #E7FFFD;
    font-size: 0.7em;
    text-decoration: none;
    cursor: pointer;
    width: 70px;
    height: 35px;
   " /> -->
  
   

            <p class="full">
              <button type="submit" name="submit" id="submit"  style="border: none;
    border-radius: 7px;
    color: #E7FFFD; 
    font-size:15px;
    border-radius: 7px;
    text-decoration: none;
    cursor: pointer;
    width: 100px;
    height: 55px;">Submit</button>
              <span style="color:red;" id="msg"></span>
            </p>
          </form></form>


          <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
          <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script>
	  jQuery('#contact-form').on('submit',function(e){
		jQuery('#msg').html('');
		jQuery('#submit').html('Please wait');
		jQuery('#submit').attr('disabled',true);
		jQuery.ajax({
			url:'mail.php',
			type:'POST',
			data:jQuery('#contact-form').serialize(),
      /*data: {
                       name: name.val(),
                       lname: lname.val(),
                       phone: phone.val(),
                       email: email.val(),
                       message: message.val(),
                       //body: body.val()
                   }*/
			success:function(result){
				jQuery('#msg').html(result);
				jQuery('#submit').html('Submit');
				jQuery('#submit').attr('disabled',false);
				jQuery('#contact-form')[0].reset();
        jQuery('#contact-form').text("Message Sent Successfully! Thank you for contacting us.");
			}
		});
		e.preventDefault();
	  });

    <?php 
    if (empty($_POST["phone"])&&(is_numeric($_POST["phone"]))) {
    $error .="Phone is required<br/>";
  } else {                  
               $phone = $_POST["phone"];
            }
            ?>
	  </script>

          <!-- End #contact-form -->
        </div>
        <!-- End .contact -->
      </div>
      <!-- End .wrapper -->
    </div>


    <section class="sectionn2">
      <div class="sec2title">
        <h2 class="text-message">Location (Get directions)</h2>
      </div>
    </section>
    <div class="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.055664781214!2d21.15491881476714!3d42.660175779167844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ee450c067bd%3A0x48d1a1d6f2a611ab!2sGaribaldi%2C%20Prishtin%C3%AB!5e0!3m2!1sen!2s!4v1609528684110!5m2!1sen!2s"
        width="1142"
        height="450"
        frameborder="0"
        style="border: 0"
        allowfullscreen=""
        aria-hidden="false"
        tabindex="0"
      ></iframe>
    </div>
    
    <div class="feedback">
      <h1 class="text-message">Give us your feedback</h1>
      <div id="dragdrop1" class="drag-area" ondrop="drop(event)" ondragover="allowDrop(event)">
        <img id="happy" draggable="true" ondragstart="drag(event)" src="./Images/contact/feedback/smiling.png">
        <img id="normal" draggable="true" ondragstart="drag(event)" src="./Images/contact/feedback/confused.png">
        <img id="sad" draggable="true" ondragstart="drag(event)" src="./Images/contact/feedback/sad.png">
      </div>
      <div id="dragdrop2" class="drop-area" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
      <div class="drag-info">
        <p>Drag & Drop</p>
        <img src="./Images/contact/feedback/dragdrop.gif" alt="">
      </div>
      <div class="text-area">
      <form action="openFile.php" method="post">
        <div class="text-field">
          <label for="feedback-text">Feedback:</label>
          <textarea name="feedback-text" id="feedback-text" cols="30" rows="8"></textarea>
        </div>
        <div class="submit-field">
          <label for="the-name">Name: </label>
          <input type="text" name="the-name" id="the-name">
          <button type="submit"id="submit-feedback">Submit</button>
        </div>
        </form>

      </div>
    </div>
    <br>
    <div class="section3">
      <h2 class="text-message">You can follow us here: </h2>
    <div class="our-socials">
        <div class="social"><a href="https://www.facebook.com" target="_blank"><img src="Images/contact/icons/facebook.png" ></a></div>
        <div class="social"><a href="https://www.youtube.com" target="_blank"><img src="Images/contact/icons/youtube.png"></a></div>
        <div class="social"><a href="https://www.twitter.com" target="_blank"><img src="Images/contact/icons/twitter.png"></a></div>
        <div class="social"><a href="https://www.pinterest.com" target="_blank"><img src="Images/contact/icons/pinterest.png"></a></div> 
    </div>    
  </div>
  
    <!-- End .container -->
  </main>
  <br>
 <!-- Change Color Based on Time --> 
 <script>
  function updateBackground() {
  var 
  hr = (new Date()).getHours(),
  body = document.body,
  bstyle = body.style,
  headertopstyle = document.querySelector('.social-top'),
      formstyle = document.querySelector('.feedback text-message'),
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
    document.querySelectorAll('.nav-item a').forEach(function(element) { element.style.color = '#3d3d3d'; });
    document.querySelector('.mb-4').style.color = '#3d3d3d';
          document.querySelector('.mb-5').style.color = '#3d3d3d';
  } else if (hr > 8 && hr < 19) {
    bstyle.backgroundColor = '#FFFFFF';
    headertopstyle.style.backgroundColor = '#FFFFFF';
    headertitle.style.color = '#3d3d3d';
    headerdescription.style.color = '#3d3d3d';
    // footer.style.backgroundColor = '#FFFFFF';
    bstyle.color = '#3d3d3d';
    document.querySelectorAll('.nav-item a').forEach(function(element) { element.style.color = '#3d3d3d'; });
    document.querySelector('.mb-4').style.color = '#3d3d3d';
          document.querySelector('.mb-5').style.color = '#3d3d3d';
  } else {
    bstyle.backgroundColor = '#3d3d3d';
    headertopstyle.style.backgroundColor = '#3d3d3d';
    headertitle.style.color = '#FFFFFF';
    headerdescription.style.color = '#FFFFFF';
    // footer.style.backgroundColor = '#000000';
    bstyle.color = '#000';
    document.querySelectorAll('.nav-item a').forEach(function(element) { element.style.color = '#FFFFFF' });
    document.querySelector('.mb-4').style.color = '#FFFFFF';
          document.querySelector('.mb-5').style.color = '#FFFFFF';
    document.querySelectorAll('.dropdown-content').forEach(function(element) { element.style.backgroundColor = '#CCC'});
  } 
}

  setInterval(updateBackground, 1000 * 60);
  updateBackground();
</script>




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
</body>

</html>

