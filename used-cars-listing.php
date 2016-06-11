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
                    <a href="index-real-estate.html"><img src="images/mg-logo.jpg" alt="logo"></a>
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


                <!--Price Drop-->
                <section id="price-drop" class="block equal-height">
                    <div class="container">
                        <header><h2>Price Drop</h2></header>
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                        <div class="item featured">
                            <div class="image">
                                <div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
                                <a href="car-item-detail.html">
                                    <!-- <div class="overlay">
                                        <div class="inner">
                                            <div class="content">
                                                <h4>Description</h4>
                                                <p>BMW was established as a business entity following a restructuring of the Rapp Motorenwerke aircraft manufacturing firm in 1917.</p>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="item-specific">
                                        <span>Used Car</span>
                                    </div>
                                    <div class="icon">
                                      <span class="glyphicon glyphicon-heart" style="margin-top:10px; width:43%"></span>
                                    </div>
                                    <img src="images/bmw-test.jpg" alt="">
                                </a>
                            </div>
                            <div class="wrapper" style="height:96px; background-color:#EFEFEF;">
                              <div class="title-price-container">
                                <div class="item-name" style="float:left;"><a href="car-item-detail.html"><p style="margin:0px;color:#1d1d1d;font-weight:700;font-size:14px">Mercedes Benz Class A</p></a>
                                  <span><p style="margin:0px;color:#a1a1a1;font-weight:700;font-size:12px;text-align:left" >2012, 30,000 Kms</p></span>
                                </div>
                                <div class="item-price" style="float:right;"> <p style="margin:0px;color:#1d1d1d;font-weight:700;font-size:14px">Rs 20 Lakh</p></div>
                                <div style="clear:both"></div>
                              </div>
                              <div style="clear:both"></div>
                              <div class="location-owner-type-container"style="margin-top:5px;text-align:left" >
                                  <div class="item-location" style="float:left">
                                    <span class="   glyphicon glyphicon-map-marker" style="float:left;color:#a1a1a1" ></span>
                                    <span style="float:left;margin-left:5px"><p style="color:#a1a1a1"> Sakinaka</p></span>
                                  </div>
                                  <div class="item-owner"style="float:left;margin-left:14px;">
                                    <span class="glyphicon glyphicon-user" style="float:left;color:#a1a1a1" ></span>
                                    <span style="float:left;margin-left:5px"><p style="color:#a1a1a1"> 1st Owner</p></span>
                                  </div>
                                  <div class="item-type"style="float:left;margin-left:14px;">
                                    <span class="   glyphicon glyphicon-tint" style="float:left;color:#a1a1a1" ></span>
                                    <span style="float:left;margin-left:5px"><p style="color:#a1a1a1"> Petrol</p></span>
                                  </div>
                              </div>

                            </div>
                        </div>
                        <!-- /.item-->
                    </div>

                    <!--/.col-sm-4-->

                    <div class="col-md-4 col-sm-4">
                        <div class="item featured">
                            <div class="image">
                                <div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
                                <a href="car-item-detail.html">
                                    <!-- <div class="overlay">
                                        <div class="inner">
                                            <div class="content">
                                                <h4>Description</h4>
                                                <p>BMW was established as a business entity following a restructuring of the Rapp Motorenwerke aircraft manufacturing firm in 1917.</p>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="item-specific">
                                        <span>Used Car</span>
                                    </div>
                                    <div class="icon">
                                      <span class="glyphicon glyphicon-heart" style="margin-top:10px; width:43%"></span>
                                    </div>
                                    <img src="images/bmw-test.jpg" alt="">
                                </a>
                            </div>
                            <div class="wrapper" style="height:96px; background-color:#EFEFEF;">
                              <div class="title-price-container">
                                <div class="item-name" style="float:left;"><a href="car-item-detail.html"><p style="margin:0px;color:#1d1d1d;font-weight:700;font-size:14px">Mercedes Benz Class A</p></a>
                                  <span><p style="margin:0px;color:#a1a1a1;font-weight:700;font-size:12px;text-align:left" >2012, 30,000 Kms</p></span>
                                </div>
                                <div class="item-price" style="float:right;"> <p style="margin:0px;color:#1d1d1d;font-weight:700;font-size:14px">Rs 20 Lakh</p></div>
                                <div style="clear:both"></div>
                              </div>
                              <div style="clear:both"></div>
                              <div class="location-owner-type-container"style="margin-top:5px;text-align:left" >
                                  <div class="item-location" style="float:left">
                                    <span class="   glyphicon glyphicon-map-marker" style="float:left;color:#a1a1a1" ></span>
                                    <span style="float:left;margin-left:5px"><p style="color:#a1a1a1"> Sakinaka</p></span>
                                  </div>
                                  <div class="item-owner"style="float:left;margin-left:14px;">
                                    <span class="glyphicon glyphicon-user" style="float:left;color:#a1a1a1" ></span>
                                    <span style="float:left;margin-left:5px"><p style="color:#a1a1a1"> 1st Owner</p></span>
                                  </div>
                                  <div class="item-type"style="float:left;margin-left:14px;">
                                    <span class="   glyphicon glyphicon-tint" style="float:left;color:#a1a1a1" ></span>
                                    <span style="float:left;margin-left:5px"><p style="color:#a1a1a1"> Petrol</p></span>
                                  </div>
                              </div>

                            </div>
                        </div>
                        <!-- /.item-->
                    </div>

                    <!--/.col-sm-4-->

                    <div class="col-md-4 col-sm-4">
                        <div class="item featured">
                            <div class="image">
                                <div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
                                <a href="car-item-detail.html">
                                    <!-- <div class="overlay">
                                        <div class="inner">
                                            <div class="content">
                                                <h4>Description</h4>
                                                <p>BMW was established as a business entity following a restructuring of the Rapp Motorenwerke aircraft manufacturing firm in 1917.</p>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="item-specific">
                                        <span>Used Car</span>
                                    </div>
                                    <div class="icon">
                                      <span class="glyphicon glyphicon-heart" style="margin-top:10px; width:43%"></span>
                                    </div>
                                    <img src="images/bmw-test.jpg" alt="">
                                </a>
                            </div>
                            <div class="wrapper" style="height:96px; background-color:#EFEFEF;">
                              <div class="title-price-container">
                                <div class="item-name" style="float:left;"><a href="car-item-detail.html"><p style="margin:0px;color:#1d1d1d;font-weight:700;font-size:14px">Mercedes Benz Class A</p></a>
                                  <span><p style="margin:0px;color:#a1a1a1;font-weight:700;font-size:12px;text-align:left" >2012, 30,000 Kms</p></span>
                                </div>
                                <div class="item-price" style="float:right;"> <p style="margin:0px;color:#1d1d1d;font-weight:700;font-size:14px">Rs 20 Lakh</p></div>
                                <div style="clear:both"></div>
                              </div>
                              <div style="clear:both"></div>
                              <div class="location-owner-type-container"style="margin-top:5px;text-align:left" >
                                  <div class="item-location" style="float:left">
                                    <span class="   glyphicon glyphicon-map-marker" style="float:left;color:#a1a1a1" ></span>
                                    <span style="float:left;margin-left:5px"><p style="color:#a1a1a1"> Sakinaka</p></span>
                                  </div>
                                  <div class="item-owner"style="float:left;margin-left:14px;">
                                    <span class="glyphicon glyphicon-user" style="float:left;color:#a1a1a1" ></span>
                                    <span style="float:left;margin-left:5px"><p style="color:#a1a1a1"> 1st Owner</p></span>
                                  </div>
                                  <div class="item-type"style="float:left;margin-left:14px;">
                                    <span class="   glyphicon glyphicon-tint" style="float:left;color:#a1a1a1" ></span>
                                    <span style="float:left;margin-left:5px"><p style="color:#a1a1a1"> Petrol</p></span>
                                  </div>
                              </div>

                            </div>
                        </div>
                        <!-- /.item-->
                    </div>

                    <!--/.col-sm-4-->
                        </div>
                        <!--/.row-->
                    </div>
                </section>
                <!--end Price Drop-->

                <!--Recent-->
                <section id="recent" class="block">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-sm-9">
                                <header><h2>Recent Cars</h2></header>
                                <div class="item list">
                                    <div class="image">
                                        <div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
                                        <a href="car-item-detail.html">
                                            <div class="overlay">
                                                <div class="inner">
                                                    <div class="content">
                                                        <h4>Description</h4>
                                                        <p>Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque massa</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="icon">
                                                <i class="fa fa-thumbs-up"></i>
                                            </div>
                                            <img src="assets/img/items/cars/12.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="wrapper">
                                        <a href="car-item-detail.html"><h3>Volkswagen Tiguan</h3></a>
                                        <figure>Cross Road</figure>
                                        <div class="price">$86.500</div>
                                    </div>
                                    <div class="description">
                                        <div class="info">
                                            <dl>
                                                <dt>Engine</dt>
                                                <dd>Hybrid</dd>
                                                <dt>Kilometers</dt>
                                                <dd>145600</dd>
                                                <dt>Year</dt>
                                                <dd>2011</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.item-->
                                <div class="item list">
                                    <div class="image">
                                        <div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
                                        <a href="car-item-detail.html">
                                            <div class="overlay">
                                                <div class="inner">
                                                    <div class="content">
                                                        <h4>Description</h4>
                                                        <p>Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque massa</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="assets/img/items/cars/2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="wrapper">
                                        <a href="car-item-detail.html"><h3>Range Rover Discovery</h3></a>
                                        <figure>Off Road</figure>
                                        <div class="price">$160.000</div>
                                    </div>
                                    <div class="description">
                                        <div class="info">
                                            <dl>
                                                <dt>Engine</dt>
                                                <dd>Hybrid</dd>
                                                <dt>Kilometers</dt>
                                                <dd>145600</dd>
                                                <dt>Year</dt>
                                                <dd>2011</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.item-->
                                <div class="item list">
                                    <div class="image">
                                        <div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
                                        <a href="car-item-detail.html">
                                            <div class="overlay">
                                                <div class="inner">
                                                    <div class="content">
                                                        <h4>Description</h4>
                                                        <p>Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque massa</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="assets/img/items/cars/8.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="wrapper">
                                        <a href="car-item-detail.html"><h3>Subaru WRX 2.2 TDi</h3></a>
                                        <figure>Sport Car</figure>
                                        <div class="price">$79.600</div>
                                    </div>
                                    <div class="description">
                                        <div class="info">
                                            <dl>
                                                <dt>Engine</dt>
                                                <dd>Hybrid</dd>
                                                <dt>Kilometers</dt>
                                                <dd>145600</dd>
                                                <dt>Year</dt>
                                                <dd>2011</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.item-->
                            </div>
                            <!-- /.col-md-9-->
                            <div class="col-md-3 col-sm-3">
                                <aside id="sidebar">
                                    <section>
                                        <header><h2>New Reviews</h2></header>
                                        <a href="blog-detail.html" class="item-horizontal small">
                                            <h3>Opel Insignia TDi</h3>
                                            <figure>12.1.2015</figure>
                                            <div class="wrapper">
                                                <div class="image"><img src="assets/img/items/cars/1.jpg" alt=""></div>
                                                <div class="info">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                    <div class="rating" data-rating="4"></div>
                                                </div>
                                            </div>
                                        </a>
                                        <!--/.item-horizontal small-->
                                        <a href="blog-detail.html" class="item-horizontal small">
                                            <h3>Subaru WRX 2.2 TDi</h3>
                                            <figure>03.1.2015</figure>
                                            <div class="wrapper">
                                                <div class="image"><img src="assets/img/items/cars/8.jpg" alt=""></div>
                                                <div class="info">
                                                    <p>Pellentesque nulla ligula, pretium id viverra non</p>
                                                    <div class="rating" data-rating="3"></div>
                                                </div>
                                            </div>
                                        </a>
                                        <!--/.item-horizontal small-->
                                        <a href="blog-detail.html" class="item-horizontal small">
                                            <h3>Volkswagen Tiguan</h3>
                                            <figure>08.12.2014</figure>
                                            <div class="wrapper">
                                                <div class="image"><img src="assets/img/items/cars/12.jpg" alt=""></div>
                                                <div class="info">
                                                    <p>Nulla condimentum at ipsum eget commodo.</p>
                                                    <div class="rating" data-rating="5"></div>
                                                </div>
                                            </div>
                                        </a>
                                        <!--/.item-horizontal small-->
                                    </section>
                                </aside>
                                <!--/.sidebar-->
                            </div>
                            <!--/.col-md-3-->
                        </div>
                        <!-- /.row-->
                    </div>
                    <!-- /.container-->
                </section>
                <!--end Recent-->

            </div>
            <!-- end Page Content-->
        </div>
        <!-- end Page Canvas-->
        <!--Page Footer-->
        <footer id="page-footer">
            <div class="inner">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <!--New Items-->
                                <section>
                                    <h2>New Items</h2>
                                    <a href="car-item-detail.html" class="item-horizontal small">
                                        <h3>Cash Cow Restaurante</h3>
                                        <figure>63 Birch Street</figure>
                                        <div class="wrapper">
                                            <div class="image"><img src="assets/img/items/1.jpg" alt=""></div>
                                            <div class="info">
                                                <div class="type">
                                                    <i><img src="assets/icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
                                                    <span>Restaurant</span>
                                                </div>
                                                <div class="rating" data-rating="4"></div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--/.item-horizontal small-->
                                    <a href="car-item-detail.html" class="item-horizontal small">
                                        <h3>Blue Chilli</h3>
                                        <figure>2476 Whispering Pines Circle</figure>
                                        <div class="wrapper">
                                            <div class="image"><img src="assets/img/items/2.jpg" alt=""></div>
                                            <div class="info">
                                                <div class="type">
                                                    <i><img src="assets/icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
                                                    <span>Restaurant</span>
                                                </div>
                                                <div class="rating" data-rating="3"></div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--/.item-horizontal small-->
                                </section>
                                <!--end New Items-->
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <!--Recent Reviews-->
                                <section>
                                    <h2>Recent Reviews</h2>
                                    <a href="car-item-detail.html#reviews" class="review small">
                                        <h3>Max Five Lounge</h3>
                                        <figure>4365 Bruce Street</figure>
                                        <div class="info">
                                            <div class="rating" data-rating="4"></div>
                                            <div class="type">
                                                <i><img src="assets/icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
                                                <span>Restaurant</span>
                                            </div>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non suscipit felis, sed sagittis tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras ac placerat mauris.
                                        </p>
                                    </a><!--/.review-->
                                    <a href="car-item-detail.html#reviews" class="review small">
                                        <h3>Saguaro Tavern</h3>
                                        <figure>2476 Whispering Pines Circle</figure>
                                        <div class="info">
                                            <div class="rating" data-rating="5"></div>
                                            <div class="type">
                                                <i><img src="assets/icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
                                                <span>Restaurant</span>
                                            </div>
                                        </div>
                                        <p>
                                            Pellentesque mauris. Proin sit amet scelerisque risus. Donec semper semper erat ut mollis curabitur
                                        </p>
                                    </a>
                                    <!--/.review-->
                                </section>
                                <!--end Recent Reviews-->
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <section>
                                    <h2>About Us</h2>
                                    <address>
                                        <div>Max Five Lounge</div>
                                        <div>63 Birch Street</div>
                                        <div>Granada Hills, CA 91344</div>
                                        <figure>
                                            <div class="info">
                                                <i class="fa fa-mobile"></i>
                                                <span>818-832-5258</span>
                                            </div>
                                            <div class="info">
                                                <i class="fa fa-phone"></i>
                                                <span>+1 123 456 789</span>
                                            </div>
                                            <div class="info">
                                                <i class="fa fa-globe"></i>
                                                <a href="#">www.maxfivelounge.com</a>
                                            </div>
                                        </figure>
                                    </address>
                                    <div class="social">
                                        <a href="#" class="social-button"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="social-button"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="social-button"><i class="fa fa-pinterest"></i></a>
                                    </div>

                                    <a href="contact.html" class="btn framed icon">Contact Us<i class="fa fa-angle-right"></i></a>
                                </section>
                            </div>
                            <!--/.col-md-4-->
                        </div>
                        <!--/.row-->
                    </div>
                    <!--/.container-->
                </div>
                <!--/.footer-top-->
                <div class="footer-bottom">
                    <div class="container">
                        <span class="left">(C) Motor Gaadi, All rights reserved</span>
                            <span class="right">
                                <a href="#page-top" class="to-top roll"><i class="fa fa-angle-up"></i></a>
                            </span>
                    </div>
                </div>
                <!--/.footer-bottom-->
            </div>
        </footer>
        <!--end Page Footer-->
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
    autoComplete();
</script>
<!--[if lte IE 9]>
<script type="text/javascript" src="assets/js/ie-scripts.js"></script>
<![endif]-->
</body>
</html>
