<?php

/* Write a function, persistence, that takes in a positive parameter num and returns its multiplicative persistence, which is the number of times you must multiply the digits in num until you reach a single digit.

For example:

persistence(39) === 3; // because 3 * 9 = 27, 2 * 7 = 14, 1 * 4 = 4 and 4 has only one digit
persistence(999) === 4; // because 9 * 9 * 9 = 729, 7 * 2 * 9 = 126, 1 * 2 * 6 = 12, and finally 1 * 2 = 2
persistence(4) === 0; // because 4 is already a one-digit number

#####################################################################
1. Ecrire une fonction "persistence"
2. au paramètre positif $num --> $num > 0
3. qui retourne sa persistence multiplicative --> $pers
	$pers = nbre de fois qu'on x les chiffres de $num pour avoir 1 seul chiffre.
#####################################################################
- $mult = array_product() retourne le produit des valeurs du tableau [$num].
- Tant que count($mult) != 1, on continue array_product avec le dernier $mult.
- mettre ces multiplications dans un tableau et compter le nb de mult: $pers = count($tab2)
#####################################################################

function persistence(int $num): int {
	
	if ($num > 0 && $num < 10) {
		return 0; 
		} 
		elseif ($num >= 10) {
		return count(array_product($tab));
	}
		}
echo persistence(254);
*/


function persistence(int $num): int {
$tab = str_split($num);
$i = 0;
	while (count($tab) > 1) {
		$tab = array_product($tab);
		$tab = str_split($tab);
		$i++;
	} 
		return $i;
}

echo persistence (55);
