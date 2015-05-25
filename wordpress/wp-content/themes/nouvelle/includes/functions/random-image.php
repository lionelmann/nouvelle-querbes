<?php 
	function randomImage() {
	$dist = '/dist/images/random/';
 	$bg = array(
  			$dist . 'enfants1.png', 
  			$dist . 'enfants2.png', 
  			$dist . 'enfants3.png', 
  			$dist . 'enfants4.png', 
  			$dist . 'enfants5.png', 
  			$dist . 'enfants6.png', 
  			$dist . 'enfants7.png',
  			$dist . 'enfants8.png',
  			$dist . 'enfants9.png' ); // array of filenames
  	$i = rand(0, count($bg)-1); // generate random number size of the array
  	$selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
  	echo bloginfo('template_url' ) . $selectedBg;
  };
?>