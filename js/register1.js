var nameError = document.getElementById('name-error');
var emailError = document.getElementById('email-error');
var passwordError = document.getElementById('password-error');
var passwordError1 = document.getElementById('password-error1');

function validatename(){
    var cname = document.getElementById('createName').value;
    if(cname.length == 0){
        nameError.innerHTML = 'Please fill Name';
        document.getElementById('name-error').style.color = 'red';
        document.getElementById('createName').style.borderColor = "red";
       
    }else{
        nameError.innerHTML = 'Valid';
        document.getElementById('name-error').style.color = '#1FEF25';
        document.getElementById('createName').style.borderColor = "#1FEF25";
    }   
}
function validateemail(){
    var cemail = document.getElementById('createAddress').value;
    if(cemail.length == 0){
        emailError.innerHTML = 'Please Enter Email';
        document.getElementById('email-error').style.color = 'red';
        document.getElementById('createAddress').style.borderColor = "red";
    }
    else if(!cemail.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
        emailError.innerHTML = 'Email not valid';
        document.getElementById('email-error').style.color = 'red';
        document.getElementById('createAddress').style.borderColor = "red";
    }else{
        emailError.innerHTML = 'Valid';
        document.getElementById('email-error').style.color = '#1FEF25';
        document.getElementById('createAddress').style.borderColor = "#1FEF25";    
    }

}
function validatepassword(){
    var cpass = document.getElementById('createPassword').value;
    if(cpass.length == 0){
        passwordError.innerHTML = 'Please Enter password';
        document.getElementById('password-error').style.color = 'red';
        document.getElementById('createPassword').style.borderColor = "red";
    }else{
        passwordError.innerHTML = 'Valid';
        document.getElementById('password-error').style.color = '#1FEF25';
        document.getElementById('createPassword').style.borderColor = "#1FEF25"; 
    }
}
function validatepassword1(){
    var cpass1 = document.getElementById('confirmPassword').value;
    if(cpass1.length == 0){
        passwordError1.innerHTML = 'Re-enter password';
        document.getElementById('password-error1').style.color = 'red';
        document.getElementById('confirmPassword').style.borderColor = "red";
    }else{
        passwordError1.innerHTML = 'Valid';
        document.getElementById('password-error1').style.color = '#1FEF25';
        document.getElementById('confirmPassword').style.borderColor = "#1FEF25"; 
    }
}
