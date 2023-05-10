
<!DOCTYPE html>
<html>
<head>
<title>Regular Weather Report Flat Responsive Widget Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Regular Weather Report template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
<!-- //Custom Theme files -->
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<link href='//fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!-- //web font -->
<!-- js -->
<!--<script src="js/jquery-1.9.1.min.js"></script> 
<script src="js/owl.carousel.js"></script>-->
<style> 
    #b {display:none; }
	
	input { font-size: 10px;
	  padding:5px 15px; 
    background:#ccc; 
    border:5 none;
    cursor:pointer;
    -webkit-border-radius: 10px;
    border-radius: 10px; 
	  
	}
	</style>






 
   
   
   
   
<?php
error_reporting(0);
$get = json_decode(file_get_contents('http://ip-api.com/json/'),true);


//date_default_timezone_set($get['timezone']);


$city = $_GET['q'];
 $string = "http://api.openweathermap.org/data/2.5/weather?q=".$city."&units=metric&appid=ba54220c6b6c7a96930d62f64aecaaff";
 $data = json_decode(file_get_contents($string),true);
 
 
 if($data['cod']==200) { 

 $temp = $data['main']['temp'];
 
 $icon = $data['weather'][0]['icon'];


 $visibility = $data['visibility'];
 $visibilitykm = $visibility / 1000;
 $country =  "<h1 class='w3-xxxlarge w3-animate-zoom'><b>".$data['name'].",".$data['sys']['country']."</h1></b>";
 $Timezone =$data["timezone"];
 
 $logo = "<center><img src='http://openweathermap.org/img/w/".$icon.".png'></center>";
 $desc = "<b><p>".$data['weather'][0]['description']."</p></b>";
 
 $temperature =  "<b>".$temp."°C</b><br>";
 $clouds = "<b>Clouds  :  ".$data['clouds']['all']."%</b><br>";
 $humidity = "<b>Humidity  :  ".$data['main']['humidity']."%</b><br>";
 $windspeed = "<b>Wind Speed  :  ".$data['wind']['speed']."m/s</b><br>";
 $pressure = "<b>Pressure  :  ".$data['main']['pressure']."hpa</b><br>";
 $visibility =  "<b>Visibility : ".$visibilitykm."Km</b><br>";
 $sunrise = "<b>Sunrise  :  ".date('h:i A', $data['sys']['sunrise'])."</b><br>";
 $sunset = "<b>Sunset  :  "."".date('h:i A', $data['sys']['sunset'])."</b><br>";

 }
 else{
	$S=  "City not found";
	 }

?>

				


</head>
<body onload="startTime()">

	<!-- main -->
	
	<div class="main">
	
	
	<div class="main-wthree-row">
			<div class="agileits-top">
				<div class="agileinfo-top-row">
					<div class="agileinfo-top-img">
					
					
		<h1>Regular Weather Report</h1>
		 
									  
							<!-- 		-->
									  
									
								
                          
									  
		
		
					
						<span> </span>
						
			
			 <script>
			  function showDiv() {
			  document.getElementById('b').style.display = "block";}
   </script>

					</div><br>
					<center>
					<h3><?php echo $S  ?></H3>
					<h1><?php echo $country;
				echo $logo; ?></h1>
				<h3><?php echo $temperature;?></h3>
				
				
						
				
				
			<div><?php echo $desc;
				?></div><br>
				
				  <center>
				 
	<input type="button" name="answer" value="Show More" onclick="showDiv()" />
			  </center>
						<p id="b" > <?php echo $windspeed; ?> 
						  <?php echo $clouds; ?>
			<?php echo $humidity; ?>
						
						<?php echo $sunrise; ?>
						<?php echo $sunset; ?> 
						
						
						
						
             <?php echo $pressure; ?> 
			  
              <?php echo $visibility; ?>
				
				
				
				 <p><br><br><br>
				 
	
  
	<?php
	if($data['cod']==200) {
$time = timezone_name_from_abbr("",$Timezone,1);


date_default_timezone_set($time);
									  $time=date("H:i:s");
									  $ti="time zone in ". $city;
									  
	}
	else{$t="Try again";}
									 
									  
							
