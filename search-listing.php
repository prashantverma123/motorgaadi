<?php
$myCity = $_GET['city'];
$myFuel = $_GET['fuel'];
$myBudget = $_GET['budget'];

?>

<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jquery.nouislider.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/colors/blue.css" type="text/css">
    <link rel="stylesheet" href="assets/css/user.style.css" type="text/css">

    <title>Motor Gaadi - A Place to find your Dream Car</title>

</head>

<body onunload="" class="map-fullscreen page-homepage navigation-off-canvas" id="page-top">

<!-- Outer Wrapper-->
<div id="outer-wrapper">
    <!-- Inner Wrapper -->
    <div id="inner-wrapper">
        <!-- Navigation-->
        <div class="header">
            <div class="wrapper">
                <div class="brand">
                    <a href="index.php"><img src="images/mg-logo.jpg" alt="logo"></a>
                </div>
                <nav class="navigation-items">
                    <div class="wrapper">
                        <ul class="main-navigation navigation-top-header"></ul>
                        <ul class="user-area">
                            <li><a href="sign-in.html">Sign In</a></li>
                            <li><a href="register.html"><strong>Register</strong></a></li>
                        </ul>
                        <!-- <a href="submit.html" class="submit-item">
                            <div class="content"><span>Submit Your Item</span></div>
                            <div class="icon">
                                <i class="fa fa-plus"></i>
                            </div>
                        </a> -->
                        <div class="toggle-navigation">
                            <div class="icon">
                                <div class="line"></div>
                                <div class="line"></div>
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- end Navigation-->
        <!-- Page Canvas-->
        <div id="page-canvas">
            <!--Off Canvas Navigation-->
            <nav class="off-canvas-navigation">
                <header>Navigation</header>
                <div class="main-navigation navigation-off-canvas"></div>
            </nav>
            <!--end Off Canvas Navigation-->
            <!--Page Content-->
            <div id="page-content">
                <!--Hero Image-->
                <section class="hero-image">
                    <div class="inner">
                        <div class="container">
                            <!-- <h1>Find Your Dream Car</h1> -->
                            <div class="search-bar horizontal">
                                <form class="main-search border-less-inputs background-color-grey-dark dark-inputs" role="form" method="post" action="?">
                                    <div class="input-row">
                                        <div class="form-group">
                                            <label for="manufacturer">Manufacturer</label>
                                            <select name="manufacturer" id="manufacturer" multiple title="Manufacturer" data-live-search="true">
                                                <option value="1">Audi</option>
                                                <option value="2">BMW</option>
                                                <option value="3">Jeep</option>
                                                <option value="4">Ford</option>
                                                <option value="5">Mazda</option>
                                                <option value="6">Opel</option>
                                                <option value="7">Toyota</option>
                                            </select>
                                        </div>
                                        <!-- /.form-group -->
                                        <div class="form-group">
                                            <label for="model">Model</label>
                                            <select name="model" id="model" multiple title="Model" data-live-search="true">
                                                <option value="1">C-Max</option>
                                                <option value="2">Escort</option>
                                                <option value="3">Mondeo</option>
                                                <option value="4">Focus</option>
                                                <option value="5">Mustang</option>
                                                <option value="6">Ranger</option>
                                                <option value="7">Transit</option>
                                            </select>
                                        </div>
                                        <!-- /.form-group -->
                                        <div class="form-group">
                                            <label for="location">Location</label>
                                            <div class="input-group location">
                                                <input type="text" class="form-control" id="location" placeholder="Enter Location">
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                        <div class="form-group">
                                            <label>Year</label>
                                            <div class="ui-slider" id="year-slider" data-value-min="1920" data-value-max="2015" data-step="1">
                                                <div class="values clearfix">
                                                    <input class="value-min" name="value-min[]" readonly>
                                                    <input class="value-max" name="value-max[]" readonly>
                                                </div>
                                                <div class="element"></div>
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="input-row">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <div class="ui-slider" id="price-slider" data-value-min="100" data-value-max="40000" data-value-type="price" data-currency="$" data-currency-placement="before" data-step="10">
                                                <div class="values clearfix">
                                                    <input class="value-min" name="value-min[]" readonly>
                                                    <input class="value-max" name="value-max[]" readonly>
                                                </div>
                                                <div class="element"></div>
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                        <div class="form-group">
                                            <label for="fuel">Fuel</label>
                                            <select name="manufacturer" id="fuel" multiple title="Any">
                                                <option value="1">Gasoline</option>
                                                <option value="2">Diesel</option>
                                                <option value="3">Electric</option>
                                                <option value="4">Hybrid</option>
                                                <option value="5">Gas</option>
                                            </select>
                                        </div>
                                        <!-- /.form-group -->
                                        <div class="form-group">
                                            <label for="type">Sale Type</label>
                                            <select name="type" id="type" multiple title="Any">
                                                <option value="1">New</option>
                                                <option value="2">Used</option>
                                            </select>
                                        </div>
                                        <!-- /.form-group -->
                                        <div class="form-group">
                                            <label for="keyword">Keyword</label>
                                            <input type="text" class="form-control" id="keyword" placeholder="Enter Keyword">
                                        </div>
                                        <!-- /.form-group -->
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                </form>
                                <!-- /.main-search -->
                            </div>
                            <!-- /.search-bar -->
                        </div>
                    </div>
                    <div class="background">
                        <img src="assets/img/cars-bg.jpg" alt="">
                    </div>
                </section>
                <!--end Hero Image-->



                <section id="price-drop" class="block equal-height">
                    <div class="container" id="searchedCarsContainer">
                        <header><h2>Used Cars</h2></header>


                    </div>
                </section>




            </div>
            <!-- end Page Content-->
        </div>
        <!-- end Page Canvas-->


    </div>
    <!-- end Inner Wrapper -->
