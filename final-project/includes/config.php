<?php  // CONFIG FILE FOR OUR FINAL PROJECT //
ob_start(); //prevents header errors before reading the whole page!
define('DEBUG', 'TRUE'); //we want to see our errors

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
    case 'index.php': 
        $title = 'Our Programming Resources Hub';
        $mainHeadline = 'Welcome to our Home Page!';
        $center = 'center';
        $body = 'home';
    break;
    case 'about.php': 
        $title = 'About page';
        $mainHeadline = 'About the databases used in this website.';
        $center = 'center';
        $body = 'about inner';
    break;
    case 'daily.php': 
        $title = 'Daily page';
        $mainHeadline = 'Welcome to our daily course specials!';
        $center = 'center';
        $body = 'daily inner';
    break;
    case 'resources.php': 
        $title = 'Programming Resources';
        $mainHeadline = 'The best resources for self-taught programmers.';
        $center = 'center';
        $body = 'resources inner';
    break;
    case 'contact.php': 
        $title = 'Contact us today!';
        $mainHeadline = 'Please send us your feedback or just say hello!';
        //$center = 'center';
        $body = 'contact inner';
    break;
    case 'thx.php': 
        $title = 'Our thank you page!';
        $mainHeadline = 'Thank you for filling out our form!';
        //$center = 'center';
        $body = 'contact inner';
    break;
}

//nav array
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['resources.php'] = 'Resources';
$nav['contact.php'] = 'Contact';

function makeLinks($nav){
    $myReturn = '';
    foreach($nav as $key => $value){
        if(THIS_PAGE == $key){
            $myReturn .= '<li><a href=" '.$key.'" class="active"> '.$value.' </a></li>';
        } else{
            $myReturn .= '<li><a href=" '.$key.'"> '.$value.' </a></li>';
        }
    } //end foreach
    return $myReturn;
}//end makeLinks

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