<!DOCTYPE html>
  <html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <!-- <script async src="//code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script> -->

        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" type="text/css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
        <link rel="stylesheet" href="assets/css/jquery.nouislider.min.css" type="text/css">
        <link rel="stylesheet" href="assets/css/colors/blue.css" type="text/css">
        <link rel="stylesheet" href="assets/css/user.style.css" type="text/css">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <!-- <link type="text/css" rel="stylesheet" href="node_modules/materialize-css/bin/materialize.css"  media="screen,projection"/> -->

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>MotorGaadi - A Place to Find Your Dream Car</title>
        <style type="text/css">
          .back{
            background-color: #30ACCE;
          }
          .back:hover{
            background-color: #red;
          }
          .header .wrapper .navigation-items .wrapper .user-area a:hover, .header .wrapper .navigation-items .wrapper .user-area span:hover {
            color: #1d1d1d;
    }

        </style>

    </head>

    <body onunload="" class="map-fullscreen page-homepage navigation-off-canvas" id="page-top">
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
      <script type="text/javascript" src="node_modules/materialize-css/bin/materialize.js"></script>
      <script>



       $(document).ready(function() {
         featuredCars();
         fueltypeoptiongenerator();
         console.log($('.ui-slider').length);

        $('#btnFindCar').click(function() {
               searchCars();
           });
        $('#leadformbutton').click(function(){
          debugger;
          capturelead();
        });
        //  $('.selectpicker').selectpicker();



      function capturelead(){
        debugger;
         var formData = {
            'name'     : $('#name').val(),
            'location' : $('#location').val(),
            'mobile'    : $('#mobile').val()
        };
        console.log(formData);
         $.ajax({
            type        : 'POST',
            url         : "http://localhost/startup/api/index.php/api/leadform",
            data        : formData,
            dataType    : 'json',
            encode          : true
        })

            .done(function(data) {

            });
      }


    });


    </script>

    <div id="outer-wrapper">


<!-- Registration Form -->

    <div class="modal fade" id="myModal" role="dialog" tabindex="-1">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <!-- <div class="modal-header"> -->
        <!-- </div> -->
        <div class="modal-body">


            <div class="form-style-10">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h1>Want to sell car!<span>Sign up and we will see your car!</span></h1>
              <form>
              <div class="section"><span>1</span>Name &amp; Address</div>
              <div class="inner-wrap">
                  <label>Your Full Name <input type="text" name="name" placeholder="Manish" /></label>
                  <label>Your Firm Name <input type="text" name="firm" placeholder="Motor Gaadi"></label>
                  <label>Firm Location <input type="text" name="location" placeholder="Mumbai"></label>
              </div>

              <div class="section"><span>2</span>Email &amp; Phone</div>
              <div class="inner-wrap">
                  <label>Email Address <input type="email" name="email" /></label>
                  <label>Phone Number <input type="text" name="phone" /></label>
              </div>
    <div class="button-section">
     <input type="submit" name="Sign Up" />
    </div>
