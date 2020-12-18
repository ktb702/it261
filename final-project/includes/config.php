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
        $mainHeadline = 'Conact us for more resources!';
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

/**************************************/
/****** PHP FOR EMAILABLE FORM  *******/
/**************************************/

$firstName = '';
$lastName = '';
$email = '';
$mail = '';
$topics = '';
$comments = '';
$privacy = '';

$firstNameErr = '';
$lastNameErr = '';
$emailErr = '';
$mailErr = '';
$topicsErr = '';
$commentsErr = '';
$privacyErr = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    //we need to declare our errors first. if a field is empty, do something.
    if(empty($_POST['firstName'])){
        $firstNameErr = 'Please fill out your first name!';
    }else{
        $firstName = $_POST['firstName'];
    }
    if(empty($_POST['lastName'])){
        $firstNameErr = 'Please fill out your last name!';
    }else{
        $lastName = $_POST['lastName'];
    }
    if(empty($_POST['email'])){
        $emailErr = 'Please fill out your email!';
    }else{
        $email = $_POST['email'];
    }
    if(empty($_POST['mail'])){
        $mailErr = 'Please pick one!';
    }else{
        $mail = $_POST['mail'];
    }
    if($mail == 'yes'){
        $yes = 'checked';
    }elseif($mail == 'no'){
        $no = 'checked';
    }
    if(empty($_POST['topics'])){
        $topicsErr = "Please let us know what topics you're interested in!";
    }else{
        $topics = $_POST['topics'];
    }
    if(empty($_POST['comments'])){
        $commentsErr = 'Please give us your feedback!';
    }else{
        $comments = $_POST['comments'];
    }
    if(empty($_POST['privacy'])){
        $privacyErr = 'Please agree to our privacy rules!';
    }else{
        $privacy = $_POST['privacy'];
    }

    //if end user checks the checkboxes, all of them, we want to know
    //implode the array of topics - creates a function for that
    function myTopics(){
        $myReturn = '';
        if(!empty($_POST['topics'])){
            $myReturn = implode(',', $_POST['topics']);
        } //end if
        return $myReturn;
    } //end myTopics    

    if(isset($_POST['firstName'],
        $_POST['lastName'],
        $_POST['email'],
        $_POST['mail'],
        $_POST['topics'],
        $_POST['comments'],
        $_POST['privacy'] ))
        {
            $to = 'katharine.baldwin@seattlecolleges.edu';
            $subject = 'Test Email' .date('m/d/y');
            $body = "$firstName has filled out your form" .PHP_EOL;
            $body .= "Email: $email" .PHP_EOL;
            $body .= 'Interested in: '.myTopics().' '.PHP_EOL;
            $body .= "Mailing List?: $mail" .PHP_EOL;
            $body .= "Comments $comments";

            $headers = array(
                'From' => 'noreply@seattlecollege.edu',
                'Reply-to' => ' '.$email.''
            );
            mail($to, $subject, $body, $headers);
            header('Location: thx.php');
        } //end isset
}

// include('credentials.php');
// include('credentials2.php');
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