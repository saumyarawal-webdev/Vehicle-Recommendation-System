<html>
<head><title>Result Page</title></head>
<body>
<?php
    $server="localhost";
    $username="root";
    $password="";
    $con= mysqli_connect($server,$username,$password);
    if(!$con){
        die("Database not connected.");
    }
    else{
        echo "Successfully connected to database";
    }
error_reporting(E_ERROR | E_PARSE);

// Actual assigning
$age = $_POST['age'];
$income = $_POST['income'];
$family = $_POST['family'];
$vehicle_attribute = $_POST['vehicle_attribute'];
$purpose = $_POST['purpose'];
// Two Wheeler
// $trans2 = $_POST['trans2'];
// $fuel2 = $_POST['fuel2'];
// $disk_brake = $_POST['disk_brake'];
// $p_range2 = $_POST['p_range2'];
// // Four Wheeler
// $fuel4 = $_POST['fuel4'];
// $trans4 = $_POST['trans4'];
// $seat = $_POST['seat'];
// $p_range4 = $_POST['p_range4'];
echo "<br/>Your age is : ".$age;
echo "<br/>Your income is : ".$income;
echo "<br/>Family Members : ".$family;
echo "<br/>Vehicle_attribute : ".$vehicle_attribute;
echo "<br/>Main purpose for vehicle :";

foreach($purpose as $i){
    echo "<br/>$i";
}

// echo "<h3>Two Wheeler</h3>";
// echo "<br/>Preference in transmission : ".$trans2;
// echo "<br/>Preference in Fuel : ";
// foreach($fuel2 as $i){
//     echo "<br/>$i";
// }
// echo "<br/>Disk brake : ".$disk_brake;
// echo "<br/>Ideal Price range : ".$p_range2;


// echo "<h3>Four Wheeler</h3>";
// echo "<br/>Preference in Fuel : ";
// foreach($fuel4 as $i){
//     echo "<br/>$i";
// }
// echo "<br/>Preference in transmission : ";
// foreach($trans4 as $i){
//     echo "<br/>$i";
// }
// echo "<br/>Number of seats : ";
// foreach($seat as $i){
//     echo "<br/>$i";
// }
// echo "<br/>Ideal Price range : ".$p_range4;

?>
</body>
</html>