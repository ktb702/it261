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

include('includes/header.php');

?>

<h1>Welome to our home page!</h1>

<?php 
//Notification message
//is the session successful
if(isset($_SESSION['success'])) : ?>
<div class="error success">
    <h3>
        <?php
        echo $_SESSION['success'];
        unset($_SESSION['success']);
        ?>
    </h3>
</div> <!-- end error success -->  
<?php endif ?>

<div class="error success">
<?php 
    if(isset($_SESSION['UserName'])) : ?>
    <h3> Welcome, 
        <?php echo $_SESSION['UserName']; 
            echo '<br>'; ?>
    </h3>
    <p><a href="index.php?logout=1">Log out</a></p>
</div> <!-- end error success -->  
<?php endif ?>

