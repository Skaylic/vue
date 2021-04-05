<?php
$dir = '../src/js/mixin/internal/';
$scanDir = scandir($dir);
unset($scanDir[0], $scanDir[1]);

foreach ($scanDir as $key => $value) {
	$file = $dir.$value;
	if(is_file($file) && !preg_match("~_~", $value)){
		rename($dir.$value, $dir.'_'.$value);
		$files[$key] = $dir.'_'.$value;
	}
}
	dump($files);


function dump($data = [], $exit = false){
	echo "<pre>";
	var_dump($data);
	echo "</pre>";
	if($exit){
		exit();
	}
}