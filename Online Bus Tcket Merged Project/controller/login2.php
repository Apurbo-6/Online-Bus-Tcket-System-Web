<?php 
	require_once "../model/model.php";
	if(isset($_POST['submit'])){

        $userName = $_POST['userName'];
        $password = $_POST['password'];

        if(empty($userName) || empty($password)){
            echo "Username/Password is needed";
        }
        else if(!preg_match('/^[A-Za-z0-9_~\-!@#\$%\^&\*\(\)]+$/', $userName)){
             echo "Username can content Alphanumaric and underscore";
        }
        else{
            if(strlen($userName)>=2 && strlen($password)>=8){
                if(preg_match('/[^a-zA-Z\d]/', $password)){
                    $password_hash = MD5($password);
                    $sql = check_credential($userName,$password_hash);
                    $result = $conn->query($sql);
                    $valuefinal = [];
                      if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {

                            
                            $valuefinal["username"] = $row["Audi_User_Name"];
                            $valuefinal["name"]= $row["Audi_Name"];
                            $valuefinal["password"] = $password;
                            $valuefinal["email"] = $row["Audi_Email"];
                            $valuefinal["gender"] = $row["Audi_Gender"];
                            $valuefinal["dob"] = $row["Audi_Dob"];
                            $valuefinal["pic"] = $row["Audi_Picture"];
                            
                          }
                      }
                    if(empty($valuefinal)){
                            echo "Wrong user name and Pass";
                    }else{
                    $_SESSION['valid'] = true;
                    $_SESSION['timeout'] = time();
                    $_SESSION['username'] = $valuefinal["username"];
                    $_SESSION['name'] = $valuefinal["name"];
                    $_SESSION['password'] = $valuefinal["password"];
                    $_SESSION['email'] = $valuefinal["email"];
                    $_SESSION['gender'] = $valuefinal["gender"];
                    $_SESSION['dob'] = $valuefinal["dob"];
                    

                    if($_POST["remember"]){
                    	setcookie('username', $valuefinal["username"], time()+3600, '/');
                    	setcookie('password', $valuefinal["password"], time()+3600, '/');
                    }
                    
                    header('location:view_prof.php'); 
                }
                }else{
                    echo "passwrod need to have one special char.";
                }
            }
            else{
                if(strlen($userName)<2){
                    echo "Username has to be more than 2 char";
                }else{
                    echo "password 8 chars";
                }
                
            }
        }

    }
?>