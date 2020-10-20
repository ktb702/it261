<?php 

/*
The logic behind the title car and the body_class var is,
if we are on the homepage then the title will be this
if we are on the daily page, the title will be something else.
How do we know which page we are on? by the basename function.
define a constant and use the basename function.
*/

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
    case 'index.php' :
        $title = 'Homepage';
        $body_class = 'home';
    break;

    case 'daily.php' :
        $title = 'Daily page';
        $body_class = 'daily';
    break;
}

if(isset($_GET['today'])){
    $today = $_GET['today'];
}else{
    $today = date('l');
}

switch($today){

    case 'Sunday' :
        $pinball = 'Sunday is Attack From Mars Day';
        $pic = './images/mars.jpg';
        $alt = 'Attack From Mars';
        $class = 'sunday';
        $content = 'Attack from Mars is a 1995 pinball game designed by Brian Eddy, and released by Midway (under the Bally label). In this game, the player must fend off an alien invasion from the planet Mars by defending the worlds major cities, destroying the invasion fleet, and conquering Mars itself. Notable features on the playfield include four mechanized Martian figures and a strobe light (for Strobe Multiball).';
    break;

    case 'Monday' :
        $pinball = 'Monday is Batman Day';
        $pic = './images/batman.jpg';
        $alt = 'Batman';
        $class = 'monday';
        $content = 'The game will immerse players in campy fun and heart-pounding action as the crime fighting Dynamic Duo comes to the aid of the Gotham City Police. Throughout the game, Batman and Robin work to deduce clues and discover super villain plots in an effort to thwart evil plans and capture bad guys. Players are guided through the game by the voices of none other than the original Batman and Robin, Adam West and Burt Ward.';
    break;

    case 'Tuesday' :
        $pinball = 'Tuesday is Jurassic Park Day';
        $pic = './images/jurassic.jpg';
        $alt = 'Jurassic Park';
        $class = 'tuesday';
        $content = 'Like the blockbuster movie, the Jurassic Park pinball experience generates heart pounding excitement as the player progresses through the game.  As the game starts, the player is transported to Isla Nublar, an amusement park where escaped dinosaurs are running amok!  The player’s mission is to rescue park staff and recapture dinosaurs from the chaotic environment unleashed by Dennis Nedry’s computer virus.  All dinosaurs, however, are not created equal as players will battle Raptors and the mighty T. Rex! ';
    break;

    case 'Wednesday' :
        $pinball = 'Wednesday is Monopoly Day';
        $pic = './images/monopoly.jpg';
        $alt = 'Monopoly';
        $class = 'wednesday';
        $content = 'Take a lesson from MR. MONOPOLY®and break the Bank, start the cash grab, and shoot the upper ramps for bigMONOPOLY® points. The goal of the MONOPOLY® pinball machine is to move your piece around the game board, collect properties, and lock balls. When you pass GO, multi-ball will start and you can become the millionaire you’ve always dreamed of being!';
    break;

    case 'Thursday' :
        $pinball = 'Thursday is Ghostbusters Day';
        $pic = './images/ghostbusters.jpg';
        $alt = 'Ghostbusters';
        $class = 'thursday';
        $content = 'Who you gonna call? The game includes custom speech by original Ghostbusters cast member, Ernie Hudson, who guides the player into becoming the newest member of the Ghostbusters team! Ghostbusters pinball is designed to be easy to play but difficult to master. It features a moving interactive Slimer toy target and a fresh distinctive layout that integrates traditional pinball devices with unique multifunction two-way ramps featuring a magnetic diverter and scoring switches.';
    break;

    case 'Friday' :
        $pinball = 'Friday is Star Wars Day';
        $pic = './images/starwars.jpg';
        $alt = 'Star Wars';
        $class = 'friday';
        $content = 'The game will immerse players in the dynamic and challenging Star Wars pinball environment as they battle to restore justice to the Galaxy.  Stern’s Star Wars Pro,  machines are packed with features that provide an irresistible game experience. The game includes select speech and footage from the original Star Wars trilogy; color-changing LED-lighted inserts; and a sculpted TIE Fighter.';
    break;
    
    case 'Saturday' :
        $pinball = 'Saturday is Central Park Day';
        $pic = './images/central.jpg';
        $alt = 'Central Park';
        $class = 'saturday';
        $content = 'Central Park is a pinball machine that was released by Gottlieb in 1966. It is a very difficult game due to the large gap between the flippers. The goal of the game is to raise a special called the Tree Bonus by collecting numbers. The player can collect numbers by hitting targets at the top of the playfield. Every time 100 points are scored in Central Park an animated monkey on the backglass will ring a bell. Hitting the 7 and 9 would light up a bumper, earning 10 points instead of the usual 1. The 2 and 4 would also light up a bumper.';
    break;

}

?>
<?php include('includes/header.php'); ?>
    <div class = "wrapper">
        <main>
            <h1 class="<?php echo $class; ?>"><?php echo $pinball; ?></h1>
            <p><?php echo $content; ?></p>
            <p>Click below to find out what our featured (and free to play) pinball game of the day is!</p>

            <ul class="daily-list">
                <li><a href="daily.php?today=Sunday">Sunday</a></li>
                <li><a href="daily.php?today=Monday">Monday</a></li>
                <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
                <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
                <li><a href="daily.php?today=Thursday">Thursday</a></li>
                <li><a href="daily.php?today=Friday">Friday</a></li>
                <li><a href="daily.php?today=Saturday">Saturday</a></li>
            </ul>
        </main>
        <img src="<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
    </div> <!-- end wrapper -->

<?php include('includes/footer.php'); ?>