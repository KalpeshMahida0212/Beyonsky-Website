<?php 
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BeyonSky</title>
	<link rel="icon" sizes="114x114" href="images/logo.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->



    <script src="jquery-3.2.1.m.js"></script>
    <script src="js/bootstrap.js"></script>
    
     <!--    languages-->

    <script type="text/javascript">
        var arrLang = new Array();
        arrLang['en'] = new Array();
        arrLang['hi'] = new Array();
        
        arrLang['en']['hm1'] = 'Home';
        arrLang['en']['hm2'] = 'Tours';
        arrLang['en']['hm3'] = 'Destination';
        arrLang['en']['hm4'] = 'India';
        arrLang['en']['hm5'] = 'International';
        arrLang['en']['hm6'] = 'Cruises';
        arrLang['en']['hm7'] = 'Hotels';
        arrLang['en']['hm8'] = 'Booking';
        arrLang['en']['hm9'] = 'Hotels';
        arrLang['en']['hm10'] = 'Galactic Tours';
        arrLang['en']['hm11'] = 'Services';
        arrLang['en']['hm12'] = 'Blog';
        arrLang['en']['hm13'] = 'About';
        arrLang['en']['hm14'] = 'Contact';
        arrLang['en']['hm15'] = 'Languages';
        arrLang['en']['hm16'] = 'English';
        arrLang['en']['hm17'] = 'Hindi';
        arrLang['en']['news1'] = 'Sign Up for a Newsletter';
      	arrLang['en']['news2'] = 'Sign up for our mailing list to get latest updates and offers.';
        arrLang['en']['ef3'] = 'Travelling to a unknown state for the first time can be very challenging. But thanks to the wonderful and personalised service from BeyonSky';
        arrLang['en']['ef4'] ='BeyonSky provides good quality service and the team is very supportive';
        arrLang['en']['ef5'] ='I had a great trip. Havenot faced any problem.Highly recommended. I had a great trip. Have not faced any problem.';
        arrLang['en']['book'] = 'Book Now';
        arrLang['en']['1'] = 'Flights';
        arrLang['en']['2'] = 'Hotels';
        arrLang['en']['3'] = 'Tours';
        arrLang['en']['4'] = 'Car Rent';
        arrLang['en']['5'] = 'Beach & Resorts';
        arrLang['en']['6'] = 'Cruises';
        arrLang['en']['top'] = 'Top Deals';
        arrLang['en']['11'] = 'The Oberoi';
        arrLang['en']['12'] = 'Quality Suits';
        arrLang['en']['13'] = 'The Hotel Zephyr';
        arrLang['en']['14'] = 'Da Vinci Villa';
        arrLang['en']['blog'] = 'Blog Post';
        arrLang['en']['111'] = 'The Ultimate Packing List For Female Travelers';
        arrLang['en']['112'] = 'How These 5 People Found The Path to Their Dream Trip';
        arrLang['en']['113'] = 'A Definitive Guide to the Best Dining and Drinking Venues in the City';
        arrLang['en']['find1'] = 'Where';
        arrLang['en']['find2'] = 'Check-in:';
        arrLang['en']['find3'] = 'Check-out:';
        arrLang['en']['find4'] = 'Guest';
        arrLang['en']['find5'] = 'Start Date:';
        arrLang['en']['find6'] = 'Return Date:';
        arrLang['en']['find7'] = 'Categories:';
        arrLang['en']['opt1'] = 'Suite';
        arrLang['en']['opt2'] = 'Super Deluxe';
        arrLang['en']['opt3'] = 'Balcony';
        arrLang['en']['opt4'] = 'Economy';
        arrLang['en']['opt5'] = 'Luxury';
        arrLang['en']['find8'] = 'Book Now';
        arrLang['en']['find9'] = 'Best Price Online';

        arrLang['en']['15'] = 'Hotel Taj';
        arrLang['en']['hm18'] = 'Freight';
        
      
      
      


        
        
        arrLang['hi']['hm1'] = 'होम';
        arrLang['hi']['hm2'] = 'टूर्स';
        arrLang['hi']['hm3'] = 'गंतव्य';
        arrLang['hi']['hm4'] = 'भारत';
        arrLang['hi']['hm5'] = 'अंतरराष्ट्रीय';
        arrLang['hi']['hm6'] = 'परिभ्रमण';
        arrLang['hi']['hm7'] = 'होटल';
        arrLang['hi']['hm8'] = 'बुकिंग';
        arrLang['hi']['hm9'] = 'होटल';
        arrLang['hi']['hm10'] = 'गेलेक्टिक टूर्स';
        arrLang['hi']['hm11'] = 'सेवाएं';
        arrLang['hi']['hm12'] = 'ब्लॉग';
        arrLang['hi']['hm13'] = 'हमारे बारे में';
        arrLang['hi']['hm14'] = 'हमसे संपर्क करें';
        arrLang['hi']['hm15'] = 'भाषा';
        arrLang['hi']['hm16'] = 'अंग्रेज़ी';
        arrLang['hi']['hm17'] = 'हिंदी';
        arrLang['hi']['t11'] = '2 दिन टूर';
        arrLang['hi']['t2'] = 'अद्भुत मालदीव टूर';
        arrLang['hi']['t3'] = '10 दिन परिभ्रमण';
        arrLang['hi']['t4'] = 'ग्रीस से स्पेन तक';
        arrLang['hi']['t5'] = 'हमारी सबसे छोटी एजेंसी का अन्वेषण करें';
        arrLang['hi']['t6'] = 'हमारी यात्रा एजेंसी';
        arrLang['hi']['t7'] = 'अनुभव करो';
        arrLang['hi']['t8'] = 'अब तक की सर्वश्रेष्ठ यात्रा';
        arrLang['hi']['news1'] = 'न्यूज़लेटर के लिए साइन अप करें';
        arrLang['hi']['news2'] = 'नवीनतम अपडेट और ऑफ़र प्राप्त करने के लिए हमारी मेलिंग सूची के लिए साइन अप करें।';
        arrLang['hi']['ef3'] ='पहली बार किसी अनजान राज्य की यात्रा करना काफी चुनौतीपूर्ण हो सकता है। लेकिन BeyonSky की अद्भुत और व्यक्तिगत सेवा के लिए धन्यवाद';
        arrLang['hi']['ef4'] ='BeyonSky अच्छी गुणवत्ता वाली सेवा प्रदान करता है और टीम बहुत सहायक है।';
        arrLang['hi']['ef5'] ='मेरी यात्रा बहुत अच्छी रही। किसी भी समस्या का सामना नहीं करना पड़ा।अत्यधिक अनुशंसित। मेरी यात्रा बहुत अच्छी रही। किसी समस्या का सामना नहीं किया।';
        arrLang['hi']['book'] = 'अभी बुक करें';
        arrLang['hi']['1'] = 'उड़ान';
        arrLang['hi']['2'] = 'होटल';
        arrLang['hi']['3'] = 'यात्रा ';
        arrLang['hi']['4'] = 'गाड़ी का किराया';
        arrLang['hi']['5'] = 'सागरतट & आश्रय';
        arrLang['hi']['6'] = 'परिभ्रमण';
        arrLang['hi']['top'] = 'शीर्ष सौदे';
        arrLang['hi']['11'] = 'ओबेरॉय';
        arrLang['hi']['12'] = 'गुणवत्ता सूट';
        arrLang['hi']['13'] = 'होटल जेफिर';
        arrLang['hi']['14'] = 'दा विंची विला';
        arrLang['hi']['15'] = 'होटल ताज';
        arrLang['hi']['blog'] = 'ब्लॉग';
        arrLang['hi']['111'] = 'अंतिम पैकिंग सूची महिला यात्री के लिए';
        arrLang['hi']['112'] = 'कैसे ये पांच लोग उनके सपनों की यात्रा का रास्ता खोजें';
        arrLang['hi']['113'] = 'शहर में सर्वश्रेष्ठ भोजन और पीने के स्थानों के लिए एक निश्चित गाइड';
        arrLang['hi']['find1'] = 'कहां :';
        arrLang['hi']['find2'] = 'चेक इन :';
        arrLang['hi']['find3'] = 'चेक आउट :';
        arrLang['hi']['find4'] = 'यात्री :';
        arrLang['hi']['find5'] = 'आरंभ करने की तिथि :';
        arrLang['hi']['find6'] = 'वापसी की तिथि :';
        arrLang['hi']['find7'] = 'श्रेणियाँ :';
        arrLang['hi']['opt1'] = 'सुइट';
        arrLang['hi']['opt2'] = 'सुपर डीलक्स';
        arrLang['hi']['opt3'] = 'बालकनी';
        arrLang['hi']['opt4'] = 'अर्थव्यवस्था';
        arrLang['hi']['opt5'] = 'भोग विलास';
        arrLang['hi']['find8'] = 'अभी बुक करें';
        arrLang['hi']['find9'] = 'सर्वोत्तम मूल्य ऑनलाइन';

        arrLang['hi']['hm18'] = 'परिवहन';
        arrLang['hi'][''] = '';
 

      


      
        
        $(document).ready(function (e) {
            $('.translate').click(function () {
                var lang = $(this).attr('id');

                $('.lang').each(function (index,element) {
                    $(this).text(arrLang[lang][$(this).attr('key')]);
                });
            });
        });
    </script>
    
    
    
    




