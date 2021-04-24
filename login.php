<?php
error_reporting(E_ALL);
function make_error_message($letters)
{

    $phrase = "";
    foreach ($letters as $letter) {
        $phrase .= $letter;
    }
    $phrase .= " enter a username";
    echo $phrase;
}

if ($_REQUEST['username'] != null){
    session_start();
    $_SESSION['username'] = $_REQUEST['username'];
//echo $_GET['page'];
    header("Location: ".$_GET['page'].".php");
}

else {
//    header("Location: ".$_GET['page'].".php");
    $letters = ["P", "l", "e", "a", "s", "e"];
    make_error_message($letters);


}


exit();