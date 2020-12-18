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
    <h1> <?php echo $mainHeadline;  ?> </h1>
    <?php include('form.php'); ?>
</main>
<aside>
   
</aside>
     
<?php 
include('includes/footer.php');
?>