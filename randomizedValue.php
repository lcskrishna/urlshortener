<?php

function getRandomValue(){
	$randomCharacters = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','1','2','3','4','5','6','7','8','9','0',
		'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');

	$randKeys = array_rand($randomCharacters,5);
	$randString = $randomCharacters[$randKeys[0]].$randomCharacters[$randKeys[1]].$randomCharacters[$randKeys[2]].$randomCharacters[$randKeys[3]].$randomCharacters[$randKeys[4]];

	return $randString;
}

?>