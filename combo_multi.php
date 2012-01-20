<?php
  function same($n) {
    return $n;
  }
  
  function combos($arr, $k) {
    if ($k == 1) {
      $result = array();
      foreach ($arr as $elem) {
        array_push($result, array($elem));
      }
      return $result;
    }
    
    $head = $arr[0];
    
    if (count($arr) == 1) {
      $result = array();
      for ($i = 0; $i < $k; $i += 1) {
        array_push($result, $head);
      }
      return array($result);
    }
    
    $combos = array();
    $subcombos = combos($arr, $k-1);
    foreach ($subcombos as $subcombo) {
      $combo = array($head);
      $combo = array_merge($combo, $subcombo);
      array_push($combos, $combo);
    }
    array_shift($arr);
    $combos = array_merge($combos, combos($arr, $k));
    return $combos;
  }
  
  $arr = array("iced", "jam", "plain");
  $result = combos($arr, 2);
  foreach($result as $combo) {
    foreach($combo as $elem) {
      echo $elem, " ";
    }
    echo "<br>";
  }
  $donuts = range(1, 10);
  $num_donut_combos = count(combos($donuts, 3));
  echo "$num_donut_combos ways to order 3 donuts given 10 types";
?>