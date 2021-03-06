<!DOCTYPE html>
<html lang="en" manifest="https://ndriqa.github.io/PWWW20-21_Gr10/reservations.html">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="style/style_reservation.css">
  <link rel="stylesheet" type="text/css" href="style/style.css">

  <title>Reservations</title>

  <style>
    .mb-5it {
      column-count: 3;
      column-gap: 40px;
      column-rule-style: solid;

    }

    .fixed-bg {
      background-image: url("Images/reservation/res.jfif");
      min-height: 300px;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .fixed-bg-2 {
      background-image: url("Images/reservation/eating.jfif");
      min-height: 300px;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
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
          <li class="nav-item"><a class="nav-link" href="meny.php">MENU </a></li>
          <li class="nav-item"><a class="nav-link" href="order.php">ORDER NOW </a></li>
          <li class="nav-item"><a class="nav-link nav-active" href="reservations.html">RESERVATION </a></li>
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
    <hr class="separator">

  </header>

  <main>
    <div class="container">
      <br>
      <section class="main-slider">
        <div class="container">
          <div class="slider-container w3-content w3-display-container">
            <div class="slider-display-container mySlides">
              <img src="Images/reservation/restaurant.jfif" class="" alt="">
              <div class="slider-display-bottomleft w3-large w3-container w3-padding-16 w3-black">

              </div>
            </div>

            <div class="slider-display-container mySlides">
              <img src="Images/reservation/pancake-background.jfif" class="" alt="">
              <div class="slider-display-bottomleft w3-large w3-container w3-padding-16 w3-black">

              </div>
            </div>

            <div class="slider-display-container mySlides">
              <img src="Images/reservation/cheers.jfif" class="" alt="">
              <div class="slider-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
              </div>
            </div>

            <div class="w3-container w3-large w3-text-white slider-display-bottommiddle" style="width:100%">
              <span class="slider-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
              <span class="slider-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
              <span class="slider-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
        </div>
      </section>


      <div class="col-md-7 text-center heading-section ftco-animate fadeInUp ftco-animated">
        <span class="subheading">Make a Reservation NOW!</span>
        <h2 class="mb-4" style="margin-bottom: 1.5rem">Have fun!</h2>

      </div>
      <div class="fixed-bg"></div>

      <div class="reservation-form">

        <div style="height:800px;background-color:white;">


          <form action="reservationForm.php" method="POST" onSubmit="return validateForm();">
            <br>
            <div id='name' style="padding-bottom: 18px;font-size : 18px;">We would be glad to reserve a table for you at
              our
              restaurant!</div>
            <div id='name' style="padding-bottom: 18px;">Name<span style="color: red;"> *</span><br />
              <input type="text" id="data_3" name="data_3" style="max-width : 400px;" class="form-control" />
            </div>
            <div id='name' style="padding-bottom: 18px;">Surname<br />
              <input type="text" id="data_4" name="data_4" style="max-width : 400px;" class="form-control" />
            </div>
            <div id='name' style="padding-bottom: 18px;">Phone<br />
              <input type="text" id="data_5" name="data_5" style="max-width : 400px;" class="form-control" />
            </div>
            <div id='name' style="padding-bottom: 18px;">Email<br />
              <input type="text" id="data_6" name="data_6" style="max-width : 400px;" class="form-control" />
            </div>
            <div id='name' style="padding-bottom: 18px;">Date<span style="color: red;"> *</span><br />
              <input type="text" id="data_7" name="data_7" style="max-width : 250px;" class="form-control" />
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.4.0/pikaday.min.js" type="text/javascript">
            </script>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.4.0/css/pikaday.min.css" rel="stylesheet"
              type="text/css" />
            <script type="text/javascript">
              new Pikaday({
                field: document.getElementById('data_7')
              });
            </script>
            <div id='name' style="padding-bottom: 18px;">Time<span style="color: red;"> *</span><br />
              <input type="text" id="data_8" name="data_8" style="max-width : 250px;" class="form-control" />
            </div>
            <div id='name' style="padding-bottom: 18px;">Number of Attendees<span style="color: red;"> *</span><br />
              <select id="data_9" name="data_9" style="max-width : 250px;" class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>10+ (Specify in Comments)</option>
              </select>
            </div>
            <div id='name' style="padding-bottom: 18px;">Comments / Additional Requests<br />
              <textarea id="data_10" false name="data_10" style="max-width : 400px;" rows="6"
                class="form-control"></textarea>
            </div>

            <input type="hidden" name="form_submitted" value="1" />

            <input type="submit" value="Submit">

          </form>
        </div>
        <!--<div>
                <p id="p1">"We???ve been told numerous times that our cooking is 'feminine,' which people always intend as a compliment. We???re happy to be identified with femaleness, as strong and proud women, but the masculine/feminine binary has no legitimate place in culinary expression or its criticism. It???s an artificial construct we???d be happy to see done away with." </p>
            </div> -->
        <div>
          <img style="padding:  200px" src="Images/reservation/chef.png">
        </div>
      </div>


      <script type="text/javascript">
        function validateForm() {
          if (isEmpty(document.getElementById('data_3').value.trim())) {
            alert('Name is required!');
            return false;
          }
          if (!validateEmail(document.getElementById('data_6').value.trim())) {
            alert('Email must be a valid email address!');
            return false;
          }
          if (isEmpty(document.getElementById('data_7').value.trim())) {
            alert('Date is required!');
            return false;
          }
          if (isEmpty(document.getElementById('data_8').value.trim())) {
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
      <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {
            slideIndex = 1
          }
          if (n < 1) {
            slideIndex = slides.length
          }
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex - 1].style.display = "block";
          gi
          dots[slideIndex - 1].className += " active";
        }
      </script>


        
      <p id="Note">BEST RESTAURANT IN TOWN <strong>Note:</strong> Try every food.</p>

      <div class="fixed-bg-2"></div>

      <div style="height:200px;background-color:white;">



      </div>
      <!-- Please refer: https://github.com/shubhamjain/svg-loader -->
      <svg data-src="https://s.svgbox.net/loaders.svg?ic=bars" width="32" height="32" fill="currentColor"></svg>


      <div class="mb-5">
        A restaurant , or an eatery, is a business that prepares and serves food and drinks to customers. Meals are
        generally served and eaten on the premises, but many restaurants also offer take-out and food delivery services.
        Restaurants vary greatly in appearance and offerings, including a wide variety of cuisines and service models
        ranging from inexpensive fast food restaurants and cafeterias, to mid-priced family restaurants, to high-priced
        luxury establishments.

        In Western countries, most mid-to high-range restaurants serve alcoholic beverages such as beer and wine. Some
        restaurants serve all the major meals, such as breakfast, lunch, and dinner (e.g., major fast food chains,
        diners, hotel restaurants, and airport restaurants). Other restaurants may serve only a single meal (for
        example, a pancake house may only serve breakfast) or they may serve two meals (e.g., lunch and dinner).
      </div>
      <section class="booking">
        <div class="booking-1">
          <div class="booking-2">
            <div class="booking-3">
              <h2 id="delicious">We Make Delicious &amp; Nutritious Food <br> <a href="#" class="booking_link">Book A
                  Table Now</a></h2>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
  <script>
    var slideIndexe = 0;
    showDives();

    function showDives() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      var y = document.getElementsByClassName("demo");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      slideIndexe++;
      if (slideIndexe > x.length) {
        slideIndexe = 1
      }
      for (i = 0; i < y.length; i++) {
        y[i].className = y[i].className.replace(" w3-white", "");
      }
      x[slideIndexe - 1].style.display = "block";
      y[slideIndexe - 1].className += "  w3-white";
      setTimeout(showDives, 4000); // Change image every 4 seconds
    }
  </script>
  <!-- SLIDER -->
  <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentDiv(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " w3-white";
    }
  </script>
  <script>
    $(document).ready(function () {
      var url = window.location.href;
      let me = $('ul#menu li a');
      $(me).map(function (idx, elem) {
        if (url.includes($(elem).attr("href"))) {
          $(elem).addClass("nav-link-active");
        }
      });
    });
  </script>




  <!-- Change Color Based on Time -->
  <script>
    function updateBackground() {
      var
        hr = (new Date()).getHours(),
        body = document.body,
        bstyle = body.style,
        headertopstyle = document.querySelector('.social-top'),
        formstyle = document.querySelector('.forma #name'),
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
        document.querySelector('.mb-5').style.color = '#3d3d3d';
      } else if (hr > 8 && hr < 19) {
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
        document.querySelector('.mb-5').style.color = '#3d3d3d';
      } else {
        bstyle.backgroundColor = '#3d3d3d';
        headertopstyle.style.backgroundColor = '#3d3d3d';
        headertitle.style.color = '#FFFFFF';
        headerdescription.style.color = '#FFFFFF';
        // footer.style.backgroundColor = '#000000';
        bstyle.color = '#3d3d3d';
        document.querySelectorAll('.nav-item a').forEach(function (element) {
          element.style.color = '#FFFFFF'
        });
        document.querySelector('.mb-4').style.color = '#FFFFFF';
        document.querySelector('.mb-5').style.color = '#FFFFFF';
        document.querySelectorAll('.dropdown-content').forEach(function (element) {
          element.style.backgroundColor = '#CCC'
        });
      }
    }

    setInterval(updateBackground, 1000 * 60);
    updateBackground();
  </script>

  <!-- Add NAV LINK ACTIVE CLASS FOR ACTIVE MENU PAGE -->
  <script>
    $(document).ready(function () {
      var url = window.location.href;
      let me = $('ul#menu li a');
      $(me).map(function (idx, elem) {
        if (url.includes($(elem).attr("href"))) {
          $(elem).addClass("nav-link-active");
        }
      });
    });
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