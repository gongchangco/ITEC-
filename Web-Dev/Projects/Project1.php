<html>
<head>
	<title>Project 1</title>
    
    <style>
    	.error {
    		color: red;
    	}
    </style>
</head>
<body>
	<?php
    	$name=$email=$major=$Q1=$Q2=$Q3=$Q4="";
        $nameError=$emailError="";
    
		function validate_input($input) {
			$input = trim($input);
    		$input = htmlspecialchars($input);
    		$input = stripslashes($input);
    		return $input;
		}
        
        if (isset($_POST["submit"])) {
        	if (empty($_POST["name"])) {
            	$nameError= "Name is required";
            } else {
            	$name = validate_input($_POST["name"]);
            }
            if (empty($_POST["email"])) {
            	$emailError= "Email is required";
            } else {
            	$email = validate_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                	$emailError = "Invalid email format";
                }
   			}      
            $major = validate_input($_POST["major"]);
            $Q1 = validate_input($_POST["Q1"]);
            $Q2 = validate_input($_POST["Q2"]);
            $Q3 = validate_input($_POST["Q3"]);
            $Q4 = validate_input($_POST["Q4"]);
        }
    ?>
	<h1>Welcome to this Web Based Test!!!</h1>
	<p>Please answer the following questions:</p>
	<hr/>
	<!-- Create your own questions -->
	<form method="post" action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>">
		Name: <input type="text" name="name" value="<?php echo $name; ?>"> <span class="error">*<?php echo $nameError ?></span><br/><br/>
    	Email: <input type="text" name="email" value="<?php echo $email; ?>"> <span class="error">*<?php echo $emailError ?></span><br/>
    	<hr/>
    	Choose your major area of study:
    	<select name="major">
    		<option value="Digital Media" <?php if ($major == "Digital Media") { echo selected; } ?>>Digital Media</option>
  			<option value="Software" <?php if ($major == "Software") { echo selected; } ?>>Software</option>
  			<option value="Security" <?php if ($major == "Security") { echo selected; } ?>>Security</option>
  			<option value="Business"<?php if ($major == "Business") { echo selected; } ?>>Business</option>
  			<option value="Other" <?php if ($major == "Other") { echo selected; } ?>>Other</option>
    	</select><br/>
    	<hr/>
    	<p>Question 1 (25 points)</p>
    	<p>What does PHP stand for?</p>
    	<input type="radio" name="Q1" value="A" <?php if ($Q1 == "A") { echo checked; } ?>>A. Personal Home Page<br/>
    	<input type="radio" name="Q1" value="B" <?php if ($Q1 == "B") { echo checked; } ?>>B. Hypertext Preprocessor<br/>
    	<input type="radio" name="Q1" value="C" <?php if ($Q1 == "C") { echo checked; } ?>>C. Pepperoni Ham Pizza<br/>
    	<input type="radio" name="Q1" value="D" <?php if ($Q1 == "D") { echo checked; } ?>>D. Both A and B<br/>
    	<hr/>
    	<p>Question 2 (25 points)</p>
    	<p>Which of the below symbols is a newline character?</p>
    	<input type="radio" name="Q2" value="A" <?php if ($Q2 == "A") { echo checked; } ?>>A. \r<br/>
    	<input type="radio" name="Q2" value="B" <?php if ($Q2 == "B") { echo checked; } ?>>B. \n<br/>
    	<input type="radio" name="Q2" value="C" <?php if ($Q2 == "C") { echo checked; } ?>>C. /n<br/>
    	<input type="radio" name="Q2" value="D" <?php if ($Q2 == "D") { echo checked; } ?>>D. /r<br/>
    	<hr/>
    	<p>Question 3 (25 points)</p>
    	<p>Who is the father of PHP?</p>
    	<input type="radio" name="Q3" value="A" <?php if ($Q3 == "A") { echo checked; } ?>>A. Rasmus Lerdorf<br/>
    	<input type="radio" name="Q3" value="B" <?php if ($Q3 == "B") { echo checked; } ?>>B. William Shakespeare<br/>
    	<input type="radio" name="Q3" value="C" <?php if ($Q3 == "C") { echo checked; } ?>>C. Drek Kolkevi<br/>
    	<input type="radio" name="Q3" value="D" <?php if ($Q3 == "D") { echo checked; } ?>>D. Ben Dover<br/>
    	<hr/>
    	<p>Question 4 (25 points)</p>
    	<p>PHP files have a default file extension of _______</p>
    	<input type="radio" name="Q4" value="A" <?php if ($Q4 == "A") { echo checked; } ?>>A. .html<br/>
    	<input type="radio" name="Q4" value="B" <?php if ($Q4 == "B") { echo checked; } ?>>B. .xml<br/>
    	<input type="radio" name="Q4" value="C" <?php if ($Q4 == "C") { echo checked; } ?>>C. .php<br/>
    	<input type="radio" name="Q4" value="D" <?php if ($Q4 == "D") { echo checked; } ?>>D. .class<br/>
    	<hr/>
    	<input type="submit" value="Submit this Test" name="submit"><input type="reset">
	</form>
	<hr/>
	<?php
         
        $grade = 0;
    	
        if (isset($_POST["submit"])) {
       	
        	if (empty($_POST["name"])) {
                echo $name;
            } else if (empty($_POST["email"])) {
            	echo $email;
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            	echo "";
            } else {
            	if ($_POST["Q1"] == "D") {
                	$grade += 25;
                }
                if ($_POST["Q2"] == "B") {
                	$grade += 25;
                }
                if ($_POST["Q3"] == "A") {
                	$grade += 25;
                }
                if ($_POST["Q4"] == "C") {
                	$grade += 25;
                }
                
            	echo "Your test results: <br/>";
              	echo "Name: ".$name."<br/>";
            	echo "Email: ".$email."<br/>";
            	echo "Major: ".$major."<br/>";
            	echo "Your grade for this test is: ".$grade."<br/>";
            }
        }
    ?>
</body>
</html>