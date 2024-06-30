function validationFunc(){
    var email = document.getElementById("email").value;
    var confirmEmail = document.getElementById("confirm_email").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm_password").value;
   

    if(email !== confirmEmail){
        alert("Email address does not match")
        return false;
    }
    else{
        if(email === confirmEmail){
            if(password !== confirmPassword){
                alert("Passwords must match")
                return false;
            }
        }

    }


    return true;

}