<?php
//For this exercise we will learn about isset, the $_GET global variable and the switch

// $var100 = 'test';
// if(isset($var1)){
//     print_r(isset($var1));
// }else {
//     echo 'It has not been set';
// }

//is today set? if so, we are happy
//else the date function for the day will be assigned to today.
if(isset($_GET['today'])){
    $today = $_GET['today'];
}else{
    $today = date('l');
}

switch($today){
    case 'Friday' :
        $coffee = 'Friday is Frappacino Day';
        $pic = 'images/frap.jpg';
        $alt = 'Frappacino';
        $content = 'Frappuccino is a trademarked brand of the Starbucks Corporation for a line of iced, blended coffee drinks. It consists of coffee or crème base, blended with ice and other various ingredients, usually topped with whipped cream and flavored syrups.';
    break;
    
    case 'Saturday' :
        $coffee = 'Saturday is Regular Joe Day';
        $pic = 'images/joe.jpg';
        $alt = 'Regular Joe';
        $content = 'Coffee is a brewed drink prepared from roasted coffee beans, the seeds of berries from certain Coffea species. When coffee berries turn from green to bright red in color – indicating ripeness – they are picked, processed, and dried.';
    break;

    case 'Sunday' :
        $coffee = 'Sunday is Cappucino Day';
        $pic = 'images/cap.jpg';
        $alt = 'Cappucino';
        $content = 'A cappucino is an espresso-based coffee drink that originated in Italy, and is traditionally prepared with steamed milk foam (microfoam).';
    break;

    case 'Monday' :
        $coffee = 'Monday is Latte Day';
        $pic = 'images/latte.jpg';
        $alt = 'Latte';
        $content = 'A latte is a coffee drink made with espresso and steamed milk. The word comes from the Italian caffè e latte which means coffee and milk.';
    break;

    case 'Tuesday' :
        $coffee = 'Tuesday is Americano Day';
        $pic = 'images/americano.jpg';
        $alt = 'Americano';
        $content = 'An Americano is a type of coffee drink prepared by diluting an espresso with hot water, giving it a similar strength to, but different flavor from, traditionally brewed coffee. The strength of an Americano varies with the number of shots of espresso and the amount of water added.';
    break;

    case 'Wednesday' :
        $coffee = 'Wednesday is Pumpkin Spice Day';
        $pic = 'images/pumpkin.jpg';
        $alt = 'Pumpkin Spice';
        $content = 'The Pumpkin Spice Latte is a coffee drink made with a mix of traditional autumn spice flavors (cinnamon, nutmeg and clove), steamed milk, espresso, and often sugar, topped with whipped cream and pumpkin pie spice. Since 2015, it has also often contained a small amount of pumpkin puree. The drink is offered by Starbucks and many other cafés on a seasonal basis, usually available from late August through January. ';
    break;

    case 'Thursday' :
        $coffee = 'Thursday is Chai Day';
        $pic = 'images/chai.jpg';
        $alt = 'Chai Tea';
        $content = 'Chai is a tea beverage made by boiling black tea in milk and water with a mixture of aromatic herbs and spices. Originating in the Indian subcontinent,  the beverage has gained worldwide popularity, becoming a feature in many coffee and tea houses. Although traditionally prepared as a decoction of green cardamom pods, cinnamon sticks, ground cloves, ground ginger, and black peppercorn together with black tea leaves, retail versions include tea bags for infusion, instant powdered mixtures, and concentrates.';
    break;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Switch page</title>
    <!-- add css stylesheet here -->
</head>

<body>
    <div id="wrapper">
    <h1><?php echo $coffee; ?></h1>
    <p><?php echo $content; ?></p>
    <p>Click below to find out what awesome flavors we have for each day of the week!</p>

    <ul>
        <li><a href="switch.php?today=Sunday">Sunday</a></li>
        <li><a href="switch.php?today=Monday">Monday</a></li>
        <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
        <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
        <li><a href="switch.php?today=Thursday">Thursday</a></li>
        <li><a href="switch.php?today=Friday">Friday</a></li>
        <li><a href="switch.php?today=Saturday">Saturday</a></li>
    </ul>

    <img src="<?php echo $pic; ?>" alt="<?php echo $alt; ?>">

    </div> <!-- end wrapper -->
</body>
</html>