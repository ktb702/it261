<!-- week7 exercises (video#1)-->
<?php
//substr and str_replace

$statement = 'The Presidential Election is around the corner';
echo $statement;
echo '<br>';
echo substr($statement, 0);

echo '<br>';
echo substr($statement, 0, 3); //shows you the substring starting at 0 and takes the first 3 characters

echo '<br>';
echo substr($statement, 4); //starts from the 4th position in the string (omits 'The ')

echo '<br>';
echo substr($statement, 4, 12); //This should echo only the word Presidential

echo '<br>';
echo substr($statement, 4, 21); //This should echo 'Presidential Election'

echo '<br>';
echo substr($statement, -6); //This should echo only the word corner

echo '<br>';
echo substr($statement, -10, 3); //This will echo 'the' because it starts from -10 and shows the next 3 characters

echo '<br>';
$statement2 = 'This election will be the most important election in my lifetime!';
echo '<br>';
echo $statement2;
echo '<br>';
echo str_replace('my', 'our', $statement2); //This will replace the word my in the string with our
echo '<br>';
echo str_replace('!', ', no kidding!', $statement2); //This will replace the exclamation and replace it with ', no kidding!'

?>