<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sticky Currency Form</title>
    <style> 
        form{
            width: 350px;
            margin: 0 auto;
        }
        input{
            margin-bottom: 10px;
        }
        input[type=text]{
            width: 100%;
        }
        fieldset{
            color: #666;
            padding: 10px 15px 10px 10px;
        }
        label{
            display: block;
            margin-bottom: 5px;
        }
        .box{
            width: 600px;
            margin: 20px auto;
            background: beige;
            padding: 20px;
            border: 1px solid green;
        }
        select{
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <fieldset>
            <label>Name:</label>
            <input type="text" name="name" value="<?php
                if(isset($_POST['name'])) echo $_POST['name']; ?>"></input>
            <label>Email:</label>
            <input type="text" name="email" value="<?php
                if(isset($_POST['email'])) echo $_POST['email']; ?>"></input>
            <label>How Much Money Do You Have?</label>
            <input type="text" name="amount" value="<?php
                if(isset($_POST['amount'])) echo $_POST['amount']; ?>"></input>
            <label>Choose your Banking Institution:</label>
            <select name="bank">
            <option value="NULL"
            <?php if(isset($_POST['bank']) && $_POST == 'NULL'){
                echo 'selected = "unselected"';     }?>
            >Select one</option>
           
            <option value="Bank of America"
            <?php if(isset($_POST['bank']) && $_POST['bank'] == 'Bank of America'){
                echo 'selected = "unselected"';     }?>
            >Bank of America</option>

            <option value="Chase Bank"
            <?php if(isset($_POST['bank']) && $_POST['bank'] == 'Chase Bank'){
                echo 'selected = "unselected"';     }?>
            >Chase Bank</option>

            <option value="Boeing Credit Union"
            <?php if(isset($_POST['bank']) && $_POST['bank'] == 'Boeing Credit Union'){
                echo 'selected = "unselected"';     }?>
            >Boeing Credit Union</option>

            <option value="Mattress"
            <?php if(isset($_POST['bank']) && $_POST['bank'] == 'Mattress'){
                echo 'selected = "unselected"';     }?>
            >Mattress</option>

            </select>
            <label>Choose your currency:</label>
            <ul>
                <li><input type="radio" name="currency" value="0.013"
                <?php if(isset($_POST['currency']) && $_POST['currency'] == '0.013') echo 'checked="checked"'; ?>
                >Rubles</input></li>
                <li><input type="radio" name="currency" value="0.076"
                <?php if(isset($_POST['currency']) && $_POST['currency'] == '0.076') echo 'checked="checked"'; ?>
                >Canadian Dollars</input></li>
                <li><input type="radio" name="currency" value="1.28"
                <?php if(isset($_POST['currency']) && $_POST['currency'] == '1.28') echo 'checked="checked"'; ?>
                >Pounds</input></li>
                <li><input type="radio" name="currency" value="1.18"
                <?php if(isset($_POST['currency']) && $_POST['currency'] == '1.18') echo 'checked="checked"'; ?>
                >Euros</input></li>
                <li><input type="radio" name="currency" value="0.0094"
                <?php if(isset($_POST['currency']) && $_POST['currency'] == '"0.0094') echo 'checked="checked"'; ?>
                >Yen</input></li>
            </ul>
            <input type="submit" value="Convert It!">
            <p><a href="">Reset me!</a></p>
        </fieldset>
    </form>
<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //we need to declare our errors first. if a field is empty, do something.

    if(empty($_POST['name'])){
        echo '<p>Please fill out your name!</p>';
    }
    if(empty($_POST['email'])){
        echo '<p>Please fill out your email!</p>';
    }
    if(empty($_POST['amount'])){
        echo '<p>Show me the money!</p>';
    }
    if(empty($_POST['currency'])){
        echo '<p>Please check one of the currencies!</p>';
    }
    if($_POST['bank'] == 'NULL'){
        echo '<p>Please choose your banking institution!</p>';
    }

    elseif(isset($_POST['amount'],
        $_POST['currency'],
        $_POST['name'],
        $_POST['bank'],
        $_POST['email']) && 
        is_numeric($_POST['amount']) &&
        is_numeric($_POST['currency'])
        ){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $bank = $_POST['bank'];
            $amount = $_POST['amount'];
            $currency = $_POST['currency'];
            //now do the calculations
            $total = $amount * $currency;
            $total_f = number_format($total, 2);
            ?>

            <div class="box">
            <?php
                echo "<h2>Thank you, $name, for filling out our form! Your money will be wired to $bank within 24 hours.</h2>";
                echo "<p>$name, you now have $total_f American dollars!</p>";
                echo "<p>We will be getting back to you via your email: $email</p>";
            
    } 
} 
?>
</div> <!-- end box -->
</body>
</html>