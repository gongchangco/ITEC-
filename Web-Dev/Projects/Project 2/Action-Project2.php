<?php
	function validate_input($input) {
		$input = trim($input);
    	$input = htmlspecialchars($input);
      	$input = stripslashes($input);
    	return $input;
	}
    
    function displayInfo($A) {  	
    	echo "<table border = 1>";
        	echo "<tr><td>No.</td><td>Name</td><td>Email</td><td>Major</td><td>Grade</td><td>IP address</td></tr>";
            	$nFound = 0;
            	foreach($A as $people) { 
                	if ($people[0] == empty($_POST["name"])) {
                    	$nFound += 0;
                    } else {
                    	$nFound++;
                		echo "<tr>";
                    		echo "<td>".$nFound."</td>";
                   			foreach($people as $info) 
                    			echo "<td>".$info."</td>";                 
                    	echo "</tr>";
                    }    
                }
        echo "</table>";
        echo "Totally ".$nFound." students are shown";
    }
    
    function swapInfo($p, $in) {
    	global $PersonInfo;
        
        foreach ($PersonInfo as $i => $person) {
        	$temp = $person[$p];
            $PersonInfo[$i][$p] = $person[$in];
            $PersonInfo[$i][$in] = $temp;
        }
    }
     
    if (empty($_POST["name"]) || empty($_POST["password"])) {
    	echo "No authorization to see grades<br/>";
    } else if (validate_input($_POST["password"]) != "admin" || validate_input($_POST["name"]) != "admin") {
    	echo "No authorization to see grades<br/>";
    } else {
        $file = "ProjectStudentInfo.txt";
        $InfoStr = file_get_contents($file);
        
        $InfoList = explode("\n", $InfoStr);
        
        foreach ($InfoList as $index=>$person) {
        	$PersonInfo[$index] = explode("\t", $person);
    	}
        
		if (empty($_POST["showwhat"])) {
        	echo "";
        } else if ($_POST["showwhat"] == "all") {
        	echo "The grade for each student is shown as follows.<br/>";
        	displayInfo($PersonInfo);
        } else if ($_POST["showwhat"] == "sorted") {
        	echo "The grades sorted descendly for all students are shown as follows.<br/>";
        	swapInfo(0, 3);
        	rsort($PersonInfo);
            swapInfo(0, 3);
            displayInfo($PersonInfo);
        } else if ($_POST["showwhat"] == "p100") {
        	echo "The students who got 100 points.<br/>";
        	echo "<table border = 1>";
        	echo "<tr><td>No.</td><td>Name</td><td>Email</td><td>Major</td><td>Grade</td><td>IP address</td></tr>";
            	$nFound = 0;
            	foreach($PersonInfo as $people) {
                	if ($people[3] == 100) {
                    	$nFound++;
                		echo "<tr>";
                    		echo "<td>".$nFound."</td>";
                   			foreach($people as $info) 
                    			echo "<td>".$info."</td>";                 
                    	echo "</tr>";
                    }
                }
        	echo "</table>";
            echo "Totally ".$nFound." students are shown";
        } else {
        	echo "The Digital Media students who got 0 points.<br/>";
        	echo "<table border = 1>";
        	echo "<tr><td>No.</td><td>Name</td><td>Email</td><td>Major</td><td>Grade</td><td>IP address</td></tr>";
            $nFound = 0;
            	foreach($PersonInfo as $people) {
            		if ($people[2] == "Digital Media" && $people[3] == 0) {
                		$nFound++;
                    	echo "<tr>";
                    		echo "<td>".$nFound."</td>";
                   			foreach($people as $info)
                        		echo "<td>".$info."</td>";
                    	echo "</tr>";
                	}
            	}
            echo "</table>";
            echo "Totally ".$nFound." students are shown";
        }
    }
?>