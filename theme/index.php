<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="zxx">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta
      name="description"
      content="Orbitor,business,company,agency,modern,bootstrap4,tech,software"
    />
    <meta name="author" content="themefisher.com" />

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />

    <!-- theme meta -->
    <meta name="theme-name" content="orbitor-bulma" />
    <link rel="icon" href =".\images\logopet.png" type = "image/x-icon">
    <title>Animal Ark</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

    <!-- bootstrap.min css -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.4/css/bulma.min.css"
      integrity="sha512-HqxHUkJM0SYcbvxUw5P60SzdOTy/QVwA1JJrvaXJv4q7lmbDZCmZaqz01UPOaQveoxfYRv1tHozWGPMcuTBuvQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="plugins/themify/css/themify-icons.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="plugins/magnific-popup/dist/magnific-popup.css"
    />
    <link rel="stylesheet" href="plugins/modal-video/modal-video.css" />
    <link rel="stylesheet" href="plugins/animate-css/animate.css" />
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css" />
    <link
      rel="stylesheet"
      href="plugins/slick-carousel/slick/slick-theme.css"
    />

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!-- navigation -->
    <div id="navbar" class="navigation py-4">
      <div class="container">
        <nav class="navbar">
          <div class="navbar-brand">
            <a class="navbar-item mr-5" href="index.php">
              <img src="images/logo.png" width="200" alt="logo" />
            </a>
            <button
              role="button"
              class="navbar-burger burger"
              data-hidden="true"
              data-target="navigation"
            >
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
            </button>
          </div>

          <div class="navbar-menu" id="navigation">
            <ul class="navbar-start">
              <li class="navbar-item">
                <a class="navbar-link" href="index.php">Home</a>
              </li>

              <li class="navbar-item">
                <a class="navbar-link" href="./FAQs.html">FAQ</a>
              </li>
            </ul>
            <ul class="navbar-end ml-0">
              <li class="navbar-item">
                <a href="./login.html" class="btn btn-solid-border"
                  >Log-in <i class="fa fa-angle-right ml-2"></i
                ></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <!-- Slider Start -->
    <section class="banner is-flex is-align-items-center">
      <div class="banner-img-part"></div>
      <div class="container">
        <div class="columns">
          <div class="column is-8-widescreen is-10-desktop">
            <div class="block">
              <span class="is-uppercase text-sm letter-spacing"
                >The best care for your pets</span
              >
              <h1 class="my-4">Animal Ark Pet Care Center</h1>
              <p class="mb-6">
                Veritatis earum aliquid doloribus molestias, eveniet molestiae
                aperiam ratione. Facilis velit voluptatibus impedit eligendi
                delectus illo earum voluptatum, laudantium molestiae!
              </p>

              <a href="about.html" target="_blank" class="btn btn-main"
                >Learn more about Animal Ark<i
                  class="fa fa-angle-right ml-2"
                ></i
              ></a>
            </div>
          </div>
          <div class="column is-8-widescreen is-10-desktop">
            <img src="images/golden.png" width="600" alt="" />
          </div>
        </div>
      </div>
    </section>

    <section class="section cta">
      <div class="container">
        <div class="columns is-desktop">
          <div class="column is-desktop">
            <div class="card is-horizontal">
              <div class="card-image">
                <figure class="image is-square">
                  <h1></h1>
                </figure>
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <div class="media-content">
                    <p class="title is-1">Announcement</p>
                  </div>

                  <div class="content">
                  <?php
                    $con = mysqli_connect("localhost", "id20217626_thea", "Pass!1234567", "id20217626_test") or die(mysqli_error()); //Connect to server
                    $query = mysqli_query($con, "SELECT * FROM announcements"); // SQL Query
                    
                    while($row = mysqli_fetch_array($query)) // prints the prospects
                    {
                    echo "<b>Subject: </b>";
                    echo $row['subject'] . "</br>" . "</br>";
                    echo $row['description'] . "</br>" . "</br>";
                    echo $row['date_posted'];
                    }
                  ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- section portfolio start -->
    <section class="section portfolio pb-0">
      <div class="container">
        <div class="columns">
          <div class="column is-desktop">
            <h2 class="mb-5 has-text-centered">
              Who are you shopping for? Check these out.
            </h2>
            <p class="has-text-centered">
              We have the best products and services for your pets. Hover over
              these cute animals for more details.
            </p>
          </div>
        </div>

        <div class="columns">
          <div class="column is-6-widescreen is-10-desktop">
            <div class="portflio-item is-display-grid is-relative mb-4">
              <a href="project-details.html">
                <img src="images/portfolio/1.jpg" alt="" class="trans" />
                <div class="overlay-item"><i class="ti-link"></i></div>

                <div class="portfolio-item-content">
                  <h3 class="mb-0 text-white">Dogs</h3>
                  <p class="text-white">All items for dogs</p>
                </div>
              </a>
            </div>
          </div>
          <div class="column is-6-widescreen is-10-desktop">
            <div class="portflio-item is-relative mb-4">
              <a class="cat" href="project-details.html">
                <img
                  src="images/portfolio/2.jpeg"
                  width="2000"
                  alt=""
                  class="trans"
                />
                <div class="overlay-item"><i class="ti-link"></i></div>

                <div class="portfolio-item-content">
                  <h3 class="mb-0 text-white">Cats</h3>
                  <p class="text-white">All items for cats</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- section Counter Start -->
    <section class="section counter">
      <div class="container">
        <div class="columns is-multiline">
          <div class="column is-3-widescreen is-6-desktop">
            <div class="counter-item has-text-centered">
              <h2 class="mb-0">
                <span class="counter-stat font-weight-bold">1730</span> +
              </h2>
              <p>Project Done</p>
            </div>
          </div>
          <div class="column is-3-widescreen is-6-desktop">
            <div class="counter-item has-text-centered">
              <h2 class="mb-0">
                <span class="counter-stat font-weight-bold">125</span>
              </h2>
              <p>User Worldwide</p>
            </div>
          </div>
          <div class="column is-3-widescreen is-6-desktop">
            <div class="counter-item has-text-centered">
              <h2 class="mb-0">
                <span class="counter-stat font-weight-bold">39</span>
              </h2>
              <p>Availble Country</p>
            </div>
          </div>
          <div class="column is-3-widescreen is-6-desktop">
            <div class="counter-item has-text-centered">
              <h2 class="mb-0">
                <span class="counter-stat font-weight-bold">14</span>
              </h2>
              <p>Award Winner</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- section Counter End  -->

    <section class="section process">
      <div class="container">
        <div class="columns is-multiline is-desktop is-align-items-center">
          <div class="column is-5-desktop">
            <div class="process-block pl-4">
              <span class="is-uppercase text-sm letter-spacing"
                >Why choose us</span
              >
              <h2 class="mb-4 mt-3">Our Partners</h2>
              <p class="mb-4">
                We understand what your business means to you,your requirements
                considering trends.Smet nemo excepturi voluptas eligendi .
              </p>
            </div>
          </div>

          <div class="column is-7-desktop">
            <div class="columns is-multiline custom-grid">
              <div class="column is-6-widescreen is-6-tablet">
                <div class="icon-block has-text-centered">
                  <i class="ti-light-bulb"></i>
                  <h5>Partner Company</h5>
                  <p>A complete web app solution for business</p>
                </div>
              </div>

              <div class="column is-6-widescreen is-6-tablet pb-0">
                <div class="icon-block has-text-centered mt-30">
                  <i class="ti-panel"></i>
                  <h5>Partner Company</h5>
                  <p>A complete web app solution for business</p>
                </div>
              </div>

              <div class="column is-6-widescreen is-6-tablet pt-0">
                <div class="icon-block has-text-centered">
                  <i class="ti-search"></i>
                  <h5>Partner Company</h5>
                  <p>A complete web app solution for business</p>
                </div>
              </div>

              <div class="column is-6-widescreen is-6-tablet pt-0">
                <div class="icon-block has-text-centered mt-30">
                  <i class="ti-rocket"></i>
                  <h5>Partner Company</h5>
                  <p>A complete web app solution for business</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- section portfolio END -->

    <section class="section about">
      <div class="container">
        <div class="columns is-multiline">
          <div class="column is-4-widescreen is-6-tablet">
            <div class="about-item">
              <div class="icon">
                <i class="fa fa-paw"></i>
              </div>

              <div class="content">
                <h4 class="mt-3 mb-3">Custom Effective Chuchuness</h4>
                <p class="mb-5">Kayo na bahala sa text lol</p>

                <a href="#"> Read More </a>
              </div>
            </div>
          </div>

          <div class="column is-4-widescreen is-6-tablet">
            <div class="about-item">
              <div class="icon">
                <i class="ti-panel"></i>
              </div>
              <div class="content">
                <h4 class="mt-3 mb-3">I love you Cheska</h4>
                <p class="mb-5">Ito pa kayo na bahala</p>
                <a href="#"> Read More </a>
              </div>
            </div>
          </div>

          <div class="column is-4-widescreen is-6-tablet">
            <div class="about-item">
              <div class="icon">
                <i class="ti-headphone-alt"></i>
              </div>
              <div class="content">
                <h4 class="mt-3 mb-3">
                  Creating a dedicated IT business gcolumnsth
                </h4>
                <p class="mb-5">
                  Saepe nulla praesentium eaque omnis perferendis a doloremque.
                </p>
                <a href="#"> Read More </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- footer Start -->
    <footer class="footer section">
      <div class="container">
        <div class="columns is-multiline">
          <div class="column is-3-widescreen is-6-tablet">
            <div class="widget">
              <div class="logo mb-4">
                <h3>Animal Ark</h3>
              </div>
              <p>
                Tempora dolorem voluptatum nam vero assumenda voluptate, facilis
                ad eos obcaecati tenetur veritatis eveniet distinctio.
              </p>
            </div>
          </div>
          <div class="column is-2-widescreen is-6-desktop is-6-tablet ml-auto">
            <div class="widget">
              <h4 class="is-capitalize mb-4">Company</h4>

              <ul class="list-unstyled footer-menu lh-35">
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="column is-3-widescreen is-6-desktop is-6-tablet">
            <div class="widget">
              <h4 class="is-capitalize mb-4">Support</h4>

              <ul class="list-unstyled footer-menu lh-35">
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">FAQ</a></li>
              </ul>
            </div>
          </div>
          <div class="column is-3-widescreen is-6-desktop is-6-tablet">
            <div class="widget widget-contact">
              <h4 class="is-capitalize mb-4">Get in Touch</h4>
              <h6>
                <a href="tel:+23-345-67890">
                  <i class="ti-headphone-alt mr-3"></i>Support@megakit.com</a
                >
              </h6>
              <h6>
                <a href="mailto:support@gmail.com">
                  <i class="ti-mobile mr-3"></i>+23-456-6588</a
                >
              </h6>

              <ul class="list-inline footer-socials mt-5">
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/themefisher"
                    ><i class="ti-facebook mr-2"></i
                  ></a>
                </li>
                <li class="list-inline-item">
                  <a href="https://twitter.com/themefisher"
                    ><i class="ti-twitter mr-2"></i
                  ></a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.pinterest.com/themefisher/"
                    ><i class="ti-linkedin mr-2"></i
                  ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="footer-btm py-4 mt-6">
          <div class="columns">
            <div class="column is-6-widescreen">
              <div class="copyright">
                &copy; Copyright Reserved to
                <span class="text-color">Animal Ark</span> by
                <a href="https://themefisher.com/" target="_blank"
                  >Cheska Mylabs</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- 
    Essential Scripts
    =====================================-->

    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <script src="js/contact.js"></script>
    <!--  Magnific Popup-->
    <script src="plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>

    <script src="plugins/modal-video/modal-video.js"></script>
    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>

    <script src="js/script.js"></script>
  </body>
</html>