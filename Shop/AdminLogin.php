<?php

session_start();


?>

<!DOCTYPE html>
<html>
<head>
  <title>Swetadri</title>
  <link rel="shortcut icon" href="logo.png" />
</head>

<body>


<div id="id01" class="modal">
  
  <form action="Validation.php" method="post">
    <table>
        <tr>
            <td>
                <b>Admin Login</b>
            </td>
        </tr>
        <tr>
            <td>
                <b>Username</b>
            </td>  
            <td>
                <input type="text"  placeholder="Enter Username" name="t1" required>
            </td>
        </tr>

        <tr>
            <td>
                <b>Password</b>
            </td>
            <td>
                <input type="password"  placeholder="Enter Password" name="t2" required>
            </td>
        </tr>  
        <tr>
            <td>
                <button type="submit" >Login</button>
            </td>        
        </tr>
    </table>

  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        window.open("Adminhome.HTML","_self");
    }
}
</script>

</body>
</html>
