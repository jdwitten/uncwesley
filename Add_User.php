<?php

      if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['class']) && isset($_POST['email']) && isset($_POST['major'])){
        
        $host = "us-cdbr-azure-east-c.cloudapp.net";
        $user = "bddfe4567fcee0";
        $pwd = "aaa47743";
        $db = "uncwesley";
      
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $class = $_POST['class'];
      $major = $_POST['major'];
      
      var_dump($_POST);
        // Create connection
        $conn = new mysqli($host, $user, $pwd, $db);
        
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        
        $query = "INSERT INTO uncwesley.users (fname, lname, email, class, major) VALUES( '$fname','$lname','$email','$class','$major' )";
        var_dump($query);
        $result = $conn->query($query);
        
        echo "test";
      }
      else echo "failed";
      
?>
