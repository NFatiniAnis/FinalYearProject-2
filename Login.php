<?php
    session_start();
    include('admin/db_connect.php');
    include('header.php');
?>

<html>
  <body>
      <center><h2>LOG IN</h2></center>
      <main>
<table width="70%" border="0" align="center">
  <tr><td>
  <label for="username">Username:</label><br>
      <input type="text" id="username" name="username"><br>
    </div>
    <div>
      <label for="password">Password:</label><br>
      <input type="text" id="password" name="password"><br>
    </div>
    <a class="btn btn-primary" href="fullcv.html">LOG IN</a>
  <button type="reset">RESET</button>
  <br>
  <h5>*If you did not sign up yet, <a href="registration.php">Sign up here</a></h5></br>
 </form>
</td></tr>
</table>
</html>
