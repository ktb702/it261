<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <style> 
        form{
            width: 350px;
            margin: 0 auto;
            background: beige;
        }
        .header{
            margin: 0 auto;
            text-align: center;
        }
        input{
            margin-bottom: 10px;
        }
        input[type=text]{
            width: 100%;
        }
        input[type=submit]{
            width: 30%;
            display: inline-block;
            margin-top: 10px;
        }
        .option{
            width: 60%;
            display: block;
        }
        fieldset{
            color: #666;
            padding: 10px 15px 10px 10px;
        }
        label{
            display: block;
            margin-bottom: 5px;
        }
        a{
            color: black;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="header"><h2>Our Calculator</h2></div>
    <form action="" method="post">
        <fieldset>          
            <label>How many miles will you be driving?</label>
            <input type="text" name="miles"></input>

            <label>Price per gallon</label>
            <ul>
                <li><input type="radio" name="price" value="3.00">$3.00</input></li>
                <li><input type="radio" name="price" value="3.50">$3.50</input></li>
                <li><input type="radio" name="price" value="4.00">$4.00</input></li>
            </ul>
            
            <div class="option">
            <label>Fuel Efficiency</label>
            <select name="efficiency">
            <option value="NULL"
            <?php if(isset($_POST['efficiency']) && $_POST == 'NULL'){
                echo 'selected = "unselected"';     }?>
            >Select one</option>
           
            <option value="Terrible"
            <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 'Terrible'){
                echo 'selected = "unselected"';     }?>
            >Terrible</option>

            <option value="Decent"
            <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 'Decent'){
                echo 'selected = "unselected"';     }?>
            >Decent</option>

            <option value="Good"
            <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 'Good'){
                echo 'selected = "unselected"';     }?>
            >Good</option>

            <option value="Excellent"
            <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 'Excellent'){
                echo 'selected = "unselected"';     }?>
            >Excellent</option>
            </select>
            </div> <!-- end option -->

            <input type="submit" value="Calculate" name='calculate'>
            <button><a href="">Reset</a></button>
        </fieldset>
    </form>
<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //we need to declare our errors first. if a field is empty, do something.

    if(empty($_POST['miles']) || empty($_POST['price']) || empty($_POST['efficiency']) ){
        echo '<h2>Error!</h2>';
        echo '<p>Please enter a valid distance, price per gallon and fuel efficiency.</p>';
    }
    elseif(isset($_POST['miles'],
        $_POST['price'],
         $_POST['calculate'],
        $_POST['efficiency']) && 
        is_numeric($_POST['miles']) &&
        is_numeric($_POST['price'])
        ){
            $miles = $_POST['miles'];
            $price = $_POST['price'];
            $efficiency = $_POST['efficiency'];
            if($efficiency == 'Terrible'){ $efficiency = 10; }
            elseif($efficiency == 'Decent'){ $efficiency = 20; }
            elseif($efficiency == 'Good'){ $efficiency = 30; }
            elseif($efficiency == 'Excellent'){ $efficiency = 40; }

            //now do the calculations
            $cost = $efficiency * $price;
            $cost_f = number_format($cost, 2);

            echo "<p>You have driven $miles miles.</p>";
            echo "<p>Your vehicle has an efficieny rating of $efficiency miles per gallon.</p>";
            echo "<p>Your total cost for gas will be $$cost_f dollars.</p>";        
    } 
} 
?>
</div>
</body>
</html>