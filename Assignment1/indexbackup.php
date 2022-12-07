<?php
$myfile = fopen("sample.css", "r") or die("Unable to open file!");
$css = fread($myfile,filesize("sample.css"));
$regx='/\s*(?!<\")\/\*[^\*]+\*\/(?!\")\s*/';
$removedComments = preg_replace( $regx , '' ,$css );

$comments = preg_match_all($regx, $css, $matches);
echo($removedComments);
$removedCssComments = fopen("stylewithoutcomments.css", "w");
fwrite($removedCssComments, $removedComments);
fclose($removedCssComments);

$cssComments = fopen("stylecomments.css", "w");
 foreach($matches as $match){
    foreach($match as $commentLine){
    fwrite($cssComments, $commentLine);
    }
 }
fclose($cssComments);


?>