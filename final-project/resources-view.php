<?php //PHP FOR RESOURCECS-VIEW
include('includes/config.php');
include('credentials2.php');

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
}else {
    header('Location:resources.php');
}

$sql2 = 'SELECT * FROM Resources WHERE ResourceID = '.$id.'';

//connect to our database
$iConn2 = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) 
or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
//we extract the data here

$result2 = mysqli_query($iConn2,$sql2) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn2)));

if(mysqli_num_rows($result2) > 0){ 
    while($row = mysqli_fetch_assoc($result2)){
        $Name = stripslashes($row['Name']);
        $Website  = stripslashes($row['Website']);
        $LanguagesOffered = stripslashes($row['LanguagesOffered']);
        $Description = stripslashes($row['Description']);
        $Feedback = '';
    }
} else{
    $Feedback = 'Sorry, we do not have any resources available at this time.';
}

include('includes/header.php');
?>

<div id="wrapper">
<main>
    <h1> <?php echo $Name;  ?> </h1>
    <?php 
        if($Feedback == ''){
            echo '<ul>';
            echo '<li><b>Training Resource: </b> '.$Name.' </li>';
            echo '<li><b>Website: </b> <a href="'.$Website.'">'.$Website.'</a> </li>';
            echo '<li><b>Languages Offered: </b> '.$LanguagesOffered.' </li>';
            echo '</ul>';
            echo '<p> '.$Description.' </p>';
            echo '<br>';
            echo '<p><a href="resources.php">Go back to the resources page!</a></p>';
        } else{
            echo $Feedback;
        }
    ?>
</main>

<aside>
<?php 
    if($Feedback == ''){
        echo '<img class="img" src="images/resource'.$id.'.jpg" alt="'.$Name.'">';
    }else{
        echo $Feedback;
    }
?>
</aside>

<?php
include('includes/footer.php');

//release the web server
@mysqli_free_result($result2);

//close the connection
@mysqli_close($iConn2);
?>