<style type="text/css">
	
@font-face {
    font-family: logo;
    src: url(Bangers-Regular.ttf);
}


.logo {
    font-family:logo ;
    font-weight: bold;	
    font-size: 2.5em;
}
.ft{
      height: 63%;
      width: 52%;

	}

.container235{
	background-image:url(images/rsz_i.jpg);
	opacity:0.5;
	z-index: 0
}

.fnt{
	font-weight: bold;
	opacity: 1;
	z-index: 1
}
   
    

.ft{
      height: 63%;
      width: 52%;

	}





</style>



</style>
	</head>
	<body>
		
		<div class="Beyonsky-loader"></div>

	<div id="page">
		<nav class="Beyonsky-nav" role="navigation">
            <div class="top-menu">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-2">
                            <div id="Beyonsky-logo"><a href="index.php" class="logo">BeyonSky</a></div>
                        </div>
                        <div class="col-xs-10 text-right menu-1">
                            <ul>
                                <li class="active"><a class="lang" key="hm1" href="index.php" style="font-size:18px ;">Home</a></li>
                                <li  class="has-dropdown">
                                    <a class="lang" key="hm11"  href="#"style="font-size:18px ;">Services</a>
                                    <ul class="dropdown">
                                        <li><a class="lang" key="hm2"  href="#">Tours</a></li>
                                        <li><a class="lang" key="hm3"  href="#">Destination</a></li>
                                        <li><a class="lang" key="hm4" href="#">India</a></li>
                                        <li><a class="lang" key="hm5" href="#">International</a></li>
                                        <li><a class="lang" key="hm6" href="#">Cruises</a></li>
                                        <li><a class="lang" key="hm7" href="#">Hotels</a></li>
                                        </ul>
                                </li>
                                <li><a class="lang" key="hm18"  style="font-size:18px;" href="#">Freight</a></li>
                                <li><a class="lang" key="hm12"href="#"style="font-size:18px ;">Blog</a></li>
                                <li><a class="lang" key="hm13" href="about.php"style="font-size:18px ;">About</a></li>
                                <li><a class="lang" key="hm14" href="contact.php"style="font-size:18px ;">Contact</a></li>
                            
                                    <li class="has-dropdown">
                                    <a class="lang" key="hm15" href="#"style="font-size:18px ;">Languages</a>
                                    <ul class="dropdown">
                                        <li ><button style="  background-color: transparent;
                                            background-repeat:no-repeat;
                                            border: none;
                                            font-size: 1.2em;
                                            font-color: white;
                                            font-weight: 900;
                                            cursor:pointer;
                                            overflow: hidden;
                                            outline:none;" class="translate" id="en">English</button></li>
                                        <li ><button style="  background-color: transparent;
                                                background-repeat:no-repeat;
                                                border: none;
                                                font-color: white;
                                                font-weight: 900;
                                                font-size: 1.2em;
                                                cursor:pointer;
                                                overflow: hidden;
                                                outline:none;" class="translate" id="hi">Hindi</button></li>
                            </ul>
                            <li class="has-dropdown">
                                    <a class="lang" style="cursor:pointer;">
                                    <img src="images/user.png" width="30" height="30"></a>
                                    <ul class="dropdown" style="margin-left: -10px;">
                                        <li ><a href="#"><button style="  background-color: transparent;
                                                background-repeat:no-repeat;
                                                border: none;
                                                font-color: white;
                                                text-align: left;
                                                font-weight: 900;
                                                font-size: 1.2em;
                                                cursor:pointer;
                                                overflow: hidden;
                                                outline:none;"><?php echo $user_data['user_name']; ?></button></a></li>
                                        
                                        <li ><a href="logout.php"><button style="  background-color: transparent;
                                                background-repeat:no-repeat;
                                                border: none;
                                                font-color: white;
                                                font-weight: 900;
                                                font-size: 1.2em;
                                                cursor:pointer;
                                                overflow: hidden;
                                                outline:none;">Log Out</button></a>
                            </ul></li>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
	
		<aside id="Beyonsky-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/cover-img-6.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					
				   					<p style="font-size: 100px; color: #fff;">About Us</p>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="Beyonsky-about">
			<div class="container">
				<div class="row">
					<div class="about-flex">
						<div class="col-one-forth aside-stretch animate-box">
							<div class="row">
								<div class="col-md-12 about">
									<h2>About</h2>

									<ul>
										<li><a href="#">History</a></li>
										<li><a href="#">Staff</a></li>
										<li><a href="#">Connect with us</a></li>
										<li><a href="#">Faqs</a></li>
										<li><a href="#">Career</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-three-forth animate-box">
							<h2>History</h2>
							<div class="row">
								<div class="col-md-12">
									<p>We are a leading online travel company in India providing a 'best in class' customer experience with the goal to be 'India's Travel Planner'. Through our website, www.Beyonsky.com, our mobile applications and our other associated platforms, leisure and business travelers can explore, research, compare prices and book a wide range of services catering to their travel needs. Since our inception in 2006, more than 7 million customers have used one or more of our comprehensive travel-related services, which include domestic and international air ticketing, hotel bookings, homestays, holiday packages, bus ticketing, rail ticketing, activities and ancillary services. With over 103,000 hotels contracted across India, we are India's largest platform for domestic hotels.

