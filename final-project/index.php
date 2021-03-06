<?php
//In order to view this page, a user must have registered and logged in,
// otherwise they must be directed to do so.

session_start();
if(!isset($_SESSION['UserName'])){
    $_SESSION['msg'] = 'You must log in first';
    //redirect them to the login page
    header('Location: login.php');
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['UserName']);
    //redirect them back to the login page
    header('Location: login.php');
}

include('includes/config.php');
include('includes/header.php');
?>

<h3>You are now logged in.</h3>

<div class="error success">
<?php 
if(isset($_SESSION['UserName'])) : ?>
<h3> Hello, 
    <?php echo $_SESSION['UserName']; 
        echo '<br>'; ?>
</h3>
<p><a href="index.php?logout=1">Log out</a></p>
</div> <!-- end error success -->  
<?php endif ?>

    <main>
        <h1 class="<?php echo $center; ?>"> <?php echo $mainHeadline;  ?> </h1>
        <p>Whether you are just starting out or have been programming for a long time, it's a field that will have on a lifelong journey of learning. This website contains some resources to help you on your quest for information. Please also check out our daily course specials on our daily page!</p>
        
    </main>
    <aside>
        <h2></h2>
        <img class="img" src="images/homepage.jpg" alt="Self Taught Developer">
    </aside>
<?php 
include('includes/footer.php');
?>

