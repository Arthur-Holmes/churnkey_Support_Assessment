<!doctype html>
<html lang="en">

<head><!-- Start Head Section -->

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link href="images/favicon.ico" rel="icon" type="image/x-icon">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <!-- Churnkey Script -->
  <script src="javascript/churnkey_cdn_dependency.js"></script>

<!-- Page Title -->
  <title>My Account</title>

</head><!-- End Head Section -->


<body><!-- Start Body Section -->


<!-- Navigation Bar Section -->

<?php require "navigation/header.php"; echo $header ?>

<!-- End Navigation Bar Section -->



<!-- Top Image (Breadcrumbs) -->
<div class="card bg-dark text-white">
  <img src="images/family.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h3 class="card-title">My Account</h3>
  </div>
</div>

<!-- End Top Image (Breadcrumbs) -->


<!-- Account Details Section -->

<br>
<div class="pt-5"></div> <!-- Spacer -->

<div class="row pl-3">
  <div class="col">
    <!-- Section Title 1 -->
    <p class="font-weight-bold">Update Personal Information:</p>

    <!-- Start Form Section -->

    <?php require_once "user_info_database_feed.php"; echo $user_information_form ?>

   <!-- End Form Section -->
    
  </div>



  <!-- Start Account Metadata -->

  <div class="col">

  <!-- Section Title 2 -->
  <p class="font-weight-bold">Account Metadata:</p>

  <?php require_once "account_metadata_database_feed.php"; echo $user_account_metadata ?>

    <p class="font-weight-normal">------------------------------</p>
    
     <!-- Note: In a real environment, I would have this button trigger a JS/PHP files containing a code tied to a database object. Would use AJAX to handle it  -->
    <button type="submit" id="cancel-button" class="btn btn-danger">Cancel Account</button>
    
    <p class="pt-2">*Please note: Canceling your account will permanently delete<br>
        all your account data. This action cannot be undone.</p>
        
  </div>
</div>

<!-- End Account Metadata -->


<!-- Start Footer Section -->

<?php require_once "navigation/footer.php"; echo $footer ?>

<!-- End Footer Section -->



<!-- Bootstrap JS and Dependencies -->

<?php require_once "dependencies/bootstrap_dependencies.php"; echo $bootstrap_requirements ?>

<!-- End Bootstrap JS and Dependencies -->



<!-- Generate Secure Churnkey HMAC Hash --> 

<?php require_once "dependencies/hmac_hash_generator.php"; ?>

<!-- End Generate Secure Churnkey HMAC Hash --> 



  <!-- Churnkey Event Listener Script -->

  <script src="javascript/churnkey_event_listener.js"></script>

  <!-- End Churnkey Event Listener Scrip -->



</body><!-- End Body Section -->
</html>
