<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>PARK ME</title>



  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Roboto:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <?php
    session_start();
  ?>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <span>
              ParkMe.
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="feature.html"> Features </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.html"> Services </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact us</a>
                </li>
                <?php if(!isset($_SESSION["id"])) { ?>
                <li class="nav-item">
                  <a class="nav-link" href="Login.php">Login</a>
                </li>
                <?php } else { ?>
                  <li class="nav-item">
                  <a class="nav-link" href="map/">Login</a>
                </li>
                <?php } ?>
                <?php if(!isset($_SESSION["id"])) { ?>
              <li class="nav-item">
                  <a class="nav-link" href="Register.php">Register</a>
                </li>
                <?php } else { ?>
                  <li class="nav-item">
                  <a class="nav-link" href=""></a>
                </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>


    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="detail-box">
                <h1>

                Effortless Parking Solutions <br>
                Your Spot Awaits!
                </h1>
                <p>
                ParkMe simplifies parking. Find your spot seamlessly with our user-friendly system. Your convenience, our priority. ParkMe – stress-free parking
                </p>
                <div>
                  <a href="">
                    Contact us
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="detail-box">
                <h1>

                  The Best <br>
                  Deals For Parking lots
                </h1>
                <p>
                Discover unbeatable deals at ParkMe your go-to destination for the best parking rates. Convenience meets affordability for seamless parking experiences.
                </p>
                <div>
                  <a href="">
                    Contact us
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- find section -->
  <section class="find_section">
    <div class="container">
      <form action="">
        <div class=" form-row">
          <div class="col-lg-3">
            <p>Select Your Own Parking Slot</p>
          <div class="col-lg-3">
            <div class="btn-container">
              <button type="submit" class="">
                Find A Slot 
              </button>
            </div>
          </div>
        </div>

      </form>
    </div>
  </section>

  <!-- end find section -->

  <!-- feature section -->
  <section class="feature_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="images/money.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Save Money
              </h5>
              <p>
              Unlock exclusive deals and affordable parking rates at ParkMe, ensuring you save more while enjoying convenient and secure parking
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="images/clock.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Save Time
              </h5>
              <p>
              Say goodbye to endless circling. ParkMe streamlines your parking experience, saving you valuable time with quick and efficient spot discovery
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="images/man.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Save Stress
              </h5>
              <p>
              Experience stress-free parking with ParkMe's intuitive system. No more worries—find, book, and park seamlessly for a hassle-free journey
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end feature section -->

  <!-- why section -->
  <section class="why_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Why Choose Us
              </h2>
            </div>

            <p>
            Choose ParkMe for a transformative parking experience. Our user-friendly platform, unbeatable deals, 
            and robust security redefine convenience. Enjoy seamless parking, exclusive discounts, and the assurance of stress-free journeys. 
            Trust ParkMe for a smarter, more efficient way to park.
            </p>
            <div>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-container">
            <div class="row">
              <div class="col-sm-6">
                <div class="img-box">
                  <img src="images/w-1.jpg" alt="">
                  <a href="">
                    <img src="images/link.png" alt="">
                  </a>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="img-box">
                  <img src="images/w-2.jpg" alt="">
                  <a href="">
                    <img src="images/link.png" alt="">
                  </a>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="img-box">
                  <img src="images/w-3.jpg" alt="">
                  <a href="">
                    <img src="images/link.png" alt="">
                  </a>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="img-box">
                  <img src="images/w-4.jpg" alt="">
                  <a href="">
                    <img src="images/link.png" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end why section -->

  <!-- service section -->

  <section class="service_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Services
        </h2>
      </div>
      <p>
      At ParkMe, we revolutionize your parking experience with three key services. Discover available parking slots effortlessly, thanks to our intuitive platform. Navigate with ease using our detailed car parking maps, ensuring you always find your spot. Rest easy with our top-notch car security features, guaranteeing the safety of your vehicle.
      </p>
      <div class="box">
        <div class="img-box">
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="355.555px" height="355.555px" viewBox="0 0 355.555 355.555" style="enable-background:new 0 0 355.555 355.555;" xml:space="preserve">
            <g>
              <g>
                <path d="M107.412,266.641c-15.434,0-27.941,12.502-27.941,27.938s12.508,27.938,27.941,27.938
                   c15.438,0,27.942-12.502,27.942-27.938S122.85,266.641,107.412,266.641z M107.412,306.724c-6.71,0-12.146-5.437-12.146-12.146
                   c0-6.713,5.436-12.146,12.146-12.146c6.709,0,12.149,5.434,12.149,12.146C119.561,301.287,114.121,306.724,107.412,306.724z" />
                <path d="M232.203,266.641c-15.432,0-27.939,12.502-27.939,27.938s12.508,27.938,27.939,27.938
                   c15.439,0,27.943-12.502,27.943-27.938S247.643,266.641,232.203,266.641z M232.203,306.724c-6.709,0-12.145-5.437-12.145-12.146
                   c0-6.713,5.436-12.146,12.145-12.146c6.711,0,12.15,5.434,12.15,12.146C244.354,301.287,238.914,306.724,232.203,306.724z" />
                <path d="M284.574,216.828c-12.17-3.164-22.572-12.893-27.352-22.123l-16.838-32.348c-4.779-9.228-17.191-16.779-27.585-16.779
                   h-98.77c-10.393,0-21.631,8.051-24.974,17.891l-10.313,30.354c-1.016,4.014-7.703,24.037-21.657,24.037
                   c-10.393,0-21.803,13.694-21.803,24.086v35.902c0,10.393,8.502,18.896,18.896,18.896h19.44c-0.046-0.717-0.076-1.438-0.076-2.166
                   c0-18.674,15.192-33.864,33.867-33.864c18.676,0,33.87,15.19,33.87,33.864c0,0.728-0.031,1.449-0.077,2.166h57.208
                   c-0.045-0.717-0.076-1.438-0.076-2.166c0-18.674,15.193-33.864,33.867-33.864c18.676,0,33.871,15.19,33.871,33.864
                   c0,0.728-0.031,1.449-0.078,2.166h35.377c10.395,0,18.896-8.504,18.896-18.896v-28.16
                   C320.27,219.453,294.676,219.453,284.574,216.828z M139.654,212.318H85.169c2.99-4.656,4.616-9.729,5.046-11.424l8.725-25.679
                   c2.827-8.324,12.335-15.135,21.127-15.135h19.588L139.654,212.318L139.654,212.318z M158.436,212.318v-52.238h45.187
                   c8.792,0,19.292,6.388,23.336,14.194l14.244,27.368c1.902,3.674,4.869,7.436,8.541,10.674h-91.308V212.318z" />
                <path d="M332.77,33.039H22.784C10.221,33.039,0,43.26,0,55.823v229.692c0,3.86,3.141,7,7,7c3.86,0,7-3.14,7-7V55.823
                   c0-4.844,3.94-8.784,8.784-8.784H332.77c4.844,0,8.785,3.94,8.785,8.784v229.692c0,3.86,3.141,7,7,7c3.857,0,7-3.14,7-7V55.823
                   C355.555,43.26,345.334,33.039,332.77,33.039z" />
                <path d="M264.926,102.794c0,2.762,2.236,5,5,5c2.762,0,5-2.238,5-5v-10c0-2.761-2.238-5-5-5c-2.764,0-5,2.239-5,5V102.794z" />
                <path d="M264.926,132.794c0,2.762,2.236,5,5,5c2.762,0,5-2.238,5-5v-10c0-2.761-2.238-5-5-5c-2.764,0-5,2.239-5,5V132.794z" />
                <path d="M269.926,77.794c2.762,0,5-2.238,5-5v-10c0-2.761-2.238-5-5-5c-2.764,0-5,2.239-5,5v10
                   C264.926,75.556,267.164,77.794,269.926,77.794z" />
                <path d="M264.926,162.794c0,2.762,2.236,5,5,5c2.762,0,5-2.238,5-5v-10c0-2.761-2.238-5-5-5c-2.764,0-5,2.239-5,5V162.794z" />
                <path d="M316,177.794c-2.76,0-5,2.239-5,5v10c0,2.762,2.24,5,5,5c2.764,0,5-2.238,5-5v-10
                   C321,180.033,318.762,177.794,316,177.794z" />
                <path d="M316,87.794c-2.76,0-5,2.239-5,5v10c0,2.762,2.24,5,5,5c2.764,0,5-2.238,5-5v-10C321,90.033,318.762,87.794,316,87.794z" />
                <path d="M316,57.794c-2.76,0-5,2.239-5,5v10c0,2.762,2.24,5,5,5c2.764,0,5-2.238,5-5v-10C321,60.033,318.762,57.794,316,57.794z" />
                <path d="M316,147.794c-2.76,0-5,2.239-5,5v10c0,2.762,2.24,5,5,5c2.764,0,5-2.238,5-5v-10
                   C321,150.033,318.762,147.794,316,147.794z" />
                <path d="M316,117.794c-2.76,0-5,2.239-5,5v10c0,2.762,2.24,5,5,5c2.764,0,5-2.238,5-5v-10
                   C321,120.033,318.762,117.794,316,117.794z" />
                <path d="M85.629,77.794c2.761,0,5-2.238,5-5v-10c0-2.761-2.239-5-5-5c-2.763,0-5,2.239-5,5v10
                   C80.629,75.556,82.866,77.794,85.629,77.794z" />
                <path d="M80.629,102.794c0,2.762,2.237,5,5,5c2.761,0,5-2.238,5-5v-10c0-2.761-2.239-5-5-5c-2.763,0-5,2.239-5,5V102.794z" />
                <path d="M80.629,132.794c0,2.762,2.237,5,5,5c2.761,0,5-2.238,5-5v-10c0-2.761-2.239-5-5-5c-2.763,0-5,2.239-5,5V132.794z" />
                <path d="M218.852,102.794c0,2.762,2.237,5,5,5c2.762,0,5-2.238,5-5v-10c0-2.761-2.238-5-5-5c-2.763,0-5,2.239-5,5V102.794z" />
                <path d="M218.852,129.584c0,2.761,2.237,5,5,5c2.762,0,5-2.239,5-5v-6.79c0-2.761-2.238-5-5-5c-2.763,0-5,2.239-5,5V129.584z" />
                <path d="M223.852,77.794c2.762,0,5-2.238,5-5v-10c0-2.761-2.238-5-5-5c-2.763,0-5,2.239-5,5v10
                   C218.852,75.556,221.09,77.794,223.852,77.794z" />
                <path d="M177.777,77.794c2.762,0,5-2.238,5-5v-10c0-2.761-2.238-5-5-5s-5,2.239-5,5v10
                   C172.777,75.556,175.015,77.794,177.777,77.794z" />
                <path d="M172.777,129.584c0,2.761,2.238,5,5,5s5-2.239,5-5v-6.79c0-2.761-2.238-5-5-5s-5,2.239-5,5V129.584z" />
                <path d="M172.777,102.794c0,2.762,2.238,5,5,5s5-2.238,5-5v-10c0-2.761-2.238-5-5-5s-5,2.239-5,5V102.794z" />
                <path d="M131.702,77.794c2.763,0,5-2.238,5-5v-10c0-2.761-2.237-5-5-5c-2.762,0-5,2.239-5,5v10
                   C126.702,75.556,128.94,77.794,131.702,77.794z" />
                <path d="M126.702,102.794c0,2.762,2.238,5,5,5c2.763,0,5-2.238,5-5v-10c0-2.761-2.237-5-5-5c-2.762,0-5,2.239-5,5V102.794z" />
                <path d="M126.702,129.584c0,2.761,2.238,5,5,5c2.763,0,5-2.239,5-5v-6.79c0-2.761-2.237-5-5-5c-2.762,0-5,2.239-5,5V129.584z" />
                <path d="M39.552,77.794c2.762,0,5-2.238,5-5v-10c0-2.761-2.238-5-5-5c-2.761,0-5,2.239-5,5v10
                   C34.552,75.556,36.792,77.794,39.552,77.794z" />
                <path d="M34.552,102.794c0,2.762,2.239,5,5,5c2.762,0,5-2.238,5-5v-10c0-2.761-2.238-5-5-5c-2.761,0-5,2.239-5,5V102.794z" />
                <path d="M34.552,132.794c0,2.762,2.239,5,5,5c2.762,0,5-2.238,5-5v-10c0-2.761-2.238-5-5-5c-2.761,0-5,2.239-5,5V132.794z" />
                <path d="M34.552,192.794c0,2.762,2.239,5,5,5c2.762,0,5-2.238,5-5v-10c0-2.761-2.238-5-5-5c-2.761,0-5,2.239-5,5V192.794z" />
                <path d="M34.552,162.794c0,2.762,2.239,5,5,5c2.762,0,5-2.238,5-5v-10c0-2.761-2.238-5-5-5c-2.761,0-5,2.239-5,5V162.794z" />
              </g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
          </svg>

        </div>
        <div class="detail-box">
          <h5>
          Available Parking Slots:
          </h5>
          <p>
          Explore a hassle-free parking experience with ParkMe. Our platform effortlessly provides real-time information on available parking slots, ensuring you always find a convenient spot.
          </p>
          <div>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="img-box">
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <g>
              <g>
                <path d="M510.329,332.836c-0.203-0.668-0.422-1.322-0.657-1.963c-5.489-15.085-19.959-25.221-36.008-25.221
               c-4.435,0-8.819,0.773-13.034,2.297c-34.814,12.605-121.378,41.922-173.185,41.922c-13.094,0-18.181-9.793-20.103-18.657
               c34.826,0.007,50.883,0.007,53.772,0.007c17.766,0,34.087-9.258,42.594-24.16c4.034-7.063,6.166-15.182,6.166-23.48
               c0-7.922-3.365-21.639-25.904-24.491c-0.08-0.01-0.16-0.019-0.24-0.027l-127.188-12.989c-25.95-3.216-51.731,5.251-70.746,23.251
               c-11.622,11.019-27.042,13.833-47.799,14.167V262.44c0-5.523-4.477-10-10-10H10c-5.523,0-10,4.477-10,10v182.659
               c0,5.523,4.477,10,10,10h77.999c5.523,0,10-4.477,10-10v-32h32.93c21.428,0,43.167,9.422,64.188,18.534
               c20.569,8.915,39.998,17.336,59.169,17.336c0.158,0,0.316-0.004,0.475-0.011c26.976-1.282,89.594-10.517,205.878-57.957
               c9.243-3.767,18.7-7.724,28.108-11.76c0-0.001,0-0.001,0.001-0.001C506.746,371.516,516.026,351.568,510.329,332.836z
                M77.999,402.373c0,0.336,0,0.581,0,0.728v32h-19V331.262c0-5.523-4.477-10-10-10c-5.523,0-10,4.477-10,10v103.839H20V272.441
               h57.999V402.373z M480.86,360.861c-3.833,1.645-7.673,3.271-11.504,4.881l-7.103-12.518c-2.727-4.804-8.83-6.488-13.633-3.762
               c-4.803,2.726-6.487,8.829-3.762,13.632l5.87,10.344c-111.633,45.331-171.021,54.273-196.672,55.531
               c-14.974-0.077-32.469-7.66-50.986-15.686c-21.827-9.461-46.566-20.183-72.142-20.183H98c0.001-20.968,0.006-68.796,0.008-89.597
               c20.808-0.268,43.729-2.768,61.544-19.66c14.677-13.893,34.588-20.42,54.621-17.91c0.076,0.01,0.152,0.018,0.228,0.026
               l85.262,8.707v16.101c0,5.523,4.478,10,10,10c5.522,0,10-4.477,10-10v-14.059l21.912,2.238c8.301,1.067,8.301,2.881,8.301,4.635
               c0,4.893-1.189,9.456-3.534,13.563c-4.957,8.683-14.622,14.077-25.226,14.077c-3.181,0-22.319,0-64.877-0.01
               c-0.001,0-0.002,0-0.003,0c-2.676,0-5.241,1.073-7.12,2.978c-1.88,1.906-2.917,4.486-2.879,7.163
               c0.415,29.474,16.589,48.518,41.208,48.518c54.974,0,144.187-30.153,179.991-43.115c2.024-0.732,4.119-1.104,6.227-1.104
               c7.671,0,14.589,4.846,17.223,12.084c0.114,0.313,0.216,0.619,0.309,0.925C493.92,347.619,489.477,357.163,480.86,360.861z" />
              </g>
            </g>
            <g>
              <g>
                <path d="M58.799,296.31c-0.121-0.64-0.32-1.27-0.57-1.87c-0.25-0.61-0.56-1.19-0.92-1.73c-0.36-0.55-0.78-1.06-1.24-1.52
               c-0.46-0.46-0.97-0.88-1.52-1.24c-0.54-0.36-1.12-0.67-1.72-0.92c-0.61-0.25-1.24-0.44-1.88-0.57c-1.28-0.26-2.61-0.26-3.9,0
               c-0.64,0.13-1.27,0.32-1.87,0.57c-0.61,0.25-1.19,0.56-1.73,0.92c-0.55,0.36-1.06,0.78-1.52,1.24c-0.46,0.46-0.88,0.97-1.24,1.52
               c-0.36,0.54-0.67,1.12-0.92,1.73c-0.25,0.6-0.44,1.23-0.57,1.87c-0.13,0.64-0.2,1.3-0.2,1.95s0.07,1.31,0.2,1.96
               c0.13,0.63,0.32,1.26,0.57,1.87c0.25,0.6,0.56,1.18,0.92,1.72c0.36,0.55,0.78,1.06,1.24,1.52s0.97,0.88,1.52,1.25
               c0.54,0.36,1.12,0.67,1.73,0.92c0.6,0.25,1.23,0.44,1.87,0.57s1.3,0.19,1.95,0.19c0.65,0,1.31-0.06,1.95-0.19s1.27-0.32,1.88-0.57
               c0.6-0.25,1.18-0.56,1.72-0.92c0.55-0.37,1.06-0.79,1.52-1.25c0.46-0.46,0.88-0.97,1.24-1.52c0.36-0.54,0.67-1.12,0.92-1.72
               c0.25-0.61,0.45-1.24,0.57-1.87c0.13-0.65,0.2-1.31,0.2-1.96S58.929,296.95,58.799,296.31z" />
              </g>
            </g>
            <g>
              <g>
                <path d="M407.109,56.901c-39.333,0-73.672,21.768-91.621,53.884h-43.288c-2.55,0-5.004,0.974-6.859,2.724l-8.345,7.866
               l-8.343-7.866c-1.855-1.749-4.309-2.724-6.86-2.724h-17.068c-2.55,0-5.004,0.974-6.859,2.724l-8.345,7.866l-8.343-7.866
               c-1.855-1.749-4.31-2.724-6.86-2.724h-17.069c-2.55,0-5.004,0.974-6.86,2.724l-8.344,7.866l-8.344-7.866
               c-1.856-1.749-4.31-2.724-6.86-2.724h-24.332c-3.134,0-6.086,1.469-7.977,3.969l-31,41c-2.698,3.568-2.698,8.494,0,12.063l31,41
               c1.89,2.5,4.843,3.969,7.977,3.969h192.977c17.949,32.118,52.288,53.885,91.621,53.885c57.833,0,104.884-47.051,104.884-104.885
               S464.943,56.901,407.109,56.901z M127.487,192.785l-23.439-31l23.439-31h15.386l12.315,11.609c3.852,3.632,9.867,3.632,13.72,0
               l12.314-11.609h9.128l12.314,11.609c3.851,3.63,9.866,3.631,13.719,0l12.315-11.609h9.127l12.314,11.609
               c3.853,3.631,9.867,3.631,13.719,0l12.315-11.609h30.702c-1.727,5.573-2.957,11.276-3.723,17.081
               c-0.041,0.307-0.082,0.613-0.121,0.92c-0.081,0.659-0.158,1.318-0.227,1.98c-0.035,0.339-0.066,0.679-0.099,1.019H176.36
               c-5.523,0-10,4.477-10,10s4.477,10,10,10h126.344c0.032,0.34,0.063,0.68,0.099,1.019c0.069,0.661,0.146,1.321,0.227,1.98
               c0.038,0.307,0.08,0.614,0.121,0.92c0.766,5.804,1.996,11.508,3.723,17.081H127.487z M407.109,246.67
               c-45.319,0-82.455-35.699-84.769-80.453c-0.004-0.076-0.006-0.153-0.009-0.229c-0.068-1.393-0.107-2.794-0.107-4.203
               c0-1.41,0.038-2.81,0.107-4.203c0.004-0.076,0.005-0.153,0.009-0.229c2.314-44.753,39.45-80.452,84.769-80.452
               c46.805,0,84.884,38.079,84.884,84.884S453.915,246.67,407.109,246.67z" />
              </g>
            </g>
            <g>
              <g>
                <path d="M428.135,112.468c-27.194,0-49.317,22.124-49.317,49.317s22.124,49.317,49.317,49.317s49.317-22.124,49.317-49.317
               S455.329,112.468,428.135,112.468z M428.135,191.102c-16.166,0-29.318-13.152-29.318-29.318s13.152-29.318,29.318-29.318
               s29.318,13.152,29.318,29.318S444.301,191.102,428.135,191.102z" />
              </g>
            </g>
            <g>
              <g>
                <path d="M153.167,159.832c-0.13-0.64-0.32-1.27-0.57-1.87c-0.25-0.6-0.56-1.19-0.92-1.73c-0.37-0.54-0.79-1.06-1.25-1.52
               c-0.46-0.46-0.97-0.88-1.52-1.24c-0.54-0.36-1.12-0.67-1.72-0.92c-0.61-0.25-1.24-0.44-1.87-0.57c-1.29-0.26-2.62-0.26-3.91,0
               c-0.64,0.13-1.27,0.32-1.87,0.57c-0.61,0.25-1.19,0.56-1.73,0.92c-0.55,0.36-1.06,0.78-1.52,1.24c-0.46,0.46-0.88,0.98-1.24,1.52
               c-0.36,0.54-0.67,1.13-0.92,1.73s-0.44,1.23-0.57,1.87c-0.13,0.64-0.2,1.3-0.2,1.95c0,0.66,0.07,1.31,0.2,1.96
               c0.13,0.64,0.32,1.26,0.57,1.87c0.25,0.6,0.56,1.18,0.92,1.72c0.36,0.55,0.78,1.06,1.24,1.52c0.46,0.47,0.97,0.88,1.52,1.25
               c0.539,0.36,1.12,0.67,1.73,0.92c0.6,0.25,1.23,0.44,1.87,0.57s1.3,0.19,1.95,0.19c0.65,0,1.31-0.06,1.96-0.19
               c0.63-0.13,1.26-0.32,1.87-0.57c0.6-0.25,1.18-0.56,1.72-0.92c0.55-0.37,1.06-0.78,1.52-1.25c0.46-0.46,0.88-0.97,1.25-1.52
               c0.36-0.54,0.67-1.12,0.92-1.72c0.25-0.61,0.44-1.23,0.57-1.87c0.13-0.65,0.19-1.3,0.19-1.96
               C153.357,161.132,153.297,160.472,153.167,159.832z" />
              </g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
          </svg>
        </div>
        <!-- stsrt comment 
        <div class="detail-box">
          <h5>
            Concierge Options
          </h5>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoLorem ipsum dolor sit amet,
            consectetur adipiscing eullamco
          </p>
          <div>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="img-box">
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 55.017 55.017" style="enable-background:new 0 0 55.017 55.017;" xml:space="preserve">
            <g>
              <path d="M51.688,23.013H40.789c-0.553,0-1,0.447-1,1s0.447,1,1,1h9.102l2.899,27H2.268l3.403-27h9.118c0.553,0,1-0.447,1-1
             s-0.447-1-1-1H3.907L0,54.013h55.017L51.688,23.013z" />
              <path d="M26.654,38.968c-0.147,0.087-0.304,0.164-0.445,0.255c-0.22,0.142-0.435,0.291-0.646,0.445
             c-0.445,0.327-0.541,0.953-0.215,1.398c0.196,0.267,0.5,0.408,0.808,0.408c0.205,0,0.412-0.063,0.591-0.193
             c0.178-0.131,0.359-0.257,0.548-0.379c0.321-0.208,0.662-0.403,1.014-0.581c0.468-0.237,0.658-0.791,0.462-1.269
             c0.008-0.008,0.018-0.014,0.025-0.022c1.809-1.916,7.905-9.096,10.429-21.058c0.512-2.426,0.627-4.754,0.342-6.919
             c-0.86-6.575-4.945-10.051-11.813-10.051c-6.866,0-10.951,3.476-11.813,10.051c-0.284,2.166-0.169,4.494,0.343,6.919
             C18.783,29.818,24.783,36.97,26.654,38.968z M17.924,11.314c0.733-5.592,3.949-8.311,9.831-8.311c5.883,0,9.098,2.719,9.83,8.311
             c0.255,1.94,0.148,4.043-0.316,6.247C35,28.314,29.59,35.137,27.755,37.207c-1.837-2.072-7.246-8.898-9.514-19.646
             C17.776,15.357,17.67,13.255,17.924,11.314z" />
              <path d="M27.755,19.925c4.051,0,7.346-3.295,7.346-7.346s-3.295-7.346-7.346-7.346s-7.346,3.295-7.346,7.346
             S23.704,19.925,27.755,19.925z M27.755,7.234c2.947,0,5.346,2.398,5.346,5.346s-2.398,5.346-5.346,5.346s-5.346-2.398-5.346-5.346
             S24.808,7.234,27.755,7.234z" />
              <path d="M31.428,37.17c-0.54,0.114-0.884,0.646-0.769,1.187c0.1,0.47,0.515,0.791,0.977,0.791c0.069,0,0.14-0.007,0.21-0.022
             c0.586-0.124,1.221-0.229,1.886-0.313c0.548-0.067,0.938-0.567,0.869-1.115c-0.068-0.549-0.563-0.945-1.115-0.869
             C32.763,36.918,32.07,37.033,31.428,37.17z" />
              <path d="M36.599,37.576c0.022,0.537,0.466,0.957,0.998,0.957c0.015,0,0.029,0,0.044-0.001l2.001-0.083
             c0.551-0.025,0.979-0.493,0.953-1.044c-0.025-0.553-0.539-0.984-1.044-0.954l-1.996,0.083
             C37.003,36.557,36.575,37.023,36.599,37.576z" />
              <path d="M22.433,42.177c-0.514,0.388-1.045,0.761-1.58,1.107c-0.463,0.301-0.595,0.92-0.294,1.384
             c0.191,0.295,0.513,0.455,0.84,0.455c0.187,0,0.375-0.052,0.544-0.161c0.573-0.372,1.144-0.772,1.695-1.188
             c0.44-0.333,0.528-0.96,0.196-1.401C23.501,41.936,22.876,41.844,22.433,42.177z" />
              <path d="M44.72,35.583c-0.338,0.237-0.777,0.409-1.346,0.526c-0.541,0.111-0.889,0.641-0.777,1.182
             c0.098,0.473,0.514,0.798,0.979,0.798c0.067,0,0.135-0.007,0.203-0.021c0.842-0.174,1.526-0.452,2.096-0.853l0.134-0.098
             c0.44-0.334,0.527-0.961,0.194-1.401c-0.334-0.44-0.96-0.526-1.401-0.194L44.72,35.583z" />
              <path d="M8.86,43.402c0.145-0.533-0.171-1.082-0.704-1.226c-0.529-0.149-1.082,0.169-1.226,0.704
             c-0.126,0.464-0.201,0.938-0.225,1.405C6.7,44.4,6.697,44.516,6.697,44.638c0.001,0.196,0.01,0.392,0.029,0.587
             c0.053,0.515,0.487,0.898,0.994,0.898c0.033,0,0.067-0.002,0.103-0.005c0.549-0.057,0.949-0.547,0.894-1.097
             c-0.014-0.131-0.019-0.264-0.02-0.39c0-0.083,0.003-0.166,0.007-0.248C8.72,44.059,8.772,43.728,8.86,43.402z" />
              <path d="M44.698,27.81c-0.794-0.106-1.604-0.041-2.386,0.181c-0.532,0.149-0.841,0.702-0.69,1.233
             c0.124,0.441,0.525,0.729,0.961,0.729c0.091,0,0.182-0.012,0.272-0.038c0.52-0.146,1.055-0.192,1.575-0.122
             c0.562,0.07,1.052-0.311,1.125-0.857C45.629,28.387,45.245,27.884,44.698,27.81z" />
              <path d="M46.688,32.764c-0.163,0.527,0.133,1.088,0.66,1.25c0.099,0.031,0.197,0.045,0.295,0.045c0.428,0,0.823-0.275,0.955-0.705
             c0.099-0.318,0.16-0.641,0.183-0.963c0.005-0.083,0.008-0.167,0.008-0.25c0-0.468-0.086-0.937-0.255-1.392
             c-0.192-0.519-0.771-0.781-1.285-0.59c-0.519,0.192-0.782,0.768-0.59,1.285c0.086,0.232,0.13,0.467,0.13,0.696l-0.003,0.117
             C46.774,32.423,46.742,32.589,46.688,32.764z" />
              <path d="M17.481,45.164c-0.586,0.275-1.183,0.53-1.774,0.759c-0.515,0.198-0.771,0.777-0.572,1.293
             c0.153,0.396,0.531,0.64,0.933,0.64c0.12,0,0.242-0.021,0.36-0.067c0.635-0.245,1.275-0.519,1.903-0.813
             c0.5-0.234,0.715-0.83,0.48-1.33C18.578,45.145,17.984,44.928,17.481,45.164z" />
              <path d="M10.201,41.001c0.161,0,0.325-0.039,0.478-0.122c0.288-0.157,0.595-0.255,0.911-0.289c0.135-0.016,0.273-0.016,0.406,0.002
             c0.563,0.073,1.05-0.313,1.122-0.86c0.072-0.548-0.313-1.05-0.86-1.122c-0.298-0.039-0.601-0.041-0.891-0.008
             c-0.574,0.063-1.128,0.239-1.646,0.521c-0.485,0.265-0.664,0.871-0.399,1.356C9.504,40.813,9.847,41.001,10.201,41.001z" />
              <path d="M9.993,48.842c0.216,0.056,0.436,0.098,0.654,0.124c0.256,0.031,0.512,0.047,0.769,0.047c0.313,0,0.627-0.022,0.94-0.062
             c0.548-0.069,0.937-0.569,0.867-1.117s-0.567-0.934-1.117-0.867c-0.404,0.052-0.812,0.064-1.216,0.015
             c-0.132-0.017-0.264-0.042-0.394-0.075c-0.535-0.143-1.08,0.181-1.22,0.716C9.139,48.158,9.459,48.704,9.993,48.842z" />
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
          </svg>

        </div>
      <! -- end comment -->

        <div class="detail-box">
          <h5>
            Car Parking Map:
          </h5>
          <p>
          Navigate with confidence using ParkMe's detailed car parking maps. Easily locate your designated spot, optimizing your parking experience for efficiency and ease of access.
          </p>
          <div>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="img-box">
          <svg height="512" viewBox="0 0 46 60" width="512" xmlns="http://www.w3.org/2000/svg">
            <g id="036---Office-Safe">
              <path id="Shape" d="m43 0h-40c-1.65685425 0-3 1.34314575-3 3v54c0 1.6568542 1.34314575 3 3 3h40c1.6568542 0 3-1.3431458 3-3v-54c0-1.65685425-1.3431458-3-3-3zm1 57c0 .5522847-.4477153 1-1 1h-40c-.55228475 0-1-.4477153-1-1v-54c0-.55228475.44771525-1 1-1h40c.5522847 0 1 .44771525 1 1z" />
              <path id="Shape" d="m41 4h-36c-.55228475 0-1 .44771525-1 1v50c0 .5522847.44771525 1 1 1h36c.5522847 0 1-.4477153 1-1v-50c0-.55228475-.4477153-1-1-1zm-1 50h-34v-48h34z" />
              <path id="Shape" d="m29 48c1.1186831.0031551 2.2037744-.3821053 3.07-1.09 1.91012-1.5226436 2.4404276-4.2025609 1.2541616-6.3379238s-3.7417977-3.1009925-6.0437556-2.283685-3.6763884 3.1782658-3.2504868 5.5835952c.4259017 2.4053294 2.5274425 4.1508119 4.9700808 4.1280136zm0-8c1.1057033-.0004129 2.1219995.6074172 2.6447165 1.5817615.5227169.9743444.4671061 2.1572319-.1447165 3.0782385l-1.7-2.26c-.2143594-.2858125-.5649147-.4355547-.9196152-.3928203-.3547006.0427344-.6596589.2714531-.8.6-.1403412.3285469-.0947442.7070078.1196152.9928203l1.69 2.25c-1.1320421.3716181-2.376708.0380924-3.1712515-.8497814-.7945436-.8878738-.9883535-2.1617931-.4938033-3.2457855.4945502-1.0839923 1.5837152-1.7725795 2.7750548-1.7544331z" />
              <path id="Shape" d="m10.75 46h3.25v3c0 1.6568542 1.3431458 3 3 3h18c1.6568542 0 3-1.3431458 3-3v-12c0-1.6568542-1.3431458-3-3-3h-18c-1.6568542 0-3 1.3431458-3 3v3h-3.25c-1.51650541.0054847-2.7445153 1.2334946-2.75 2.75v.5c.0054847 1.5165054 1.23349459 2.7445153 2.75 2.75zm5.25-9c0-.5522847.4477153-1 1-1h18c.5522847 0 1 .4477153 1 1v12c0 .5522847-.4477153 1-1 1h-18c-.5522847 0-1-.4477153-1-1v-3h3.25c1.5165054-.0054847 2.7445153-1.2334946 2.75-2.75v-.5c-.0054847-1.5165054-1.2334946-2.7445153-2.75-2.75h-3.25zm-6 5.75c.0053858-.4119621.3380379-.7446142.75-.75h8.5c.4119621.0053858.7446142.3380379.75.75v.5c-.0053858.4119621-.3380379.7446142-.75.75h-8.5c-.4119621-.0053858-.7446142-.3380379-.75-.75z" />
              <path id="Shape" d="m11 26h8c1.6568542 0 3-1.3431458 3-3v-12c0-1.65685425-1.3431458-3-3-3h-8c-1.65685425 0-3 1.34314575-3 3v12c0 1.6568542 1.34314575 3 3 3zm-1-15c0-.5522847.4477153-1 1-1h8c.5522847 0 1 .4477153 1 1v12c0 .5522847-.4477153 1-1 1h-8c-.5522847 0-1-.4477153-1-1z" />
              <circle id="Oval" cx="13" cy="13" r="1" />
              <circle id="Oval" cx="17" cy="13" r="1" />
              <circle id="Oval" cx="13" cy="17" r="1" />
              <circle id="Oval" cx="17" cy="17" r="1" />
              <circle id="Oval" cx="13" cy="21" r="1" />
              <circle id="Oval" cx="17" cy="21" r="1" />
            </g>
          </svg>

        </div>
        <div class="detail-box">
          <h5>
          Car Security:
          </h5>
          <p>
          At ParkMe, your vehicle's safety is our priority. Benefit from advanced car security features that provide peace of mind, offering protection and surveillance for your parked vehicle.
          </p>
          <div>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          What Our Customers Say
        </h2>
      </div>
      <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExample2Indicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="1"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="2"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="3"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Kamal Perera
                </h6>
                <p>
                Love using ParkMe! The convenient parking slots, detailed maps, and top-notch security make it my go-to for stress-free parking. Highly recommend adding ParkMe to your daily routine!
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Kamal Perera
                </h6>
                <p>
                Love using ParkMe! The convenient parking slots, detailed maps, and top-notch security make it my go-to for stress-free parking. Highly recommend adding ParkMe to your daily routine!
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Kamal Perera
                </h6>
                <p>
                Love using ParkMe! The convenient parking slots, detailed maps, and top-notch security make it my go-to for stress-free parking. Highly recommend adding ParkMe to your daily routine!
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Kamal Perera
                </h6>
                <p>
                Love using ParkMe! The convenient parking slots, detailed maps, and top-notch security make it my go-to for stress-free parking. Highly recommend adding ParkMe to your daily routine!
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Kamal Perera
                </h6>
                <p>
                Love using ParkMe! The convenient parking slots, detailed maps, and top-notch security make it my go-to for stress-free parking. Highly recommend adding ParkMe to your daily routine!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- end client section -->

  <!-- rate section -->

  <section class="rate_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Parking Options and Rates
        </h2>
      </div>
      <div class="rate_container">
        <div class="box">
          <div class="detail-box">
            <div class="price">
              <h3>
                RS <span>500</span> /day

              </h3>
              <h6>
                Basic
              </h6>
            </div>
            <p>
            Affordable and accessible, our Basic option at just Rs 500 ensures convenient parking without breaking the bank.
            </p>
          </div>
          <div class="btn-box">
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="box">
          <div class="detail-box">
            <div class="price">
              <h3>
                RS <span>750</span> /day

              </h3>
              <h6>
                Standard
              </h6>
            </div>
            <p>
            Upgrade to our Standard option at Rs 750 for a balance of affordability and enhanced parking amenities.
            </p>
          </div>
          <div class="btn-box">
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="box">
          <div class="detail-box">
            <div class="price">
              <h3>
                RS <span>1100</span> /day

              </h3>
              <h6>
                Premium
              </h6>
            </div>
            <p>
            Indulge in a premium parking experience with our Rs 1100 option, offering exclusive perks and added convenience.
            </p>
          </div>
          <div class="btn-box">
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end rate section -->

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Contact Us
        </h2>
      </div>
      <div class="">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <form action="">
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" placeholder="Name">
                  </div>
                  <div>
                    <input type="email" placeholder="Email">
                  </div>
                  <div>
                    <input type="text" placeholder="Phone Number">
                  </div>
                  <div class="">
                    <input type="text" placeholder="Message" class="message_input">
                  </div>
                  <div class="mt-5 d-flex justify-content-center ">
                    <button type="submit">
                      Send
                    </button>
                  </div>
                </div>

              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end contact section -->

  <!-- info section -->

  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <h6>
            Subscribe Now
          </h6>
          <p>
          Subscribe now for premium parking perks! Access exclusive deals, priority slots, and personalized offers. Your stress-free parking experience awaits
          </p>
          <form action="">
            <input type="text" placeholder="Enter your email">
            <div class="d-flex justify-content-end">
              <button>
                subscribe
              </button>
            </div>
          </form>
        </div>
        <div class="col-lg-2">
          <h6>
            Information
          </h6>
          <ul>
            <li>
              <a href="">
                Map
              </a>
            </li>
            <li>
              <a href="">
                Security 
              </a>
            </li>
            <li>
              <a href="">
                Real Time Services 
              </a>
            </li>
            <li>
              <a href="">
                available Slots
              </a>
            </li>
            <li>
              <a href="">
                
              </a>
            </li>
          </ul>
        </div>
        <div class="col-lg-2">
          <h6>
            Helpful Links
          </h6>
          <ul>
            <li>
              <a href="">
                #WhtsApp
              </a>
            </li>
            <li>
              <a href="">
                #Face Book
              </a>
            </li>
            <li>
              <a href="">
                #insrtegram
              </a>
            </li>
            <li>
              <a href="">
                #X
              </a>
            </li>
            <li>
              <a href="">
               
              </a>
            </li>
          </ul>
        </div>
        <!--
        <div class="col-lg-2">
          <h6>
            Invesments
          </h6>
          <ul>
            <li>
              <a href="">
                There are many
              </a>
            </li>
            <li>
              <a href="">
                variations of
              </a>
            </li>
            <li>
              <a href="">
                passages of Lorem
              </a>
            </li>
            <li>
              <a href="">
                Ipsum available,
              </a>
            </li>
            <li>
              <a href="">
                but the majority
              </a>
            </li>
          </ul>
        </div>
                -->

        <div class="col-lg-2">
          <h6>
            Contact Us
          </h6>
          <div class="info_link-box">
            <a href="">
              <img src="images/location.png" alt="">
              <span> Sri Lanka, Colombo</span>
            </a>
            <a href="">
              <img src="images/call.png" alt="">
              <span>+94 0765455776</span>
            </a>
            <a href="">
              <img src="images/envelope.png" alt="">
              <span> parkme@gmail.com</span>
            </a>
          </div>
          <div class="info_social">
            <div>
              <a href="">
                <img src="images/fb.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/twitter.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/insta.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->


  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Parking Slot Booking Site &copy; <span id="displayYear"></span> 
    </p>
  </section>
  <!-- footer section -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>