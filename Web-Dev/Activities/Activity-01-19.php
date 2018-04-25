<html>
	<head>
    	<title>Activity 01-19</title>
    </head>
    
    <body>
    	<h1><center>About loops in PHP</center></h1>
        <hr>     
        <?php
        	for ($i = 0; $i <= 100; $i++) {
            	echo $i."\t";
                //echo "<br/>"; // Makes numbers go vertical
            }	
        ?>
        <br/>
        <?php
        	// Summation for 100
        	$sum = 0;
    
            for ($i = 0; $i <= 100; $i++) {
				$sum += $i;
            }
            echo "<br/>The summation of all the numbers is: ".$sum."<br/>";
        ?>
        <hr/>
        
        <?php
        	// Lines
        	$nstars = 10;
        
        	for ($line=0;$line<$nstars;$line++) {
            	for ($k=0;$k<$nstars;$k++) {
                	echo "*";
                }
                echo "<br/>";
            } 
            echo "<hr/>";
            // Triangle Arrow (Left)
            
			// For the top part of the triangle
            for ($line=0; $line <= $nstars; $line++) {
            	for ($i=0; $i <= $line; $i++) {
            		echo "*";
                }
                echo "<br/>";
            }
            // For the bottom part of the triangle
            for ($line=0; $line <= $nstars; $line++) {
				for ($i=$nstars - $line; $i >= 0; $i--) {
                	echo "*";
                }
                echo "<br/>";
            }
            echo "<hr/>";
            echo "<div style='width:50%;margin:auto;background-color:blue;'>";
            echo "<div style='position:relative;left:45%'>";
            // Diamond Triangle
            
            // For top part of triangle
            for ($line=0; $line <= $nstars; $line++) {
				for ($j = 0; $j <= $nstars - $line; $j++) {
                	echo "&nbsp;";
                }
                for ($k=1; $k <= $line; $k++) {
                	echo "*";
                }
                echo "<br/>";
            }
            // For bottom part of triangle
            for ($line=$nstars; $line >= 1; $line--) {
            	for ($k=$nstars; $k >= $line; $k--) {
                	echo "&nbsp;";
                }
                for ($j=1; $j <= $line; $j++) {
                	echo "*";
                }
                echo "<br/>";
            }
            echo "</div>"; echo "</div>";
        ?>
    </body>
</html>