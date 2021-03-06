<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Depan | Lembah Universitas Gadjah Mada </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="assets/js/jquery.min.js"></script>
<!--start slider -->
<link rel="stylesheet" href="assets/css/fwslider.css" media="all">
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/css3-mediaqueries.js"></script>
<script src="assets/js/fwslider.js"></script>
<!--end slider -->
<!---strat-date-piker---->
<link rel="stylesheet" href="assets/css/jquery-ui.css" />
<script src="assets/js/jquery-ui.js"></script>
          <script>
                  $(function() {
                    $( "#datepicker,#datepicker1" ).datepicker();
                  });
          </script>
<!---/End-date-piker---->
<link type="text/css" rel="stylesheet" href="assets/css/JFGrid.css" />
<link type="text/css" rel="stylesheet" href="assets/css/JFFormStyle-1.css" />
        <script type="text/javascript" src="assets/js/JFCore.js"></script>
        <script type="text/javascript" src="assets/js/JFForms.js"></script>
        <!-- Set here the key for your domain in order to hide the watermark on the web server -->
        <script type="text/javascript">
            (function() {
                JC.init({
                    domainKey: ''
                });
                })();
        </script>
<!--nav-->
<script>
        $(function() {
            var pull        = $('#pull');
                menu        = $('nav ul');
                menuHeight  = menu.height();

            $(pull).on('click', function(e) {
                e.preventDefault();
                menu.slideToggle();
            });

            $(window).resize(function(){
                var w = $(window).width();
                if(w > 320 && menu.is(':hidden')) {
                    menu.removeAttr('style');
                }
            });
        });
</script>
</head>
<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
    <div class="header">
        <div class="logo">
            <a href="index.html"><img src="assets/images/logo.png" alt=""></a>
        </div>
        <div class="h_right">
            <!--start menu -->
            @if(Auth::guest())
            <ul class="menu">
                <li class="active"><a href="{{url('/')}}">tentang kami</a></li> |
                <li><a href="{{url('pemesanan')}}">pemesanan</a></li> |
                <li><a href="{{url('kontak')}}">kontak kami</a></li>
                <div class="clear"></div>
            </ul>
            @else
            <ul class="menu">
 <li class="active"><a href="{{url('/')}}">tentang kami</a></li> |
                <li><a href="{{url('pesan-lapangan')}}">pemesanan</a></li> |
                <li><a href="{{url('kontak')}}">kontak kami</a></li>
                <li><a href="">{{Auth::user()->username}}</a></li>

                <div class="clear"></div>
            </ul>
            <!-- start profile_details -->
@endif
        </div>
        <div class="clear"></div>
        <div class="top-nav">
        <nav class="clearfix">
                <ul>
                <li class="active"><a href="index.html">hotel</a></li> 
                <li><a href="rooms.html">rooms & suits</a></li> 
                <li><a href="reservation.html">reservation</a></li> 
                <li><a href="activities.html">activities</a></li> 
                <li><a href="contact.html">contact</a></li>
                </ul>
                <a href="#" id="pull">Menu</a>
            </nav>
        </div>
    </div>
</div>
</div>
<!----start-images-slider---->
        <div class="images-slider">
            <!-- start slider -->
            <div id="fwslider">
                <div class="slider_container">
                    <div class="slide"> 
                        <!-- Slide image -->
                            <img src="assets/images/slider-bg.jpg" alt=""/>
                        <!-- /Slide image -->
                        <!-- Texts container -->
                        <div class="slide_content">
                            <div class="slide_content_wrap">
                                <!-- Text title -->
                                <h4 class="title"><i class="bg"></i>Lorem Ipsum is simply <span class="hide">dummy text</span></h4>
                                <h5 class="title1"><i class="bg"></i>Morbi justo <span class="hide" >condimentum accumsan</span></h5>
                                <!-- /Text title -->
                            </div>
                        </div>
                         <!-- /Texts container -->
                    </div>
                    <!-- /Duplicate to create more slides -->
                    <div class="slide">
                        <img src="assets/images/slider-bg.jpg" alt=""/>
                        <div class="slide_content">
                             <div class="slide_content_wrap">
                                <!-- Text title -->
                                <h4 class="title"><i class="bg"></i>Morbi justo <span class="hide"> condimentum </span>text</h4>
                                <h5 class="title1"><i class="bg"></i>Lorem Ipsum is <span class="hide">simply dummy text</span> </h5>
                                <!-- /Text title -->
                            </div>
                        </div>
                    </div>
                    <!--/slide -->
                </div>
                <div class="timers"> </div>
                <div class="slidePrev"><span> </span></div>
                <div class="slideNext"><span> </span></div>
            </div>
            <!--/slider -->
        </div>
<!--start main -->
<div class="main_bg">
<div class="wrap">
    <div class="online_reservation">
    <div class="b_room">
        <div class="booking_room">
            <h4>Pesan Lapangan Secara Online</h4>
        </div>
        <div class="reservation">
            <ul>
                <li class="span1_of_1">
                    <h5>type of room:</h5>
                    <!----------start section_room----------->
                    <div class="section_room">
                        <select id="country" onchange="change_country(this.value)" class="frm-field required">
                            <option value="null">Select a type of room</option>
                            <option value="null">Suite room</option>         
                            <option value="AX">Single room</option>
                            <option value="AX">Double room</option>
                        </select>
                    </div>  
                </li>
                <li  class="span1_of_1 left">
                    <h5>check-in-date:</h5>
                    <div class="book_date">
                        <form>
                            <input class="date" id="datepicker" type="text" value="DD/MM/YY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
                        </form>

                    </div>                  
                </li>
                <li  class="span1_of_1 left">
                    <h5>check-out-date:</h5>
                    <div class="book_date">
                        <form>
                            <input class="date" id="datepicker1" type="text" value="DD/MM/YY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
                        </form>
                    </div>      
                </li>
                <li class="span1_of_2 left">
                    <h5>Adults:</h5>
                    <!----------start section_room----------->
                    <div class="section_room">
                        <select id="country" onchange="change_country(this.value)" class="frm-field required">
                            <option value="null">1</option>
                            <option value="null">2</option>         
                            <option value="AX">3</option>
                            <option value="AX">4</option>
                        </select>
                    </div>                  
                </li>
                <li class="span1_of_3">
                    <div class="date_btn">
                        <form>
                            <input type="submit" value="book now" />
                        </form>
                    </div>
                </li>
                <div class="clear"></div>
            </ul>
        </div>
        <div class="clear"></div>
        </div>
    </div>
    <!--start grids_of_3 -->
    <div class="grids_of_3">
      
    </div>  
</div>
</div>      
<!--start main -->
<div class="footer_bg">
<div class="wrap">
<div class="footer">
           <!--  <div class="copy">
                <p class="link"><span>© All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></span></p>
            </div> -->
            <div class="f_nav">
                <ul>
                    <li><a href="index.html">home</a></li>
                    <li><a href="rooms.html">rooms & suits</a></li>
                    <li><a href="reservation.html">reservation</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="soc_icons">
                <ul>
                    <li><a class="icon1" href="#"></a></li>
                    <li><a class="icon2" href="#"></a></li>
                    <li><a class="icon3" href="#"></a></li>
                    <li><a class="icon4" href="#"></a></li>
                    <li><a class="icon5" href="#"></a></li>
                    <div class="clear"></div>
                </ul>   
            </div>
            <div class="clear"></div>
</div>
</div>
</div>      
</body>
</html>
