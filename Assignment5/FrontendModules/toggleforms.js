export const showSignUp =()=>{
    console.log("Show Sign Up called");
    const signUpContainer = document.getElementById("sign-up-container");
    const signInConatiner =  document.getElementById("sign-in-container");
    signInConatiner.style.display = "none";
    signUpContainer.style.display = "block";
}

export const showSignIn =()=>{
    console.log("Show Sign In called");
    const signUpContainer = document.getElementById("sign-up-container");
    const signInConatiner =  document.getElementById("sign-in-container");
    signInConatiner.style.display = "block";
    signUpContainer.style.display = "none";
}

