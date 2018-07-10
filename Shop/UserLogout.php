<?php

session_start();
unset($_SESSION["admpass"]);
unset($_SESSION["admuser"]);

echo "<script>alert('Logout Succesful');window.open('AdminHome.html','_self');</script>";

?>