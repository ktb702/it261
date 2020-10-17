<?php 
    //Place PHP code here
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" />
    <meta name="referrer" content="origin">

    <link rel="stylesheet" href="css/styles.css" />
    
    <title>Classwork Website Home Page</title>
</head>

<body>
    <header>
        <div class="container">
        <div class = "row">
            <img id="logo" src="images/me.jpg" alt="Picture of me hiking" />
            <h1>Kate Baldwin's IT 261 Classwork Home Page</h1>
        </div> <!-- end row -->
        </div> <!-- end container -->
    
    <nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="site1/daily.php">Switch - 3</a></li> <!-- link to site1 folder (site1/daily.php) -->
            <li><a href="">Troubleshoot - 4</a></li> <!-- link to a separate page -->
            <li><a href="">Calculator - 5</a></li> <!-- link to a separate page -->
            <li><a href="site1/contact.php">Email - 6</a></li> <!-- link to site1 folder (site1/contact.php) -->
            <li><a href="site1/gallery.php">Gallery - 7</a></li> <!-- link to site1 folder (site1/gallery.php) -->
            <li><a href="site1/customers.php">Database - 8</a></li> <!-- link to site1 folder (site1/customers.php) -->
        </ul>
    </nav>
    </header>

    <div class = "wrapper">
        <main>
            <h2>Welcome to my Home Page!</h2>
            <h3>About Me</h3>
            <p>My name is Kate and this is my 4th quarter at Seattle Central. I'm pursuing a certificate in web development with aspirations of becoming a full stack developer. In my free time you'll likely find me hiking, studying, or playing pinball.</p>

            <h3>MAMP Screenshot</h3>
            <img src="images/mamp.jpg" alt="MAMP Screenshot" />
            <p>MAMP (for Windows) Version 7.4.1 installed</p>

            <h3>Error Screenshot</h3>
            <img src="images/error.jpg" alt="Error Screenshot" />
            <p>Screenshot showing that error reporting is on.</p>

        </main>
        <aside>
            <h3>My Classwork Assignments</h3>
            <div class="weekly">
            <ul>
                <li>Week 2
                    <ul>
                        <li><a href="week2/var.php">var.php</a></li>
                        <li><a href="week2/currency-logic.php">currency-logic.php</a></li>
                        <li><a href="week2/heredoc.php">heredoc.php</a></li>
                    </ul>
                </li> <!-- end week2 assignment links -->
                <li>Week 3
                    <ul>
                        <li><a href="week3/arrays.php">arrays.php</a></li>
                        <li><a href="week3/html-page.php">html-page.php</a></li>
                        <li><a href="week3/if.php">if.php</a></li>
                        <li><a href="week3/switch.php">switch.php</a></li>
                    </ul>
                </li> <!-- end week3 assignment links -->
                <li>Week 4</li>
                <li>Week 5</li>
                <li>Week 6</li>
                <li>Week 7</li>
                <li>Week 8</li>
            </ul>
            </div> <!-- end weekly class -->

            <h3>Final Assignment</h3>
            <p>The final assignment will link to a different website. Currently under construction!</p>
        </aside>
    </div> <!-- end wrapper -->

<?php include('includes/footer.php'); ?>