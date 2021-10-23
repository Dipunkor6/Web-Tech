<!DOCTYPE html>
<html>
<body>
<?php
// define variables and set to empty values
$nameErr = $passwordErr = "";
$name = $password ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
}
//Validates password 
if(!empty($_POST["password"])) {
  $password = test_input($_POST["password"]);
  
  if (strlen($_POST["password"]) <= '8') {
      $passwordErr = "Your Password Must Contain At Least 8 Characters!";
  }
  elseif(!preg_match("#[0-9]+#",$password)) {
      $passwordErr = "Your Password Must Contain At Least 1 Number!";
  }
  elseif(!preg_match("#[A-Z]+#",$password)) {
      $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
  }
  elseif(!preg_match("#[a-z]+#",$password)) {
      $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
  } 
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Log in</h2>

<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  Password: <input type="password" name="password" value="<?php echo $password;?>">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>

  <input type="checkbox" id="remember" name="remember" value="">
  <label for="rmb"> Remember Me</label><br>
  
  <input type="submit" value="Submit"><br>
  
</form> 

<?php
echo $name;
echo "<br>";
?>

</body>
</html>