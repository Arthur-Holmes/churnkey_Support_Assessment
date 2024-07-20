<?php

// This page would typically be connected to a database object, but for this project's scope, I have hardcoded the data. 

$user_information_form = '

<form action="my_account.php" method="post">

      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name" name="name" value="Arthur Holmes" placeholder="Full Name">
        </div>
      </div>

      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" name="email" value="arthur@arthurholmes.com" placeholder="Email">
        </div>
      </div>

      <div class="form-group row">
        <label for="phone" class="col-sm-2 col-form-label">Phone:</label>
        <div class="col-sm-10">
          <input type="tel" class="form-control" id="phone" name="phone" value="555-555-5555" placeholder="Phone">
        </div>
      </div>

      <div class="form-group row">
        <label for="address" class="col-sm-2 col-form-label">Address:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="address" name="address" value="1234 Main Street" placeholder="Address">
        </div>
      </div>

      <div class="form-group row">
        <label for="city" class="col-sm-2 col-form-label">City:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="city" name="city" value="Raleigh" placeholder="City">
        </div>
      </div>

      <div class="form-group row">
        <label for="state" class="col-sm-2 col-form-label">State:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="state" name="state" value="North Carolina" placeholder="State">
        </div>
      </div>

      <div class="form-group row">
        <label for="zip" class="col-sm-2 col-form-label">Zip Code:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="zip" name="zip" value="90210" placeholder="Postal Code">
        </div>
      </div>

      <div class="form-group row">
        <label for="birthday" class="col-sm-2 col-form-label">Birthday:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="birthday" name="birthday" value="01-12-1912" placeholder="Birthday">
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-success">Update</button>
          
        </div>
      </div>

    </form>


    ';


