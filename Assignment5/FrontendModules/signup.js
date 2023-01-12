const signUp =()=>{
    console.log("Sign Up called");
    const userEmail = document.getElementById("signupuseremail").value;
    const userName = document.getElementById("signupusername").value;
    const userPassword = document.getElementById("signupuserpassword").value;
    const userConfirmPassword = document.getElementById("signupconfirmuserpassword").value;
    const errorConatiner = document.getElementById("error-container");
    errorConatiner.innerHTML="";

    if(!userName || !userEmail || !userPassword || !userConfirmPassword){
        errorConatiner.innerHTML="<span class='error-message'>All field Mandantory</span>";
    }else if(userPassword != userConfirmPassword){
        errorConatiner.innerHTML="<span class='error-message'>Password and confirm password does not match</span>";
        
    }else{
        const user ={
            "name":userName,
            "email":userEmail
        }
        console.log("ready to post data for sign up", user);
    }
   
}
export default signUp;