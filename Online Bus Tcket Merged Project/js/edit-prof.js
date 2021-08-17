var fullname = document.getElementById("fullname");
var validemail = document.getElementById("validemail");
function validateEmail() {
  const re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  return validemail.value.match(re);
}

document.getElementById("submit").addEventListener("click", function(event){
  
  if(fullname.value===""){
    document.getElementById("nameerr").innerHTML = "Name is empty" ;
    event.preventDefault()
  }


  if(validemail.value===""){
    document.getElementById("emailerr" ).innerHTML = "Email is empty" ;
    event.preventDefault()
  }

 

  if (!validateEmail()) {
    alert("Provide Correct email");
    event.preventDefault()
  }

});