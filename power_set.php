<?php
function output($binary, $arr) {
  // based on true/false values in $binary array, print
  // values in $arr
  $subset = array();
  foreach (range(0, count($arr)-1) as $i) {
    if ($binary[$i]) {
      $subset[] = $arr[$i];
    } 
  }
  print_array($subset);
}

function print_array($arr) {
  if (count($arr) > 0) {
    echo join(" ", $arr);
  } else {
    echo "(empty)";
  }
  echo '<br>';
}

function print_power_sets($arr) {
  echo "POWER SET of [" . join(", ", $arr) . "]<br>";
  $binary = array();
  foreach (range(1, count($arr)) as $i) {
    $binary[] = false;
  }
  $n = count($arr);
  
  while (count($binary) <= count($arr)) {
    output($binary, $arr);
    $i = 0;
    while (true) {
      if ($binary[$i]) {
        $binary[$i] = false;
        $i += 1;
      } else {
        $binary[$i] = true;
        break;
      }
    }
    $binary[$i] = true;
  }
}
 
print_power_sets(array());
print_power_sets(array('singleton'));
print_power_sets(array('dog', 'c', 'b', 'a'));
?>