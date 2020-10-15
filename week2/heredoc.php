<!-- Week 2 Exercises IT 261 Heredoc -->
<!-- Created by Kate Baldwin 10/9/2020 -->

<?php

$book = 'Handmaid\'s Tale';
$author = 'Margaret Atwood';
$character = 'June';
$actor = 'Elizabeth Moss';

// EOT will not work if the text is indented!
$content = <<<EOT
<p>My favorite book is $book, written by $author, and is presently a miniseries on Hulu.
Hulu's viewing audience is extremely excited about the miniseries and looks forward to the 
5th season of the award winning "Handmaid's Tale"! </p> $actor's rendition is right on!
Again the content will work, because all of my content is displayed in orange, and my variables 
are displayed in black.
EOT;

echo $content;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body></body>
</html>
