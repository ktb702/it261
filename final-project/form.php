<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <label>First Name:</label>
            <input type="text" name="firstName" value="<?php
                if(isset($_POST['firstName'])) echo htmlspecialchars($_POST['firstName']); ?>">
            <span><?php echo $firstNameErr; ?></span>

            <label>Last Name:</label>
            <input type="text" name="lastName" value="<?php
                if(isset($_POST['lastName'])) echo htmlspecialchars($_POST['lastName']); ?>">
            <span><?php echo $lastNameErr; ?></span>

            <label>Email:</label>
            <input type="text" name="email" value="<?php
                if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
            <span><?php echo $emailErr; ?></span>

            <label>I'm interested in learning more about:</label>
            <ul>
            <!-- radio buttons and check boxes are very similar -->
                <li><input type="checkbox" name="topics[]" value="FrontEnd"
                <?php if(isset($_POST['topics']) && $_POST['topics'] == 'FrontEnd') echo 'checked="checked"'; ?>
                >Front End Web Dev</li>
                <li><input type="checkbox" name="topics[]" value="BackEnd"
                <?php if(isset($_POST['topics']) && $_POST['topics'] == 'BackEnd') echo 'checked="checked"'; ?>
                >Back End Web Dev</li>
                <li><input type="checkbox" name="topics[]" value="Frameworks"
                <?php if(isset($_POST['topics']) && $_POST['topics'] == 'Frameworks') echo 'checked="checked"'; ?>
                >Frameworks</li>
                <li><input type="checkbox" name="topics[]" value="OOP"
                <?php if(isset($_POST['topics']) && $_POST['topics'] == 'OOP') echo 'checked="checked"'; ?>
                >Object Oriented Principles</li>
                <li><input type="checkbox" name="topics[]" value="Projects"
                <?php if(isset($_POST['topics']) && $_POST['topics'] == 'Projects') echo 'checked="checked"'; ?>
                >Project Ideas</li>
            </ul>
            <span><?php echo $topicsErr; ?></span>

            <label>Would you like to join our mailing list?</label>
            <ul>
                <li><input type="radio" name="mail" value="yes"
                <?php if(isset($_POST['mail']) && $_POST['mail'] == 'yes') echo 'checked="checked"'; ?>>Yes</li>
                <li><input type="radio" name="mail" value="no"
                <?php if(isset($_POST['mail']) && $_POST['mail'] == 'no') echo 'checked="checked"'; ?>>No</li>
            </ul>
            <span><?php echo $mailErr; ?></span>

            <label>How did you hear about us?</label>
            <select name="ref">
            <option value="NULL"
            <?php if(isset($_POST['ref']) && $_POST == 'NULL'){
                echo 'selected = "unselected"';     }?>
            >Select one</option>
           
            <option value="Google"
            <?php if(isset($_POST['ref']) && $_POST['ref'] == 'Google'){
                echo 'selected = "unselected"';     }?>
            >Google</option>

            <option value="Friends"
            <?php if(isset($_POST['ref']) && $_POST['ref'] == 'Friends'){
                echo 'selected = "unselected"';     }?>
            >Friends</option>

            <option value="Facebook"
            <?php if(isset($_POST['ref']) && $_POST['ref'] == 'Facebook'){
                echo 'selected = "unselected"';     }?>
            >Facebook</option>

            <option value="Instagram"
            <?php if(isset($_POST['ref']) && $_POST['ref'] == 'Instagram'){
                echo 'selected = "unselected"';     }?>
            >Instagram</option>

            <option value="Other"
            <?php if(isset($_POST['ref']) && $_POST['ref'] == 'Other'){
                echo 'selected = "unselected"';     }?>
            >Other</option>
            </select>
            <span><?php echo $refErr; ?></span>

            <label>Comments:</label>
            <textarea name="comments">
            <?php
                if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']); ?>
            </textarea>
            <span><?php echo $commentsErr; ?></span>

            <label class="privacy">I agree to your Privacy Policy</label>
            <input type="radio" name="privacy" value="<?php
                if(isset($_POST['privacy'])) echo htmlspecialchars($_POST['privacy'])  ?>">
            <span><?php echo $privacyErr; ?></span>

            <input type="submit" value="Send It!">
            <button type="button" onclick="window.location.href = '<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' ">RESET</button>

            <!-- <p><a href="">Reset me!</a></p> -->
        </fieldset>
    </form>