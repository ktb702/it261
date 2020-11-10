<?php

$firstName = '';
$lastName = '';
$email = '';
$tel = '';
$gender = '';
$wines = '';
$comments = '';
$privacy = '';

$firstNameErr = '';
$lastNameErr = '';
$emailErr = '';
$telErr = '';
$genderErr = '';
$winesErr = '';
$commentsErr = '';
$privacyErr = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    //we need to declare our errors first. if a field is empty, do something.
    if(empty($_POST['firstName'])){
        $firstNameErr = 'Please fill out your first name!';
    }else{
        $firstName = $_POST['firstName'];
    }
    if(empty($_POST['lastName'])){
        $firstNameErr = 'Please fill out your last name!';
    }else{
        $lastName = $_POST['lastName'];
    }
    if(empty($_POST['email'])){
        $emailErr = 'Please fill out your email!';
    }else{
        $email = $_POST['email'];
    }
    if(empty($_POST['tel'])){
        $telErr = 'Please fill out your phone number!';
    }else{
        $tel = $_POST['tel'];
    }
    if(empty($_POST['gender'])){
        $genderErr = 'Please pick one!';
    }else{
        $gender = $_POST['gender'];
    }
    if($gender == 'male'){
        $male = 'checked';
    }elseif($gender == 'female'){
        $female = 'checked';
    }
    if(empty($_POST['wines'])){
        $winesErr = 'What?! No wine?';
    }else{
        $wines = $_POST['wines'];
    }
    if(empty($_POST['comments'])){
        $commentsErr = 'Please give us your feedback!';
    }else{
        $comments = $_POST['comments'];
    }
    if(empty($_POST['privacy'])){
        $privacyErr = 'Please agree to our privacy rules!';
    }else{
        $privacy = $_POST['privacy'];
    }

    //if end user checks the checkboxes, all of them, we want to know
    //implode the array of wines - creates a function for that
    function myWines(){
        $myReturn = '';
        if(!empty($_POST['wines'])){
            $myReturn = implode(',', $_POST['wines']);
        } //end if
        return $myReturn;
    } //end myWines

    
    if(empty($_POST['tel'])) {  // if empty, type in your number
        $telErr = 'Your phone number please!';
    } elseif(array_key_exists('tel', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['tel']))
        { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
            $telErr = 'Invalid format!';
        } else{
            $tel = $_POST['tel'];
        }
    } //end ifempty    

    if(isset($_POST['firstName'],
        $_POST['lastName'],
        $_POST['email'],
        $_POST['tel'],
        $_POST['gender'],
        $_POST['wines'],
        $_POST['comments'],
        $_POST['privacy'] ))
        {
            $to = 'katharine.baldwin@seattlecolleges.edu';
            $subject = 'Test Email' .date('m/d/y');
            $body = "$firstName has filled out your form" .PHP_EOL;
            $body .= "Email: $email" .PHP_EOL;
            $body .= "Phone: $tel" .PHP_EOL;
            $body .= 'Your Wines: '.myWines().' '.PHP_EOL;
            $body .= "Gender: $gender" .PHP_EOL;
            $body .= "Comments $comments";

            $headers = array(
                'From' => 'noreply@seattlecollege.edu',
                'Reply-to' => ' '.$email.''
            );
            mail($to, $subject, $body, $headers);
            header('Location: thx.php');
        } //end isset
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Emailable Form</title>
    <style> 
        form{
            width: 350px;
            margin: 0 auto;
        }
        input{
            margin-bottom: 10px;
        }
        input[type=text], input[type=email], textarea{
            width: 100%;
            height: 30px;
        }
        textarea{
            height: 120px;
            margin-bottom: 20px;
        }
        fieldset{
            color: #666;
            padding: 10px 15px 10px 10px;
        }
        label{
            display: block;
            margin-bottom: 5px;
        }
        .privacy{
            float: right;
            padding-right: 100px;
            padding-bottom: 20px;
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
        span{
            display: block;
            color: red;
            font-style: italic;
        }
    </style>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <label>First Name:</label>
            <input type="text" name="firstName" value="<?php
                if(isset($_POST['firstName'])) echo htmlspecialchars($_POST['firstName']); ?>"></input>
            <span><?php echo $firstNameErr; ?></span>

            <label>Last Name:</label>
            <input type="text" name="lastName" value="<?php
                if(isset($_POST['lastName'])) echo htmlspecialchars($_POST['lastName']); ?>"></input>
            <span><?php echo $lastNameErr; ?></span>

            <label>Email:</label>
            <input type="text" name="email" value="<?php
                if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>"></input>
            <span><?php echo $emailErr; ?></span>

            <label>Phone Number:</label>
            <input type="tel" name="tel" placeholder="xxx-xxx-xxxx" value="<?php
                if(isset($_POST['tel'])) echo htmlspecialchars($_POST['tel']); ?>"></input>
            <span><?php echo $telErr; ?></span>

            <label>Gender:</label>
            <ul>
                <li><input type="radio" name="gender" value="female"
                <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked"'; ?>
                >Female</input></li>
                <li><input type="radio" name="gender" value="male"
                <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"'; ?>
                >Male</input></li>
            </ul>
            <span><?php echo $genderErr; ?></span>

            <label>Favorite Wines:</label>
            <ul>
            <!-- radio buttons and check boxes are very similar -->
                <li><input type="checkbox" name="wines[]" value="Cabernet"
                <?php if(isset($_POST['wines']) && $_POST['wines'] == 'Cabernet') echo 'checked="checked"'; ?>
                >Cabernet</input></li>
                <li><input type="checkbox" name="wines[]" value="Merlot"
                <?php if(isset($_POST['wines']) && $_POST['wines'] == 'Merlot') echo 'checked="checked"'; ?>
                >Merlot</input></li>
                <li><input type="checkbox" name="wines[]" value="Syrah"
                <?php if(isset($_POST['wines']) && $_POST['wines'] == 'Syrah') echo 'checked="checked"'; ?>
                >Syrah</input></li>
                <li><input type="checkbox" name="wines[]" value="Malbec"
                <?php if(isset($_POST['wines']) && $_POST['wines'] == 'Malbec') echo 'checked="checked"'; ?>
                >Malbec</input></li>
                <li><input type="checkbox" name="wines[]" value="Zinfandel"
                <?php if(isset($_POST['wines']) && $_POST['wines'] == 'Zinfandel') echo 'checked="checked"'; ?>
                >Zinfandel</input></li>
            </ul>
            <span><?php echo $winesErr; ?></span>

            <label>Comments:</label>
            <textarea name="comments">
            <?php
                if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']); ?>
            </textarea>
            <span><?php echo $commentsErr; ?></span>

            <label class="privacy">I agree to your Privacy Policy</label>
            <input type="radio" name="privacy" value="<?php
                if(isset($_POST['privacy'])) echo htmlspecialchars($_POST['privacy'])  ?>"></input>
            <span><?php echo $privacyErr; ?></span>

            <input type="submit" value="Send It!">
            <p><a href="">Reset me!</a></p>
        </fieldset>
    </form>
<?php 
    if(isset($_POST['amount'],
        $_POST['currency']) && 
        is_numeric($_POST['amount']) &&
        is_numeric($_POST['currency'])
        ){
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
?>
</div> <!-- end box -->
</body>
</html>