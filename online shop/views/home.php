<?php
require_once('../Models/alldb.php');

$res1=data1();

?>


<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">


   <title>Home</title>
</head>
<body>


<h1>Seller Details</h1>


 <table border="1">
    <tr>
       <th>SellerID</th>
       <th>Name</th>
       <th>Email</th>
       <th>Action</th>
    </tr>
    <?php while($r1=$res1->fetch_assoc()) { ?>
    <tr>
       <td><?php echo $r1['sellerid'] ?></td>
       <td><?php echo $r1['name'] ?></td>
       <td><?php echo $r1['email'] ?></td>
       <form action="../Controllers/homeController.php" >
         <td><button name="delete" value="<?php echo $r1['sellerid'] ?>">Delete</button></td>
       </td>

       </form>
    </tr>
<?php } ?>



 </table> 
</form> <br> 
<form action="../index.php">
 <button name="logout">Logout</button>

</form>

</body>
</html>