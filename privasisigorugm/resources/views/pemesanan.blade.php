<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Pemesanan | Lembah Universitas Gadjah Mada</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="assets/js/jquery.min.js"></script>
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
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

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
			<!-- start profile_details -->
					<form class="style-1 drp_dwn">
						<div class="row">
							<div class="grid_3 columns">
								<select class="custom-select" id="select-1">
									<option selected="selected">EN</option>
									<option>USA</option>
									<option>AUS</option>
									<option>UK</option>
									<option>IND</option>
								</select>
							</div>		
						</div>		
					</form>
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
<!--start main -->
<div class="main_bg">
<div class="wrap">
	<div class="main">
		<div class="res_online">
			<h4>Petunjuk Pemesanan</h4>
			<p class="para">Penyewa diminta mengisikan form secara benar agar permintaan pemesanan bisa depat diproses</p>
			<p class="para">Penyewa melakukan pembayaran setelah mengisi form</p>
			<p class="para">Penyewa akan mendapatkan konfirmasi pembayaran dari petugas melalui SMS/E-mail</p>

		</div>			
			<div class="span_of_2">
				 <div class="contact-form">
				<form method="post" action="{{(url('post-order'))}}">
					 <input type="hidden" name="_token" value="{{ csrf_token() }}">
					    	<div>
						    	<span><label>NAMA</label></span>
						    	<span><input name="nama" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>NO IDENTITAS (KTP/SIM/KTM)</label></span>
						    	<span><input name="no_identitas" type="text" class="text"></span>
						    </div>
						    <div>
						    	<span><label>ALAMAT</label></span>
						    	<span><input name="alamat_penyewa" type="text" class="text"></span>
						    </div>
						    <div>
						     	<span><label>E-MAIL</label></span>
						    	<span><input name="email" type="text" class="text"></span>
						    </div>
						    <div>
						     	<span><label>NO HP</label></span>
						    	<span><input name="no_hp" type="text" class="text"></span>
						    </div>
						    	<span><input name="status" type="hidden" class="text" value="MEMBER"></span>
						    <!-- <div>
						    	<span><label>TANGGAL</label></span>
						    	<span><input name="tanggal_book" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>JAM</label></span>
						    	<span><input name="jam" type="text" class="textbox"></span>
						    </div> -->
						   <div>
						   		<span><input type="submit" value="submit us"></span>
						  </div>
					    </form>
				</div>
			</div>
				<div class="clear"></div>
			</div>
	</div>
</div>
</div>		
<!--start main -->
<div class="footer_bg">
<div class="wrap">
<div class="footer">
			<div class="copy">
				<p class="link"><span>© All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></span></p>
			</div>
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