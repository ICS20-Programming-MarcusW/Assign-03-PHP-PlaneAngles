<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8" />
    <meta name="description" content="Assign-03" />
    <meta name="keywords" content="immaculata, ics2o" />
    <meta name="author" content="Marcus Wehbi" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Link for Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <!-- Material Design Lite --> 
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <!-- Link for Stylesheet -->
    <link rel="stylesheet" href="./css/style.css" />
    <!-- Webpage title -->
    <title>Calculating Plane Angles</title>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  </head>
  <body>
    <!-- php echo to print the html to the page / including the results file -->
    <?php include './angleCalculations.php';?>
    <h1>Calculating Plane Angles</h1>
    <h2>Converting Degrees to Radians</h2>
    <!-- Image format into row -->
    <div class="row">
      <div class="column">
        <img src="./images/dvr.png" alt="degNrad" style="width:78%" style="max-height:20%">
      </div>
      <div class="column">
        <img src="./images/grade.jpeg" alt="grade" style="width:89%" style="max-height:20%">
      </div>
    </div>
    <p>Please enter the <i>Degrees °</i></p>
    <?php
      // Example taking from PHP form validation example on W3 schools and modified appropriately
      // define variables and set to empty values
      
       $degree = null;
       $radian = null;
       $gradian = null;
       
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $degree = $_POST["inputDeg"];
         $radian = $_POST["inputRad"];
         $gradian = $_POST["inputGrad"];
       }
      ?>
    <!-- Form to retrieve information (degrees) -->
    <form method="post">
      <label for="degree">The Degree is:</label>
      <input type="number" step="any" min="0" max="360" id="deg" placeholder="(0° - 360°)" pattern="[0-9]+([\.,][0-9]+)?" name="inputDeg">
      <br><br>
      <input type="submit" value="Convert">
    </form>
    <?php 
      if ($degree != null) {
        convertDtoR($degree);
      }
      ?>
    <h2>Converting from Radians to Gradians</h2>
    <!-- gif that explains radians -->
    <center><img src="./images/rads.gif"></center>
    <p>Please enter the <i>Radian</i></p>
    <!-- form to get the radians from the user -->
    <form method="post">
      <label for="radian"">The Radian is:</label>
      <input type="number" step="any" min="0" max="6.28319" id="rad" placeholder="(0-6.28)" pattern="[0-9]+([\.,][0-9]+)?" name="inputRad">
      <br><br>
      <input type="submit" value="Convert">
    </form>
    <?php 
      if ($radian != null) {
        convertRtoG($radian);
      }
      ?>
    <br><br>
    <!-- Three Line List with secondary info and action explaining degrees, radians, and gradians -->
    <ul class="demo-list-three mdl-list">
      <li class="mdl-list__item mdl-list__item--three-line">
        <span class="mdl-list__item-primary-content">
        <i class="material-icons mdl-list__item-avatar">person</i>
        <span style="color: purple">Degree</span>
        <span class="mdl-list__item-text-body" style="color: brown">
        A degree (in full, a degree of arc) is a measurement of a plane angle in which one full rotation equals 360 degrees. It is generally symbolised by ° (the degree symbol). Although it is not a SI unit (the radian is the SI unit of angular measure), it is included as an acceptable unit in the SI brochure. It is thought that the choice of 360 as the full number of degrees in a circle was motivated by the fact that it is easily divisible: 360 has 24 divisors.  
        </span>
        </span>
        <span class="mdl-list__item-secondary-content">
        <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">star</i></a>
        </span>
      </li>
      <li class="mdl-list__item mdl-list__item--three-line">
        <span class="mdl-list__item-primary-content">
        <i class="material-icons  mdl-list__item-avatar">person</i>
        <span style="color: purple">Radian</span>
        <span class="mdl-list__item-text-body" style="color: green">
        The radian is the SI unit for measuring angles, indicated by the symbol rad, and is the standard unit of angular measure used in many fields of mathematics. Currently, radians are SI derived units, having previously been a SI supplemental unit (until that category was disbanded in 1995). The radian is a dimensionless unit in the SI, with 1 rad equaling 1. 
        </span>
        </span>
        <span class="mdl-list__item-secondary-content">
        <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">star</i></a>
        </span>
      </li>
      <li class="mdl-list__item mdl-list__item--three-line">
        <span class="mdl-list__item-primary-content">
        <i class="material-icons  mdl-list__item-avatar">person</i>
        <span style="color: purple">Gradian</span>
        <span class="mdl-list__item-text-body" style="color: blue">
        The gradian, also known as the gon, grad, or grade in trigonometry, is a unit of measurement for angles that is defined as one hundredth of the right angle; in other words, there are 100 gradians in 90 degrees, 200 in 180 degrees, and 400 in 360 degrees. One reason why gradians are beneficial is that right angles to a given angle are easily determined.          
        </span>
        </span>
        <span class="mdl-list__item-secondary-content">
        <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">star</i></a>
        </span>
      </li>
    </ul>
    <br><br>
    <h4>How much do you feel you've learned form this webpage?</h4>
    <!-- Default Slider from google's mdl -->
    <input class="mdl-slider mdl-js-slider" type="range"
      min="0" max="100" value="0" tabindex="0">
    <br><br>
    <h3>
      Share this resourceful calculator with everyone right here: <!-- Multiline Tooltip from google's mdl-->
      <div id="tt4" class="icon material-icons">share</div>
      <div class="mdl-tooltip" for="tt4">
        Share your content<br>via social media
      </div>
    </h3>
    <br><br>
    <footer class="mdl-mini-footer">
      <ul class="mdl-mini-footer__link-list">
        <li><a href="#">Privacy & Terms</a></li>
        <h5><i>This webpage is tool that serves as converter between different plane angles. It calculates radians from degrees, and gradians from radians. It is meant to be helpful and beneficial to all who use it.</i></h5>
      </ul>
      </div>
    </footer>
  </body>
</html>