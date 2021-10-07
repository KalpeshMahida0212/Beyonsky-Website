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

  

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
            <!--
            CSS
            ============================================= -->
            <link rel="stylesheet" href="css/linearicons.css">
            <link rel="stylesheet" href="css/font-awesome.min.css">
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/magnific-popup.css">
            <link rel="stylesheet" href="css/jquery-ui.css">                
            <link rel="stylesheet" href="css/nice-select.css">                          
            <link rel="stylesheet" href="css/animate.min.css">
            <link rel="stylesheet" href="css/owl.carousel.css">             
            <link rel="stylesheet" href="css/main.css">
    
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
        arrLang['en']['fl1'] = 'Flight';
        arrLang['en']['fl2'] = 'Hotel';
        arrLang['en']['fl3'] = 'Car Rent';
        arrLang['en']['fl4'] = 'Cruises';
        arrLang['en']['fl1'] = 'Flights';
        arrLang['en']['amz1'] = 'Amazing Travel';
        arrLang['en']['amz2'] = 'Experience an Amazing Travel with our Executive Service. Just Explore, Let us do the Rest.';
        arrLang['en']['oc1'] = 'Our Cruises';
        arrLang['en']['oc2'] = 'Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies';
        arrLang['en']['bt1'] = 'Book Your Trip';
        arrLang['en']['bt2'] = 'Do not go here and there, Just one click and sit back.';
        arrLang['en']['ms1'] = 'Marvelous Support';
        arrLang['en']['ms2'] = 'Your Demand, Our Command.';
        arrLang['en']['ef1'] = 'Our Satisfied Guests says';
        arrLang['en']['ef2'] = 'We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts'
        arrLang['en']['off1'] = '45';
        arrLang['en']['off2'] = '%';
        arrLang['en']['off3'] = 'OFF';
        arrLang['en']['off4'] = 'SALE';
        arrLang['en']['off5'] = 'Just hurry up limited offer!';
        arrLang['en']['off6'] = "Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean";
        arrLang['en']['off7'] = 'Book Now';
        arrLang['en']['off8'] = 'Read more';
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
        arrLang['en']['wtr'] = 'World Tourism rankings';
        arrLang['en']['ctr'] = 'COUNTRIES';
        arrLang['en']['vs'] = 'VISITS';
        arrLang['en']['pr'] = 'PERCENTAGES';
        arrLang['en']['c1'] = 'France';
        arrLang['en']['c2'] = 'Spain';
        arrLang['en']['c3'] = 'United States';
        arrLang['en']['c4'] = 'China';
        arrLang['en']['c5'] = 'Italy';
        arrLang['en']['c6'] = 'Turkey';
        arrLang['en']['c7'] = 'Mexico';
        arrLang['en']['c8'] = 'Thailand';
        arrLang['en']['ml'] = 'million';
        arrLang['en']['m1'] = '89.4 million';
        arrLang['en']['m2'] = '83.5 million';
        arrLang['en']['m3'] = '79.3 million';
        arrLang['en']['m4'] = '65.7 million';
        arrLang['en']['m5'] = '64.5 million';
        arrLang['en']['m6'] = '51.2 million';
        arrLang['en']['m7'] = '45.0 million';
        arrLang['en']['m8'] = '39.8 million';
        arrLang['en'][''] = '';
        arrLang['en'][''] = '';
        arrLang['en'][''] = '';
        arrLang['en'][''] = '';
        arrLang['en'][''] = '';
        arrLang['en'][''] = '';
        arrLang['en'][''] = '';
        arrLang['en'][''] = '';
        arrLang['en'][''] = '';
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
        arrLang['hi']['fl1'] = 'उड़ान';
        arrLang['hi']['fl2'] = 'होटल';
        arrLang['hi']['fl3'] = 'गाड़ी का किराया';
        arrLang['hi']['fl4'] = 'परिभ्रमण';
        arrLang['hi']['amz1'] = 'अद्भुत यात्रा';
        arrLang['hi']['amz2'] = 'हमारी कार्यकारी सेवा के साथ एक अद्भुत यात्रा का अनुभव करें। बस एक्सप्लोर करें, बाकी काम करते हैं।';
        arrLang['hi']['oc1'] = 'हमारे परिभ्रमण';
        arrLang['hi']['oc2'] = 'अलग होकर वे बुकमार्क्सग्रोव में रहते हैं, सिमेंटिक्स के तट पर, एक बड़ा भाषा महासागर। ड्यूडेन नाम की एक छोटी नदी उनके स्थान से बहती है और आपूर्ति करती है';
        arrLang['hi']['bt1'] = 'अपनी यात्रा बुक करें';
        arrLang['hi']['bt2'] = 'इधर-उधर मत जाओ, बस एक क्लिक करके बैठ जाओ।';
        arrLang['hi']['ms1'] = 'अद्भुत समर्थन';
        arrLang['hi']['ms2'] = 'आपकी मांग, हमारा आदेश।';
        arrLang['hi']['ef1'] = 'हमारे संतुष्ट मेहमान';
        arrLang['hi']['ef2'] ='हम अपनी कामयाबी को बहुत दूर बताना पसंद करते हैं, पहाड़ों शब्द के पीछे, वोकालिया और कंसोनेंटिया देशों से दूर, अंधे ग्रंथ रहते हैं';
        arrLang['hi']['off1'] = '45';
        arrLang['hi']['off2'] = '%';
        arrLang['hi']['off3'] = 'छूट';
        arrLang['hi']['off4'] = 'बिक्री';
        arrLang['hi']['off5'] = 'जल्दी करें लिमिटेड ऑफर!';
        arrLang['hi']['off6'] = 'अलग-अलग वे बुकमार्क्सग्रोव में रहते हैं, सिमेंटिक्स के तट पर, एक बड़ा भाषा महासागर';
        arrLang['hi']['off7'] = 'अभी बुक करें';
        arrLang['hi']['off8'] = 'अधिक पढ़ें';
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
        arrLang['hi']['wtr'] = 'विश्व पर्यटन रैंकिंग';
        arrLang['hi']['ctr'] = 'देश';
        arrLang['hi']['vs'] = 'दौरा';
        arrLang['hi']['pr'] = 'प्रतिशत';
        arrLang['hi']['c1'] = 'फ्रांस';
        arrLang['hi']['c2'] = 'स्पेन';
        arrLang['hi']['c3'] = 'संयुक्त राज्य अमेरिका';
        arrLang['hi']['c4'] = 'चीन';
        arrLang['hi']['c5'] = 'इटली';
        arrLang['hi']['c6'] = 'तुर्की';
        arrLang['hi']['c7'] = 'मेक्सिको';
        arrLang['hi']['c8'] = 'थाईलैंड';
        arrLang['hi']['m1'] = '89.4 मिलियन';
        arrLang['hi']['m2'] = '83.5 मिलियन';
        arrLang['hi']['m3'] = '79.3 मिलियन';
        arrLang['hi']['m4'] = '65.7 मिलियन';
        arrLang['hi']['m5'] = '64.5 मिलियन';
        arrLang['hi']['m6'] = '51.2 मिलियन';
        arrLang['hi']['m7'] = '45.0 मिलियन';
        arrLang['hi']['m8'] = '39.8 मिलियन';
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

	@font-face {
    font-family: flight;
    src: url(Philosopher-Regular.ttf);
}


