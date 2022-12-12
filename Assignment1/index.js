// function to post data to any server
async function postData(url = "") {
  let data = document.getElementById("cssText").value;
  const response = await fetch(url, {
    method: "POST",
    body: data,
  });
  const data1 = await response.json();
  return data1;
}

// submit function on click of submit of CSS input form
let submitMessage ;
function submit() {
  postData("/server.php").then((data) => {
    console.log(data);
    let finalOutput = getData();
    console.log(JSON.stringify(finalOutput));
  });
}

// getting filtered css and comments
function getData() {
  fetch("/server.php")
    .then((response) => {
      return response.json();
    })
    .then((data) => {
      console.log("Success:", data.message);
      document.getElementById("result").innerHTML=`<p class="text-center">${data.message}</p>`;
    });
};


