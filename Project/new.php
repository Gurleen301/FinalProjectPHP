<!-- Step 1: (2 points) Include your header here -->
<? include_once('_header.php')?>

<!-- Step 2: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->
<a href="index.php">Home</a>

<!-- Step 3: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->

<!-- Step 4: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->
<!DOCTYPE html>
<html>
  <head>
    <title>Super Heroes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <body>
  <!-- CREATE YOUR FORM BELOW THIS LINE -->
    <div class="container">
      <form action="insert.php" method="post">
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="first_name">First Name:</label>
              <input class="form-control" type="text" name="first_name">
            </div>
          </div>

         <div class="col">
          <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input class="form-control" type="text" name="last_name">
          </div>
        </div>
      </div>

        <div class="form-group">
          <label for="date_of_birth">Date of Birth:</label>
          <input class="form-control" type="date" name="date_Of_birth">
        </div>

        <div class="form-group">
          <label for="alias">Alias:</label>
          <input class="form-control" type="text" name="alias">
        </div>

        <div class="form-group">
          <label for="active">Active:</label>
          <input class="form-control" type="text" name="active">
        </div>

        <div class="form-group">
          <label for="hero">Hero:</label>
          <input class="form-control" type="text" name="hero">
        </div>

        <button class="btn btn-primary" type="submit">Create Hero</button>
      </form>
    </div>

<!-- Step 5: (2 points) Include your footer here -->
<? include_once('_footer.php') ?>


<!-- TOTAL POINTS POSSIBLE: 24 -->