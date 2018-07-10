



<!--THIS CHECKS IF LOGGED IN AS ADMIN ANTIME-->
<?php

session_start();
error_reporting(0);

include 'Password.php';

$flag=0;

$u=$_POST['t1'];
$p=$_POST['t2'];

if(isset($_SESSION["admpass"]) && isset($_SESSION["admuser"]))
	$flag=1;
else if(strcmp($admin_username,$u)!=0 || strcmp($admin_password,$p)!=0)
	echo "<script>alert('Invalid Credentials');window.open('AdminHome.html','_self');</script>";
else
{
	$flag=1;
	$_SESSION["admpass"]=$p;
	$_SESSION["admuser"]=$u;
}

?>



<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="sidebar.css">
<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

#myInput {
    border-box: box-sizing;
    background-image: url('searchicon.png');
    background-position: 14px 12px;
    background-repeat: no-repeat;
    font-size: 16px;
    padding: 14px 20px 12px 45px;
    border: none;
    border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f6f6f6;
    min-width: 230px;
    overflow: auto;
    border: 1px solid #ddd;
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #ddd}

.show {display:block;}
</style>
</head>
<body>
    <div class="sidenav">
        <a href="#" onclick="Toggle()" >Active Shops</a>
        <a href="CreationShop.php">Add New Shop</a>

    </div>

    <div class="dropdown">
<button onclick="myFunction()" class="dropbtn">Dropdown</button>
  <div id="myDropdown" class="dropdown-content">

    <a href="Validation.php">All</a>
    <a href="#base">Active</a>
    <a href="">Disabled</a>
  </div>
</div>



    <div class="main">
        <form style='float:right' action='UserLogout.php' meathod='post'>
            <input type='submit' value="SignOut">
        </form>

        <table >


        <?php

        include 'link.php';
        $conn=openCon();

        $query="SELECT Shop,ShopID,Access,ShopEmail,ShopAddress,ShopPhone,ShopRenewDate,PlanID FROM shopmain;";
        $result=mysqli_query($conn,$query);
        if(!$result)
            echo "<script>alert('Error in Result Fetch')</script>";
        else{
            echo "<table>
                    <b>Existing Shops<b>
                    <tr>
                        <td>Shop name</td>
                        <td>Shop ID</td>
                        <td>ShopPhone</td>
                        <td>ShopEmail</td>
                        <td>ShopAddress</td>
                        <td>ShopRenewDate</td>
                        <td>PlanID</td>
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
                        <td>".
                            $m['ShopPhone']
                        ."</td>
                        <td>".
                            $m['ShopEmail']
                        ."</td>
                        <td>".
                            $m['ShopAddress']
                        ."</td>
                        <td>".
                            $m['ShopRenewDate']
                        ."</td>
                        <td>".
                            $m['PlanID']
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

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function Toggle() {
    document.getElementById("myDropdown").classList.toggle("show");
}
</script>

</html>
