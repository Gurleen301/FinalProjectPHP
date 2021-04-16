<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  $conn = mysqli_connect('localhost', 'root', null, 'project01');


  // Step 2: (5 points) Retrieve all the 'supers' rows from your database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $result = mysqli_query($conn, "
    SELECT * FROM supers
  ");

$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!-- Step 3: (2 points) Include your header here -->

<?php include_once('_header.php') ?>
  <div class="container">
    <header class="rounded-3 my-5 bg-dark p-5">
      <h1 class="text-white">Super Heroes</h1>
    </header>

<!-- Step 4: (2 points) Create a navigation bar for home.php and new.php -->
<!-- CREATE YOUR NAVIGATION HTML BELOW THIS LINE -->
<ul class="main-nav">
  <li>
    <!-- /home link below -->
    <a href="index.php">Home</a>
  </li>
  <li>
    <!-- /new.php link below -->
    <a href="new.php">Super hero</a>
  </li>
</ul>


<!-- Step 5: (15 points) Create a table that display each row from the database -->
<!-- You only need to display the first_name, last_name, date_of_birth, -->
<!-- alias, active, and hero columns -->

<!-- Step 6: (6 points) Create action links pointing to 'edit.php' and 'delete.php' -->
<!-- Ensure there was one edit and delete link for each row -->

<!-- CREATE YOUR TABLE BELOW THIS LINE -->
<table class="table table-striped my-5">
  <thead>
    <tr>
      <td>First Name</td>
      <td>Last Name</td>
      <td>Date of Birth</td>
      <td>Alias</td>
      <td>Active</td>
      <td>Hero</td>
      <td>Actions</td>
    </tr>
  </thead>

  <tbody>
          <?php foreach($rows as $row): ?>
            <tr>
              <td><?= $row["first_name"] ?></td>
              <td><?= $row["last_name"] ?></td>
              <td><?= $row["date_of_birth"] ?></td>
              <td><?= $row["alias"] ?></td>
              <td><?= $row["active"] ?></td>
              <td><?= $row["hero"] ?></td>
              <td>
                <a href="edit.php?id=<?= $row["id"] ?>">edit</a>
                |
                <a href="delete.php?id=<?= $row["id"] ?>" onClick="return confirm('Are you sure?')">delete</a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>



<!-- Step 7: (2 points) Include your footer here -->
<?php include_once('_footer.php') ?>



<!-- TOTAL POINTS POSSIBLE: 34 -->