</div>
<!-- end Outer Wrapper-->


<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/before.load.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;libraries=places"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/smoothscroll.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.hotkeys.js"></script>
<script type="text/javascript" src="assets/js/jquery.nouislider.all.min.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>
<script type="text/javascript" src="assets/js/maps.js"></script>

<script>
var BASE_URL = "http://localhost/startup/api/index.php/api";
    autoComplete();
    searchedCars();

    function searchedCars(){
      var city =  '<?php echo $myCity; ?>';
      var fuel =  '<?php echo $myFuel; ?>';
      var highbudget =  '<?php echo $myBudget; ?>';
      var lowbudget = highbudget<=2000000?parseInt(highbudget)-500000:2000001;
      console.log(city,fuel,highbudget,lowbudget);
      $.ajax({
         type        : 'GET',
         url         : BASE_URL+ "/carsearch/"+city+'/'+fuel+'/'+lowbudget+'/'+highbudget,
         dataType    : 'json',
         encode          : true
     })

         .done(function(data) {
           console.log(data);
           debugger;
           createCards(data.message)
         });
    }

    function formatPrice(price) {
      var val = parseFloat(price);
    if(val >= 10000000) val = (val/10000000).toFixed(2) + ' Cr';
    else if(val >= 100000) val = (val/100000).toFixed(2) + ' Lakhs';
    else if(val >= 1000) val = (val/1000).toFixed(2) + ' K';
    return val;
    }

    function formatdistance(price) {
      var val = parseFloat(price)/1000;
      if(val >= 10000000) val = (val/10000000).toFixed(2) + ' cr';
      else if(val >= 100000) val = (val/100000).toFixed(2) + ' lakh';
      else if(val >= 1000) val = (val/1000).toFixed(2) + ' k';

      return val + ' kms';
    }
    function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
    function createCards(data){
      var sHtml = '<div class="row">';
      for (var i = 0; i < data.length; i++) {
      sHtml += '<div class="col-md-4 col-sm-4" id="'+data[i].carcatid.toLowerCase().replace(/\s+/g, '')+'_'+ data[i].id+'">'+
          '<div class="item featured">'+
              '<div class="image">'+
                  '<div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>'+
                  '<a href="car-item-detail.php?id='+ data[i].id+'">'+
                      '<div class="item-specific">'+
                            '<span>'+ data[i].carcatid +'</span>'+
                      '</div>'+
                        '<div class="icon">'+
                        '<span class="glyphicon glyphicon-heart" style="margin-top:10px; width:43%"></span>'+
                        '</div>'+
                        '<img src="images/bmw-test.jpg" alt="">'+
                    '</a>'+
                '</div>'+
                '<div class="wrapper" style="height:96px;">'+
                '<div class="title-price-container">'+
                    '<div class="item-name" style="float:left;"><a href="car-item-detail.php?id='+ data[i].id+'"><p style="margin:0px;color:#1d1d1d;font-weight:700;font-size:14px">'+data[i].makeid+ ' '+data[i].modelid +'</p></a>'+
                      '<span><p style="margin:0px;color:#a1a1a1;font-weight:700;font-size:12px;text-align:left" >'+data[i].modelyear+','+formatdistance(data[i].kms)+'</p></span>'+
                    '</div>'+
                    '<div class="item-price" style="float:right;"> <p style="margin:0px;color:#1d1d1d;font-weight:700;font-size:14px">Rs '+ formatPrice(data[i].highprice)+'</p></div>'+
                    '<div style="clear:both"></div>'+
                  '</div>'+
                  '<div style="clear:both"></div>'+
                  '<div class="location-owner-type-container"style="margin-top:5px;text-align:left" >'+
                      '<div class="item-location" style="float:left">'+
                        '<span class=" glyphicon glyphicon-map-marker" style="float:left;color:#a1a1a1" ></span>'+
                        '<span style="float:left;margin-left:5px"><p style="color:#a1a1a1"> '+data[i].regcity+'</p></span>'+
                    '</div>'+
                      '<div class="item-owner"style="float:left;margin-left:14px;">'+
                        '<span class="glyphicon glyphicon-user" style="float:left;color:#a1a1a1" ></span>'+
                        '<span style="float:left;margin-left:5px"><p style="color:#a1a1a1"> 1st Owner</p></span>'+
                      '</div>'+
                      '<div class="item-type"style="float:left;margin-left:14px;">'+
                        '<span class=" glyphicon glyphicon-tint" style="float:left;color:#a1a1a1" ></span>'+
                        '<span style="float:left;margin-left:5px"><p style="color:#a1a1a1"> Petrol</p></span>'+
                      '</div>'+
                    '  </div>'+
                  '  </div>'+
                '</div>'+
            '</div>' ;
        }
        sHtml +='</div>' ;
        $('#searchedCarsContainer').append(sHtml);
    }

</script>
<!--[if lte IE 9]>
<script type="text/javascript" src="assets/js/ie-scripts.js"></script>
<![endif]-->
</body>
</html>
