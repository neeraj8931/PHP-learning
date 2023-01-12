console.log("Assignment 3 script loaded");

const signIn = () => {
  console.log("SignIn called");
  const data = {
    email: document.getElementById("userSignInEmail").value,
    password: document.getElementById("userSignInPassword").value,
  };
  fetch("login.php", {
    method: "POST",
    body: JSON.stringify(data),
    headers: { "Content-type": "application/json; charset=UTF-8" },
  })
    .then((response) => {
      return response.json();
    })
    .then((result) => {
      console.log(result);
      document.getElementById("signin-signup-warnings").innerHTML=`<p>${result.message}</p>`;
     if(result.LoggedIn){
        setTimeout(window.location = "home.php",2000);
     }
    })
    .catch((error) => {
      console.log(error);
    });
};

const signUp = () => {
  console.log("SignUp called");
  const data = {
    email: document.getElementById("userEmail").value,
    password: document.getElementById("userPassword").value,
    name: document.getElementById("userName").value,
  };
  if (data.email =="" || data.password == "" || data.name == ""){
     window.alert(" fill all inputs");
     return;
  }
  fetch("signup.php", {
    method: "POST",
    body: JSON.stringify(data),
    headers: { "Content-type": "application/json; charset=UTF-8" },
  })
    .then((response) => {
      return response.json();
    })
    .then((result) => {
      console.log(result);
      document.getElementById("signin-signup-warnings").innerHTML=`<p>${result.message}</p>`;
      if(result.LoggedIn){
        setTimeout(window.location = "home.php",2000);
     }
      
    })
    .catch((error) => {
      console.log(error);
    });
};

const showSignInBox = () => {
  console.log("SignInBox triggered.");
  let signInBox = document.getElementById("sign-in-box");
  let signUpBox = document.getElementById("sign-up-box");
  if ((signInBox.style.display = "none")) {
    signInBox.style.display = "block";
    signUpBox.style.display = "none";
    document
      .getElementById("signinButton")
      .classList.add("border-2", "border-black");
    document
      .getElementById("signupButton")
      .classList.remove("border-2", "border-black");
  }
};

const showSignUpBox = () => {
  console.log("SignUpBox triggered.");
  let signUpBox = document.getElementById("sign-up-box");
  let signInBox = document.getElementById("sign-in-box");
  if ((signUpBox.style.display = "none")) {
    signUpBox.style.display = "block";
    signInBox.style.display = "none";
    document
      .getElementById("signinButton")
      .classList.remove("border-2", "border-black");
    document
      .getElementById("signupButton")
      .classList.add("border-2", "border-black");
  }
};


const editProfile = ()=>{
   console.log("edit profile called");
}


const addProduct =()=>{
  console.log("add products called");
}