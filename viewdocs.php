<?php

session_start();

if(isset($_GET['doc'])){$filename = $_GET['doc'];}else{$filename="abc.abc";}
if(isset($_GET['email'])){$email = $_GET['email'];}
$userCanDownloadThisFile = false;

if(isset($email) && $_SESSION['email'] == $email)    ///////////////////////////////Add Admin condition here///////////////////////
{
    $userCanDownloadThisFile = true;
    $file = './documents/' . $email . '/' . $filename;

if (file_exists($file)){
    $check = getimagesize($file);
    if($check !== false){
        header("Content-type: " . $check['mime']);
    }
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
}else{
    header('HTTP/1.1 404 Not Found');
    echo("<h1>Error 404 :</h1><h2>Requested document was not found on the server!</h2>");
}
}
else{
    header('HTTP/1.1 403 Forbidden');
    echo("<h1>Error 403 :</h1><h2>Access forbidden!</h2>");
}