.f1{
    font-family:flight ;
    font-weight: bold;	
    font-size: 0.5em;
}

@font-face {
    font-family: routes;
    src: url(DoHyeon-Regular.ttf);
}


.f2{
    font-family:routes ;
    font-weight: bold;	
    font-size: 4em;
}


.flight  li {

    color: white;
    list-style-type: none;
    font-family: 'Sunflower', sans-serif;
    font-size: 1.5em;
    border-bottom: 1 px solid grey;
}
.flight  li a{

    color: black;
    list-style-type: none;
    font-family: 'Sunflower', sans-serif;
}

.flight  li a:hover{
    color: #757577;
    list-style-type: none;
    text-decoration: none;
}
.flight {
        padding: 10px 0px;
        width: 100%;
}





.ft{
      height: 63%;
      width: 52%;

	}
.container-fluid{
margin-top: -10px;

}
.col-xs-2{

	margin-top: -15px;
	margin-left: -10px;
}





</style>
<script>(function(w, d) { w.CollectId = "61540d0fe3ebf6511abdf539"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>

</head>
	<body>
		

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
                                    <a class="lang" key="hm11"  href="error404.php"style="font-size:18px ;">Services</a>
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
			   	<li style="background-image: url(images/d1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Hello, <?php echo $user_data['user_name']; ?></h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/mal2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2 class="lang" key="t3">4 Days Tour</h2>
				   					<h1 class="lang" key="t4">Amazing Maldives Tour</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/blog-5.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2 class="lang" key="t5">Explore our most tavel agency</h2>
				   					<h1 class="lang" key="t6">Our Travel Agency</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/blog7.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2 class="lang" key="t7">Experience the</h2>
				   					<h1 class="lang" key="t8">Best Trip Ever</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>	   	
			  	</ul>
		  	</div>
		</aside>
		<div id="Beyonsky-reservation">
            <!-- <div class="container"> -->
                <div class="row">
                    <div class="search-wrap">
                        <div class="container">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#flight"><i class="flaticon-plane"></i> Flight</a></li>
                                <li><a data-toggle="tab" href="#hotel"><i class="flaticon-resort"></i> Hotel</a></li>
                                <li><a data-toggle="tab" href="#car"><i class="flaticon-car"></i> Car Rent</a></li>
                                <li><a data-toggle="tab" href="#cruises"><i class="flaticon-boat"></i> Cruises</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div id="flight" class="tab-pane fade in active">
                                <form method="post" class="Beyonsky-form">
                                <div class="row">
                                 <div class="col-md-3">
                                    <div class="form-group">
                                    <label for="date">Where:</label>
                                    <div class="form-field">
                                      <input type="text" id="location" class="form-control" placeholder="Search Location">
                                    </div>
                                  </div>
                                 </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <label for="date">Check-in:</label>
                                    <div class="form-field">
                                      <i class="icon icon-calendar2"></i>
                                      <input type="text" id="date" class="form-control date" placeholder="Check-in date">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <label for="date">Check-out:</label>
                                    <div class="form-field">
                                      <i class="icon icon-calendar2"></i>
                                      <input type="text" id="date" class="form-control date" placeholder="Check-out date">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="guests">Guest</label>
                                    <div class="form-field">
                                      <i class="icon icon-arrow-down3"></i>
                                      <select name="people" id="people" class="form-control">
                                        <option value="#">1</option>
                                        <option value="#">2</option>
                                        <option value="#">3</option>
                                        <option value="#">4</option>
                                        <option value="#">5+</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <input type="submit" name="submit" id="submit" value="Find Flights" class="btn btn-primary btn-block">
                                </div>
                              </div>
                            </form>
                         </div>
                         <div id="hotel" class="tab-pane fade">
                              <form method="post" class="Beyonsky-form">
                                <div class="row">
                                 <div class="col-md-2">
                                    <div class="booknow">
                                        <h2 class="lang" key="find8">Book Now</h2>
                                        <span class="lang" key="find9">Best Price Online</span>
                                    </div>
                                 </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="date" class="lang" key="find2">Check-in:</label>
                                    <div class="form-field">
                                      <i class="icon icon-calendar2"></i>
                                      <input type="text" id="date" class="form-control date" placeholder="Check-in date">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="date" class="lang" key="find3">Check-out:</label>
                                    <div class="form-field">
                                      <i class="icon icon-calendar2"></i>
                                      <input type="text" id="date" class="form-control date" placeholder="Check-out date">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <label for="guests" class="lang" key="find4">Guest:</label>
                                    <div class="form-field">
                                      <i class="icon icon-arrow-down3"></i>
                                      <select name="people" id="people" class="form-control">
                                        <option value="#"style="color:black ;">1</option>
                                        <option value="#"style="color:black ;">2</option>
                                        <option value="#"style="color:black ;">3</option>
                                        <option value="#"style="color:black ;">4</option>
                                        <option value="#"style="color:black ;">5+</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <input type="submit" name="submit" id="submit" value="Find Hotel" class="btn btn-primary btn-block">
                                </div>
                              </div>
                            </form>
                           </div>
                           <div id="car" class="tab-pane fade">
                            <form method="post" class="Beyonsky-form">
                                <div class="row">
                                 <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="date" class="lang" key="find1">Where:</label>
                                    <div class="form-field">
                                      <input type="text" id="location" class="form-control" placeholder="Search Location">
                                    </div>
                                  </div>
                                 </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="date" class="lang" key="find5">Start Date:</label>
                                    <div class="form-field">
                                      <i class="icon icon-calendar2"></i>
                                      <input type="text" id="date" class="form-control date" placeholder="Check-in date">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="date" class="lang" key="find6">Return Date:</label>
                                    <div class="form-field">
                                      <i class="icon icon-calendar2"></i>
                                      <input type="text" id="date" class="form-control date" placeholder="Check-out date">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <input type="submit" name="submit" id="submit" value="Find Car" class="btn btn-primary btn-block">
                                </div>
                              </div>
                            </form>
                           </div>
                           <div id="cruises" class="tab-pane fade">
                              <form method="post" class="Beyonsky-form">
                                <div class="row">
                                 <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="date" class="lang" key="find1">Where:</label>
                                    <div class="form-field">
                                      <input type="text" id="location" class="form-control" placeholder="Search Location">
                                    </div>
                                  </div>
                                 </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="date" class="lang" key="find5">Start Date:</label>
                                    <div class="form-field">
                                      <i class="icon icon-calendar2"></i>
                                      <input type="text" id="date" class="form-control date" placeholder="Check-in date">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <label for="guests" class="lang" key="find7">Categories:</label>
                                    <div class="form-field">
                                      <i class="icon icon-arrow-down3"></i>
                                      <select name="category" id="category" class="form-control">
                    <option value="#" class="lang" key="opt1"style="color:black ;">Suite</option>
                    <option value="#" class="lang" key="opt2"style="color:black ;">Super Deluxe</option>
                    <option value="#" class="lang" key="opt3"style="color:black ;">Balcony</option>
                    <option value="#" class="lang" key="opt4"style="color:black ;">Economy</option>
                    <option value="#" class="lang" key="opt5"style="color:black ;">Luxury</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <input type="submit" name="submit" id="submit" value="Find Cruises" class="btn btn-primary btn-block">
                                </div>
                              </div>
                            </form>
                           </div>
                     </div>
                    </div>
                </div>
            </div>
        </div>

		<div id="Beyonsky-services"style="margin-top: -30px;">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-3 animate-box text-center ">
						<div class="services">
							<span class="icon">
								<i class="flaticon-around"></i>
							</span>
							<h3 class="lang" key="amz1">Amazing Travel</h3>
							<p class="lang" key="amz2">Experience an Amazing Travel with our Executive Service. Just Explore, Let us do the Rest.</p>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-boat"></i>
							</span>
							<h3 class="lang" key="oc1">Our Cruises</h3>
							<p class="lang" key="oc2">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-car"></i>
							</span>
							<h3 class="lang" key="bt1">Book Your Trip</h3>
							<p class="lang" key="bt2">Don't go here and there, Just one click and sit back.</p>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-postcard"></i>
							</span>
							<h3 class="lang" key="ms1"><a href="" style="color: black;">Marvelous Support</a></h3>
							<p class="lang" key="ms2"> Your Demand, Our Command.</p>
						</div>
					</div>
				</div>
			</div>
		</div>


		

		
<div id="Beyonsky-intro" class="intro-img" style="background-image: url(images/cover-img-1.jpg);margin-top:-100px;height:400px;" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 animate-box">
						<div class="intro-desc">
							<div class="text-salebox">
								<div class="text-lefts">
									<div class="sale-box">
										<div class="sale-box-top">
											<h2 class="number lang" key="off1">45</h2>
											<span class="sup-1 lang" key="off2">%</span>
											<span class="sup-2 lang" key="off3">Off</span>
										</div>
										<h2 class="text-sale lang" key="off4" style="padding-top: 18px;">Sale</h2>
									</div>
								</div>
								<div class="text-rights">
									<h3 class="title lang" key="off5">Just hurry up limited offer!</h3>
									<p class="lang" key="off6">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									<p><a href="#" class="btn btn-primary lang" key="off7">Book Now</a> <a key="off8" href="#" class="btn btn-primary btn-outline lang">Read more</a></p>
								</div>
							</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>

		
<br><br>



<!-- flights-->


<div class="row"> 
</div>
<br><br><br><br>

<div class="section-top-border" style="margin-top:-100px ;">
                        <h3 class="mb-30 lang" key="wtr"style="text-align: center;">World Tourism rankings</h3>
                        <div class="progress-table-wrap">
                            <div class="progress-table">
                                <div class="table-head">
                                    <div class="serial">#</div>
                                    <div class="country lang" key="ctr">Countries</div>
                                    <div class="visit lang" key="vs">Visits</div>
                                    <div class="percentage lang"key="pr">Percentages</div>
                                </div>
                                <div class="table-row">
                                    <div class="serial">01</div>
                                    <div class="country"> <img src="images\flags\f1.png" style="width:100px;height: 60px;" alt="flag"><p class="country lang"key="c1">France</p></div>
                                    <div class="visit lang"key="m1">89.4 million</div>
                                    <div class="percentage">
                                        <div class="progress">
                                            <div class="progress-bar color-1" role="progressbar" style="width: 89.4%" aria-valuenow="89.4" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-row">
                                    <div class="serial">02</div>
                                    <div class="country"> <img src="images\flags\f2.png" style="width:100px;height: 60px;" alt="flag"><p class="country lang"key="c2">Spain</p></div>
                                    <div class="visit lang"key="m2">83.5 million</div>
                                    <div class="percentage">
                                        <div class="progress">
                                            <div class="progress-bar color-2" role="progressbar" style="width: 83.5%" aria-valuenow="83.5" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-row">
                                    <div class="serial">03</div>
                                    <div class="country"> <img src="images\flags\f3.png"style="width:100px;height: 60px;" alt="flag"><p class="country lang"key="c3">United States</p></div>
                                    <div class="visit lang"key="m3">79.3 million</div>
                                    <div class="percentage">
                                        <div class="progress">
                                            <div class="progress-bar color-3" role="progressbar" style="width: 79.3%" aria-valuenow="79.3" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-row">
                                    <div class="serial">04</div>
                                    <div class="country"> <img src="images\flags\f4.png" style="width:100px;height: 60px;"alt="flag"><p class="country lang"key="c4">China</p></div>
                                    <div class="visit lang"key="m4">65.7 million</div>
                                    <div class="percentage">
                                        <div class="progress">
                                            <div class="progress-bar color-4" role="progressbar" style="width: 65.7%" aria-valuenow="65.7" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-row">
                                    <div class="serial">05</div>
                                    <div class="country"> <img src="images\flags\f5.png"style="width:100px;height: 60px;" alt="flag"><p class="country lang"key="c5">Italy</p></div>
                                    <div class="visit lang"key="m5">64.5 million</div>
                                    <div class="percentage">
                                        <div class="progress">
                                            <div class="progress-bar color-7" role="progressbar" style="width: 64.5%" aria-valuenow="64.5" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-row">
                                    <div class="serial">06</div>
                                    <div class="country"> <img src="images\flags\f6.png"style="width:100px;height: 60px;" alt="flag"><p class="country lang"key="c6">Turkey</p></div>
                                    <div class="visit lang"key="m6">51.2 million</div>
                                    <div class="percentage">
                                        <div class="progress">
                                            <div class="progress-bar color-6" role="progressbar" style="width: 51.2%" aria-valuenow="51.2" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-row">
                                    <div class="serial">07</div>
                                    <div class="country"> <img src="images\flags\f7.png"style="width:100px;height: 60px;" alt="flag"><p class="country lang"key="c7">Mexico</p></div>
                                    <div class="visit lang"key="m7">45.0 million</div>
                                    <div class="percentage">
                                        <div class="progress">
                                            <div class="progress-bar color-7" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
</div>
                                    </div>
                                </div>
                                <div class="table-row">
                                    <div class="serial">08</div>
                                    <div class="country"> <img src="images\flags\f8.png"style="width:100px;height: 60px;" alt="flag"><p class="country lang"key="c8">Thailand</p></div>
                                    <div class="visit lang"key="m8">39.8 million</div>
                                    <div class="percentage">
                                        <div class="progress">
                                            <div class="progress-bar color-8" role="progressbar" style="width: 39.8%" aria-valuenow="39.8" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>





<!-- end flights-->




		<div id="Beyonsky-testimony" class="Beyonsky-light-grey" style="margin-top:-70px">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center Beyonsky-heading animate-box" style="margin-top:-70px;">
                        <h2 class="lang" key="ef1">Our Satisfied Guests says</h2>
                        <p class="lang" key="ef2">We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 animate-box">                      
                        <div class="owl-carousel2">
                            <div class="item">
                                <div class="testimony text-center">
                                    <span class="img-user" style="background-image: url(images/rev1.jpeg);"></span>
                                    <span class="user">Hemant Mishra</span>
                                    <small>New Delhi,India</small>
                                    <blockquote>
                                        <p class="lang" key="ef3">" Travelling to a unknown state for the first time can be very challenging. But thanks to the wonderful and personalised service from BeyonSky.</p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony text-center">
                                    <span class="img-user" style="background-image: url(images/rev2.jpeg);"></span>
                                    <span class="user">Kaushal Kishor</span>
                                    <small>Kolkata,India</small>
                                    <blockquote>
                                        <p class="lang" key="ef4">BeyonSky provides good quality service and the team is very supportive. </p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony text-center">
                                    <span class="img-user" style="background-image: url(images/rev3.jpeg);"></span>
                                    <span class="user">Apoorv Gupta</span>
                                    <small>Pune,India</small>
                                    <blockquote>
                                        <p class="lang" key="ef5">I had a great trip. Haven't faced any problem.Highly recommended. I had a great trip. Haven't faced any problem. </p>
                                    </blockquote>
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

