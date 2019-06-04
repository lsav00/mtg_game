<html>
<head>


<title>Hi!</title>

<style>
table, th, td {
  border: 1px solid black;
}
</style>

</head>


<body>


<h1>Account</h1>

<!--ACCOUNT TABLE-->
<!--ACCOUNT TABLE-->
<!--ACCOUNT TABLE-->
<table> 
<tr><!--First row-->
<th>Login</th>	<!--Header data - column 1-->
<th>Register</th><!--Header data - column 2-->
</tr><!--End of First row-->

<tr><!--Second row-->
<td height="33">Username:____________</td>	
<!--^^1st row of values, 1st column^^-->
<td height="33">New User:____________</td>	
<!--^^1st row of values, 2nd column^^ -->
	
</tr><!--End of Second row-->

<tr><!--Third Row-->
<td height="33">Password:____________</td>	
<!--^^2nd row of values, 1st column^^ --></td>
<td height="33">$New Password:____________</td>
<!--^^2nd row of values, 2nd column^^ --></td>
</tr>
</table>
<!--END OF ACCOUNT TABLE-->
<!--END OF ACCOUNT TABLE-->
<!--END OF ACCOUNT TABLE-->

<br>

Yo, ______!  

Choose Deck: _________________

<h1>Battlefield</h1>
<h2>Deck 1 vs. Deck 2</h2>
<br>
<!--P2 HAND-->
<!--P2 HAND-->
<!--P2 HAND-->
<!--This is going to be part of table, people2, but with a hand column-->
<!--This is going to grab where hand=1 -->

<?php

$conn = new mysqli('localhost','larry','password','users');
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error);}
function randomGen($min, $max, $quantity) { $numbers = range($min, $max); shuffle($numbers); return array_slice($numbers, 0, $quantity);}
 //generates 20 unique random numbers
$myhand = randomGen(0,40,7);
$counter = 0;
for ($i = 0; $i <= 7; $i++) {
	echo $myhand[$i]. ",";
	$sql = "SELECT userid, deck1 FROM people2 WHERE userid = ". $myhand[$i];
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {	//if result's rows are greater than 0
    		while($row = $result->fetch_assoc()) {	//run and "fetch_assoc" all selected items and...
			$mysql1 = $row["deck1"];	//assign the corresponding row value to mysql1  & add table-code to mysql1
			$mysql1a = "<td height='60'><img src=" . $mysql1 . ".jpg alt='' width='45' height='75'</td>"; 
			echo $mysql1a;
    		} //end of while statement
	} //end of if statement
}//end of for statement

?>


<!--P2 BATTLEFIELD TABLE-->
<!--P2 BATTLEFIELD TABLE-->
<!--P2 BATTLEFIELD TABLE-->
<!--This is going to be a separate table, people2-->
<!--This is going to grab where bf=1 -->
<?php
$conn = new mysqli('localhost','larry','password','users');
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error);}
$counter = 0;
for ($i = 1; $i <= 40; $i++) {
	$counter ++;
	$sql = "SELECT userid, deck1 FROM people2 WHERE userid = ". $counter. " AND bf = 1";
	$result = $conn->query($sql);  	//the result is the respnse of the query
	if ($result->num_rows > 0) {	//if result's rows are greater than 0
    		while($row = $result->fetch_assoc()) {	//while statement to run fetch_assoc
			$mysql1 = $row["deck1"];	//assign the corresponding row value to mysql1  & add code to mysql1
			$mysql1a = "<td height='60'><img src=" . $mysql1 . ".jpg alt='' width='45' height='75'</td>"; 
			//echo $mysql1;
			echo $mysql1a;
			//echo $mysql1a;
    		} //end of while statement
	} //else { echo "0 results"; }
}//end of for statement
?>

<br>
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
<br>




<!--P1 BATTLEFIELD TABLE-->
<!--P1 BATTLEFIELD TABLE-->
<!--P1 BATTLEFIELD TABLE-->
<!--Each table creates a connection and queries the sqlDB for values required for the table-->
<!--P1's Battlefield Table should query the SQL for column called "P1battle" -->
<!--The user=larry and table=people for the DB connection-->

<?php
$conn = new mysqli('localhost','larry','password','users');
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error);}
//FIRST MYSQL CONNECTION^^^
$counter = 0;
for ($i = 1; $i <= 20; $i++) {
	$counter ++;
	$sql = "SELECT userid, deck1 FROM people1 WHERE userid = ". $counter. " AND P1b = 1";
	$result = $conn->query($sql);  	//the result is the respnse of the query
	if ($result->num_rows > 0) {	//if result's rows are greater than 0
    		while($row = $result->fetch_assoc()) {	//while statement to run fetch_assoc
			$mysql1 = $row["deck1"];	//assign the corresponding row value to mysql1  & add code to mysql1
			$mysql1a = "<td height='60'><img src=" . $mysql1 . ".jpg alt='' width='45' height='75'</td>"; 
			//echo $mysql1;
			echo $mysql1a;
			//echo $mysql1a;
    		} //end of while statement
	} //else { echo "0 results"; }
}//end of for statement
?>

<br>

