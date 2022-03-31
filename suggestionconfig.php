<?php
    extract($_REQUEST);
    $file=fopen("database/suggestion-details.txt","a");

    fwrite($file,"Email :");
    fwrite($file, $email ."\n");
    fwrite($file,"SUGGESTION :");
    fwrite($file, $suggestion ."\n");
    fclose($file);
    header("location: index.html");
 ?>
