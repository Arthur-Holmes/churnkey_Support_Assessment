<?php

// This section provides a central location for the header, making it modular and reuseable for multiple pages. 

$header = '

<!-- Navigation Section -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <!-- Netflix Logo -->
  <a class="navbar-brand" href="my_account.php"><img src="images/logo.png" alt="Netflix Logo"></a>
  <!-- End Logo -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Watch</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">News</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="#">Security</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Billing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Passwords</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="my_account.php" role="button" aria-expanded="false">
          My Account <span class="sr-only">(current)</span>
        </a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- End Navigation Section -->


';