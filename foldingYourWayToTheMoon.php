<?php function fold_to($distance) {
  if ($distance > 0) {
    $thickness = 0.0001;
    $times = 0;
    while ($thickness < $distance) {
      $thickness = $thickness * 2;
      $times++;
    }
    return $times;
  } else {
      return null;
    }
}

echo fold_to(10000);