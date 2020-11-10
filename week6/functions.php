<?php
//functions

//the famous hello function
function greeting(){
    echo 'hello!';
}
greeting();

//create a function to find the area of a rectangle
function getArea($width, $height){
    $calculation = $width * $height;
    return $calculation;
}
$calculation = getArea(10, 20);
echo $calculation;

//commonly used functions in website navigation
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

function myNav($nav){
    $myReturn = implode(',', $nav);
    return $myReturn;
}
echo myNav($nav);
echo '<br>';

function popupAd1(){

    echo '<h2>This is my popup ad number 1!!</h2>
            <h2>This is my popup ad number 1!!</h2>
            <h2>This is my popup ad number 1!!</h2>
            <h2>This is my popup ad number 1!!</h2>  ';
}
popupAd1();
echo '<br>';

function popupAd2(){
    $msg = '<h2>This is my popup ad number 2!!</h2>
    <img src="images/vote.jpg" alt="I voted">
    <h2>I voted today!</h2>';

    return $msg;
}

echo popupAd2();

?>
