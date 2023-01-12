const signIn = ()=>{
    console.log("SignIn function called");
    const userEmail = document.getElementById("useremail").value;
    const userPassword = document.getElementById("userpassword").value;
    const errorConatiner = document.getElementById("error-container");
    errorConatiner.innerHTML=""

    if(!userEmail || !userPassword){
        errorConatiner.innerHTML="<span class='error-message'>All field Mandantory</span>";
    }else{
        const user = {
            "email":userEmail,
            "password":userPassword
        }
        console.log("ready to post data for sign in");
    }
    
}

export default signIn;
