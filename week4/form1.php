<?php
//our first form - form elements - form, label, input
//we are using POST method not GET
//before we used if(isset($_GET['today'])) - can also use _POST

if(isset($_POST['name'], $_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    echo ''.$name.' has filled out the form.';
    echo '<br>';
    echo 'Their email is '.$email.'';
} else{
    echo '
    <form action ="" method="post">
    <label>Name</label> 
    <input type="text" name="name"><br>
    <label>Email</label> 
    <input type="text" name="email"><br>
    <input type="submit" value="Send it!">
    </form>
    ';
}
?>
