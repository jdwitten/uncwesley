<php?
      /*
      if(isset($_GET['fname']) && isset($_GET['lname']) && isset($_GET['class']) && isset($_GET['email']) && isset($_GET['major'])){
        
        $host = "us-cdbr-azure-east-c.cloudapp.net";
        $user = "bddfe4567fcee0";
        $pwd = "aaa47743";
        $db = "uncwesley";
      
      
        // Create connection
        $conn = new mysqli($host, $user, $pwd, $db);
        
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        
        $query = "INSERT INTO uncwesley.users (fname, lname, email, class, major) VALUES( $_GET['fname'] , $_GET['lname'] , $_GET['email'] , $_GET['class'] , $_GET['email'] )";
    
        $result = $conn->query($query);
      }
      */
      echo $_GET['fname'];
?>
