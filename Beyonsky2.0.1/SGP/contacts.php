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
    
    
     <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style1.css">
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
        arrLang['en']['ht1'] = 'VITS Hotel';
        arrLang['en']['ht2'] = 'Hotel Le Grande';
        arrLang['en']['ht3'] = 'Hotel Edison';
        arrLang['en']['ht4'] = 'Hotel Nelligan';
        arrLang['en']['ht5'] = 'Hotel Parle International';
        arrLang['en']['ht6'] = 'Hotel Bawa International';
        arrLang['en']['ht7'] = 'Hotel Aksa International';
        arrLang['en']['ht8'] = 'Hotel Ashray International';
        arrLang['en']['t1'] = 'Popular Hotels In World.';
        arrLang['en']['i1'] = 'VITS is a chain of luxury business hotels.';
        arrLang['en']['i2'] = 'The Hotel Le Grande is well-known world over for its services to their valuable guests.';
        arrLang['en']['i3'] = 'A small river named Duden flows by their place and supplies it with the necessary regelialia.';
        arrLang['en']['i4'] = 'A prime example of polished, urban living, Hôtel Nelligan gives guests everything they need for the perfect getaway.';
        arrLang['en']['i5'] = 'Located in an enviable location, you will be only 2 kms and 10 minutes away from Domestic Airport (Terminal 1).';
        arrLang['en']['i6'] = 'Hotel Bawa International Mumbai Airport is located close to Chhatrapati Shivaji Mumbai Airport Terminal 1, Terminal 2 both at the distance of 5-12 minutes.';
        arrLang['en']['i7'] = 'A small river named Duden flows by their place and supplies it with the necessary regelialia.';
        arrLang['en']['i8'] = 'Operating a 24-hour front desk, Hotel Aarya International is located in Mumbai.';
        arrLang['en']['a1'] = 'New York, USA';
        arrLang['en']['a2'] = 'Bandra Kurla Complex, Goregaon';
        arrLang['en']['a3'] = 'New York, USA';
        arrLang['en']['a4'] = '106, rue Saint-Paul Ouest Montréal, QC H2Y 1Z3';
        arrLang['en']['a5'] = 'New York, USA';
        arrLang['en']['a6'] = 'Near Domestic Airport, Plot No. 2087, Nehru Road Extn.';
        arrLang['en']['a7'] = 'New York, USA';
        arrLang['en']['a8'] = 'Road No 1 , Near Sion Railway Station, Sion, USA';
        arrLang['en']['s1'] = 'Sign Up for a Newsletter';
        arrLang['en']['s2'] = 'Sign up for our mailing list to get latest updates and offers.';
        arrLang['en']['s3'] = 'Subscribe';
        arrLang['en']['k1'] = 'Find your hotel';
        arrLang['en']['hm1'] = 'Home';
        arrLang['en']['hm2'] = 'Tours';
        arrLang['en']['hm3'] = 'Destination';
        arrLang['en']['hm4'] = 'India';
        arrLang['en']['hm5'] = 'International';
        arrLang['en']['hm6'] = 'Cruises';
        arrLang['en']['hm7'] = 'Hotels';
        arrLang['en']['hm8'] = 'Booking';
        arrLang['en']['hm9'] = 'Hotels';
        arrLang['en']['hm11'] = 'Services';
        arrLang['en']['hm12'] = 'Blog';
        arrLang['en']['hm13'] = 'About';
        arrLang['en']['hm14'] = 'Contact';
        arrLang['en']['hm15'] = 'Languages';
        arrLang['en']['hm16'] = 'English';
        arrLang['en']['hm17'] = 'Hindi';
        arrLang['en']['t11'] = '2 Days Tour';
        arrLang['en']['t2'] = 'Amazing Maldives Tour';
        arrLang['en']['t3'] = '10 Days Cruises';
        arrLang['en']['t4'] = 'From Greece to Spain';
        arrLang['en']['t5'] = 'Explore our most tavel agency';
        arrLang['en']['t6'] = 'Our Travel Agency';
        arrLang['en']['t7'] = 'Experience the';
        arrLang['en']['t8'] = 'Best Trip Ever';
        arrLang['en']['sgn'] = 'Sign In';
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
        arrLang['en']['lgn1'] = 'Remember Me';
        arrLang['en']['lg2'] = 'Create an account';
        arrLang['en']['lgn3'] = 'Login';
        arrLang['en']['f1'] = 'Freight';
        arrLang['en'][''] = '';
        arrLang['en'][''] = '';
        arrLang['en'][''] = '';
        arrLang['en'][''] = '';

     
      
      
      
      


        
        arrLang['hi']['ht1'] = 'वीआईटीएस होटल';
        arrLang['hi']['ht2'] = 'होटल ले ग्रांडे';
        arrLang['hi']['ht3'] = 'होटल एडिसन';
        arrLang['hi']['ht4'] = 'होटल निक्जन';
        arrLang['hi']['ht5'] = 'होटल पार्ले इंटरनेशनल';
        arrLang['hi']['ht6'] = 'होटल बावा इंटरनेशनल';
        arrLang['hi']['ht7'] = 'होटल अक्सा इंटरनेशनल';
        arrLang['hi']['ht8'] = 'होटल आश्रय इंटरनेशनल';
        arrLang['hi']['t1'] = 'दुनिया में लोकप्रिय होटल।';
        arrLang['hi']['i1'] = 'वीआईटीएस लक्जरी व्यापार होटल की एक श्रृंखला हैं';
        arrLang['hi']['i2'] = 'होटल ली ग्रांडे अपने मूल्यवान मेहमानों को अपनी सेवाओं के लिए प्रसिद्ध दुनिया भर में जाना जाता है।';
        arrLang['hi']['i3'] = 'डुडेन नाम की एक छोटी नदी उनके स्थान से बहती है और इसे आवश्यक regelialia के साथ आपूर्ति करता है।';
        arrLang['hi']['i4'] = 'पॉलिश, शहरी जीवन का एक प्रमुख उदाहरण, होटल नीलिजन मेहमानों को पूरी तरह से पलायन के लिए आवश्यक सब कुछ देता है।';
        arrLang['hi']['i5'] = 'एक ईर्ष्यापूर्ण स्थान पर स्थित, आप घरेलू हवाई अड्डे (टर्मिनल 1) से केवल 2 किमी और 10 मिनट दूर होंगे।';
        arrLang['hi']['i6'] = 'होटल बावा इंटरनेशनल मुंबई एयरपोर्ट छत्रपति शिवाजी मुंबई एयरपोर्ट टर्मिनल 1, टर्मिनल 2 के करीब 5-12 मिनट की दूरी पर स्थित है।';
        arrLang['hi']['i7'] = 'डुडेन नाम की एक छोटी नदी उनके स्थान से बहती है और इसे आवश्यक regelialia के साथ आपूर्ति करता है।';
        arrLang['hi']['i8'] = '24 घंटे का फ्रंट डेस्क संचालित, होटल आर्य इंटरनेशनल मुंबई में स्थित है।';
        arrLang['hi']['a1'] = 'न्यूयॉर्क, यूएसए';
        arrLang['hi']['a2'] = 'बांद्रा कुर्ला कॉम्प्लेक्स, गोरेगाव';
        arrLang['hi']['a3'] = 'न्यूयॉर्क, यूएसए';
        arrLang['hi']['a4'] = '106 सेंट-पॉल स्ट्रीट वेस्ट मॉन्ट्रियल, क्यूसी एच 2 वाई 1Z3';
        arrLang['hi']['a5'] = 'न्यूयॉर्क, यूएसए';
        arrLang['hi']['a6'] = 'घरेलू हवाई अड्डे के पास, प्लॉट संख्या 2087, नेहरू रोड एक्स्टन।';
        arrLang['hi']['a7'] = 'न्यूयॉर्क, यूएसए';
        arrLang['hi']['a8'] = 'रोड नंबर 1, सायन रेलवे स्टेशन, सायन, यूएसए के पास';
        arrLang['hi']['s1'] = 'न्यूजलेटर के लिए साइन अप करें';
        arrLang['hi']['s2'] = 'नवीनतम अपडेट और ऑफ़र प्राप्त करने के लिए हमारी मेलिंग सूची के लिए साइन अप करें।';
        arrLang['hi']['s3'] = 'सदस्यता लें';
        arrLang['hi']['k1'] = 'अपना होटल ढूंढें';
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
        arrLang['hi']['sgn'] = 'साइन इन करें';
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
        arrLang['hi']['blog'] = 'ब्लॉग पोस्ट';
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
        arrLang['hi']['lgn1'] = 'याद रखना';
        arrLang['hi']['lg2'] = 'खाता बनाएं';
        arrLang['hi']['lgn3'] = 'लॉग इन करें';
        arrLang['hi']['f1'] = 'परिवहन';
        arrLang['hi'][''] = '';
        arrLang['hi'][''] = '';
        arrLang['hi'][''] = '';
        arrLang['hi'][''] = '';
        arrLang['hi'][''] = '';
        arrLang['hi'][''] = '';
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
    
    
    
    



