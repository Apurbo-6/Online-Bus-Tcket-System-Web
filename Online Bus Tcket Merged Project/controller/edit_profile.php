<?php 
	require_once "../model/model.php";
	if(isset($_POST['submit'])){

                                    // Create connection
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    // Check connection
                                    if ($conn->connect_error) {
                                      die("Connection failed: " . $conn->connect_error);
                                    }
                                    $username = $_SESSION['username'];
                                    $name = $_POST['name'];
                                    $email = $_POST['email'];
                                    $dob = $_POST['dob'];
                                    $gender  = $_POST['gender'];

                                    $sql = edit_auditor($name, $email ,$gender,$dob,$username);

                                    if ($conn->query($sql) === TRUE) {
                                          $_SESSION["name"]= $_POST['name'];
                                         $_SESSION["email"]= $_POST['email'];
                                         $_SESSION["gender"]= $_POST['gender'];
                                         $_SESSION["dob"]= $_POST['dob'];

                                        echo "Profile Changed";
                                    } else {
                                      echo "Error updating record: " . $conn->error;
                                    }

                                    $conn->close();
                            
                                   

                                     
                                     

                               
                        }
?>