<?php
// session_start();
include('includes/config.php');
include('includes/header.php');

//connect to the database
$sql = 'SELECT * FROM Books';

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) 
or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
//we extract the data here

$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

?>
    <div id="wrapper">
<main>
    <h1> <?php echo $mainHeadline;  ?> </h1>
    <h3>Click on a title for more information.</h3>

    <?php
    //show the records if we have more than 0 rows //
    if(mysqli_num_rows($result) > 0){ 
        while($row = mysqli_fetch_assoc($result)){
            //this array will display the contents of your row
            echo '<ul>'; //use similar href value that we used in the switch assignment
            echo '<li class="bold"> <a href="books-view.php?id='.$row['BookID'].'">'.$row['Title'].'</a></li>';
            echo '<li> by '.$row['Author'].' </li>';
            echo '</ul>';
        } //close while
    } else{ //else there are no records (no people)
        echo "There are no books to display. Please try again later. ";
    }

    //release the web server
    @mysqli_free_result($result);

    //close the connection
    @mysqli_close($iConn);
    ?>
</main>
<aside>
    <h3>Dr. Seuss!</h3>
    <img src="images/seuss.jpg" alt="Dr.Seuss">
    <p>Theodor Seuss "Ted" Geisel was an American children's author, political cartoonist, illustrator, poet, animator, screenwriter, and filmmaker. He is known for his work writing and illustrating more than 60 books under the pen name Dr. Seuss.</p>
</aside>
     
<?php 
include('includes/footer.php');
?>