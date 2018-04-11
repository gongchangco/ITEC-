<!DOCTYPE html>
<html>
	<head>
    	<title>Activity 01-12: first PHP program</title>
    </head>
    <body>
    	<h1>Hello world!</h1>
        
        <?php
        	echo "my first php program.";
            echo "<font color=blue><b>This is a message in blue.</b></font><br/>";
        ?>
        
        <p>Some random messages...</p>
        
        <?php
        	$school = "GGC";
            echo "I like attending $school <br/>"; //single quote will not replace the $school with it.
            ECHO 'I like attending ' . $school . ' <br/>';
        ?>
        
        <hr/>
        
        <?php
        	$num = 123.4567;
            echo "This number is: " . ($num + 100) ."<br/>";
            printf("This number is %d <br/>", $num);
            printf("The number is: %d (in decimal) and %f (in float) <br/>", $num, $num);
            printf("The number is: %.2f with only 2 decimal digits <br/>", $num);
            
            $var = "hello world";
            printf("The string is: %s, %.5s<br/>", $var, $var);
            
            $abc = round($num, 2);
            echo "The number abc becomes: " .$abc. "<br/>";
        ?>
        
        <hr/>
        
        <?php
        	$numStudents = 28;
            $numGetA = 20;
            
            echo "Number of students: $numStudents <br/>";
            echo "Number of students who get an A: $numGetA <br/>";
            printf("Percentage is: %.2f%%<br/>", $numGetA/$numStudents * 100);
        ?>
    </body>
</html>