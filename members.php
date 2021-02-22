<?php
session_start();
if(!isset($_SESSION['username'])){
   header("Location:acctlogin1b.php");

}

$conn = new mysqli('localhost','lsav','abc123','users');		//CREATE A NEW CONNECTION
$query = "SELECT * FROM `decks`";					//ASSIGN SELECTED * FROM DECKS TO $QUERY
$result = mysqli_query($conn,$query);					//ASSIGN THE QUERY TO $RESULT
$dname=array();

for ($i=0; $i < 3 && ($row = mysqli_fetch_array($result, MYSQLI_ASSOC));$i++)
{		
	$dname[$i] = "$row[deckname]";				//ASSIGN THE ROW TO CARDNAME
}


$query1 = "SELECT * FROM `narset`";							//ASSIGN SELECTED * FROM NARSET TO $QUERY1
$result1 = mysqli_query($conn,$query1);							//ASSIGN THE QUERY TO $RESULT1
$cname=array();

for ($j=0; $j < 3 && ($row = mysqli_fetch_array($result1, MYSQLI_ASSOC));$j++)
{		
	$cname[$j] = "$row[cardname]";							//ASSIGN THE ROW TO CARDNAME
}


mysqli_close($conn);

?>

<HTML>
	<HEAD>
		<TITLE>MTG 2021- Members</TITLE>
		<link rel="stylesheet" href="styles.css">
	</HEAD>
	<BODY>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="acctlogin1b.php">Login</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
		<h1>Members Page</h1>

		<h3> Welcome <?php echo $_SESSION['username']; ?></h3>

		<h2>Decks:</h2>
		
		<p> <?php echo "$dname[0]"; ?></p>
		<?php 
			for ($j=0; $j < 3; $j++)
			{
				echo "$cname[$j], ";
			}
 ?>

		

		<p> <?php echo "$dname[1]"; ?></p>
		athreos_cards

		<p> <?php echo "$dname[2]"; ?></p>




			<!--THE FORM-->
			<!--THE FORM-->
			<!--THE FORM-->

			<form method="post" >
			<label>Select Deck:</label>
			<input type="text" name="deckname" id="deckname"/>
			</br>
			<label>Password :</label>
			<input type="submit" value="Log in" name="submit" id="submit" />
			</form>
							
			<!--END OF THE FORM-->
			<!--END OF THE FORM-->
			<!--END OF THE FORM-->


				
	</BODY>

</HTML>
