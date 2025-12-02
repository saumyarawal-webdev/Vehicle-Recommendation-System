<html>
<head><title>Result Page</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2&display=swap" rel="stylesheet">
<style>
    body{
        font-family: 'Baloo Bhaijaan 2', cursive;
    }
      .flip-card {
  margin-right: 6px;
  margin-bottom: 6px;
  margin-left: 20px;
  margin-top: 6px;
  float:left;
  background-color: transparent;
  width: 300px;
  height: 300px;
  border: none;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
  outline: none;
}

/* Position the front and back side */
.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
  outline: none;
  border-radius:12px;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front {
  background-color: #bbb;
  color: black;
  border-top:2px solid white;
    border-bottom: 2px solid white;
    border-right: 2px solid white;
    border-left: 2px solid white;
}

/* Style the back side */
.flip-card-back {
  background-color: rgb(29, 29, 31);
  color: white;
  transform: rotateY(180deg);
  text-decoration: none;
  outline: none;
}
.flip-card-back a{
  text-decoration: none;
  color: white;
  outline: none;
  
}
.fc{
  margin-left:55px;
}
.foot{
  text-align:center;
  background-color: #0a0a0a;
  margin-top: 952px;
  padding: 16px 5px;
  color:white;
}
</style>


</head>
<body>
<?php

error_reporting(E_ERROR | E_PARSE);
// Two Wheeler
$trans2 = $_POST['trans2'];
$fuel2 = $_POST['fuel2'];
$disk_brake = $_POST['disk_brake'];
$p_range2 = $_POST['p_range2'];
// Links 2
$v1="/myproject/bunch/v1.html";
$v2="/myproject/bunch/v2.html";
$v3="/myproject/bunch/v3.html";
$v4="/myproject/bunch/v4.html";
$v5="/myproject/bunch/v5.html";
$v6="/myproject/bunch/v6.html";
$v7="/myproject/bunch/v7.html";
$v8="/myproject/bunch/v8.html";
$v9="/myproject/bunch/v9.html";
$v10="/myproject/bunch/v10.html";
$v11="/myproject/bunch/v11.html";
$v12="/myproject/bunch/v12.html";
$v13="/myproject/bunch/v13.html";
$v14="/myproject/bunch/v14.html";
$v15="/myproject/bunch/v15.html";
$v16="/myproject/bunch/v16.html";
$v17="/myproject/bunch/v17.html";
$v18="/myproject/bunch/v18.html";
$v19="/myproject/bunch/v19.html";
$v20="/myproject/bunch/v20.html";
// Assigning names 2
$names=array("$v1"=>"Electric Optima HX", "$v2"=>"Pleasure plus", "$v3"=>"Hero Electric Dash", "$v4"=>"Activa 6G", 
"$v5"=>"Honda Shine", "$v6"=>"Hero Electric Photon", "$v7"=>"Activa 125", "$v8"=>"Access 125", "$v9"=>"TVS Jupiter Classic ET-FI",
"$v10"=>" TVS Rider 125", "$v11"=>"Honda Unicorn", "$v12"=>"TVS iQube Electric", "$v13"=>"Bajaj Pulsar NS200", "$v14"=>"Bajaj Avenger Cruise 220",
"$v15"=>"Royal Enfield Bullet 350", "$v16"=>"Yamaha YZF R15 V4", "$v17"=>"Suzuki Gixxer SF 250", "$v18"=>"Royal Enfield Meteor 350", 
"$v19"=>"Bajaj Dominar 400", "$v20"=>"Royal Enfield Himalayan");
// Price range
if($p_range2=="50,000-75,000"){
    $price=array($v1,$v2,$v3,$v4,$v5,$v6);
}
elseif($p_range2=="75,000-1,00,000"){
    $price=array($v7,$v8,$v9,$v10);
}
elseif($p_range2=="1,00,000-1,50,000"){
    $price=array($v11,$v12,$v13,$v14,$v15);
}
elseif($p_range2=="1,50,000-2,00,000"){
    $price=array($v16,$v17,$v18);
}
else{
    $price=array($v19,$v20);
}
// Fuel
$electric=array($v1,$v3,$v6,$v12);
$petrol=array($v2,$v4,$v5,$v7,$v8,$v9,$v10,$v11,$v13,$v14,$v15,$v16,$v17,$v18,$v19,$v20);
if($fuel2=="Electric"){
    $res=array_intersect($price,$electric);
}
else{
    $res=array_intersect($price,$petrol);
}
// Transmission
$gear=array($v5,$v10,$v11,$v13,$v14,$v15,$v16,$v17,$v18,$v19,$v20);
$gearless=array($v1,$v2,$v3,$v4,$v6,$v7,$v8,$v9,$v12);

if($trans2=="With Gear"){
    $final_res=array_intersect($gear,$res);
}
else{
    $final_res=array_intersect($gearless,$res);
}
echo "<br>";

$answer=array_values($final_res);
// print_r($answer);
// array length
if(empty($final_res)){
  echo '<div class="flip-card">';
echo '<div class="flip-card-inner">';
echo '<div class="flip-card-front">';
echo '<img src="/myproject/images/gift.png" alt="Avatar" style="width:300px;height:300px;">';
echo '</div>';
echo '<div class="flip-card-back bg-dark">';
echo '<br><br><br><br>';
echo "<h5><a href=\"/myproject/More_info.html\">No related two wheelers are found<br> but you might like this...</h5></a>";
echo '<p></p>';
echo '</div>';
echo '</div>';
echo '</div>';
}
else{
  $length = count($answer);
  for($i=0; $i<$length; $i++){
    echo '<div class="flip-card">';
    echo '<div class="flip-card-inner">';
    echo '<div class="flip-card-front">';
    echo '<img src="/myproject/images/gift.png" alt="Avatar" style="width:300px;height:300px;">';
    echo '</div>';
    echo '<div class="flip-card-back bg-dark">';
    echo '<br><br><br><br>';
    echo "<a href=\"$answer[$i]\">".$names[$answer[$i]]."</h3></a>";
    echo '<p></p>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
  }
}
?>
<div class="foot">
<h2><br>Thank you for visiting us.<br>S4RG is grateful</h2>
</div>
</body>
</html>