<?php

$puuviljad = array(
	array("nimi"=>"Banaan", "värv"=>"kollane", "maitse"=>"magus", "pärit"=>"Kagu-Aasia troopilistest piirkondadest"),
	array("nimi"=>"Õun", "värv"=>"punane, kollane või roheline", "maitse"=>"värske ning mahlane", "pärit"=>"Anatooliast"),
	array("nimi"=>"Kiivi", "värv"=>"pealt pruun, seest roheline", "maitse"=>"värske ning magus", "pärit"=>"Uus-Meremaalt"),
	array("nimi"=>"Arbuus", "värv"=>"pealt roheline, seest punane", "maitse"=>"mahlane ning magus", "pärit"=>"Aafrikast"),
	array("nimi"=>"Apelsin", "värv"=>"oranž", "maitse"=>"kergelt happeline ning värske", "pärit"=>"Hiinast"),
	array("nimi"=>"Pomelo", "värv"=>"helekollane", "maitse"=>"mahe ning värske", "pärit"=>"Kagu-Aasiast")
	);
foreach($puuviljad as $puuvili){
include("puuviljad.html");
}
?>