</form>
</div>



                        </div>

                    </div>
                </div>
        </div>







    <div class="header" style="background:#36B5FE">
        <div class="wrapper">
                  <div class="brand">
                      <a href="index.php"><img src="images/mg-logo.jpg" alt="logo"></a>
                  </div>
                  <nav class="navigation-items">
                      <div class="wrapper">
                            <ul class="main-navigation navigation-top-header"></ul>
                          <ul class="user-area" >
                              <li><a href="used-cars-listing.php" style="font-size:14px !important"><strong>Cars</strong></a></li>
                              <!-- <li><a href="sign-in.html">Sign In</a></li> -->
                              <li><a data-toggle="modal" data-target="#myModal" style="font-size:14px !important"><strong>Sell</strong></a></li>
                              <li><a data-toggle="modal" data-target="#myModal" style="font-size:14px !important"><strong>Contact Us</strong></a></li>
                          </ul>
                      </div>
                  </nav>

          </div>
        </div>





        <div id="inner-wrapper" style="background: #161209 url(http://www.cfau-pd.net/data/wallpapers/10/WDF_583618.jpg) no-repeat right top;background-size: cover;height: 380px; padding-top: 1px;position: relative;">

          <div class="search-box-container" style="margin-top: 125px;text-align: center;">
            <h1 class="text-uppercase" style="font-weight: 400;text-transform: uppercase;font-size: 35px;color:#fff">
                Find Your Dream Car
            </h1>
            <div class="searchWrapper">
              <div class="new-used-search-container" style="margin: 0 auto;width: 605px;height: auto;z-index:1000;">
              <div class="cityselectContainer"style="float:left;width:25% ">
                <select class="" id="cityselect" name="Slect City" style="width:100%">
                  <option value="">Selct City</option>
                  <option value="Mumbai">Mumbai</option>
                  <option value="Pune">Pune</option>
                </select>
              </div>
              <div class="fuelselectContainer"style="float:left;width:25%; ">

              </div>
              <div class="budgetselectContainer"style="float:left;width:25% ; ">
                <select class=""  id="budgetselect" name="Slect City" style="width:100%">
                  <option value="">Selct Budget</option>
                  <option value="500000">1Lakh-5Lakh</option>
                  <option value="1000000">5Lakh-10Lakh</option>
                  <option value="1500000">10Lakh-15Lakh</option>
                  <option value="2000000">15Lakh-20Lakh</option>
                  <option value="20000000">20Lakh +</option>


                </select>
              </div>
              <div class="findBtn" style="float:left;">
              <button id="btnFindCar" class="text-uppercase btn btn-orange btn-md font16 back" style="padding: 8px 20px 7px 20px ;border-radius: 0 2px 2px 0;font-size:16px;text-transform: uppercase;">Find Car</button>
              </div>
              </div>
            </div>
          </div>
        </div>


        <section id="featured" class="block background-color-grey-dark equal-height">
            <div class="container" id="featuredcarsContainer">
                <header><h2>Featured</h2></header>

            </div>
        </section>
        <!--end Featured-->
        <!-- end Inner Wrapper -->

    </div>
    <!-- end Outer Wrapper-->
    <script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
    <script type="text/javascript" src="assets/js/before.load.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;libraries=places"></script>
    <script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/smoothscroll.js"></script>
    <!-- <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script> -->
    <script type="text/javascript" src="assets/js/jquery.hotkeys.js"></script>
    <script type="text/javascript" src="assets/js/jquery.nouislider.all.min.js"></script>
    <script type="text/javascript" src="assets/js/custom.js"></script>
    <script type="text/javascript" src="assets/js/maps.js"></script>
    <script>
        autoComplete();
    </script>

    <script>
    var BASE_URL = "http://localhost/startup/api/index.php/api";

    function cityoptiongenerator() {

    }

    function fueltypeoptiongenerator() {

      $.ajax({
         type        : 'GET',
         url         : BASE_URL+"/carfueltype",
         dataType    : 'json',
         encode          : true
     })

         .done(function(data) {
           var fuel = data.message;
           console.log(fuel.length);
           var sHtml = '<select class="selectpicker" id="fuelselect" name="Select Fuel" style="width:100%"><option value=""> Select Fuel</option>';
           for (var i = 0; i < fuel.length; i++) {
            sHtml += '<option value="'+ fuel[i].fuel_type +'">'+ fuel[i].fuel_type +'</option>'
           }
           sHtml += '</select>';

           $('.fuelselectContainer').append(sHtml);
         });
    }


    function featuredCars(){
      $.ajax({
         type        : 'GET',
         url         : BASE_URL+ "/featuredcars",
         dataType    : 'json',
         encode          : true
     })

         .done(function(data) {
           console.log(data);
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
        $('#featuredcarsContainer').append(sHtml);
    }

    function searchCars(){
    var city =  $( "#cityselect option:selected" ).val();
    var fuel =  $( "#fuelselect option:selected" ).val();
    var budget =  $( "#budgetselect option:selected" ).val();

    var postdata = 'city='+city+'&'+'fuel='+fuel+'&'+'budget='+budget;

    if (city!="" && fuel!=""&&budget!="") {
      window.location.href = "http://localhost/startup/search-listing.php?"+postdata;
    }

    }
    </script>


    </body>

  </html>