<style>
	
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
                                <li><a class="lang" key="f1"  style="font-size:18px;" href="#">Freight</a></li>
                    <li><a class="lang" key="hm12" href="blog.php"style="font-size:18px ;">Blog</a></li>
                                <li><a class="lang" key="hm13" href="#"style="font-size:18px ;">About</a></li>
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
                                        <li ><a href="Login.php"><button style="  background-color: transparent;
                                            background-repeat:no-repeat;
                                            border: none;
                                            font-size: 1.2em;
                                            font-color: white;
                                            font-weight: 900;
                                            cursor:pointer;
                                            overflow: hidden;
                                            outline:none;">Log In</button></a></li>
                                        <li ><a href="signup.php"><button style="  background-color: transparent;
                                                background-repeat:no-repeat;
                                                border: none;
                                                font-color: white;
                                                font-weight: 900;
                                                font-size: 1.2em;
                                                cursor:pointer;
                                                overflow: hidden;
                                                outline:none;">Sign Up</button></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
		<aside id="Beyonsky-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/i.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					
				   					<p class="lang" key="ctus" style="font-size: 100px; color: #fff;">Contact Us</p>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="Beyonsky-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box">
						<p class="lang" key="cf1" style="font-size: 50px;">Get in Touch</p>
						<form action="#">
							<div class="row form-group">
								<div class="col-md-6 padding-bottom">
									<label for="fname"><font class="lang" key="cf2" style="font-size: 21px;">First Name</font></label>
									<input type="text" id="fname" class="form-control"  placeholder="Your firstname">
								</div>
								<div class="col-md-6">
									<label for="lname"><font class="lang" key="cf3" style="font-size: 21px;">Last Name</font></label>
									<input type="text" id="lname" class="form-control" placeholder="Your lastname">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="email"><font class="lang" key="cf4" style="font-size: 21px;">Email</font></label>
									<input type="text" id="email" class="form-control" placeholder="Your email address">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="subject"><font class="lang" key="cf5" style="font-size: 21px;">Subject</font></label>
									<input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="message"><font class="lang" key="cf6" style="font-size: 21px;">Message</font></label>
									<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
								</div>
							</div>
							<div class="form-group text-center">
								<input type="submit" value="Send Message" class="btn btn-primary">
							</div>

						</form>		
					</div>
					<div class="col-md-10 col-md-offset-1 animate-box">
						<center><h3>Contact Information</h3></center>
						<div class="row contact-info-wrap">
							<div class="col-md-3">
								<p><span><i class="icon-location"></i></span> Suite 721 Mumbai BOM 400001 <br></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-phone3"></i></span> <a href="#"> +91 7016 801 305</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@yoursite.com">Beyonskyinfo.com</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-globe"></i></span> <a href="#">Beyonsky.com</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="map" class="Beyonsky-map"></div>
	
		<div id="Beyonsky-subscribe" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center Beyonsky-heading animate-box">
						<h2>Sign Up for a Newsletter</h2>
						<p>Sign up for our mailing list to get latest updates and offers.</p>
						<form class="form-inline qbstp-header-subscribe">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Enter your email">
										<button type="submit" class="btn btn-primary">Subscribe</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<footer id="Beyonsky-footer" role="contentinfo" style="width: 100%;">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 Beyonsky-widget">
						<h4>BeyonSky</h4>
						<p>An ISO 9001:2015 company.</p>
						<p>
							<ul class="Beyonsky-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
								<li><img src="images/gp.png" class="ft"></li><br><br>
								<li><img src="images/ap.png" class="ft"></li>

							</ul>
						</p>
					</div>
					<div class="col-md-2 Beyonsky-widget">
						<h4>Book Now</h4>
						<p>
							<ul class="Beyonsky-footer-links">
								<li><a href="#">Flight</a></li>
								<li><a href="#">Hotels</a></li>
								<li><a href="#">Tour</a></li>
								<li><a href="#">Car Rent</a></li>
								<li><a href="#">Beach &amp; Resorts</a></li>
								<li><a href="#">Cruises</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2 Beyonsky-widget">
						<h4>Top Deals</h4>
						<p>
							<ul class="Beyonsky-footer-links">
								<li><a href="#">The Oberoi</a></li>
								<li><a href="#">Quality Suites</a></li>
								<li><a href="#">The Hotel Zephyr</a></li>
								<li><a href="#">Da Vinci Villa</a></li>
								<li><a href="#">Hotel Taj</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2">
						<h4>Blog Post</h4>
						<ul class="Beyonsky-footer-links">
							<li><a href="#">The Ultimate Packing List For Female Travelers</a></li>
							<li><a href="#">How These 5 People Found The Path to Their Dream Trip</a></li>
							<li><a href="#">A Definitive Guide to the Best Dining and Drinking Venues in the City</a></li>
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
							
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="icon-heart2" aria-hidden="true"></i> by <a href="https://Beyonsky.com" target="_blank">BeyonSky</a>
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