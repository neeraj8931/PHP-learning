console.log("scripit called");
let userLists = [];

// Function to set Users
const setUser = () => {
  console.log("setUser function Called..");
  let userName = document.getElementById("username").value;
  let userEmail = document.getElementById("useremail").value;

  let user = {
    userName: userName,
    userEmail: userEmail,
  };
  console.log("saved data is", JSON.stringify(user));
  
};

// Listing Users initially

const getUsers = () => {
  fetch("server.php")
    .then((data) => {
      return data.json();
    })
    .then((userList) => {
      console.log(userList);
      let listNode = document.getElementById("users");
      let HTML = "";
      userList.map((element) => {
        userLists.push(element);
        HTML += `<p class="text-center">${element}</p>`;
      });
      listNode.innerHTML = HTML;
      return userList;
    });
};

getUsers();
