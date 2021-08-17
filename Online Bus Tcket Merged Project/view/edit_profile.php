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
    <title>PROFILE</title>
    <style type="text/css">
        input[type=text]{
            width: 100%;
        }
        input[type=date]{
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
			    <legend><b>EDIT PROFILE</b></legend>
				<form action="edit_profile.php" method="POST">
					<br/>
					<table width="100%" cellpadding="0" cellspacing="0">
						<tr>
							<td>Name</td>
							<td>:</td>
							<td><input name="name" id="fullname"type="text" value="<?php echo $_SESSION["name"];?> "></td>
							<td><p id="nameerr"></p></td>
						</tr>		
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td>Email</td>
							<td>:</td>
							<td>
								<input name="email" id="validemail" type="text" value="<?php echo $_SESSION["email"];?>">
								<abbr title="hint: sample@example.com"><b>i</b></abbr>
							</td>
							<td><p id="emailerr"></p></td>
						</tr>				
						
                        <tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td>Gender</td>
							<td>:</td>
							<td>   
								<input name="gender" type="radio" <?php if($_SESSION["gender"]=="male") echo 'checked="checked"';?> value="male">Male
								<input name="gender" type="radio" <?php if($_SESSION["gender"]=="female") echo 'checked="checked"';?> value="female">Female
								<input name="gender" type="radio" <?php if($_SESSION["gender"]=="other") echo 'checked="checked"';?> value="other">Other
							</td>
							<td></td>
						</tr>		
						<tr><td colspan="4"><hr/></td></tr>
						<tr>
							<td valign="top">Date of Birth</td>
							<td valign="top">:</td>
							<td>
								<input name="dob" type="date"
								 value="<?php echo $_SESSION['dob']?>"
                                 required>
								<br/>
								<font size="2"><i>(dd/mm/yyyy)</i></font>
							</td>
							<td></td>
						</tr>
					</table>
					<hr/>
					<input type="submit" id="submit"  value="Submit" name="submit">		
				</form>
			


                  
                </fieldset>

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
                <legend><b>EDIT PROFILE</b></legend>
                <form action="edit_profile.php" method="POST">
                    <br/>
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td><input name="name" id="" type="text" value="<?php echo $_SESSION["name"];?>" ></td>
                            <td></td>
                        </tr>       
                        <tr><td colspan="4"><hr/></td></tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>
                                <input name="email"  type="text" value="<?php echo $_SESSION["email"];?>">
                                <abbr title="hint: sample@example.com"><b>i</b></abbr>
                            </td>
                            <td></td>
                        </tr>               
                        <tr><td colspan="4"><hr/></td></tr>
                        
                        <tr>
                            <td>Gender</td>
                            <td>:</td>
                            <td>   
                                <input name="gender" type="radio" <?php if($_SESSION["gender"]=="male") echo 'checked="checked"';?> value="male">Male
                                <input name="gender" type="radio" <?php if($_SESSION["gender"]=="female") echo 'checked="checked"';?> value="female">Female
                                <input name="gender" type="radio" <?php if($_SESSION["gender"]=="other") echo 'checked="checked"';?> value="other">Other
                            </td>
                            <td></td>
                        </tr>       
                        <tr><td colspan="4"><hr/></td></tr>
                        <tr>
                            <td valign="top">Date of Birth</td>
                            <td valign="top">:</td>
                            <td>
                                <input name="dob" type="text"
                                 value="<?php echo $_SESSION['dob']?>">
                                <br/>
                                <font size="2"><i>(dd/mm/yyyy)</i></font>
                            </td>
                            <td></td>
                        </tr>
                    </table>
                    <hr/>
                    <input type="submit" value="Submit" name="submit">      
                </form>
            


                  
                </fieldset>

            </td>
        </tr>

  <?php


        require_once "../controllaer/edit_profile.php";
                        


                    ?>

        <?php include 'footer.php';?>
        

        </table>

    
</body>

<script src="../js/edit-prof.js"></script> 
</html>





