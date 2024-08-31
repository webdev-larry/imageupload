<!DOCTYPE html>

<html lang="en" >
  <head>
    <meta charset="UTF-8">
    <title> Registration Form </title>
    <link rel="stylesheet" href="assets/css/signup.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <style>
    .error {
  color: #FF0000;
}
   </style>
<body>
  <div class="container">

  <?php
require ('connection.php');
 $userNameErr=  $passErr= $passSErr="";
    $userName= $password="";


    if($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["userName"])) {
        $userNameErr = '<p style="color:red;">*</P>';
      } 
      else{
        $userName = test_input($_POST["userName"]);
      }
      if  (empty($_POST["password"])){
        $passSErr = '<p style="color:red;">*</P>';
      }elseif ($_POST["password"] !== $_POST["R_PASS"]){
        $passErr = '<p style="color:red;">Password do not match</P>';
        $conn->close();
      }else{
        $password = md5($_POST["password"]);
      }}
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data ;

    }
      if(!empty($userName) && !empty($password)){
        $mSQL = "insert into signup(username, password) Values('$userName', '$password')";
      if ($conn->query($mSQL) == TRUE){
          echo "New record created successfully";
          header("Location: signin.php");
      }else {
        echo "Error:" .$mSQL."<br/>" .$conn->error;

      }
    }
      else{

        echo '<p style="color:red;text-align:center">please fill out the form completely</P>';
      };
      
     
?>

    <div class="title">Registration</div>
    <div class="content">
      <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>"  method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Username</span>
            <?php echo $userNameErr;?>
            <input type="text" name="userName" placeholder="Enter your username" required>
          </div>
          
          <div class="input-box">
            <span class="details">Password</span>
            <?php echo $passSErr;?>
            <input type="text" name="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">RETYPE-Password</span>
            <?php echo $passErr;?>
            <input type="text" name="R_PASS" placeholder="RE-Enter your password" required>
          </div>
          
          
            <!-- <span class="details">image</span>
            /
            <input type="file" name="image" required> -->
          
          
        <div class="button">
          <input type="submit" name="submit" value="Register">
        </div>
        <div class="copy"> copyright 2019 - <?php
        
       echo   date("y/m/d/l"); 
  ?>
  </div>
      </form>
    </div>
  </div>
<div class="result" >


</div>

  <div><?php
 "copyright 2019 - ".date("y"); 
  ?>
  </div>
</body>
</html>