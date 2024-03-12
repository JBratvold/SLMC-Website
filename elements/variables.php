
<!-- VARIABLES -->
<?php 

//The current page the user is on
$activePage = basename($_SERVER['PHP_SELF'], ".php"); 

$fileViews = fopen("files/views.txt", "r");
$views = fread($fileViews,filesize("files/views.txt"));


  function get_up()
  {
    // Removed for privacy reasons. (Ask josh if you need these)
    $servername = "";
    $username = "";
    $password = "";
    $dbname = "";
    $table = "";
    $conn = new mysqli($servername,$username, $password, $dbname);

    //If theres an error with the connection
    if($conn -> connect_errno)
    {
      
    }
    else //The connection is successful:
    {
      //Query
      $query = "SELECT amount FROM thumbsUp WHERE id=1;";
      $result = $conn->query($query);
      if($result->num_rows > 0)
      {
        if($row = $result->fetch_assoc()) 
        {
          // echo $row["amount"];
          $result =  $row["amount"];
          echo $result;
        }
      }
    }
    $conn->close();
  }


  function get_down()
  {
    // Removed for privacy reasons.
    $servername = "";
    $username = "";
    $password = "";
    $dbname = "";
    $table = "";
    $conn = new mysqli($servername,$username, $password, $dbname);

    //If theres an error with the connection
    if($conn -> connect_errno)
    {
      
    }
    else //The connection is successful:
    {
      //Query
      $query = "SELECT amount FROM thumbsDown WHERE id=1;";
      $result = $conn->query($query);
      if($result->num_rows > 0)
      {
        if($row = $result->fetch_assoc()) 
        {
          // echo $row["amount"];
          $result =  $row["amount"];
          echo $result;
        }
      }   
    }
    $conn->close();
  }

  if(isset($_POST['thumbUp']))
  {
    $servername = "";
    $username = "";
    $password = "";
    $dbname = "";
    $table = "";
    $conn = new mysqli($servername,$username, $password, $dbname);
    
    //If theres an error with the connection
    if($conn -> connect_errno)
    {
    
    }
    else //The connection is successful:
    {
      //Query
      $query = "UPDATE thumbsUp SET amount = amount + 1 WHERE id=1;";
      $result = $conn->query($query);
    }
    $conn->close();
    
  }

  if(isset($_POST['thumbDown']))
  {
    $servername = "";
    $username = "";
    $password = "";
    $dbname = "";
    $table = "";
    $conn = new mysqli($servername,$username, $password, $dbname);
    
    //If theres an error with the connection
    if($conn -> connect_errno)
    {
    
    }
    else //The connection is successful:
    {
      //Query
      $query = "UPDATE thumbsDown SET amount = amount + 1 WHERE id=1;";
      $result = $conn->query($query);
    }
    $conn->close();
    
  }
?>