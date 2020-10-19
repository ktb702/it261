<?php
//the if statement

$salary = 150000;

if($salary >= 200000){
    echo 'YAY!! Life is good!';
}
else if($salary >= 100000) {
    echo 'I may need to work harder!';
}
else{
    echo 'Not too happy!';
}

echo'<br />';
echo'<br />';
echo date('Y');
echo'<br />';
echo date('h:i a');
echo'<br />';
echo '<h2>Reset the timezone</h2>';
date_default_timezone_set('America/Los_Angeles');
echo 'The real time is ' .date('h:i a');
echo'<br />';

//H is for 24 hr format, h is for 12 hr format
echo'<br />';
echo date('H:i a');
echo'<br />';
echo date('H:i:s a');
echo'<br />';

//if it is the morning, say Good Morning!
//if it is the afternoon, say Good Afternoon!
//if it is the evening, say Good Evening!
$correct_time = date('H:i:s a');
if($correct_time < 10){
    echo 'Good Morning';
} else if ($correct_time < 18){
    echo 'Good Afternoon';
} else {
    echo 'Good Evening';
}

/*
If the name input field is empty, do something!
else, then we are happy!
the do something will be a message to the user to fill out the input field.copyright
in php there are variables, arrays, and GLOBAL VARIABLES (like post)
$_POST['name'], $_POST['email'], etc

if(empty($_POST['name'])){
$name_err = 'Please fill out your name';
} else {
$name = $_POST['name'];
}
*/
?>