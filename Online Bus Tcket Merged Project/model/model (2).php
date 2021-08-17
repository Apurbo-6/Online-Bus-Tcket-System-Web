<?php 

function check_credential($userName,$password_hash){
	$sql = "SELECT * FROM auditor_info WHERE Audi_User_Name ='".$userName."' AND Audi_Password ='".$password_hash."'";
	return $sql;
}


function check_user_exist($username){
	$sql = "SELECT * FROM auditor_info WHERE Audi_User_Name ='".$username."'";
	return $sql;
}


function add_auditor($name, $email, $username, $newpass, $birthdate, $gender,$pic){
	$sql = "INSERT INTO auditor_info(Audi_Name , Audi_Email, Audi_User_Name , Audi_Password,Audi_Dob,Audi_Gender,Audi_Picture)
                    VALUES ('$name', '$email', '$username', '$newpass', '$birthdate', '$gender','$pic')";

    return $sql;
}


function edit_auditor($name, $email ,$gender,$dob,$username){
	$sql =  "UPDATE auditor_info SET Audi_Name='$name', Audi_Email ='$email',Audi_Gender='$gender', Audi_Dob='$dob' WHERE Audi_User_Name ='$username'";

    return $sql;
}

function change_pass($fnew,$username){
	$sql =  "UPDATE auditor_info SET Audi_Password ='$fnew' WHERE Audi_User_Name ='$username'";

    return $sql;
}


?>