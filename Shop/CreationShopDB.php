
<?php

session_start();
error_reporting(0);

if(isset($_SESSION["admpass"]) && isset($_SESSION["admuser"]))
    $flag=1;
if($flag==0)
    echo "<script>alert('Access Denied');window.open('AdminHome.html','_self');</script>";
else{

?>

<?php
include 'link.php';
$conn=openCon();

$ShopName=$_POST['SName'];
$ShopID=$_POST['SID'];
$ShopPassword=$_POST['SPass'];
$Email=$_POST['SEmail'];
$Phone=$_POST['SPhone'];
$Address=$_POST['Address'];


$query="INSERT INTO shopmain VALUES('$ShopName','$ShopPassword',1,'$Email','$Phone','$Address',NULL,NULL,NULL);";

if(mysqli_query($conn,$query))
	echo "<script>alert('Shop Added Succesfully.');window.open('CreationShop.php','_self');</script>";
else
	echo "<script>alert('Shop Already exists try new ShopID.');window.open('CreationShop.php','_self');</script>";

?>


<?php }

?>
	