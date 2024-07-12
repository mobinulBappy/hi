<?php
for($i=0;$i<=5;$i++){
   for($j=0;$j<=5;$j++){
      echo"*";
   }
   echo"<br>";
}

echo '<hr>';

for($i=1; $i<=5; $i++){
 for($j=1; $j<=$i; $j++){
   echo"*";
   }
   echo '<br>';
   }

   echo '<hr>';
   
   for($i=1; $i<=5; $i++) {
      for($j=4; $j>=$i; $j--){
         echo '&nbsp;&nbsp;'; 
      }
      for($k=1; $k<=$i; $k++){
      echo '*';
      }
      echo '<br>';
      }
?>

