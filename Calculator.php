<!DOCTYPE html>
<html>
<body>
 
<?php
function Calculator(){
	$Number_One = $post["Number_One"];
  $Operation = $post["Operation"];
  $Number_Two = $post["Number_Two"];
	$Answer = 0;
    
   $Number_One = (10);#Used to test, Please comment out when used in conjunction with the Calculator.html page
   $Operation = ("*");#Used to test, Please comment out when used in conjunction with the Calculator.html page
   $Number_Two = (10);#Used to test, Please comment out when used in conjunction with the Calculator.html page
    
    
    if ($Operation == "+"){
    	$Answer = $Number_One + $Number_Two;
        echo($Answer);
    }
    
    elseif ($Operation == "-"){
    	$Answer = $Number_One - $Number_Two;
        echo($Answer);
    }
    
    elseif ($Operation == "/"){
    	$Answer = $Number_One / $Number_Two;
        echo($Answer);
    }
    
    else{
    	$Answer = $Number_One * $Number_Two;
        echo($Answer);
    }
    
    


}

Calculator()

?>
 
</body>
</html>
