
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auditor Login</title>
    <style type="text/css">
      input[type=text]{
        width: 100%;
      }

      input[type=password]{
        width: 100%;
      }
    </style>
</head>
<body>
        
        <table border="1" width="100%">
            <?php include 'header.php';?>

        <tr rowspan>
            <td colspan ="2">
                <br><br>
                <div class="center-mid">
                <fieldset>
                    <?php


   ob_start();
   session_start();


    require_once "../controllaer/login.php";
   

?>
                    <legend><b>Auditor Login</b></legend>
                    <form action="login.php" method="POST">
                        <table width="100%;">
                            <tr>
                                <td>User Name</td>
                                <td>:</td>
                                <td><input type="text" id="usrname" name="userName" <?php if(isset($_COOKIE["username"])){ echo 'value="'.$_COOKIE["username"].'"'; }?> required>
                                                                   </td> 

                            </tr>
                            <tr> <td><span class="error" id="usernameerr">* </span></td></tr>
                            <tr>
                                <td>Password</td>
                                <td>:</td>
                                <td><input type="password"  id="psw" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" <?php if(isset($_COOKIE["username"])){ echo 'value="'.$_COOKIE["password"].'"';} ?> required>

                                  
                                </td> 
                            </tr>
                            <tr><td><span class="error" id="passworderr">* </span></td></tr>
                        </table>
                        <hr />
                        <input name="remember" type="checkbox">Remember Me
                        <br/><br/>
                        <input type="submit" id="submit" name="submit" value="Submit">  
                        <a href="forgot.php">Forgot Password?</a>


                        
                    </form>
                    <div id="message">
						  <h3>Password must contain the following:</h3>
						  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
						  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
						  <p id="number" class="invalid">A <b>number</b></p>
						  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
						</div>

                </fieldset>
                </div>
                <br><br>
                
            </td>
        </tr>



         <?php include 'footer.php';?>
        

        </table>

    
</body>

<script src="../js/login.js"></script> 
</html>

