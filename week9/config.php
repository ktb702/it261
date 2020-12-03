<?php  //this will be our config file that we will link to the credentials.php
ob_start(); //prevents header errors before reading the whole page!
define('DEBUG', 'TRUE'); //we want to see our errors

include('credentials.php');


//PLEASE REMEMBER - THIS IS PLACED AT THE VERY BOTTOM OF YOUR CONFIG FILE
function myError($myFile, $myLine, $errorMsg){
    if(defined('DEBUG') && DEBUG){
        echo "Error in file: <b> $myFile </b> on line: <b> $myLine </b> ";
        echo "Error message: <b> $errorMsg </b> ";
        die(); //stop the program
    }else{
        echo "Houston we have a problem!";
        die();
    }

}
?>