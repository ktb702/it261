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



    <h1> <?php echo $mainHeadline;  ?> </h1>
    <a href="images/resources.jpg"><img src="images/resources.jpg" alt="Programming Resources Table"></a>

    <h1>Our Wonderful Members!</h1>
    <a href="images/users.jpg"><img src="images/users.jpg" alt="Users Table"></a>

     
<?php 
include('includes/footer.php');
?>