<?php
function getCategories($con) 
{
    $categories = array();
    $qry = "SELECT * FROM categories";
    $result = $con->query($qry);
    $numrows = $result->num_rows;

    for($i=0; $i<$numrows; $i++)
    {
        $row = $result->fetch_assoc();
        extract($row);
        $categories[$id] = $category;
    }

    return $categories;
}

function getNewlyAddedProduct($con) {
    $qry = "SELECT * FROM products WHERE id=(SELECT max(id) FROM products)";
    $result = $con->query($qry);
    $numrows = $result->num_rows;

    for($i=0; $i<$numrows; $i++)
    {
        $row = $result->fetch_assoc();
        extract($row);
        return $id;
    }
}

$productName = $productDescription = $productCategory = $productPetTarget = "";
$categories = array();

$host = "localhost";
$user = "root";
$pass = "";
$db = "animalark_db";

$con = new mysqli($host, $user, $pass, $db);
if($con === false) 
    die('Couldn\'t connect: ' . $con->connect_errno());

$categories = getCategories($con);

if(($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_POST['catCheckbox']) || isset($_POST['dogCheckbox'])))
{
    $productName = $_POST['productName'];
    $productDescription = $_POST['productDescription'];
    $productCategory = $_POST['productCategory'];
    // $productPetTarget = $_POST['productTarget'];
    $catCheckbox = $_POST['catCheckbox'];
    $dogCheckbox = $_POST['dogCheckbox'];

    if($catCheckbox == "on" && $dogCheckbox == "on")
        $productPetTarget = "CD";
    elseif ($catCheckbox == "on" && $dogCheckbox != "on")
        $productPetTarget = "C";
    else
        $productPetTarget = "D";

    $qry = "INSERT INTO products (name, description, category_id, intended_for) VALUES(?, ?, ?, ?)";

    if($sql = $con->prepare($qry)) 
    {
        $sql->bind_param("ssis", $parameter_name, $parameter_description, $parameter_category, $parameter_intendedFor);
        $parameter_name = $productName;
        $parameter_description = $productDescription;
        $parameter_category = $productCategory;
        $parameter_intendedFor = $productPetTarget;

        if ($sql->execute() != "")
            $lastId = getNewlyAddedProduct($con);
            header("location: create_item.php?id=$lastId");
    }

    $sql->close();
}
?>

<!DOCTYPE html>
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
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
    <link rel="stylesheet" href="css/edit_item.css" />
  </head>

  <body>
    <!-- navigation -->
    <div id="navbar" class="navigation py-4">
      <div class="container">
        <nav class="navbar">
          <div class="navbar-brand">
          <a class="navbar-item mr-5" href="admin_home_new.html">
              <img src="images/logo.png" width="200" alt="logo" />
            </a>
          </div>

          <div class="navbar-menu" id="navigation">
            <ul class="navbar-start">
              <li class="navbar-item">
                <a class="navbar-link" href="admin_home_new.html">Home</a>
              </li>

              <li class="navbar-item">
                <a class="navbar-link" href="admin_shop.php">Products</a>
              </li>

              <li class="navbar-item">
                <a class="navbar-link" href="FAQs.html">FAQ</a>
              </li>
            </ul>
            <ul class="navbar-end ml-0">
              <li class="navbar-item">
              <a href="logout.php" onclick="return confirm('Are you sure you want to logout?')" class="btn btn-solid-border"
                  >Log-out <i class="fa fa-angle-right ml-2"></i
                ></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <br>
    <br>


    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">    
          <!-- <form action="https://formbold.com/s/FORM_ID" method="POST"> -->
            <form action="create_prod.php" method="POST">
            <div class="formbold-form-title">
              <h2 class="">Create Product</h2>
              <p>
                Simply input the necessary details and publish your new product to the site.
                 Start selling and reaching a wider audience in no time!
              </p>
            </div>
      

            <div class="formbold-mb-3">
              <label for="productName" class="formbold-form-label">Product Name</label>
              <input type="text" name="productName" id="productName" class="formbold-form-input" required/>
            </div>
      
            <div class="formbold-mb-3">
              <label for="productDescription" class="formbold-form-label">Product Description</label>
              <textarea  class="formbold-form-prod_desc" id="productDescription" name="productDescription" rows="10" cols="50" required></textarea>
            </div>



            <div class="formbold-mb-3">
                <label for="productCategory" class="formbold-form-label">Category</label>
                <select name="productCategory" id="productCategory" class="formbold-form-input" required>
                    <option hidden disabled selected></option>
                    <!-- <option value="Food and Treats">Food and Treats</option>
                    <option value="Medications and Others">Medications and Others</option>
                    <option value="Shampoo">Shampoo</option>
                    <option value="Soap">Soap</option>
                    <option value="Vitamins">Vitamins</option> -->

                    <?php
                        for($i=1; $i<=sizeof($categories); $i++)
                        {
                        echo "
                            <option value=\"$i\">$categories[$i]</option>
                            ";
                        }
                    ?>
                </select>
              </div>

            <div class="formbold-mb-3" style="color: black;">
                <label for="checkboxes" class="formbold-form-label">Product Intended for:</label>
                <input type="checkbox" name="catCheckbox"> Cats
                <br/>   
                <input type="checkbox" name="dogCheckbox"> Dogs
            </div>

            <div class="formbold-checkbox-wrapper">
              </div>
    
            <!-- <input type="submit" name="submitbtn" class="formbold-btn" value="Submit"> -->
            <button class="formbold-btn">Submit</button>
          </form>
          <br/>
          <br/>
          <a href="admin_shop.php"> <button type="submit">Cancel</button> </a>
        </div>
      </div>



    <br>
    <br>
    <br>
    <br>
    <br>
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
                Animal Ark Pet Care Center is a one-stop shop for all your pet needs.
                We offer a wide variety of pet supplies as well as a full range of services
                veterinary care.
              </p>
            </div>
          </div>
          <div class="column is-2-widescreen is-6-desktop is-6-tablet ml-auto">
            <div class="widget">
              <h4 class="is-capitalize mb-4">Company</h4>

              <ul class="list-unstyled footer-menu lh-35">
                <a href="#">About</a>
              </ul>
            </div>
          </div>
          <div class="column is-3-widescreen is-6-desktop is-6-tablet">
            <div class="widget">
              <h4 class="is-capitalize mb-4">Support</h4>

              <ul class="list-unstyled footer-menu lh-35">
                <li><a href="FAQs.html">FAQ</a></li>
              </ul>
            </div>
          </div>
          <div class="column is-3-widescreen is-6-desktop is-6-tablet">
            <div class="widget widget-contact">
              <h4 class="is-capitalize mb-4">Get in Touch</h4>
              <h6>
                <a href="animalarkpetcenter@gmail.com">
                  <i class="ti-headphone-alt mr-3"></i>animalarkpetcenter@gmail.com</a
                >
              </h6>


              <ul class="list-inline footer-socials mt-5">
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/animalarkpetcarecenter"
                    ><i class="ti-facebook mr-2"></i
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
                  >Kenya</a
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


      <!-- Script for image -->
    <script>
      const input = document.querySelector("#image");
      const preview = document.querySelector("#preview");

      input.addEventListener("change", function() {
        const file = this.files[0];

        if (file) {
          const reader = new FileReader();

          reader.addEventListener("load", function() {
            preview.src = reader.result;
          });

          reader.readAsDataURL(file);
        } else {
          preview.src = "#";
        }
      });
    </script>
  </body>
</html>