?>
<h1><?php  echo "$ti";?> </h1><br>
<h1><?php  echo "$t";?> </h1><br>
<h3> <?php echo   "$time ";?></h3>

				
				
				
				</center>
					 <img style="margin-right:-10px;">
             
					</center>
					             
					<div class="date-time">
					<div class="agileinfo-top-time"> 
						
							<div class="dmy">
							<div class="date"><br>
								<div id="txt"></div>
								
								
									
									<script type="text/javascript">
									
									var mydate=new Date()
									var year=mydate.getYear()
									if(year<1000)
									year+=1900
									var day=mydate.getDay()
									var month=mydate.getMonth()
									var daym=mydate.getDate()
									if(daym<10)
									daym="0"+daym
									var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
									var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")
									document.write(""+dayarray[day]+", "+montharray[month]+" "+daym+", "+year+"")
									</script><br><br>
									
									
	
									
						
								</div><br><br>
							</div> 
							<div class="clear"></div>
						</div>  
					</div>
				</div>
			</div>
			<div class="w3ls-bottom">
			<center>
			    <p  >Type City and Country</p><br>
			<form method="GET" action="get.php">
			<input  type="text" name="q" required><br><br>
			<input class="cla" type="submit" name="submit">
		</form>
	</center>
				<!--<h2>Today's Weather </h2>
				<h3> ;;;</h3>
				
				
			
			<div class="w3ls-bottom2">	 
				<div class="ac-container">
					<input id="ac-1" name="accordion-1" type="checkbox" />
					<label for="ac-1" class="grid1"> Week</label>
					<article class="ac-small">
						<div class="wthree-grids">
							<div class="wthree-grids-row">
								
								
								<div class="clear"> </div>
							</div>
							<div class="wthree-grids-row">
								<ul>
									<li></li>
									<li class="wthree-img"><img src="images/4.png" alt=""/> </li>
									<li class="wthree-temp"> 27 <sup class="degree">°</sup></li>
									<li class="wthree-temp"> 18 <sup class="degree">°</sup></li> 
								</ul>
								<div class="clear"> </div>
							</div>
							<div class="wthree-grids-row">
								<ul>
									<li></li>
									<li class="wthree-img"><img src="images/3.png" alt=""/> </li>
									<li class="wthree-temp"> 30 <sup class="degree">°</sup></li>
									<li class="wthree-temp"> 20 <sup class="degree">°</sup></li> 
								</ul> 
								<div class="clear"> </div>
							</div>
							<div class="wthree-grids-row">
								<ul>
									<li></li>
									<li class="wthree-img"><img src="images/3.png" alt=""/> </li>
									<li class="wthree-temp"> 30 <sup class="degree">°</sup></li>
									<li class="wthree-temp"> 18 <sup class="degree">°</sup></li> 
								</ul>
								<div class="clear"> </div>
							</div>
							<div class="wthree-grids-row">
								<ul>
									<li></li>
									<li class="wthree-img"><img src="images/4.png" alt=""/> </li>
									<li class="wthree-temp"> 31 <sup class="degree">°</sup></li>
									<li class="wthree-temp"> 19 <sup class="degree">°</sup></li> 
								</ul> 
								<div class="clear"> </div>
							</div>
							<div class="wthree-grids-row">
								<ul>
									<li> </li>
									<li class="wthree-img"><img src="images/2.png" alt=""/> </li>
									<li class="wthree-temp"> 30 <sup class="degree">°</sup></li>
									<li class="wthree-temp"> 16 <sup class="degree">°</sup></li> 
								</ul> 
								<div class="clear"> </div>
							</div>
						</div>
					</article>
				</div>  
			</div>	
		</div>	
	</div>	
	   -->
	 
	<script>
		function startTime() {
			var today = new Date();
			var h = today.getHours();
			var m = today.getMinutes();
			var s = today.getSeconds();
			m = checkTime(m);
			s = checkTime(s);
			document.getElementById('txt').innerHTML =
			h + ":" + m + ":" + s;
			var t = setTimeout(startTime, 500);
			}
			function checkTime(i) {
			if (i < 10) {i = "0" + i}; // add zero in front of numbers < 10
			return i;
		}
	</script>
	
	
</body>
</html>

