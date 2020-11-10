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