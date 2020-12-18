<?php
// session_start();
include('includes/config.php');
include('credentials2.php');
include('includes/header.php');

//connect to the database
$sql2 = 'SELECT * FROM Resources';

$iConn2 = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) 
or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
//we extract the data here

$result2 = mysqli_query($iConn2,$sql2) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn2)));

?>

<main>
    <h1> <?php echo $mainHeadline;  ?> </h1>
    <h3>Click on a resource for more information.</h3>

    <?php
    //show the records if we have more than 0 rows //
    if(mysqli_num_rows($result2) > 0){ 
        while($row = mysqli_fetch_assoc($result2)){
            //this array will display the contents of your row
            echo '<ul>'; 
            echo '<li class="bold"> <a href="resources-view.php?id='.$row['ResourceID'].'">'.$row['Name'].'</a></li>';
            echo '</ul>';
        } //close while
    } else{ //else there are no records
        echo "There are no resources to display. Please try again later. ";
    }

    //release the web server
    @mysqli_free_result($result2);

    //close the connection
    @mysqli_close($iConn2);
    ?>
</main>
     
<?php 
include('includes/footer.php');
?>