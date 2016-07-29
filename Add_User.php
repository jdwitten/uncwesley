<?php

      if(isset($_GET['fname']) && isset($_GET['lname']) && isset($_GET['class']) && isset($_GET['email']) && isset($_GET['major'])){
        
        $host = "us-cdbr-azure-east-c.cloudapp.net";
        $user = "bddfe4567fcee0";
        $pwd = "aaa47743";
        $db = "uncwesley";
      
      $fname = $_GET['fname'];
      $lname = $_GET['lname'];
      $email = $_GET['email'];
      $class = $_GET['class'];
      $major = $_GET['major'];
      
      var_dump($_GET);
        // Create connection
        $conn = new mysqli($host, $user, $pwd, $db);
        
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        
        $query = "INSERT INTO uncwesley.users (fname, lname, email, class, major) VALUES( $fname,$lname,$email,$class,$major )";
      echo $query;
        $result = $conn->query($query);
        
        echo "test";
      }
      else echo "failed";
      
?>
