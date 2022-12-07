<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script>
      async function postData(url = '') {
   let data = document.getElementById("cssText").value;
  // Default options are marked with *
  const response = await fetch(url, {
    method: 'POST', // *GET, POST, PUT, DELETE, etc.

     body:data // body data type must match "Content-Type" header
  });
  return response; // parses JSON response into native JavaScript objects
}
function submit(){
   postData('index.php')
  .then((data) => {
    console.log(data); 
    
    // JSON data parsed by `data.json()` call
  });
  
}
function getData(){
   fetch('index.php')
.then(data => {
   console.log(data);
return data;
})
}
getData();
    </script>
</head>


<!-- php functions -->
<?php

function writeInputCSS($input){
   $myfile = fopen("sample1.css", "w") or die("Unable to open file!");
   fwrite($myfile, $input);
   fclose($myfile);
}
function openCommentedFileAndRemoveCSS($cssInput){
      writeInputCSS($cssInput);
      $myfile = fopen("sample1.css", "r") or die("Unable to open file!");
      $myCommentFile = fopen("sample1.css", "r") or die("Unable to open file!");
      $css = fread($myCommentFile,filesize("sample1.css"));
      $regx='/\s*(?!<\")\/\*[^\*]+\*\/(?!\")\s*/';
      $removedComments = preg_replace( $regx , '' ,$css );
      findCommentsAndWriteIntoAFile($removedComments);
      fclose($myfile);

}

function findCommentsAndWriteIntoAFile($removedComments){
   $myfile = fopen("sample1.css", "r");
   $css = fread($myfile,filesize("sample1.css"));
   $regx='/\s*(?!<\")\/\*[^\*]+\*\/(?!\")\s*/';
   $comments = preg_match_all($regx, $css, $matches);
   $removedCssComments = fopen("stylewithoutcomments1.css", "w");
   fwrite($removedCssComments, $removedComments);
   fclose($removedCssComments);
   printComments($matches);

}

function printComments($matches){
   $cssComments = fopen("stylecomments1.css", "w");
   
   foreach($matches as $match){
      foreach($match as $commentLine){
      fwrite($cssComments, $commentLine);
      }
   }
  fclose($cssComments);
}

?>
<!-- end of php functions -->
<body class="bg-themecolor">
    <h1 class="text-3xl my-4 font-bold underline text-center">Assignment 1</h1>
    <p class="text-xl mt-6 text-center">
    Write a PHP program that will take css file as input. It should read the contents of the file, strip of comments and write it to a different file. 
    <?php   
    echo($data);
    echo($test);
    ?>
</p>
<div class="p-10">
        
            <textarea rows="10" cols="50" name="username" id="cssText" class="border-black border-2 block my-10 mx-auto w-4/5 p-[5px]" placeholder="Enter CSS with comments"></textarea>
            <div class="text-center">
               <button class="bg-black text-white p-[5px] w-2/5 my-5 border-black border-4 rounded-md" onclick="submit();"> Add User</button>
            </div>
        <div id="users" class="flex-1 w-50">
            <p class="text-xl mt-6 text-center">
                No users yet.
            </p>
        </div>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
   $postData = file_get_contents('php://input');
   openCommentedFileAndRemoveCSS($postData);
}
if ($_SERVER["REQUEST_METHOD"] == "GET"){
   
   $resposnseCSSFile = fopen("stylewithoutcomments1.css", "r");
   $resposnseCommentFile = fopen("stylecomments1.css", "r");
   $resposnseCSSFileData = fread($resposnseCSSFile,filesize("sample1.css"));
   $resposnseCSSCommentsFileData = fread( $resposnseCommentFile,filesize("stylecomments1.css"));
   $response['status_code_header'] = 'HTTP/1.1 200 OK';
   $response['body'] = $resposnseCSSFile;
   http_response_code(201);  
   $resObj->css=$resposnseCSSFileData;
   $resObj->comments=$resposnseCSSCommentsFileData;
   exit(json_encode($resObj));
   
}
?>
   
</body>
</html>