<?php

session_start(); error_reporting(0);

if(isset($_SESSION["admpass"]) && isset($_SESSION["admuser"])) $flag=1;
if($flag==0) echo "<script>alert('Access
Denied');window.open('AdminHome.html','_self');</script>"; else{

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <script>
      var txt;
      var r = confirm("Change Status of Shop?");
      if (r != true)
          window.open('Validation.php','_self');

    </script>
  </head>
</html>
<?php

include 'link.php'; $conn=openCon();

$ShopID=$_GET['ShopID'];


$query="SELECT Access FROM shopmain WHERE ShopID='$ShopID'";

$exe=mysqli_query($conn,$query);
$res=mysqli_fetch_array($exe);

if($res[Access]) $query="UPDATE shopmain SET access=0 WHERE ShopID='$ShopID';";

else $query="UPDATE shopmain SET access=1 WHERE ShopID='$ShopID';";

if(mysqli_query($conn,$query)==true)
{
echo "<script>alert('Shop Changed Succesfully.');window.open('Validation.php','_self');</script>";
}
else
  echo "error";


?> <?php } ?>
