<?php
//sequência de fibonnacci
//(0,1,1,2,3,5,8,13)

$a=0;
$b=1;
echo"$a,";
echo"$b,";
$i=0;
while ($i<10) {

  $a = $a + $b;
echo "$a, ";
  $b = $a + $b;
echo "$b, ";


  $i++;

}

?>
