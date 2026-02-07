<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MAIN</title>
<style>
      body{
		  margin:0;
		  background:url(main2.jpg);
		  background-size: cover;
	  }
	  
	  .nav{
		  width:100%;
		  background:#7A0002;
		  height:100px;
		  margin-top:100px;
		  opacity:0.6;
		  
	  }
	  
ul{
	list-style: none;
	padding:0;
	margin:0;
	position:absolute;
}
li{
	float:left;
	margin-top:30px;
}
a_m{
	width:150px;
	color:white;
	display:block;
	text-align:center;
	font-size:20px;
	text-decoration:none;
	padding:10px;
	border-radius:10px;
	font-family:Century Gothic;
	font-weight:bold;
}
a_m:hover{
	background:#669900;
	trasition:0.6s;
}


</style>
</head>

<body>
<div class="nav">
<ul>
   <li> <a_m href ="main.php"> Home </a_m> </li>
   <li> <a_m href ="customers.php"> Customer </a_m> </li>
   <li> <a_m href ="store.php"> Store </a_m> </li>
   <li> <a_m href ="#"> Invoices </a_m> </li>
   <li> <a_m href ="#"> Search </a_m> </li>
   <li> <a_m href ="#"> Contact </a_m> </li>
   <li> <a_m href ="#"> Users </a_m> </li>
 </ul>
 </div>
   
   
</body>
</html>


<!doctype html>


<html>
<head>
<meta charset="utf-8">
<title>customers</title>
</head>


<body>


</body>
</html>

<link rel="stylesheet" href="p-style.css"/>

<h1>Customers List</h1>

<table class="racetimes">
      <thead >
      
            <tr id="firstrow">
            	
            <th>ID </th>
            <th>Company Name </th>
            <th>VAT-Registration</th>
            <th>Addresse</th>
            <th> Phone</th>
            <th>Mobile</th>
            <th>Email</th>
            <th colspan="2">Action</th>
            
            </tr>
            
       </thead>
  
  
<tbody>
      <?php
       
	   $con=mysqli_connect("localhost","root","","login");
	   $result = mysqli_query($con, "SELECT * FROM customers");
	   
	   while ($row = mysqli_fetch_assoc($result)):
	   
	   
	   ?>
       <tr>
          <td><?php echo $row['cust_id']; ?></td>
          <td><?php echo $row['comp_name']; ?></td>
          <td><?php echo $row['vat_number']; ?></td>
          <td><?php echo $row['addresse']; ?></td>
          <td><?php echo $row['Phone']; ?></td>
          <td><?php echo $row['mobile']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td>
          <a class="edit_btn" href="customers.php?edit=<?php echo $row['cust_id'];?>">Edit</a>
              </td> 
              <td>
              <a class="del_btn" href="customers.php?del=<?php echo $row['cust_id']; ?>">Delete</a>
              </td>
          </tr>
          
          <?php endwhile ;
		   ?>
           

          </tbody>
          </table>
          <input type="button" value="New Customer" onclick="location='new_customer.php'" />
          
                     <?php
					 
$db= mysqli_connect('localhost', 'root', '','login');
     
	  if(isset($_GET['edit'])){
		   echo "<script> window.location.assign('new_customer.php'); </script>";
		   
		  
	  }
	
	if(isset($_GET['del'])){
		
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM customers WHERE cust_id=$id");
		
		$_SESSION['msg'] = "Deleted";
		
		 
	}
	
	
	
	

   $result = mysqli_query($db, "SELECT * FROM customers");
?>

          
<script src="tables/js/jquery.js "></script>
<script src="tables/js/jquery.dataTables.js "></script>
<script src="tables/js/dataTables.bootstrap.js "></script>

<script> 
       $(".table").DataTable();
 </script>
          