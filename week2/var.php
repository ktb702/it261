<!-- Week 2 Exercises IT 261 Variables -->
<!-- Created by Kate Baldwin 10/9/2020 -->

<?php 
    // Make sure you stay consistent in your variable naming conventions
    // variables always start with $ and then the name. var name must start with a letter or _ (not a number)
    $myFirstName = 'Kate';
    $lastName = 'Baldwin';
    echo $myFirstName. ' ' .$lastName;
    echo '<br>';

    //there are 3 ways to declare an array. This is an indexed array.
    $firstName[] = 'Kate';
    $firstName[] = 'Lily';
    $firstName[] = 'Anne';
    $firstName[] = 'Sara';
    $firstName[] = 'Lynn';

    $firstName = ['Kate', 'Lily', 'Anne', 'Sara', 'Lynn'];

    $firstName = array('Kate', 'Lily', 'Anne', 'Sara', 'Lynn');    

    //you cannot echo an array!
    //but you can print it like this
    print_r($firstName);

    //but you can echo an element in an array
    echo $firstName[1];

    echo '<br>';
    //echo $firstName. ' ' .$lastName;
    //echo '<h2>'.$firstName.'</h2>';
    //when you use single quotes, then you must use the '. before and .' after
    //when you use double quotes, then you don't have to use the period. 
    //echo "<h1> $firstName </h1>";

    //SHOW ARRAY
    $show = array('Name' => 'The Crown', 
                  'Actor' => 'Dexter', 
                  'Genre' => 'Historical Fiction');
    //in an array you have a key and a value. 
    //in an associative array you have a key and a value.
    $showName = 'The Crown';
    $showActor = 'Dexter';
    $showGenre = 'Historical Fiction';

    echo '<p>My favorite show is '.$showName.', starring '.$showActor.', which is a '.$showGenre.' </p>';

    //STRINGS
    $begAlpha = 'abc';
    $begAlph2 = 'def';
    echo'<br>';
    echo $begAlpha . $begAlph2;
    //can also concatenate like this:
    $begAlpha = "abc";
    $begAlpha .= "def";
    echo'<br>';
    echo $begAlpha;

    //WORKING WITH NUMBERS
    $x = 5;
    echo '<br>';
    echo $x;
    $x *= 5;
    echo '<br>';
    echo $x;
    $y = 100;
    $y *= .095;
    echo '<br>';
    echo $y;
    echo '<br>';
    $y_num = number_format($y, 2);
    echo '<br>';
    echo 'My tax rate for 100 dollars is $'.$y_num.' ';

    $a = 20;
    $a -=30;
    echo '<br>';
    echo $a;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body></body>
</html>