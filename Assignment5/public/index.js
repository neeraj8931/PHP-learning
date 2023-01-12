console.log("Assignement 5 js called");

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

const showSignUp =()=>{
    console.log("Show Sign Up called");
    const signUpContainer = document.getElementById("sign-up-container");
    const signInConatiner =  document.getElementById("sign-in-container");
    signInConatiner.style.display = "none";
    signUpContainer.style.display = "block";
}

const showSignIn =()=>{
    console.log("Show Sign In called");
    const signUpContainer = document.getElementById("sign-up-container");
    const signInConatiner =  document.getElementById("sign-in-container");
    signInConatiner.style.display = "block";
    signUpContainer.style.display = "none";
}

const addProduct = ()=>{
    console.log("Add product called");
    const productName = document.getElementById("productname").value;
    const productPrice = document.getElementById("productprice").value;
    const productSKU = document.getElementById("productsku").value;

    if(!productName || !productPrice || !productSKU){
        alert("All Fields are required!!!!!");
    }else{
        const product = {
            "name":productName,
            "price":productPrice,
            "sku":productSKU
        }
        console.log("ready to send product data", product)
    }
}