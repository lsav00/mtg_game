<?php
session_start();
if(!isset($_SESSION['username'])){
   header("Location:acctlogin1b.php");

}

$conn = new mysqli('localhost','lsav','abc123','users');				//CREATE A NEW CONNECTION
$query = "SELECT * FROM `decks`";							//ASSIGN SELECT * FROM DECKS TO $QUERY
$result = mysqli_query($conn,$query);							//ASSIGN THE QUERY TO $RESULT
$dname=array();

for ($i=0; $i < 100 && ($row = mysqli_fetch_array($result, MYSQLI_ASSOC));$i++)		//FOR EACH ROW
{		
	$dname[$i] = "$row[deckname]";							//ASSIGN THE ROW TO DNAME
}


$query1 = "SELECT * FROM `narset`";							//ASSIGN SELECT * FROM NARSET TO $QUERY1
$result1 = mysqli_query($conn,$query1);							//ASSIGN $QUERY1 TO $RESULT1
$cname=array();										//MAKE CNAME AN ARRAY
$img=array();

for ($j=0; $j < 100 && ($row = mysqli_fetch_array($result1, MYSQLI_ASSOC));$j++)	//FOR EACH ROW IN NARSET
{						
	$cname[$j] = "$row[cardname]";							//ASSIGN THE CARDNAME ROW TO CNAME
	$img[$j] = "$row[img_url]";							//ASSIGN THE IMG_URL ROW TO IMG
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

		
		<!--WELCOME LINE-->
		<h3> Welcome <?php echo $_SESSION['username']; ?></h3>


		<!--THE DECKS-->
		<h2>Decks:</h2>
		
		<!--DECK 0-->
		<p> <?php echo "$dname[0]"; ?></p> <!--NARSET-->
		<?php 
			for ($j=0; $j < 100; $j++)
			{
				echo "<img src='$img[$j]' width='100' height='150'<br>";
			}
 		?>






		
		<!--DECK 1-->
		<p> <?php echo "$dname[1]"; ?></p>
		<!--athreos_cards-->

		<p> <?php echo "$dname[2]"; ?></p>




			<!--THE FORM-->
			<!--THE FORM-->
			<!--THE FORM-->

			<form method="post" >
			<label>Select Deck:</label>
			<input type="text" name="deckname" id="deckname"/>
			</br>
			<label>Password :</label>
			<input type="password" name="pass" id="pass" />
			</br>
			<input type="submit" value="Log in" name="submit" id="submit" />
			</form>
							
			<!--END OF THE FORM-->
			<!--END OF THE FORM-->
			<!--END OF THE FORM-->


				
	</BODY>

</HTML>
