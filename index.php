<?php
$i=1;
$j=1;
for ($i=1; $i < 100; $i++) {
  if ($i%3==0 AND $i%5==0) {
    echo "FizzBuzz\n";
  }  
  elseif ($i%5==0) {
    echo "Buzz\n";
  }
  elseif ($i%3==0) {
    echo "Fizz\n";
  }


  else {
    echo "$i";
  }

  # code...
}

?>
