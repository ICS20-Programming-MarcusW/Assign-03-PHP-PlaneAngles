<!-- Example taken from php.net-->
<?php
   function convertDtoR($number)
   {
     	// calculate the radians from degrees
       $radian = round(($number * (pi()/180)), 2) . " ";
       
           if ($number > 0 && $number < 90) {
             echo "<h4>The angle in radians is: " . $radian . " and it is an acute angle.</h4>";
           } elseif($number == 90){
             // display the results if right angle
             echo "<h4>The angle in radians is: " . $radian . " and it is a right angle.</h4>";
           }elseif($number > 90 && $number < 180){
                 // display the results if obtuse angle
             echo "<h4>The angle in radians is: " . $radian . " and it is an obtuse angle.</h4>";
           }elseif($number == 180){
                 // display the results if straight line
             echo "<h4>The angle in radians is: " . $radian . " and it is a straight angle.</h4>";
           }elseif($number > 180 && $number < 361){
                 // display the results if reflex angle
             echo "<h4>The angle in radians is: " . $radian . " and it is a reflex angle.</h4>";  
           }else{
             
           }
     
   }
   
   function convertRtoG($number)
   {
     	// calculate the gradians from radians
       $gradian = round(($number * (200/pi())), 2) . " ";
   
       if ($gradian > 0 && $gradian < 100) {
             echo "<h4>The angle in gradians is: " . $gradian . " and it is an acute angle.</h4>";
           } elseif($gradian == 100){
             // display the results if right angle
             echo "<h4>The angle in gradians is: " . $gradian . " and it is a right angle.</h4>";
           }elseif($gradian > 100 && $gradian < 200){
                 // display the results if obtuse angle
             echo "<h4>The angle in gradians is: " . $gradian . " and it is an obtuse angle.</h4>";
           }elseif($gradian == 200){
                 // display the results if straight line
             echo "<h4>The angle in gradians is: " . $gradian . " and it is a straight angle.</h4>";
           }elseif($gradian > 200 && $gradian < 401){
                 // display the results if reflex angle
             echo "<h4>The angle in gradians is: " . $gradian . " and it is a reflex angle.</h4>";  
           }else{
             
           }
     
   }
   ?>