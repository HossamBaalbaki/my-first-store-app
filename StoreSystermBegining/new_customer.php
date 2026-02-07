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
a{
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
a:hover{
	background:#669900;
	trasition:0.6s;
}


</style>
</head>

<body>
<div class="nav">
<ul>
   <li> <a href ="main.php"> Home </a> </li>
   <li> <a href ="customers.php"> Customer </a> </li>
   <li> <a href ="store.php"> Store </a> </li>
   <li> <a href ="#"> Invoices </a> </li>
   <li> <a href ="#"> Search </a> </li>
   <li> <a href ="#"> Contact </a> </li>
   <li> <a href ="#"> Users </a> </li>
 </ul>
 </div>
   
   
</body>
</html>



<!doctype html>


<html>
<head>
<link rel="stylesheet" href="newc.css"/>
<meta charset="utf-8">
<title>customers</title>
</head>


<body>


<form name="customers" action="new_customer.php" method="post">
<table>
<tr>
    <td>id</td>
    <td><input type="text" name="id" value=""></td>
    </tr>
<tr>
    <td>company name</td>
    <td><input type="text" name="comp_name" value=""></td>
    </tr>
<tr>
    <td>vat reg</td>
    <td><input type="text" name="vat_number" value=""></td>
    </tr>
<tr>
    <td>addresse</td>
    <td><input type="text" name="addresse" value=""></td>
    </tr>
<tr>
    <td>phone</td>
    <td> <input type="text" name="phone" value=""></td>
    </tr>
    
    <tr>
    <td>Mobile</td>
    <td> <input type="text" name="mobile" value=""></td>
    </tr>
    <tr>
    <td>Email</td>
    <td> <input type="text" name="email" value=""></td>
    </tr>
 <tr>
    <td> <input type="submit" value="Save"> </td>
    </tr>
    </table>
    </form>
    </body>

</body>
</html>


<?php




if (isset($_POST['id'])) {
$id=$_POST['id'];
$comp=$_POST['comp_name'];
$vat=$_POST['vat_number'];
$add=$_POST['addresse'];
$phone=$_POST['phone'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];

$con=mysql_connect("localhost","root","");

if(!con)
{
	die("could not connect: ".mysql_error());
}

mysql_select_db("login",$con);

$query="INSERT INTO customers (cust_id,comp_name,vat_number,addresse,Phone,mobile,email)VALUES ('$id','$comp','$vat','$add','$phone','$mobile','$email')";
if(!mysql_query($query,$con))
{
	die('ERROR IN INSERTIN DATA'.mysql_error);
}
else
{
	echo"done";
}
}
?>



