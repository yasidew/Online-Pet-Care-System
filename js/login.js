var mailError = document.getElementById('mail-error');
var pwdError = document.getElementById('psw-error');

function validateMail(){
    var cmail = document.getElementById('signInEmail').value;
    if(cmail.length == 0){
        mailError.innerHTML = 'Enter E-mail';
        document.getElementById('mail-error').style.color = 'red';
        document.getElementById('signInEmail').style.borderColor = "red";
       
    }else{
        mailError.innerHTML = 'Valid';
        document.getElementById('mail-error').style.color = '#1FEF25';
        document.getElementById('signInEmail').style.borderColor = "#1FEF25";
    } 
    
    
}

function validatePwd(){
    var cpwd = document.getElementById('signInPassword').value;
    if(cpwd.length == 0){
        pwdError.innerHTML = 'Enter Password';
        document.getElementById('psw-error').style.color = 'red';
        document.getElementById('signInPassword').style.borderColor = "red";
       
    }else{
        pwdError.innerHTML = 'Valid';
        document.getElementById('psw-error').style.color = '#1FEF25';
        document.getElementById('signInPassword').style.borderColor = "#1FEF25";
    } 
    
    
}