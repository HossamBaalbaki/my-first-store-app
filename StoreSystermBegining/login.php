
<!doctype html>
<html>
<head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
        <title> Login FORM </title>
 
</head>


<body>  
     <div class="container">
         <img src="avatar.png" alt="avatar">
     <form method="post" action="#">
         <div class="form-input">
         <i class="fa fa-user fa-2x cust "  aria-hidden="true"></i>

          <input type="text" name="username" value="" placeholder="ENTER USERNAME"><br />
          <i class="fa fa-lock fa-2x cust" aria-hidden="true"></i>

           <input type="password" name="password" value="" placeholder="ENTER PASSWORD"><br />
           <input type="submit" name="submit" value="LOGIN"><br />
           
       
          </div>
          </form>
          </div>
            
</body>
</html>



	



<?php

  

    session_start();
   
    $hostname = 'localhost'; 
    $dbname   = 'login'; 
    $username = 'root';             
    $password = '';   
	
     
     mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed,');
	 
    
      mysql_select_db($dbname) or DIE('Database name is not available!');


     
	  
     $username=mysql_real_escape_string($_POST['username']); 
     $password=mysql_real_escape_string($_POST['password']); 
     $password=md5($password); 

    

      $query = "SELECT * FROM users WHERE username='$username' and password='$password'";
      
	  
       
      $res = mysql_query($query);

      $rows = mysql_num_rows($res);
      if ($rows==1) {
      

      $_SESSION['username'] = $_POST['username'];

    
      header("Location: main.php");
     }
     else {
     
     echo "user name and password not found";
     }
     exit;
     ?>