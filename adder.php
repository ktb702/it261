<!-- 
    Kate Baldwin
    IT261 - Assignment #4 - Troubleshooting
    Note: All error comments reference the line directly BELOW the comment. 
 -->

<!-- Error #1: missing doctype -->
<!DOCTYPE html> 
<!-- Added lang="en". While it won't give you an error, this line is important for accessibility -->
<html lang="en">
<head>
<!-- Error #2: Missing metatag. HTML does not validate without this line -->
<meta charset="UTF-8"> 
<title>My Adder Assignment</title>
<style>
/* Adding styles */
  form {
      width: 350px;
      border: 1px solid red;
      margin: 20px auto;
      padding: 10px;
  }

  p {
      color: red;
      text-align: center;
  }

  h1 {
      text-align: center;
      color: green;  
  }

  h2 {
      text-align: center;
  }
/* Finished adding styles */
</style>
</head>
<body>
<h1>Adder.php</h1> 
<!-- 
  Error #3: Removed backslash in front of form
  Error #4: Added method="post" 
  -->
<form action="" method="post"> 
<!-- Error #5: label needs an opening tag -->
<label>Enter the first number:</label>
<!-- Error #6: Num1 should be lowercase(num1) -->
<input type="text" name="num1"><br>

<!-- Error #7: moved closing label tag to just before the input tag
    and added an opening label tag to the beginning of the line.  -->
<label>Enter the second number:</label>
<input type="text" name="num2"><br>

<!-- Error #8: Added double quote after Add Em!! -->
<input type="submit" value="Add Em!!"> </form>

<?php

/**
 * Error #9: Need to assure num2 is set also because you can't compute the total without both numbers
 */
if (isset($_POST['num1'], $_POST['num2'])){
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

/**
 * When I tested this form with null values, it returned an error, but your copy did not. 
 * Instead it assumed the null values were 0 and calculated them anyway. 
 * I added the following 2 lines of code to handle null values in the same way as the examples does.
 */
if(empty($num1)){ $num1 = 0; }
if(empty($num2)){ $num2 = 0; }
/**
 * Error #10: Num2 should be lowercase (num2)
 * 
 * Error #11: $myTotal was not previously initialized so you can't use -= . 
 *    Also, -= is not the correct way to calculate the total. It should just be equals. 
 */
$myTotal = $num1 + $num2; 

/**
 * Error #12: Single quotes should be used to escape to print $num1/$num2
 * not double quotes. 
 * 
 * Error #13: h2 needs a closing tag.
 */
echo '<h2>You added '. $num1 .' and '.$num2. '</h2>';

/**
 * Error #14: Need to use single quotes to escape (same error as #1)
 * 
 * Error #15: remove style tag from the echo and place it in html head
 */
echo '<p> and the answer is <br>'. $myTotal .'!</p>';

/**
 * Error #16: Missing closing paragraph tag 
 * Note: While not required as it's the last line in the php code, it's good practice to 
 *   use semicolons at the end of every line. 
 */
echo'<p><a href="">Reset page</a></p>';

}
/** 
 * Error #17: Closing php tag should be here and not at the end of file
 * php closing tag need to be before the HTML starts. 
 */
?>

</body>
</html>
<!-- 
    Error #18: Removed unnecessary single quote after the closing html tag
    Error #19: Removed unnecessary semicolon (not used in HTML code)
    Error #20: Removed unnecessary opening curly brace
    Error #21: Removed unnecessary closing php tag
 -->
