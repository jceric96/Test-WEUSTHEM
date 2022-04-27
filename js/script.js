var check = document.getElementById("done");
check.addEventListener("click",validate);

function validate(e){
    var emailRegEx = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,6}$/;
    var emailValue = document.getElementById('email-address').value;
    var phoneRegEx = /[0-9]{10}$/;
    var phoneValue = document.getElementById('phone-number').value;
    if (!emailRegEx.test(emailValue)){ 
        $error = 'email address is wrong&&error=true';
        e.preventDefault();
    }else if(!phoneRegEx.test(phoneValue)){
        $error = 'phone number is wrong && error=true';
        e.preventDefault();
    }else{
        $error = 'none && error=false';
    }
}