<!DOCTYPE html>
<html>
<head>
	<title>store</title>
    <link rel="stylesheet" type="text/css" href="store-style.css">
</head>

<body>
<?php
     if (isset($_SESSION['msg'])): ?>
        <div class="msg"> 
             <?php
			    echo $_SESSION['msg'];
				unset($_SESSION['msg']);
				
				?>
        </div>
        
<?php endif ?>
      <table>
      <thead>
            <tr>
               <th >id</th>
               <th>product name</th>
               <th>brand</th>
               <th>Wholesale price</th>
               <th>unit price </th>
               <th colspan="2">Action</th>
             </tr>
      </thead>
      <tbody>
      
     <?php    $result = ""; 
	 $db= mysqli_connect('localhost', 'root', '','login');
	  $result = mysqli_query($db, "SELECT * FROM store");
    ?>
      <?php while ($row = mysqli_fetch_assoc($result)){ ?>
		  
		<tr>
              <td><?php echo $row['Item_id'];?></td> 
              <td><?php echo $row['p_name'];?></td> 
			  <td><?php echo $row['brand'];?></td> 
			  <td><?php echo $row['w_price'];?></td> 
			  <td><?php echo $row['u_price'];?></td>  
              <td>
              <a class="edit_btn" href="store.php?edit=<?php echo $row['Item_id'];?>">Edit</a>
              </td> 
              <td>
              <a class="del_btn" href="store.php?del=<?php echo $row['Item_id']; ?>">Delete</a>
              </td>
           </tr> 
            
		  
	  <?php } ?>
           
      </tbody>
  </table>
  
  <a href="new_item.php" class="float">
  <i class="fa fa-plus my-float"></i>
  </a>
 

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</body>
</html>







	