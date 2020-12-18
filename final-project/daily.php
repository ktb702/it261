<?php     
if(isset($_GET['today'])){
    $today = $_GET['today'];
}else{
    $today = date('l');
}

switch($today){

    case 'Sunday' :
        $daily = 'Sunday is Python Day!';
        $pic = './images/python.png';
        $alt = 'Python logo';
        $class = 'sunday';
        $link = 'https://www.udemy.com/course/the-python-mega-course/';
        $course = 'The Python Mega Course: Build 10 Real World Applications';
        $desc = 'The Python Mega Course is the most practical course you will find on the web today. Here you will earn to build actual desktop programs, web applications, and even mobile apps entirely in Python 3. Here are the 10 apps you are going to develop: Thesaurus, Web Map, Personal Website, Bookshop Database, Mobile App, Webcam Motion Detector, Web Scraper, Interactive Graph, Database Email App, and a Geocoder Web App. ';
    break;

    case 'Monday' :
        $daily = 'Monday is HTML/CSS Day!';
        $pic = './images/html.jpg';
        $alt = 'HTML/CSS logo';
        $class = 'monday';
        $link = 'https://www.udemy.com/course/modern-html-css-from-the-beginning/';
        $course = 'Modern HTML & CSS From The Beginning';
        $desc = 'This course is for both beginners and seasoned developers that want to learn how to build responsive websites and user interfaces with modern HTML5 and CSS3+ technologies like Flexbox and CSS Grid as well as the Sass pre-compiler. This course includes hours of both learning & studying sections along with real life projects. Stop having to rely on frameworks like Bootstrap for your user interface and learn how to create your own layouts and utility classes to build custom responsive websites and app UIs.
                The first few sections are tailored for beginners so even if you have never built anything before, you will learn all of the basics. If you already have experience with basic HTML & CSS, just move to section 3 or 4 and get started.';    
    break;

    case 'Tuesday' :
        $daily = 'Tuesday is JavaScript Day!';
        $pic = './images/js.png';
        $alt = 'JavaScript logo';
        $class = 'tuesday';
        $link = 'https://www.udemy.com/course/javascript-beginners-complete-tutorial/';
        $course = 'The Modern JavaScript Bootcamp Course';
        $desc = "For years, top recruiters in industry have hired fresh engineers based solely on their knowledge of Javascript.  If you want to get a programming job, this is the language to learn! But learning Javascript is complicated!  There's fancy syntax, weird design patterns, and a billion resources online that might be giving you wrong - or even be out of date - information.
                We built this course to solve your problems.  This is the best and most up-to-date resource online for becoming a Javascript professional as quickly as possible. Every minute of this course has been created with one goal in mind: teaching you how to become a great engineer.";
    break;

    case 'Wednesday' :
        $daily = 'Wednesday is Node.js Day!';
        $pic = './images/node.png';
        $alt = 'Node.js logo';
        $class = 'wednesday';
        $link = 'https://www.udemy.com/course/nodejs-the-complete-guide/';
        $course = 'NodeJS - The Complete Guide (MVC, REST APIs, GraphQL, Deno)';
        $desc = "Node.js is probably THE most popular and modern server-side programming language you can dive into these days!
                Node.js developers are in high demand and the language is used for everything from traditional web apps with server-side rendered views over REST APIs all the way up to GraphQL APIs and real-time web services. Not to mention its applications in build workflows for projects of all sizes.
                This course will teach you all of that! From scratch with zero prior knowledge assumed. Though if you do bring some knowledge, you'll of course be able to quickly jump into the course modules that are most interesting to you.";
    break;

    case 'Thursday' :
        $daily = 'Thursday is MongoDB Day!';
        $pic = './images/mongo.png';
        $alt = 'MongoDB logo';
        $class = 'thursday';
        $link = 'https://www.udemy.com/course/mongodb-the-complete-developers-guide/';
        $course = "MongoDB - The Complete Developer's Guide";
        $desc = "MongoDB is one of the most important NoSQL databases you can work with these days. It's extremely popular and MongoDB developers are in high demand.
                No matter if you're building web applications, mobile applications or any other kind of application or if you're a data scientist - you'll need to work with data. Storing data, querying it efficiently and minimizing complexities whilst optimizing performance are crucial tasks.
                MongoDB makes working with data simple - it's built on a philosophy that prioritizes performance and efficiency.
                In this course, you'll learn all about MongoDB from scratch. No prior MongoDB or database experience is required!";  
    break;

    case 'Friday' :
        $daily = 'Friday is Java Day!';
        $pic = './images/java.png';
        $alt = 'Java logo';
        $class = 'friday';
        $link = 'https://www.udemy.com/course/java-the-complete-java-developer-course/';
        $course = 'Java Programming Masterclass for Software Developers';
        $desc = "You’ve just stumbled upon the most complete, in-depth Java programming course online. With over 480,000 students enrolled and tens of thousands of 5-star reviews to date, these comprehensive java tutorials cover everything you’ll ever need.

        Whether you want to:
        
        - build the skills you need to get your first Java programming job
        
        - move to a more senior software developer position
        
        - pass the oracle java certification exam
        
        - or just learn java to be able to create your own java apps quickly.
        
        ...this complete Java Masterclass is the course you need to do all of this, and more. ";
    break;
    
    case 'Saturday' :
        $daily = 'Saturday is Data Structures and Algorithms Day!';
        $pic = './images/dsa.jpg';
        $alt = 'DS&A logo';
        $class = 'saturday';
        $link = 'https://www.coursera.org/learn/algorithms-part1';
        $course = 'Algorithms, Part 1 (Princeton University)';
        $desc = "This course covers the essential information that every serious programmer needs to know about algorithms and data structures, with emphasis on applications and scientific performance analysis of Java implementations. Part I covers elementary data structures, sorting, and searching algorithms. Part II focuses on graph- and string-processing algorithms.
                All the features of this course are available for free.  It does not offer a certificate upon completion.";
    break;

}

?>
<?php 
include('includes/config.php'); 
include('includes/header.php'); 
?>

<?php
session_start();

if(!isset($_SESSION['UserName'])) {
    $_SESSION['msg'] = 'You must log in first!';
    header('Location: login.php');
}//end if
if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['UserName']);
    header('Location: login.php');
}
?>
   
<div class="error success">
<?php
if(isset($_SESSION['UserName'])) : ?> 
Hello, 
<?php echo $_SESSION['UserName']; ?>
<p><a href="index.php?logout='1' ">Log out!</a></p>
</div>
<?php endif ?>

    <main>
        <h1 class="<?php echo $class; ?>"><?php echo $daily; ?></h1>
        <h3><?php echo $course; ?></h3>
        <p><a href= "<?php echo $link; ?>">Start Now!</a></p>
        <p><?php echo $desc; ?></p>

        <div class="daily">
        <h4>Click below to find out what our featured course of the day is!</h4>
        <ul class="daily-list">
            <li><a href="daily.php?today=Sunday">Sunday</a></li>
            <li><a href="daily.php?today=Monday">Monday</a></li>
            <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
            <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
            <li><a href="daily.php?today=Thursday">Thursday</a></li>
            <li><a href="daily.php?today=Friday">Friday</a></li>
            <li><a href="daily.php?today=Saturday">Saturday</a></li>
        </ul>
        </div> <!-- end daily -->
    </main>
    <aside>
    <img class="img" src="<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
    </aside>

<?php include('includes/footer.php'); ?>