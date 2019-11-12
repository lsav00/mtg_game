<?php
//provide your hostname, username and dbname
$hostname="localhost"; 
$username="ls";  
$password="1234";
$db_name="run"; 
$conn = mysqli_connect($hostname, $username, $password, $db_name);
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$book_name = $_POST['book_name'];
$sql = "select * from yezzir where name LIKE '$book_name%'";
$result = mysqli_query($conn,$sql) or die ('Error');

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

	//using if statement to prevent printing all the names when input is empty
	if ($book_name != "") 			//if the name is not an empty string...
		$yes = $row['name'];
		printf('<button onclick="hey(\'%s\');">'.$row['name'].'</button>', $yes ); 	//print the name and image.
}

?>