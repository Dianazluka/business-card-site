<?php 
 $xml = simplexml_load_file("business_card_site.xml") or die("Error: Cannot create object");  
///echo count($xml);
 
$mysqli = new mysqli('localhost', 'root', '', 'business_card_site');
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$mysqli->set_charset('utf8');

$skill = $mysqli->query("SELECT name FROM skill");

$educations = $mysqli->query("SELECT * FROM educations");
$portfolio = $mysqli->query("SELECT * FROM portfolio");
$interests = $mysqli->query("SELECT * FROM interests");
	
///while ($row = $skill->fetch_assoc()){

 /// echo $row['name']."<br>";

///}
/*

$skill ="SELECT * FROM skill";
$result = mysqli_query($mysqli, $skill);








/*$query = $mysqli->query('SELECT * FROM educations');
while ($row = mysqli_fetch_assoc($query)) {
	echo $row['name'].$row['specialization']."<br>";
}
$mysqli->close();*/

 //$query = "INSERT INTO portfolio VALUES('3', 'Приложение калькулятор на С# и Java', 'Операясь на методичку и сайты сделать приложение калькулятор, и провести тестирование на ошибки которые могут появится во время работы', 'https://github.com/Dianazluka/CalcDoDies', 'img/3.png')";
 //$mysqli->query($query);
/*$query = "UPDATE portfolio SET appearance_of_the_project = 'img/3.png' WHERE id=3";
$mysqli->query($query);*/
/*$query = "DELETE FROM portfolio WHERE  id=3";
$mysqli->query($query);*/
$mysqli->close();
/*$business_card_site =  simplexml_load_file('business_card_site.xml');

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
/*INSERT INTO 'educations'(id, Project_name, description_of _he_project, reference_to_the_project, appearance_of_the_project)
VALUES ('3', 'Приложение калькулятор на С# и Java', 'Операясь на методичку и сайты сделать приложение калькулятор, и провести тестирование на ошибки которые могут появится во время работы', '3.png');*/
/*function get_interests(){
	global $db;
	$interests = $db->query("SELECT * FROM interests") or die("неверный запрос");
	 	return $interests;
	 
}
function get_portfolio(){
	global $db;
	$portfolio = $db->query("SELECT * FROM portfolio")or die("неверный запрос");
	 	return $portfolio;
	 
}
function get_skill(){
	global $db;
	$skill = $db->query("SELECT * FROM skill") or die("неверный запрос");
	 	return $skill;
	 
}
/*function get_educations_id($id){
	global $db;
	$educations = $db->query("SELECT * FROM educations WHERE id=$id");
	/*foreach ($educations as $education) {
	 	return $education["name"];
	 }*/ 


?>