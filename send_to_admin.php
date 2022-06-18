<html>
<body>

<?php

$dbname = 'idp';
$dbuser = 'root';  
$dbpass = ''; 
$dbhost = 'localhost'; 

$connect = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$connect){
	echo "Error: " . mysqli_connect_error();
	exit();
}

echo "Connection Success!";

$myfile = fopen("read.txt", "r") or die("Unable to open file!");

$content=fgets($myfile);
$carray = explode(",",$content);
list($No,$Rank,$Name,$Unit,$Total_fired,$nill)=$carray;

fclose($myfile);

$Total_hit= $_GET['Total_hit'];

echo $Total_hit;
echo $No;
echo $Total_fired;

$query = "INSERT INTO `hitcount` (`Date`,`No`, `Rank`, `Name`,`Unit`, `Total_fired`, `Total_hit`) VALUES (current_timestamp(),'$No', '$Rank', '$Name', '$Unit', '$Total_fired', '$Total_hit')";
$result = mysqli_query($connect,$query);

echo "Insertion Success!";


?>
</body>
</html>