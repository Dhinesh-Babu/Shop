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
        <a href="ShopStatus.php">Shop Status</a>
    </div>
    <div class="main">

            <form style='float:right' action='UserLogout.php'  meathod='post'>
            <input type='submit'  value="SignOut">
        </form>


    
        <table>
      	<?php 
include "link.php";
$conn=openCon();
$Shop=$_GET['ShopDetail'];

$query="SELECT Shop,ShopID,Access FROM shopmain WHERE ShopID='$Shop' OR Shop='$Shop'";
$result=mysqli_query($conn,$query);
if(!$result)
            echo "<script>alert('Error in Result Fetch')</script>";
else{
    echo "<table>
                    <b>Shops with Shop name or Shop ID as ".$Shop."<b>
                    <tr>
                        <td>Shop name</td>
                        <td>Shop ID</td>
                        <td>Access</td>
                    </tr>";
            while($m=mysqli_fetch_array($result)){
                $status='Enabled';
                if(!$m['Access'])
                    $status='Disabled';
                echo"<tr>
                        <td>".
                            $m['Shop']
                        ."</td>
                        <td>".
                            $m['ShopID']
                        ."</td>
                         <td><a href='ShopStatusDB.php?ShopID=".$m['ShopID']."'>"



                        .
                            $status
                        .


                        "</a></td>

                    </tr>
                    ";

            }
}

?>


        </table>
    </div>
</body>		

</html>


<?php } ?>