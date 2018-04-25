<?php
	include "Functions-01-22.php";
?>

<html>
<head>
	<title>Activity 01-22</title>
</head>

<body>
	<h1><center>About PHP functions</center></h1>
    <hr/>
	<?php
        ShowMSG();
        echo"<hr/>";
        ShowNMsg();
        echo"<hr/>";
        ShowNMsg(8);
        echo"<hr/>";
        echo "The average of numbers from 10 to 200 is: ".myAVG(10, 200)."<br/>";
        echo"<hr/>";  
        $price = rand(0, 1000);
        echo "The original price was: ".$price." and now the price is: $".myPrice($price);
        echo"<hr/>";
        $i = rand(0, 100);      
        if ($i < 25) {
        	ShowMyFeeling("Sad");
        }
        else if ($i < 50) {
        	ShowMyFeeling("Smile");
       	}
        else if ($i < 75) {
        	ShowMyFeeling("Angry");
        }
        else {
        	ShowMyFeeling("default");
        }
    ?>
</body>
</html>