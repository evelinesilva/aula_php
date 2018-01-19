<?php

while ($a <= 5){

for ($i=0; $i<6 ; $i++)
{
  for ($j=0; $j<$i; $j++)
  {
    echo "*" ;
  }
  echo "" . PHP_EOL;
}
  $a = $a + 1;
}

?>
