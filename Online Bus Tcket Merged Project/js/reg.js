var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");
var fullname = document.getElementById("fullname");
var username = document.getElementById("username");
var validemail = document.getElementById("validemail");
var cnfpsw = document.getElementById("cnfpsw");
var birthdate = document.getElementById("birthdate");
var gender = "";


var radios = document.getElementsByName('gender');



function validateEmail() {
  const re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  return validemail.value.match(re);
}

document.getElementById("submit").addEventListener("click", function(event){

  for (var i = 0, length = radios.length; i < length; i++) {
  if (radios[i].checked) {
    // do whatever you want with the checked radio
    gender= radios[i].value;

    // only one radio can be logically checked, don't check the rest
    break;
  }
}

  document.getElementById("nameerr").innerHTML = "" ;
  if(fullname.value===""){
    document.getElementById("nameerr").innerHTML = "Name is empty" ;
    
    event.preventDefault()
  }
  document.getElementById("passworderr" ).innerHTML= "" ;
  if(myInput.value===""){
    document.getElementById("passworderr" ).innerHTML= "Password is empty" ;
    event.preventDefault()
  }
document.getElementById("emailerr" ).innerHTML = "" ;
  if(validemail.value===""){
    document.getElementById("emailerr" ).innerHTML = "Email is empty" ;
    event.preventDefault()
  }
  document.getElementById("usernameerr" ).innerHTML= "" ;
    if(username.value===""){
    document.getElementById("usernameerr" ).innerHTML= "Username is empty" ;
    event.preventDefault()
  }
  document.getElementById("birthdateerr" ).innerHTML= "" ;
    if(birthdate.value===""){
    document.getElementById("birthdateerr" ).innerHTML= "DOB is empty" ;
    event.preventDefault()
  }

  document.getElementById("gendererr" ).innerHTML= "" ;
    if(gender===""){
    document.getElementById("gendererr" ).innerHTML= "Gender not selected" ;
    event.preventDefault()
  }

 document.getElementById("renewpasserr" ).innerHTML= "" ;
  if(cnfpsw.value!=myInput.value){
    document.getElementById("renewpasserr" ).innerHTML= "Confirm password did not matched" ;
    event.preventDefault()
  }
  document.getElementById("renewpasserr" ).innerHTML= "" ;
  if(cnfpsw.value===""){
    document.getElementById("renewpasserr" ).innerHTML= "Confirm password is empty" ;
    event.preventDefault()
  }
  document.getElementById("emailerr" ).innerHTML =  "";
  if (!validateEmail()) {
     document.getElementById("emailerr" ).innerHTML =  "Provide Correct email";
    event.preventDefault()
  }

  
});
// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}