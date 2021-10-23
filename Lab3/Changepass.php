<!DOCTYPE html>
<html>
<body>

<h2>CHANGE PASSWORD </h2>

<p>The <strong>input type="password"</strong> defines a password field:</p>

<form action="/action_page.php">
  <label for="cpass">Current Password :</label><br>
  <input type="password" id="cpass" name="cpass"><br>
  <label for="npass">New Password:</label><br>
  <input type="password" id="npass" name="npass"><br><br>
  <label for="rpass">Retype New Password:</label><br>
  <input type="password" id="rpass" name="rpass"><br><br>
  
  <input type="submit" value="Submit">
</form>

<p>The characters in a password field are masked (shown as asterisks or circles).</p>

</body>
</html>
