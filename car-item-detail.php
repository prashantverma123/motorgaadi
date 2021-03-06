<?php
$myId = $_GET['id'];
$row = array();
$url = 'http://localhost/startup/api/index.php/api/cardetails/'.$myId;
// echo $url;
$cURL = curl_init();

curl_setopt($cURL, CURLOPT_URL, $url);
curl_setopt($cURL, CURLOPT_HTTPGET, true);
curl_setopt($cURL, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Accept: application/json'
));


$result = curl_exec($cURL);
$json = json_decode($result, true);
$row =  $json['message'][0];
// echo gettype($row);
curl_close($cURL);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/jquery-ui.css" rel="stylesheet">

	<style>
		* { box-sizing: border-box; }
		fieldset { padding: 1em; }
		label {
			display: block;
			margin: 1em 0 0 0;
		}
		#buttonset {
			display: inline-block;
			margin-top: 0.3em;
		}
		span label {
			display: inline-block;
			margin: 0;
		}
		select, input[type="text"], .ui-spinner, fieldset > div > button {
			width: 250px;
			font-size: 1.1em;
		}
		.ui-buttonset .ui-button { width: 125px; }
		input[type="text"] { padding: 0.2em; }
		button { margin-top: 1em; }
		.ui-selectmenu-button { margin-top: 0.2em; }
		.ui-selectmenu-button span.ui-selectmenu-text {
			padding: 0.2em 0 0.2em 1em;
		}
	</style>
    <link type="text/javascript" href="assets/css/bootstrap.min.css">
    <link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jquery.nouislider.min.css" type="text/css">
    <!-- <link rel="stylesheet" href="assets/css/leaflet.css" type="text/css"> -->
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css" type="text/css">
    <link rel="stylesheet" href="assets/css/colors/blue.css" type="text/css">
    <link rel="stylesheet" href="assets/css/user.style.css" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css" type="text/css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/i18n/datepicker-es.js"></script>
    <script src="assets/bxslider/jquery.bxslider.min.js"></script>
    <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <title>Motorgaddi</title>
  </head>
  <body onunload="" class="map-fullscreen page-homepage navigation-off-canvas" id="page-top">

    <script>
    $(document).ready(function(){
      console.log(<?php echo $myId; ?>);
      function getProductDetails(){
        $.ajax({
           type        : 'GET',
           url         : "http://localhost/startup/api/index.php/api/cardetails",
           dataType    : 'json',
           encode          : true
       })

           .done(function(data) {
             console.log(data);
             var jsondata = JSON.stringify(data.message)

           });
      }
  $('.bxslider').bxSlider({
    minSlides: 3,
    maxSlides: 4,
    slideWidth: 280,
    adaptiveHeight: true,
    slideMargin: 10
    });

	function checkDate( date ) {
		var isWeekday = date.getDay() > 0 && date.getDay() < 6;
		if ( $( "#doctor" ).val() === "Smith" ) {
			return [ isWeekday && date.getDay() != 2 ];
		} else {
			return [ isWeekday ];
		}
	};
	$( "#date" ).datepicker({
		beforeShowDay: checkDate
	}).datepicker( "option", $.datepicker.regional[ "" ] );
	$( "button" ).button({
		icons: {
			primary: "ui-icon-calendar"
		}
	});

	$( "#bookingform" ).on( "submit", function( event ) {
    event.preventDefault();
		var data = $("#bookingform :input").serializeArray();
    console.log(event);
    debugger;
	});

//     jQuery(function($) {
//   function fixDiv() {
//     var $cache = $('#leadFormContainer');
//     if ($(window).scrollTop() > 500)
//       $cache.css({
//         'position': 'fixed',
//         'top': '10px',
//         'left':'1000px',
//
//       });
//     else
//       $cache.css({
//         'position': 'relative',
//         'margin-right':'5%','top':'-31%',
//       });
//   }
//   $(window).scroll(fixDiv);
//   fixDiv();
// });
});

    </script>
    <div id="outer-wrapper" style=" overflow:auto">
      <div class="inner-wrapper" style="height:6%">


      <div class="headerContainer col-md-12" style="background-color: #36B5FE;;height:100%">
          <div class="brandContainer col-md-3" style="padding:0;float:left">
              <a href="index.php"><img src="assets/img/newlogo.png" alt="logo" style="width: 20%;margin-left:1%;margin-top:0.5%;"></a>
          </div>
          <div class="navigationPanelContainer col-md-6" style="float:right">
            <nav class="navbar " style="float:right">
                <div class="">
                  <ul class="nav navbar-nav">
                    <li><a href="#">Shortlist</a></li>
                    <li><a href="#">+Sell</a></li>
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">My Account
                      <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">SignIn</a></li>
                        <li><a href="#">SignUp</a></li>
                    </ul>
                  </li>
                  </ul>
                </div>
            </nav>
          </div>


      </div>

      </div>

      <div class="carouselwrapper " style="height:25%;margin-top:2%">
        <div class="carouselContainer " style="height:30%">
          <div class=""style="margin-top:0%">
          <ul class="bxslider" style="">
            <li><img src="assets/img/items/cars/car-on-the-road8.jpg" /></li>
            <li><img src="assets/img/items/cars/car-on-the-road8.jpg" /></li>
            <li><img src="assets/img/items/cars/ford_fiesta.jpg" /></li>
            <li><img src="assets/img/items/cars/car-on-the-road8.jpg" /></li>
            <li><img src="assets/img/items/cars/car-on-the-road8.jpg" /></li>
            <li><img src="assets/img/items/cars/ford_fiesta.jpg" /></li>
            <li><img src="assets/img/items/cars/car-on-the-road8.jpg" /></li>
            <li><img src="assets/img/items/cars/car-on-the-road8.jpg" /></li>
          </ul>
          </div>
        </div>
          </div>
        <!-- <section> -->
        <div class="itemdetailContainer" style="background:#ededed;height:19%">
            <div class="col-md-8">
            <div class="row" style="margin-right:0px; margin-left:0px;margin-top:2%">
              <div class="col-md-2">
                  <img src="assets/img/items/user40.png" style="margin-left: 0px;"/><br> Make <br> <?php echo $row['owners']; ?>
              </div>
              <div class="col-md-2" style="">
                  <img src="assets/img/items/fuel40.png" style=""/><br> Model <br> <?php echo $row['fuelid']; ?>
              </div>
              <div class="col-md-2" style="">
                  <img src="assets/img/items/kms40.png" style=""/><br>Variant <br><?php echo $row['kms']; ?>
              </div>
              <div class="col-md-2">
                  <img src="assets/img/items/user40.png" style="margin-left: 0px;"/><br> Year <br> <?php echo $row['owners']; ?>
              </div>
            </div>


            <div class="row" style="margin-right:0px; margin-left:0px;margin-top:3%">
                <div class="col-md-2">
                    <img src="assets/img/items/user40.png" style="margin-left: 0px;"/><br> Owner <br> <?php echo $row['owners']; ?>
                </div>
                <div class="col-md-2" style="">
                    <img src="assets/img/items/fuel40.png" style=""/><br> Fuel <br> <?php echo $row['fuelid']; ?>
                </div>
                <div class="col-md-2" style="">
                    <img src="assets/img/items/kms40.png" style=""/><br>Kms <br><?php echo $row['kms']; ?>
                </div>
                <div class="col-md-2" style="">
                    <img src="assets/img/items/transmission40.png" style=""/><br>Transmission <br><?php echo $row['transtyp']; ?>
                </div>
                <div class="col-md-2" style="">
                    <img src="assets/img/items/location40.png" style=""/><br>Location <br><?php echo $row['ownerarea']; ?>
                </div>
                <div class="col-md-2" style="margin-left: -20px">
                    <img src="assets/img/items/Crashed Car-40.png" style=""/><br>Insurance<br><?php echo $row['insurance']; ?>
                </div>
            </div><!--end of first row-->
                            <br>


            </div>
        </div>
        <!-- </section> -->

        <div class="" style="clear:both"></div>
        <div class="abouttheItemWrapper" style="height:73%;background-color:#f4f4f2;">
          <div class="abouttheItemContainer col-md-7" style="float:left;height:76%;">
            <div class="" style="margin-left: 3%;">
              <br><h1>About this Car </h1>
            </div>

            <div class="panel panel-default"style="width: 80%;height:90%;margin-top: 10px;margin-left: 10px;">
                <div class="panel-body">
                    <div class="row" style="font-size: 18px">
                        <ul>
                            <div class="row" style="    border-bottom:  1px solid #ccc; width: 102%;margin-top: 1%">
                                <div class="col-md-5" style="margin-left: 5%;">Price</div>
                                <div ><span class="fa fa-rupee margin-right5"></span> <?php echo $row['offerprice']; ?></div>
                            </div>
                            <div class="row" style="  border-bottom:  1px solid #ccc; width: 102%;margin-top: 1%">
                                <div class="col-md-5" style="margin-left: 5%;"><?php echo $row['modelyear']; ?></div>
                                <div class="col-md-5">Mar 2014</div>
                                <div class="clear"></div>
                            </div>
                            <div class="row" style="    border-bottom: 1px solid #ccc;width: 102%;margin-top: 1%">
                                <div class="col-md-5" style="margin-left: 5%;">Kilometer</div>
                                <div class="col-md-5"><?php echo $row['kms']; ?> km</div>
                                <div class="clear"></div>
                            </div>
                            <div class="row" style="    border-bottom: 1px solid #ccc;width: 102%;margin-top: 1%">
                                <div class="col-md-5" style="margin-left: 5%;">Fuel Type</div>
                                <div class="col-md-5"><?php echo $row['fuelid']; ?></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row" style="    border-bottom: 1px solid #ccc;width: 102%;margin-top: 1%">
                                <div class="col-md-5" style="margin-left: 5%;">Transmission</div>
                                <div class="col-md-5"><?php echo $row['transtyp']; ?></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row" style="    border-bottom: 1px solid #ccc;width: 102%;margin-top: 1%">
                                <div class="col-md-5" style="margin-left: 5%;">Car Location</div>
                                <div class="col-md-5">
                                    <p><?php echo $row['ownerarea']; ?></p>

                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="row" style="    border-bottom: 1px solid #ccc;width: 102%;margin-top: 1%">
                                <div class="col-md-5" style="margin-left: 5%;">Color</div>
                                <div class="col-md-5"> <div class="" style="width:15px;height:15px; background-color:<?php echo $row['color']; ?> "></div> </div>
                                <div class="clear"></div>
                            </div>
                            <div class="row" style="    border-bottom: 1px solid #ccc;width: 102%;margin-top: 1%">
                                <div class="col-md-5" style="margin-left: 5%;">Fuel Economy</div>
                                <div class="col-md-5">Not Available</div>
                                <div class="clear"></div>
                            </div>
                            <div class="row" style="    border-bottom:  1px solid #ccc;width: 102%;margin-top: 1%">
                                <div class="col-md-5" style="margin-left: 5%;">Sold by</div>
                                <div class="col-md-5"><?php echo $row['ownerprof']; ?></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row" style="    border-bottom:  1px solid #ccc;width: 102%;margin-top: 1%">
                                <div class="col-md-5" style="margin-left: 5%;">No. of Owner(s)</div>
                                <div class="col-md-5"><?php echo $row['owners']; ?></div>
                                <div class="clear"></div>
                            </div>
                            <div class="row" style="    border-bottom:  1px solid #ccc;width: 102%;margin-top: 1%">
                                <div class="col-md-5" style="margin-left: 5%;">Registered at</div>
                                <div class="col-md-5">Pune</div>
                                <div class="clear"></div>
                            </div>
                            <div class="row" style="    border-bottom:  1px solid #ccc;width: 102%;margin-top: 1%">
                                <div class="col-md-5" style="margin-left: 5%;">Insurance</div>
                                <div class="col-md-5">
                                    Third Party                     <p class="font11 margin-top5">Used Car Insurance from Bharti Axa. <a id="bhartiAxa" class="font11 text-link">Get a Free Quote</a></p>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="row" style="    border-bottom:  1px solid #ccc;width: 102%;margin-top: 1%">
                                <div class="col-md-5" style="margin-left: 5%;">LifeTime Tax</div>
                                <div class="col-md-5">Individual</div>
                                <div class="clear"></div>
                            </div>
                            <div class="row" style="    border-bottom:  1px solid #ccc;width: 102%;margin-top: 1%;border-bottom:  1px solid #ccc;">
                                <div class="col-md-5" style="margin-left: 5%;">Profile Id</div>
                                <div class="col-md-5">D1053185</div>
                                <div class="clear"></div>
                                </li>
                        </ul>
                    </div>
                </div>
                </div>
                </div>
                <div class="leadFormContainer col-md-3" id="leadFormContainer" style="background:#dedede;height:80%;float:right;margin:0;padding:0;margin-right:5%;position:relative;top:-31%;box-sizing: border-box;">
                <div class="priceContainer" style="height:6%;background-color:rgba(60,63,64,0.9);text-align:center">
                  <p style="color:#efefef;font-size:25px;font-weight:700;">
                    Rs 10,000,00
                  </p>
                </div>
                <!-- <hr style="margin-bottom:1px;margin-top:5px"> -->

                <div class="appointmentForm" style="">
                  <div class="formTitle" style="text-align:center;font-size:26px;font-weight:800">
                    <p>
                      Book Appointment
                    </p>
                  </div>
                  <form method="POST" id="bookingform" action="">
                    	<fieldset style="margin:3%;">
                    		<div style="border">
                    			<label for="date">Date:</label>
                    			<input type="text" name="date" id="date" style="border:1px groove">
                    		</div>
                    		<div>
                    			<label for="phoneno">Phone No:</label>
                    			<input type="text" name="phoneno" id="phoneno" style="border:1px groove">
                    		</div>
                        <div>
                    			<label for="email">Email Id:</label>
                    			<input type="text" name="email" id="email"style="border:1px groove">
                    		</div>
                        <div>
                    			<label for="location">Location</label>
                    			<input type="text" name="location" id="location" style="border:1px groove">
                    		</div>
                    		<div>
                    			<label for="comment">Comments</label>
                    			<!-- <input type="text" id="days" name="days"> -->
                          <textarea name="comment" id="comment"  rows="4" cols="40" style="border:1px groove"></textarea>
                    		</div>
                        <div>
                          <div class="col-md-3" style="margin-left: 5%" >
                              <div>

                                  <label class="checkbox-inline" style="margin-left: 10px;margin-top: 20px"><input type="checkbox" name="loan" value="2"><strong>Loan</strong></label>
                              </div>
                          </div>
                          <div class="col-md-4" style="margin-left: -5%">
                              <div>
                                  <label class="checkbox-inline" style="margin-left: 10px;margin-top: 20px"><input type="checkbox" name="ins" value="2"><strong>Insurance</strong></label>
                              </div>
                          </div>

                          <div class="col-md-2" style="margin-left: -5%">
                              <div>
                                  <label class="checkbox-inline" style="margin-left: 10px;margin-top: 20px"><input type="checkbox" name="of" value="2"><strong>Offer's</strong></label>
                              </div>
                          </div>
                        </div>
                    		<div>
                    			<button style="padding: 0;border: none;background: none;margin-left: 30px;margin-top: 20px;background-color:#36B6FF;width:80%;height: 3em;">Make Appointment</button>
                    		</div>
                    	</fieldset>
                    </form>
                </div>
                </div>
          </div>

        </div>
        <div class=""style="clear:both;margin-top:20%;"></div>
        <div class="ownershipDetailWrapper" style="background-color:#fefefe">
          <div class="ownershipSetailContainer">
            <div class="container">
                <div class="row" style="margin-top: 0px;">
                    <h1>Ownership Details </h1>
                    <div class="col-md-3" style="margin-top: 20px;">
                        <h4>Name  :</h4>
                    </div>
                    <div class="col-md-5"style="margin-top: 20px;">
                        <p><?php echo $row['ownername']; ?></p>
                    </div>
                </div>
            </div>
            <hr style="width: 650px;margin-top:0px;margin-left:0px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4>Occupation :</h4>
                    </div>
                    <div class="col-md-5">
                        <p><?php echo $row['ownerprof']; ?></p>
                    </div>
                </div>
            </div>
            <hr style="width: 650px;margin-top:0px;margin-left:0px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4>Reason for selling  :</h4>
                    </div>
                    <div class="col-md-5">
                        <p><?php echo $row['rsn']; ?></p>
                    </div>
                </div>
            </div>
            <hr style="width: 650px;margin-top:0px;margin-left:0px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4>Insurance Type  :</h4>
                    </div>
                    <div class="col-md-5">
                        <p><?php echo $row['insurance']; ?></p>
                    </div>
                </div>
            </div>
            <hr style="width: 650px;margin-top:0px;margin-left:0px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4>Insured Till :</h4>
                    </div>
                    <div class="col-md-5">
                        <p><?php echo $row['ownerins']; ?></p>
                    </div>
                </div>
            </div>
            <hr style="width: 650px;margin-top:0px;margin-left:0px;">
          </div>
        </div>
        <div class="featuresWrapper" style="background-color:#f4f4f2">
          <div class="featuresContainer">
            <div class="" style="margin-left:3%;">
              <br><h1>Features</h1>
            </div>

                <div class="container" style="margin-left:3%;margin-top:2%;">
                    <div class="panel panel-default"style="width: 800px;height: 210px;margin-top: -14px;margin-left: -13px;">
                        <div class="panel-body" style="margin-top: -18px">
                            <h2><strong>SAFETY</strong></h2>
                            <div class="container" style="margin-top: -20px;margin-left: -10px">
                                <form role="form">
                                    <img src="dist/img/circle.png" class="checkbox-inline"><span>  ABS</span></img>
                                    <img src="dist/img/car.png" class="checkbox-inline " style="margin-left: 165px;">  Airbags</img>
                                    <img src="dist/img/carkey.png" class="checkbox-inline" style="margin-left: 170px;">  Central Locking</img>
                                </form>
                                <br>
                                <form role="form">
                                    <img src="dist/img/child safety.png" class="checkbox-inline"><span>  Child safety locks</span></img>
                                    <img src="dist/img/setbelt.png" class="checkbox-inline " style="margin-left: 83px;">  Seat belt warning</img>
                                    <img src="dist/img/Door_ajar.png" class="checkbox-inline" style="margin-left: 107px;"> Door ajar warning</img>
                                </form>
                                <br>
                                <form role="form">
                                    <img src="dist/img/Anti-theft alarm.png" class="checkbox-inline"><span> Anti-theft alarm</span></img>
                                    <img src="dist/img/parking_sensor.png" class="checkbox-inline " style="margin-left: 100px;"> Rear parking sensor</img>
                                    <img src="dist/img/real_camera.png" class="checkbox-inline" style="margin-left: 80px;">  Rear camera</img>
                                </form>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="container" style="margin-left:3%;margin-top:2%;">
                    <div class="panel panel-default"style="width: 800px;height: 270px;margin-top: -30pX;margin-left: -13px;">

                        <h2><strong style="margin-left: 16px">COMFORT</strong></h2>
                        <div class="container" style="margin-top: -10px;margin-left: 14px">
                            <form role="form">
                                <img src="dist/img/power_steering.png" class="checkbox-inline"><span>  Power steering</span></img>
                                <img src="dist/img/air_onditioner.png" class="checkbox-inline " style="margin-left: 100px;">  Air Conditioner</img>
                                <img src="dist/img/rear_acvent.png" class="checkbox-inline" style="margin-left: 100px;">  Rear AC vent</img>
                            </form>
                            <br>
                            <form role="form">
                                <img src="dist/img/power_steering.png" class="checkbox-inline"><span>  Tilt steering</span></img>
                                <img src="dist/img/rear_defogger.png" class="checkbox-inline " style="margin-left: 121px;">  Rear Defogger</img>
                                <img src="dist/img/power_windows.png" class="checkbox-inline" style="margin-left: 98px;">  Power windows</img>
                            </form>
                            <br>
                            <form role="form">
                                <img src="dist/img/keyless_start.png" class="checkbox-inline"><span>  Keyless start</span></img>
                                <img src="dist/img/Audio_controls.png" class="checkbox-inline " style="margin-left: 115px;"> Audio controls on steering</img>
                                <img src="dist/img/Adjustable_seats.png" class="checkbox-inline" style="margin-left: 22px;"> Automatic Adjustable seats</img>
                            </form>
                            <br>
                            <form role="form">
                                <img src="dist/img/Folding_ORVM.png" class="checkbox-inline"><span> Power Folding ORVM</span></img>
                                <img src="dist/img/no_sun_roop.png" class="checkbox-inline " style="margin-left: 63px;">  Sun Roof</img>
                                <img src="dist/img/control.png" class="checkbox-inline" style="margin-left: 125px;"> Cruise Control</img>
                            </form>
                        </div>

                        <br>
                    </div>
                </div>
                <br>
                <div class="container" style="margin-left:3%;margin-top:2%;">
                    <div class="panel panel-default"style="width: 800px;height: 160px;margin-top: -50px;margin-left: -13px;">

                        <h2><strong style="margin-left: 16px">ACCESSORIES</strong></h2>
                        <div class="container" style="margin-top: -10px;margin-left: 14px">
                            <form role="form">
                                <img src="dist/img/music.png" class="checkbox-inline"><span>   Music System</span></img>
                                <img src="dist/img/Alloy wheels.png" class="checkbox-inline " style="margin-left: 100px;">   Alloy wheels</img>
                                <img src="dist/img/tubelesstyre.png" class="checkbox-inline" style="margin-left: 100px;">  Tubeless tyres</img>
                            </form>
                            <br>
                            <form role="form">
                                <img src="dist/img/Leather seats.png" class="checkbox-inline"><span>  Leather seats</span></img>
                                <img src="dist/img/Fog lamps.png" class="checkbox-inline " style="margin-left: 100px;">  Fog lamps</img>
                                <img src="dist/img/gps.png" class="checkbox-inline" style="margin-left: 112px;"> GPS Navigation system</img>
                            </form>
                        </div>
                        <br>
                    </div>
                </div>

          </div>

        </div>
      </div>


  </body>
</html>
