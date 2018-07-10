<?php

session_start();
error_reporting(0);

if(isset($_SESSION["admpass"]) && isset($_SESSION["admuser"]))
    $flag=1;
if($flag==0)
    echo "<script>alert('Access Denied');window.open('AdminHome.html','_self');</script>";
else{

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="sidebar.css">
</head>
<body>
    <div class="sidenav">
        <a href="Validation.php"  >Active Shops</a> 
        <a href="CreationShop.php">Add New Shop</a>
        
    
    </div>
    <div class="main">
            <form style='float:right' action='UserLogout.php' meathod='post'>
            <input type='submit' value="SignOut">
        </form>
    
        <table >
  <form action="CreationShopDB.php" method="post">
    <table>
        <tr>
            <td>
                <b>Shop Addition</b>
            </td>
        </tr>
        <tr>
            <td>
                <b>Shop Name</b>
            </td>  
            <td>
                <input type="text"  placeholder="Enter Shop Name" name="SName" required>
            </td>
        </tr>

        <tr>
            <td>
                <b>Shop Phonenumber</b>
            </td>
            <td>
                <input type="text"  placeholder="Enter Phonenumber" name="SPhone" required>
            </td>
        </tr>
        <tr>
            <td>
                <b>Shop Email</b>
            </td>
            <td>
                <input type="Email"  placeholder="Enter Email" name="SEmail" required>
            </td>
        </tr>
        <tr>
            <td>
                <b>Shop Address</b>
            </td>
            <td>
                <input type="text"  placeholder="Enter Address" name="Address" required>
            </td>
        </tr>
        <tr>
            <td>
                <b>Shop Password</b>
            </td>
            <td>
                <input type="Password"  placeholder="Enter Password" name="SPass" required>
            </td>
        </tr>  
        <tr>
            <td>
                <button type="submit" >ADD</button>
            </td>        
        </tr>

    </table>

  </form>
     </div>
</body>
</html> 

<?php }     ?>