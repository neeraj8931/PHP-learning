
<?php

function writeInputCSS($input)
{
    $myfile = fopen("sample1.css", "w") or die("Unable to open file!");
    fwrite($myfile, $input);
    fclose($myfile);
}
function openCommentedFileAndRemoveCSS($cssInput)
{
    writeInputCSS($cssInput);
    $myfile = fopen("sample1.css", "r") or die("Unable to open file!");
    $myCommentFile = fopen("sample1.css", "r") or die("Unable to open file!");
    $css = fread($myCommentFile, filesize("sample1.css"));
    $regx = '/\s*(?!<\")\/\*[^\*]+\*\/(?!\")\s*/';
    $removedComments = preg_replace($regx, '', $css);
    findCommentsAndWriteIntoAFile($removedComments);
    fclose($myfile);
}

function findCommentsAndWriteIntoAFile($removedComments)
{
    $myfile = fopen("sample1.css", "r");
    $css = fread($myfile, filesize("sample1.css"));
    $regx = '/\s*(?!<\")\/\*[^\*]+\*\/(?!\")\s*/';
    $comments = preg_match_all($regx, $css, $matches);
    $removedCssComments = fopen("stylewithoutcomments1.css", "w");
    fwrite($removedCssComments, $removedComments);
    fclose($removedCssComments);
    printComments($matches);
}

function printComments($matches)
{
    $cssComments = fopen("stylecomments1.css", "w");

    foreach ($matches as $match) {
        foreach ($match as $commentLine) {
            fwrite($cssComments, $commentLine);
        }
    }
    fclose($cssComments);
}

?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $postData = file_get_contents('php://input');
    openCommentedFileAndRemoveCSS($postData);
    echo json_encode(array("message" => "CSS sent successfully to be checked."));
}
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $resposnseCSSFile = fopen("stylewithoutcomments1.css", "r");
    $resposnseCommentFile = fopen("stylecomments1.css", "r");
    $resposnseCSSFileData = fread($resposnseCSSFile, filesize("sample1.css"));
    $resposnseCSSCommentsFileData = fread($resposnseCommentFile, filesize("stylecomments1.css"));
    $response['status_code_header'] = 'HTTP/1.1 200 OK';
    $response['body'] = $resposnseCSSFile;
    http_response_code(201);
    $resObj->css = $resposnseCSSFileData;
    $resObj->comments = $resposnseCSSCommentsFileData;
    exit(json_encode($resObj));
}
?>