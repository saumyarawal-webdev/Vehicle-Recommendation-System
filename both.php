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
//Four Wheeler
$fuel4 = $_POST['fuel4'];
$trans4 = $_POST['trans4'];
$seat = $_POST['seat'];
$p_range4 = $_POST['p_range4'];
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
// Links 4
$v21="/myproject/bunch/v21.html";
$v22="/myproject/bunch/v22.html";
$v23="/myproject/bunch/v23.html";
$v24="/myproject/bunch/v24.html";
$v25="/myproject/bunch/v25.html";
$v26="/myproject/bunch/v26.html";
$v27="/myproject/bunch/v27.html";
$v28="/myproject/bunch/v28.html";
$v29="/myproject/bunch/v29.html";
$v30="/myproject/bunch/v30.html";
$v31="/myproject/bunch/v31.html";
$v32="/myproject/bunch/v32.html";
$v33="/myproject/bunch/v33.html";
$v34="/myproject/bunch/v34.html";
$v35="/myproject/bunch/v35.html";
$v36="/myproject/bunch/v36.html";
$v37="/myproject/bunch/v37.html";
$v38="/myproject/bunch/v38.html";
$v39="/myproject/bunch/v39.html";
$v40="/myproject/bunch/v40.html";
$v41="/myproject/bunch/v41.html";
$v42="/myproject/bunch/v42.html";
$v43="/myproject/bunch/v43.html";
$v44="/myproject/bunch/v44.html";
$v45="/myproject/bunch/v45.html";
$v46="/myproject/bunch/v46.html";
$v47="/myproject/bunch/v47.html";
$v48="/myproject/bunch/v48.html";
$v49="/myproject/bunch/v49.html";
$v50="/myproject/bunch/v50.html";
// Assigning names 2
$names=array("$v1"=>"Electric Optima HX", "$v2"=>"Pleasure plus", "$v3"=>"Hero Electric Dash", "$v4"=>"Activa 6G", 
"$v5"=>"Honda Shine", "$v6"=>"Hero Electric Photon", "$v7"=>"Activa 125", "$v8"=>"Access 125", "$v9"=>"TVS Jupiter Classic ET-FI",
"$v10"=>" TVS Rider 125", "$v11"=>"Honda Unicorn", "$v12"=>"TVS iQube Electric", "$v13"=>"Bajaj Pulsar NS200", "$v14"=>"Bajaj Avenger Cruise 220",
"$v15"=>"Royal Enfield Bullet 350", "$v16"=>"Yamaha YZF R15 V4", "$v17"=>"Suzuki Gixxer SF 250", "$v18"=>"Royal Enfield Meteor 350", 
"$v19"=>"Bajaj Dominar 400", "$v20"=>"Royal Enfield Himalayan");
//assigning names 4
$names4=array("$v21"=>"Maruti Suzuki Alto", "$v22"=>"Maruti Suzuki S-Presso" , "$v23"=>"Datsun redi-GO", "$v24"=>"Renault Kwid","$v25"=>"Datsun GO+",
"$v26"=>"Maruti Suzuki Wagon R", "$v27"=>"Tata Tiago", "$v28"=>"Renault Kiger","$v29"=>"Maruti Suzuki Swift","$v30"=>"Tata Altroz",
"$v31"=>"Hyundai Aura", "$v32"=>"Tata Tiago NRG" , "$v33"=>"Kia Sonet", "$v34"=>"Hyundai i20","$v35"=>"Tata Nexon","$v36"=>"Maruti Suzuki Vitara Brezza", 
"$v37"=>"Maruti Suzuki Ertiga", "$v38"=>"Ford EcoSport","$v39"=>"Maruti Suzuki S-Cross","$v40"=>"Toyota Urban Cruiser",
"$v41"=>"Mahindra Bolero Neo", "$v42"=>"Hyundai Verna" , "$v43"=>"Kia Seltos", "$v44"=>"Volkswagen Vento","$v45"=>"Honda All New City","$v46"=>"Tata Tigor EV",
"$v47"=>"Mahindra XUV700","$v48"=>"MG Hector","$v49"=>"Tata Nexon EV","$v50"=>"Tata Safari"); 
// Price range2
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
// Fuel2
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
//--------------------------------------------------------Four Wheel---------------------------------------------------------------------------
if($p_range4=="3,00,000-5,00,000"){
  $price4=array($v21,$v22,$v23,$v24,$v25,$v26,$v27);
  }
  elseif($p_range4=="5,00,000-7,50,000"){
  $price4=array($v27,$v28,$v29,$v30,$v31,$v32,$v33,$v34,$v35);
  }
  elseif($p_range4=="7,50,000-10,00,000"){
  $price4=array($v36,$v37,$v38,$v39,$v40,$v41,$v42,$v43,$v44);
  }
  elseif($p_range4=="10,00,000-12,50,000"){
  $price4=array($v44,$v45,$v46,$v47);
  }
  else{
  $price4=array($v48,$v49,$v50);
  }

  // Fuel 4
  $electric=array($v46,$v48,$v49);
  $petrol=array($v21,$v22,$v23,$v24,$v25,$v26,$v27,$v28,$v29,$v30,$v31,$v32,$v33,$v34,$v35,$v36,$v37,$v38,$v39,$v40,$v42,$v43,$v44,$v45,$v47);
  $diesel=array($v30,$v33,$v34,$v35,$v38,$v41,$v42,$v43,$v45,$v47,$v50);
  if($fuel4=="Petrol"){
  $res4=array_intersect($petrol,$price4);
  }
  elseif($fuel4=="Diesel"){
  $res4=array_intersect($price4,$diesel);
  }
  else{
      $res4=array_intersect($electric,$price4);
  }
  //Seats 4
  $five=array($v21,$v22,$v23,$v24,$v26,$v27,$v28,$v29,$v30,$v31,$v32,$v33,$v34,$v35,$v36,$v38,$v39,$v40,$v42,$v43,$v44,$v45,$v46,$v47,$v48,$v49);
  $seven=array($v25,$v37,$v41,$v47,$v50);
  if($seat=="5_Seater"){
      $final4=array_intersect($five,$res4);
  }
  else{
      $final4=array_intersect($res4,$seven);
  }
  $answer4=array_values($final4);
  echo '</br>';
if(empty($answer4)){
  echo '<div class="flip-card">';
  echo '<div class="flip-card-inner">';
  echo '<div class="flip-card-front">';
  echo '<img src="/myproject/images/gift.png" alt="Avatar" style="width:300px;height:300px;">';
  echo '</div>';
  echo '<div class="flip-card-back bg-dark">';
  echo '<br><br><br><br>';
  echo "<h5><a href=\"/myproject/More_info.html\">No related cars are found<br> but you might like this...</h5></a>";
  echo '<p></p>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
}
else{
  // print_r($answer4);
  $length4 = count($answer4);
  for($i=0; $i<$length4; $i++){
  echo '<div class="flip-card">';
  echo '<div class="flip-card-inner">';
  echo '<div class="flip-card-front">';
  echo '<img src="/myproject/images/gift.png" alt="Avatar" style="width:300px;height:300px;">';
  echo '</div>';
  echo '<div class="flip-card-back bg-dark">';
  echo '<br><br><br><br>';
  echo "<a href=\"$answer4[$i]\">".$names4[$answer4[$i]]."</h3></a>";
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