<?php

	$people = array('kongs','kings',kangs');
	//$newstring = implode('  ',$people);
	//echo $newstring;

	$string = 'kongs kings kangs';
	$new_array = explode(' ',$string);
	foreach($new_array as $value){
		echo $value.'<br/>';
}
?>