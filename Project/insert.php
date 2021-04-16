<?php
   
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  $conn = mysqli_connect('localhost', 'root', null, 'project01');

  // Step 2: (17 points) Insert the new 'supers' row into the database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
    if(isset($_POST)){
    $sql= "
     INSERT into supers(
         first_name,
         last_name,
         date_of_birth,
         alias,
         active,
         hero
       )VALUES(
         '{$_POST['first_name']}',
         '{$_POST['last_name']}',
         '{$_POST['date_Of_birth']}',
         '{$_POST['alias']}',
          {$_POST['active']},
          {$_POST['hero']}
       )";
      
      $result = mysqli_query($conn, $sql);
      

  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
  // Ensure you store the messages into the $_SESSION
  // Ensure you exit after your redirect
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE
  session_start();
  if ($result) {
    $_SESSION["message"] = "The super hero was created successfully.";
  } else {
    $_SESSION["message"] =  "There was an error creating the super hero: " . mysqli_error($conn);
  }

}
  header("Location: notification.php");
  exit();

  
  // TOTAL POINTS POSSIBLE: 35
?>