<?php ob_start();
   session_start();

   if(!isset($_SESSION['valid'])){
    header('location:login.php'); 
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUDITOR PROFILE</title>
    <style type="text/css">
        input[type=password]{
            width: 100%;
        }
    </style>
</head>
<body>
        
        <table border="1"  width="100%">
            <?php 
             include 'header.php';
            ?>

            <tr rowspan class="web">
            <td class="vertical">
            <?php include 'nav.php';?>
            </td>   
            <td>
                <fieldset>
                    <legend><b>CHANGE PASSWORD</b></legend>
                    <form action="forgot_pass.php" method="POST">
                        Current Password:
                        <input type="password" id="cpsw" name="current" required>
                        <span class="error" id="cpassworderr"></span><br>
                        <hr />
                        New Password:
                        <input type="password" id="psw" name="new" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" minlength="8" required>
                        <span class="error" id="passworderr"></span><br>

                          <div id="message">
              <h3>Password must contain the following:</h3>
              <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
              <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
              <p id="number" class="invalid">A <b>number</b></p>
              <p id="length" class="invalid">Minimum <b>8 characters</b></p>
            </div>
                        <hr />
                        Retype New Password:
                        <input type="password"  id="cnfpsw" name="repeat" required>
                        <span class="error" id="cnpassworderr"></span><br>
                        <hr />
                        <input type="submit" id="submit" name ="submit" value="Submit" />
                    </form>
                         </td>
        </tr>

        <tr rowspan class="mobile">
            <td class="vertical">
            <?php include 'nav.php';?>
            </td>   
        </tr>
        <tr class="mobile">
            <td>
                <fieldset>
                    <legend><b>CHANGE PASSWORD</b></legend>
                    <form action="forgot_pass.php" method="POST">
                        Current Password:
                        <input type="password" name="current"/ required>
                        <hr />
                        New Password:
                        <input type="password" name="new"/ required>
                        <hr />
                        Retype New Password:
                        <input type="password" name="repeat"/ required>
                        <hr />
                        <input type="submit" name ="submit" value="Submit" />
                    </form>
                         </td>
        </tr>

                    <?php

                        require_once "../controllaer/change_pass.php";

                      


                    ?>
                    
                </fieldset>


       



     <?php include 'footer.php';?>
        
        

        </table>

    
</body>
<script src="../js/changepass.js"></script> 
</html>



