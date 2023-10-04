<?php include 'header.php';?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="/css/styless.css">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  </head>
  <body>


  
  
  <br><br><br>
<center>
  <div class="center-title">
  <h1> Loetje </h1>
  </div>
<div class="center-txt"> 
  <h6> Zeg je Loetje, dan zeg je de lekkerste biefstuk.<br> Op no-nonsense wijze geserveerd in échte Loetje jus. Met witbrood, een royaal portie friet en salade.<br> Naast deze klassiekers hebben we bij Loetje nog veel meer lekkers op de kaart. Lunch, vis, vegetarisch en zeker ook toetjes. Er is niks zo lekker als Loetje.</h6>
  </div>
</center>
<br>

    <div class="container-fluid">
      <div id="myCarousel" class="owl-carousel owl-theme my-3">
        <div class="card shadow my-3">
          <img
            src="/img/slider.jpg"
            class="card-img-top"
            height="300"
            alt="Image 1"
          />
          <div class="card-body">
            <h5 class="card-title">Card 1</h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
          </div>
        </div>
        <div class="card shadow my-3">
          <img
            src="/img/slider1.jpg"
            class="card-img-top"
            alt="Image 2"
            height="300"
          />
          <div class="card-body">
            <h5 class="card-title">Card 2</h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
          </div>
        </div>
        <div class="card shadow my-3">
        <img
          src="/img/slider2.jpg"
          class="card-img-top"
          alt="Image 2"
          height="300"
        />
        <div class="card-body">
          <h5 class="card-title">Card 3</h5>
          <p class="card-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>
      </div>
      <div class="card shadow my-3">
      <img
        src="/img/slider3.jpg"
        class="card-img-top"
        alt="Image 2"
        height="300"
      />
      <div class="card-body"> 
        <h5 class="card-title">Card 2</h5>
        <p class="card-text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
      </div>
    </div>
    <div class="card shadow my-3">
    <img
      src="/img/download.jpg"
      class="card-img-top"
      alt="Image 2"
      height="300"
    />
    <div class="card-body">
      <h5 class="card-title">Card 2</h5>
      <p class="card-text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      </p>
    </div>
  </div>
        <!-- Add more cards as needed -->
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
      $(document).ready(function () {
        $('#myCarousel').owlCarousel({
          items: 4,
          autoplay:true,
          autoplayTimeout:3500,
          autoplayHoverPause:true,
          loop: true, 
          margin: 20, 
          nav: true, 
          navText: [
            "<i class='fas fa-chevron-left'></i>",
            "<i class='fas fa-chevron-right'></i>",
          ], // Custom navigation icons
          responsive: {
            0: {
              items: 1,
            },
            768: {
              items: 2, 
            },
            992: {
              items: 3,
            },
          },
        });
      });
      
    </script>
  </body>
</html>




<?php include 'footer.php';?>


