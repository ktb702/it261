<?php //PHP FOR BOOKS-VIEW
include('includes/config.php');

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
}else {
    header('Location:books.php');
}

$sql = 'SELECT * FROM Books WHERE BookID = '.$id.'';

//connect to our database
$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) 
or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
//we extract the data here

$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0){ 
    while($row = mysqli_fetch_assoc($result)){
        $Title = stripslashes($row['Title']);
        $Author  = stripslashes($row['Author']);
        $PubDate = stripslashes($row['PubDate']);
        $Description = stripslashes($row['Description']);
        $Feedback = '';
    }
} else{
    $Feedback = 'Sorry, we do not have any books available at this time.';
}

include('includes/header.php');
?>

<div id="wrapper">
<main>
    <h1> <?php echo $Title;  ?> </h1>
    <?php 
        if($Feedback == ''){
            echo '<ul>';
            echo '<li><b>Title: </b> '.$Title.' </li>';
            echo '<li><b>Author: </b> '.$Author.' </li>';
            echo '<li><b>Publication Year: </b> '.$PubDate.' </li>';
            echo '</ul>';
            echo '<p> '.$Description.' </p>';
            echo '<br>';
            echo '<p><a href="books.php">Go back to the books page!</a></p>';
        } else{
            echo $Feedback;
        }
    ?>
</main>

<aside>
<?php 
    if($Feedback == ''){
        echo '<img src="images/book'.$id.'.jpg" alt="'.$Title.'">';
    }else{
        echo $Feedback;
    }
?>
</aside>

<?php
include('includes/footer.php');

//release the web server
@mysqli_free_result($result);

//close the connection
@mysqli_close($iConn);
?>