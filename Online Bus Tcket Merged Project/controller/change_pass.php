<?php 
	require_once "../model/model.php";
	  if(isset($_POST['submit'])){
                            $currentPass = $_SESSION['password'];
                            $fCurrent = $_POST['current'];
                            $fnew = $_POST['new'];
                            $fretype = $_POST['repeat'];

                            if($fCurrent == $currentPass){
                                if($fCurrent == $fnew){
                                    echo "New password can't be same as current";
                                }else if($fretype == $fnew){
                                     // Create connection
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    // Check connection
                                    if ($conn->connect_error) {
                                      die("Connection failed: " . $conn->connect_error);
                                    }
                                    $username = $_SESSION['username'];
                                    
                                    $fnew = MD5($fnew);
                                    $sql = change_pass($fnew,$username);

                                    if ($conn->query($sql) === TRUE) {
                                         $_SESSION['password'] = $fretype;
                                        echo "Password Changed";
                                    } else {
                                      echo "Error updating record: " . $conn->error;
                                    }

                                    $conn->close();
                            
                                    

                                }else{
                                    echo "New Password Did not match with Repeat password";
                                }
                            }else{
                                echo "Current Password did not match";
                            }
                        }
?>