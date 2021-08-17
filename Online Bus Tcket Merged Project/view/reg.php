 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style type="text/css">
    	input[type=text]{
    		width: 100%;
    	}

    	input[type=password]{
    		width: 100%;
    	}

    	input[type=date]{
    		width: 100%;
    	}
    </style>
</head>
<body>
   
        
        <table border="1" width="100%"/>

            <?php 
             include 'header.php';
            ?>

        <tr rowspan>
            <td colspan ="2">
                <br><br>
<fieldset>
 <legend><b>AUDITOR REGISTRATION</b></legend>
  <form action="reg.php" method="POST">
    <br/>



  <!--  comments-->

<?php
  session_start();
?>



<!DOCTYPE html>
<html>
<style>
.error {color: #FF0000;}
</style>

<?php

   require_once "../controllaer/reg.php";

  

  
?>


<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <span class="error">(*) must need to fill </span><br>
  <fieldset>
    <legend  > <b> NAME:</legend><br>
		<input id="fullname" type="text" name="name"><br><br>
    <span class="error" id="nameerr">* <?php echo $nameErr;?></span>
  </fieldset><br><br>

  <fieldset>
    <legend  > <b> EMAIL :</legend><br>
		<input id="validemail" type="text" name="email"><br><br>
    <span class="error" id="emailerr">* <?php echo $emailErr;?></span>
		
  </fieldset><br><br>


  <fieldset>
    <legend  > <b>  User Name:</legend><br> 
    <input type="text" name="username" id="username"><br><br>
    <span class="error" id="usernameerr">* <?php echo $usernameErr;?></span><br><br> 
  </fieldset><br><br>



  <fieldset>
    <legend  > <b>Password :</legend><br>
      <input id="psw" type="Password" name="newpass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" minlength="8" required><br><br>
    <span class="error" id="passworderr">* <?php echo $newpassErr;?></span><br><br>
    <div id="message">
              <h3>Password must contain the following:</h3>
              <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
              <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
              <p id="number" class="invalid">A <b>number</b></p>
              <p id="length" class="invalid">Minimum <b>8 characters</b></p>
            </div>
  </fieldset><br><br>


  <fieldset>
    <legend  > <b>Confirm Password :</legend><br>
    <input type="Password" id="cnfpsw" name="renewpass" minlength="8" required><br><br>
    <span class="error" id="renewpasserr">* <?php echo $renewpassErr;?></span>
  </fieldset><br><br>


  

  <fieldset>
    <legend  > <b> DATE OF BIRTH:</legend><br>
  	<input type="date" min="1953-01-01" max="2021-12-31" id="birthdate" name="birthdate" required><br><br>
    <span class="error" id="birthdateerr">* <?php echo $birthdateErr;?></span><br><br>
  </fieldset><br><br>


  <fieldset>
    <legend  > <b> GENDER :</legend><br>
    <input type="radio" name="gender"  value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <span class="error" id="gendererr">* <?php echo $genderErr;?></span><br><br>
    
  </fieldset><br><br>

 <input type="submit" id="submit" name="submit" value="submit">&nbsp;&nbsp;

  

<!--echo $birthdate("mm")  echo date_format($birthdate,"Y/m/d H:i:s");-->


<?php include 'footer.php';?>
        

        </table>
    </form>
    
</body>

 <script src="../js/reg.js"></script> 
</html>

  




