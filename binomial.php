<?php
function binomial_coefficient($n, $k) {
  if ($k == 0) return 1;
  $result = 1;
  foreach (range(0, $k - 1) as $i) {
    $result *= ($n - $i) / ($i + 1);
  }
  return $result;
}

$n = 5;
foreach (range(0, $n) as $k) {
  $result = binomial_coefficient($n, $k);
  echo "binomial coefficient($n, $k) = $result<br>";
}
?>
