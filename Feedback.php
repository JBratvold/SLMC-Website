<?php include 'elements/variables.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- HEAD -->
  <?php include 'elements/head.php'; ?>
</head>
<body>

<!-- NAV BAR -->
<?php include 'elements/navbar.php'; ?>

<?php
  // Removed information for privacy reasons. (Ask Josh for the details if needed)
  $servername = ""; 
  $username = "";
  $password = "";
  $dbname = "";
  $table = "";
  $conn = new mysqli($servername,$username, $password, $dbname);

  //If theres an error with the connection
  if($conn -> connect_errno)
  {
    echo "<b class=\"container\" style=\"color:red;\">Database connection failure! Contact administrator for help. </b>";   
  }
  else //The connection is successful:
  {
    //When "submit" is clicked
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
      //Ensure the date is set to this time zone
      date_default_timezone_set('America/Regina');

      //Get the data from form
      $name = $_POST["name"];
      $title = $_POST['title'];
      $feedback = $_POST['feedback'];
      $date = date("Y-m-d h:ia"); // 2022-05-05 10:12pm

      //Hide quotes (',") to not break the query
      $name = addslashes($name);
      $title = addslashes($title);
      $feedback = addslashes($feedback);

      //Ensure data is not empty
      if (empty($name) || empty($title) || empty($feedback)) 
      {
          //Data was somehow empty.
          echo "<b class=\"container\" style=\"color:red;\">Data was empty! </b>";   
      } 
      else 
      {
        //Query
        $query = "INSERT INTO ".$table." VALUES ('0','".$name."','".$title."','".$feedback."','".$date."');";

        //Insert statement
        if ($conn->query($query) === TRUE) 
        {
          echo "<b class=\"container\" style=\"color:gold; font-size: 50px; text-align: center;\">Subitted Successfully!</b>";
        } 
        else 
        {
          echo "<b class=\"container\" style=\"color:red;\">Error: " . $query . "<br>" . $conn->error . "</b>";
        }
      }
    }
  }
  $conn->close();
?>

<!-- Feedback Form -->
<div class="container">
  <hr><h1>Feedback</h1><hr>
  <p>If you wish to leave your thoughts, questions, or concerns about our corporation, please enter it below.</p>
    <form method="post">
      <div class="form-group">
        <label>Name</label>
        <p style="font-size:11px;">Preferably your EVE user name for contact purposes.</p>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
      </div>
      <div class="form-group">
        <label>Title</label>
        <p style="font-size:11px;">The topic of your review.</p>
        <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
      </div>
      <div class="form-group">
        <label>Feedback</label>
        <p style="font-size:11px;">Max 500 characters.</p>
        <textarea rows="6" cols="6" class="form-control" maxlength="500" name="feedback" required></textarea>
        
      </div>
      <input class="btn btn-primary" type="submit" value="Submit">
    </form>
  </div>

  <!-- SCRIPTS -->
  <?php include 'elements/scripts.php'; ?>
</body>
  <!-- FOOTER -->
  <?php include 'elements/footer.php'; ?>
</html>



