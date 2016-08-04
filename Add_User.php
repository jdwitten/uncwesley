<?php
      try{
            if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['class']) && isset($_POST['email']) && isset($_POST['major'])){
        
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $class = $_POST['class'];
            $major = $_POST['major'];
      
            $charset = 'utf8';
            $host = "us-cdbr-azure-east-c.cloudapp.net";
            $user = "bddfe4567fcee0";
            $pass = "aaa47743";
            $db = "uncwesley";
            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            $opt = [
                  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                  PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($dsn, $user, $pass, $opt);
            $query =   $pdo->prepare("SELECT COUNT(*) FROM uncwesley.users");
            $query->execute();
            $arr = $query->fetch();
            $userID = $arr["COUNT(*)"] + 1;
       
            $query = $pdo->prepare("INSERT INTO uncwesley.users (userID, fname, lname, email, class, major) VALUES( ?,?,?,?,?,? )");
            $query->execute([$userID, $fname, $lname, $email, $class, $major]); 
            
            $result["success"] = true;
            $result["userID"] = $userID;
            }
            else{
                  $result["success"] = false;
            }
      }
      catch(Exception $e){
            $result["success"] = false;
      }
      
      echo json_encode($result);
      
      
?>
