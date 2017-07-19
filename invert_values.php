<?php

function invert($a) {
$a = [];
foreach ($a as $value) { 
	$value = $value * -1;
	return $a[$value];
	}
}
echo invert(1, -5);