A strong and "trusted" travel brand of India, our strengths include a large and loyal customer base, a multi-channel platform for leisure and business travelers, a robust mobile eco-system for a spectrum of travelers and suppliers, a strong technology platform designed to deliver a high level of scalability and innovation and a seasoned senior management team comprising of industry executives with deep roots in the travel industry in India and abroad.</p>

									

									<div class="row row-pb-sm">
										<div class="col-md-6">
											<img class="img-responsive" src="images/hotel-7.jpg" alt="">
										</div>
										<div class="col-md-6">
											<p>"Beyonsky", which means "Above the sky", is one of India's most well-recognized and awarded brands. Among others, we have won multiple awards from the Ministry of Tourism, Government of India, including the National Tourism Award for "Outstanding Performance as a Domestic Tour Operator" in Category I (Rest of India) for the assessment year 2014-15; three awards at the India Tourism Awards for 'Outstanding performance as a Domestic Tour Operator (Rest of India)','Outstanding performance as a Domestic Tour Operator in Jammu and Kashmir'.</p>
											
										</div>
									</div>


									<p>The acquisition of companies, intellectual property and talented individuals has been central to our growth strategy. In 2010, we acquired TSI and its subsidiaries in order to expand our B2B business, particularly our international air ticketing for small and medium scale enterprises. In 2012, we acquired Travelguru B2B and B2C entities from Travelocity, which remain well-established hotel aggregators in India. Through this acquisition, we expanded our hotel business by establishing more direct hotel relationships in India and improved our inventory of affordable travel options. Recently, we also acquired Air Travel Bureau Ltd. ("ATB"), India's largest independent corporate travel services provider to further strengthen our position in the growing corporate travel market in India. Now, with this combined entity, Beyonsky is the largest corporate travel services platform in India by Gross Bookings. We have also leveraged our leading position in the Indian travel ecosystem to make several "acqui-hires", including the teams from mGaadi and dudegenie, in order to grow our business.</p>

								

									<p>We are dedicated to ensuring a superior user experience on our platform and a critical component of that is customer service. We provide customer support at all stages of our customer's journey – before, during and after. Our customer "touch-points" include our website, mobile platforms, retail stores, call centres, a network of over 17,000 agents across India addressing the needs of a large fragmented market of travel agents and a portfolio of B2E clients across India employing over 4 million people.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		
		<div id="Beyonsky-subscribe" style="background-image: url(images/img_bg_2.jpg);margin-top: -100px" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center Beyonsky-heading animate-box">
						<h2 class="lang" key="news1">Sign Up for a Newsletter</h2>
						<p class="lang"  key="news2">Sign up for our mailing list to get latest updates and offers.</p>
						<form class="form-inline qbstp-header-subscribe">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Enter your email">
										<button onclick="myFunction()" type="submit" class="btn btn-primary">Subscribe</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<footer id="Beyonsky-footer" role="contentinfo" style="width: 100%">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-3 Beyonsky-widget">
                        <h4 >BeyonSky</h4>
                        <p>An ISO 9001:2015 company.</p>
                        
                    </div>
                    <div class="col-md-2 Beyonsky-widget">
                        <h4 class="lang" key="book">Book Now</h4>
                        <p>
                            <ul class="Beyonsky-footer-links">
                                <li><a href="#" class="lang" key="1">Flight</a></li>
                                <li><a href="#" class="lang" key="2">Hotels</a></li>
                                <li><a href="#" class="lang" key="3">Tour</a></li>
                                <li><a href="#" class="lang" key="4">Car Rent</a></li>
                            <li><a href="#" class="lang" key="5">Beach &amp; Resorts</a></li>
                                <li><a href="#" class="lang" key="6">Cruises</a></li>
                            </ul>
                        </p>
                    </div>
                    <div class="col-md-2 Beyonsky-widget">
                        <h4 class="lang" key="top">Top Deals</h4>
                        <p>
                            <ul class="Beyonsky-footer-links">
                                <li><a href="#" class="lang" key="11">The Oberoi</a></li>
                                <li><a href="#" class="lang" key="12">Quality Suites</a></li>
                                <li><a href="#" class="lang" key="13">The Hotel Zephyr</a></li>
                                <li><a href="#" class="lang" key="14">Da Vinci Villa</a></li>
                                <li><a href="#" class="lang" key="15">Hotel Taj</a></li>
                            </ul>
                        </p>
                    </div>
                    <div class="col-md-2">
                        <h4 class="lang" key="blog">Blog Post</h4>
                        <ul class="Beyonsky-footer-links">
                            <li><a href="#" class="lang" key="111">The Ultimate Packing List For Female Travelers</a></li>
                            <li><a href="#" class="lang" key="112">How These 5 People Found The Path to Their Dream Trip</a></li>
                            <li><a href="#" class="lang" key="113">A Definitive Guide to the Best Dining and Drinking Venues in the City</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-md-push-1">
                        <h4>Contact Information</h4>
                        <ul class="Beyonsky-footer-links">
                            <li>291 South 21th Street, <br> Suite 721 Mumbai BOM 400001</li>
                            <li><a href="tel://1234567920"> +91 7016 801 305</a></li>
                            <li><a href="mailto:info@yoursite.com">info@beyonsky.com</a></li>
                            <li><a href="#"> BeyonSky.com</a></li>

                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>
                        
Copyright &copy; All rights reserved by <a href="#" target="_blank">BeyonSky</a>
</span> 
                            
                        </p>
                    </div>
                </div>
            </div>
        </footer>
	</div>


	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<script>
function myFunction() {
  alert("Thank you for subscribing!");
}
</script>
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>