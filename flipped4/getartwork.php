<?php
$whichMus = $_POST["pickamuseum"]; //get selected museum value from the form 
$query = "select * from flipped4db.workofart WHERE whichmus = " . $whichMus; //fill in with correct query
$result = mysqli_query($connection, $query); 
if (!$result) {
	die("databases query on art pieces failed. "); }
	echo "<ul>"; //put the artwork in an unordered bulleted list
	echo "</ul>"; //end the bulleted list 

echo "<ul>";

while ($row = $result->fetch_assoc()){
	echo "<li>" . $row["artname"] . " BY " . $row["artist"] . "</li>";
}
echo "</ul>";
?>
