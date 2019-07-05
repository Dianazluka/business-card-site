<?php 

$dbhost = "localhost";
$dbname = "business_card_site";
$username = "root";
$password = "";
$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

function get_educations(){
	global $db;
	$educations = $db->query("SELECT * FROM educations");
	 	return $educations;
	 
}
function get_interests(){
	global $db;
	$interests = $db->query("SELECT * FROM interests");
	 	return $interests;
	 
}
function get_portfolio(){
	global $db;
	$portfolio = $db->query("SELECT * FROM portfolio");
	 	return $portfolio;
	 
}
function get_skill(){
	global $db;
	$skill = $db->query("SELECT * FROM skill");
	 	return $skill;
	 
}
/*function get_educations_id($id){
	global $db;
	$educations = $db->query("SELECT * FROM educations WHERE id=$id");
	/*foreach ($educations as $education) {
	 	return $education["name"];
	 }*/ 
	


