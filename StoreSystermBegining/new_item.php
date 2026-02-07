<!DOCTYPE html>
<html>
<head>
	<title>store</title>
    <link rel="stylesheet" type="text/css" href="c-style.css">
</head>

<body>


  <form method="post" action="">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
      <div class="input-group">
           <label>id</label>
           <input type="text" name="id">
           </div>
           <div class="input-group">
           <label>product name</label>
           <input type="text" name="p_name">
           </div>
           <div class="input-group">
           <label>brand</label>
           <input type="text" name="brand">
           </div>
           <div class="input-group">
           <label>Wholesale price</label>
           <input type="text" name="w_price" >
           </div>
           <div class="input-group">
           <label>unite price</label>
           <input type="text" name="u_price" >
           </div>
      
           <input type="submit" value="Save"> 
           <input type="button" value="cancel" onclick="history.back();" /> 
 
</body>
</html>


<?php	 

$db= mysqli_connect('localhost', 'root', '','login');

if(isset($_POST['id'])){
	$id = $_POST['Item_id'];
	$product = $_POST['p_name'];
	$brand = $_POST['brand'];
	$w_price = $_POST['w_price'];
	$u_price = $_POST['u_price'];
	
	$query = "INSERT INTO store (Item_id, p_name, brand, w_price, u_price) VALUES('$id','$product','$brand','$w_price','$u_price')";
	
	mysqli_query($db, $query);
	$_SESSION['msg'] = "Added";
	header('location:store.php');	
}


?>





	