<?php
//we will be working with arrays, eventually creating a navigation


?>
<!-- 
<ul> 
    <li><a href="index.php">Home</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="daily.php">Daily</a></li>
    <li><a href="customers.php">Customers</a></li>
    <li><a href="gallery.php">Gallery</a></li>
</ul> -->

<?php

//      $key     =    $value
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['customers.php'] = 'Customers';
$nav['gallery.php'] = 'Gallery';

//another way this array can be written
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'customers.php' => 'Customers',
    'gallery.php' => 'Gallery'
);
?>

<ul>
<?php 
foreach($nav as $key => $value) {
    echo '<li><a href="'.$key.'">'.$value.'</a></li>';
}
?>
</ul>

