<?php
session_start();

if(isset($_SESSION['UId']) && $_SESSION['UId'] !== null) {
     $page = 'func/helper.php';
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="">
            <meta name="author" content="">
            <title>ICU</title>
            <link rel="stylesheet" href="css/font-awesome.min.css">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/style.css">
            <link href='css/font.css' rel='stylesheet' type='text/css'>
            <link href='css/font1.css' rel='stylesheet' type='text/css'>
            <script src="js/modernizr.js"></script>
        </head>
        <body>

        <!-- ====================================================
        header section -->
        <header class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-5 header-logo">
                        <br>
                        <a href="index.php"><h1>ICU-Smart</h1></a>
                    </div>

                    <div class="col-md-7">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid nav-bar">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                            data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a class="menu active" href="index.php">Home</a></li>
                                        <li><a class="menu" href="#map">Find Us</a></li>
                                        <li><a class="menu" href="#service">our services </a></li>
                                        <li><a class="menu" href="func/logout.php">LogOut</a></li>
                                    </ul>
                                </div><!-- /navbar-collapse -->
                            </div><!-- / .container-fluid -->
                        </nav>
                    </div>
                </div>
            </div>
        </header> <!-- end of header area -->

        <section class="slider" id="home">
            <div class="container-fluid">
                <div class="row">
                    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="header-backup"></div>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="img/slide-one.jpg" alt="">
                                <div class="carousel-caption">
                                    <h1>providing</h1>
                                    <p>highquality service for men &amp; women</p>
                                    <button>learn more</button>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/slide-two.jpg" alt="">
                                <div class="carousel-caption">
                                    <h1>providing</h1>
                                    <p>highquality service for men &amp; women</p>
                                    <button>learn more</button>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/slide-three.jpg" alt="">
                                <div class="carousel-caption">
                                    <h1>providing</h1>
                                    <p>highquality service for men &amp; women</p>
                                    <button>learn more</button>
                                </div>
                            </div>
                            <div class="item">
                                <img src="img/slide-four.jpg" alt="">
                                <div class="carousel-caption">
                                    <h1>providing</h1>
                                    <p>highquality service for men &amp; women</p>
                                    <button>learn more</button>
                                </div>
                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </section><!-- end of slider section -->

        <!--	&lt;!&ndash; about section &ndash;&gt;-->
        <!--	<section class="about text-center" id="about">-->
        <!--		<div class="container">-->
        <!--			<div class="row">-->
        <!--				<h2>about us</h2>-->
        <!--				<h4>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</h4>-->
        <!--				<div class="col-md-4 col-sm-6">-->
        <!--					<div class="single-about-detail clearfix">-->
        <!--						<div class="about-img">-->
        <!--							<img class="img-responsive" src="img/item1.jpg" alt="">-->
        <!--						</div>-->
        <!--						<div class="about-details">-->
        <!--							<div class="pentagon-text">-->
        <!--								<h1>C</h1>-->
        <!--							</div>-->
        <!--							<h3>Children’s specialist</h3>-->
        <!--							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>-->
        <!--						</div>-->
        <!--					</div>-->
        <!--				</div>-->
        <!--				<div class="col-md-4 col-sm-6">-->
        <!--					<div class="single-about-detail">-->
        <!--						<div class="about-img">-->
        <!--							<img class="img-responsive" src="img/item2.jpg" alt="">-->
        <!--						</div>-->
        <!--						<div class="about-details">-->
        <!--							<div class="pentagon-text">-->
        <!--								<h1>W</h1>-->
        <!--							</div>-->

        <!--							<h3>Children’s specialist</h3>-->
        <!--							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>-->
        <!--						</div>-->
        <!--					</div>-->
        <!--				</div>-->
        <!--				<div class="col-md-4 col-sm-6">-->
        <!--					<div class="single-about-detail">-->
        <!--						<div class="about-img">-->
        <!--							<img class="img-responsive" src="img/item3.jpg" alt="">-->
        <!--						</div>-->
        <!--						<div class="about-details">-->
        <!--							<div class="pentagon-text">-->
        <!--								<h1>M</h1>-->
        <!--							</div>-->
        <!--							<h3>Children’s specialist</h3>-->
        <!--							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>-->
        <!--						</div>-->
        <!--					</div>-->
        <!--				</div>-->
        <!--			</div>-->
        <!--		</div>-->
        <!--	</section>&lt;!&ndash; end of about section &ndash;&gt;-->

        <!-- map section -->
        <section class="about text-center">
            <h1>FIND US</h1>
            <div id="map"></div>
            <div id="right-panel"></div>
        </section>
        <!-- service section starts here -->
        <section class="service text-center" id="service">
            <div class="container">
                <div class="row">
                    <h2>our services</h2>
                    <iframe width="450" height="260" style="border: 1px solid #cccccc;"
                            src="https://thingspeak.com/channels/975083/charts/1?bgcolor=%23ffffff&color=%23d62020&days=1&dynamic=true&results=10&type=line"></iframe>
                    <iframe width="450" height="260" style="border: 1px solid #cccccc;"
                            src="https://thingspeak.com/channels/975083/charts/2?bgcolor=%23ffffff&color=%23d62020&days=1&dynamic=true&results=10&type=line"></iframe>
                    <iframe width="450" height="260" style="border: 1px solid #cccccc;"
                            src="https://thingspeak.com/channels/975083/charts/3?bgcolor=%23ffffff&color=%23d62020&days=1&dynamic=true&results=10&type=line"></iframe>
                    <iframe width="450" height="260" style="border: 1px solid #cccccc;"
                            src="https://thingspeak.com/channels/975083/charts/4?bgcolor=%23ffffff&color=%23d62020&days=1&dynamic=true&results=10&type=line"></iframe>
                    <iframe width="450" height="260" style="border: 1px solid #cccccc;"
                            src="https://thingspeak.com/channels/975083/charts/5?bgcolor=%23ffffff&color=%23d62020&days=1&dynamic=true&results=10&type=line"></iframe>
                    <iframe width="450" height="260" style="border: 1px solid #cccccc;"
                            src="https://thingspeak.com/channels/975083/charts/6?bgcolor=%23ffffff&color=%23d62020&days=1&dynamic=true&results=10&type=line"></iframe>
                </div>
            </div>
        </section><!-- end of service section -->


        <!--	&lt;!&ndash; team section &ndash;&gt;-->
        <!--	<section class="team" id="team">-->
        <!--		<div class="container">-->
        <!--			<div class="row">-->
        <!--				<div class="team-heading text-center">-->
        <!--					<h2>our team</h2>-->
        <!--					<h4>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</h4>-->
        <!--				</div>-->
        <!--				<div class="col-md-2 single-member col-sm-4">-->
        <!--					<div class="person">-->
        <!--						<img class="img-responsive" src="img/member1.jpg" alt="member-1">-->
        <!--					</div>-->
        <!--					<div class="person-detail">-->
        <!--						<div class="arrow-bottom"></div>-->
        <!--						<h3>Dr. M. Weiner, M.D.</h3>-->
        <!--						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>-->
        <!--					</div>-->
        <!--				</div>-->
        <!--				<div class="col-md-2 single-member col-sm-4">-->
        <!--					<div class="person-detail">-->
        <!--						<div class="arrow-top"></div>-->
        <!--						<h3>Dr. Danielle, M.D.</h3>-->
        <!--						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>-->
        <!--					</div>-->
        <!--					<div class="person">-->
        <!--						<img class="img-responsive" src="img/member2.jpg" alt="member-2">-->
        <!--					</div>-->
        <!--				</div>-->
        <!--				<div class="col-md-2 single-member col-sm-4">-->
        <!--					<div class="person">-->
        <!--						<img class="img-responsive" src="img/member3.jpg" alt="member-3">-->
        <!--					</div>-->
        <!--					<div class="person-detail">-->
        <!--						<div class="arrow-bottom"></div>-->
        <!--						<h3>Dr. Caitlin, M.D.</h3>-->
        <!--						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>-->
        <!--					</div>-->
        <!--				</div>-->
        <!--				<div class="col-md-2 single-member col-sm-4">-->
        <!--					<div class="person-detail">-->
        <!--						<div class="arrow-top"></div>-->
        <!--						<h3>Dr. Joseph, M.D.</h3>-->
        <!--						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>-->
        <!--					</div>-->
        <!--					<div class="person">-->
        <!--						<img class="img-responsive" src="img/member4.jpg" alt="member-4">-->
        <!--					</div>-->
        <!--				</div>-->
        <!--				<div class="col-md-2 single-member col-sm-4">-->
        <!--					<div class="person">-->
        <!--						<img class="img-responsive" src="img/member5.jpg" alt="member-5">-->
        <!--					</div>-->
        <!--					<div class="person-detail">-->
        <!--						<div class="arrow-bottom"></div>-->
        <!--						<h3>Dr. Michael, M.D.</h3>-->
        <!--						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>-->
        <!--					</div>-->
        <!--				</div>-->
        <!--				<div class="col-md-2 single-member col-sm-4">-->
        <!--					<div class="person-detail">-->
        <!--						<div class="arrow-top"></div>-->
        <!--						<h3>Dr. Hasina, M.D.</h3>-->
        <!--						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>-->
        <!--					</div>-->
        <!--					<div class="person">-->
        <!--						<img class="img-responsive" src="img/member6.jpg" alt="member-5">-->
        <!--					</div>-->
        <!--				</div>-->
        <!--			</div>-->
        <!--		</div>-->
        <!--	</section>&lt;!&ndash; end of team section &ndash;&gt;-->

        <!-- footer starts here -->
        <footer class="footer clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 footer-para">
                        <p>&copy;ICU-All right reserved</p>
                    </div>
                    <div class="col-xs-6 text-right">
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-skype"></i></a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- script tags
        ============================================================= -->

        <script>
            var customLabel = {
            };

            var directionsService;
            var directionsRenderer;

            var pos;

            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: new google.maps.LatLng(29, 30),
                    zoom: 6
                });
                directionsRenderer = new google.maps.DirectionsRenderer;
                directionsService = new google.maps.DirectionsService;

                var infoWindow = new google.maps.InfoWindow;

                // Try HTML5 geolocation.
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function (position) {
                        pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };

                        infoWindow.setPosition(pos);
                        infoWindow.setContent('Current Location.');
                        infoWindow.open(map);
                        map.setCenter(pos);
                    }, function () {
                        handleLocationError(true, infoWindow, map.getCenter());
                    });
                } else {
                    // Browser doesn't support Geolocation
                    handleLocationError(false, infoWindow, map.getCenter());
                }

                directionsRenderer.setMap(map);
                directionsRenderer.setPanel(document.getElementById('right-panel'));


                var onChangeHandler = function (location) {
                    calculateAndDisplayRoute(directionsService, directionsRenderer, location);
                };

                // Change this depending on the name of your PHP or XML file
                downloadUrl('<?= $page ?>', function (data) {
                    var xml = data.responseXML;
                    var markers = xml.documentElement.getElementsByTagName('marker');
                    Array.prototype.forEach.call(markers, function (markerElem) {
                        var id = markerElem.getAttribute('id');
                        var name = markerElem.getAttribute('name');
                        var address = markerElem.getAttribute('address');
                        var type = markerElem.getAttribute('type');
                        var point = new google.maps.LatLng(
                            parseFloat(markerElem.getAttribute('lat')),
                            parseFloat(markerElem.getAttribute('lng')));

                        var infowincontent = document.createElement('div');
                        var strong = document.createElement('strong');
                        strong.textContent = name;
                        infowincontent.appendChild(strong);
                        infowincontent.appendChild(document.createElement('br'));

                        var text = document.createElement('text');
                        text.textContent = address;
                        infowincontent.appendChild(text);
                        var icon = customLabel[type] || {};
                        var marker = new google.maps.Marker({
                            map: map,
                            position: point,
                            label: icon.label
                        });
                        marker.addListener('click', function () {
                            infoWindow.setContent(infowincontent);
                            infoWindow.open(map, marker);
                            onChangeHandler(point);
                        });
                    });
                });
            }

            function calculateAndDisplayRoute(directionsService, directionsRenderer, end) {
                directionsService.route({
                    origin: pos,
                    destination: end,
                    travelMode: 'DRIVING'
                }, function (response, status) {
                    if (status === 'OK') {
                        directionsRenderer.setDirections(response);
                    } else {
                        window.alert('Directions request failed due to ' + status);
                    }
                });
            }

            function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                infoWindow.setPosition(pos);
                infoWindow.setContent(browserHasGeolocation ?
                    'Error: The Geolocation service failed.' :
                    'Error: Your browser doesn\'t support geolocation.');
                infoWindow.open(map);
            }


            function downloadUrl(url, callback) {
                var request = window.ActiveXObject ?
                    new ActiveXObject('Microsoft.XMLHTTP') :
                    new XMLHttpRequest;

                request.onreadystatechange = function () {
                    if (request.readyState === 4) {
                        request.onreadystatechange = doNothing;
                        callback(request, request.status);
                    }
                };

                request.open('GET', url, true);
                request.send(null);
            }

            function doNothing() {
            }
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDK6efiHGW1ta3f1SYMH5zLffeyImu_Bwo&callback=initMap">
        </script>
        <script src="js/jquery-2.1.1.js"></script>
        <script src="js/gmaps.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
        </body>
    </html>
    <?php
}
else
{
    header('Location: login.php');
}