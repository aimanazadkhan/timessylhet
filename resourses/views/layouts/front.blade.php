@php
	$category=DB::table('categories')->orderBy('id','ASC')->get();
	$seo=DB::table('seos')->first();
	$social=DB::table('socials')->first();
	$horizontal1=DB::table('ads')->where('type',2)->first();
	$setting=DB::table('settings')->first();
@endphp
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="{{ $seo->meta_author ??'' }}">
        <meta name="keyword" content="{{ $seo->meta_keyword ??''}}">
        <meta name="description" content="{{ $seo->meta_description ??''}}">
        <meta name="google-verification" content="{{ $seo->google_verification ??''}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('meta')
     
        <title>{{ $seo->meta_title }}</title>
         
     <link rel="icon" href="{{ asset($setting->favicon ??'') }}">
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel="stylesheet" id="bootstrap-css" href="{{ asset('public/frontend/css/bootstrap.minfe9d.css?ver=4.7.3') }}" type="text/css" media="all" />
<link rel="stylesheet" id="font-awesome-css" href="{{ asset('public/frontend/css/font-awesome.minfe9d.css?ver=4.7.3') }}" type="text/css" media="all" />
<link rel="stylesheet" id="archive-style-css" href="{{ asset('public/frontend/css/archive-stylefe9d.css?ver=4.7.3') }}" type="text/css" media="all" />
<link rel="stylesheet" id="responsive-css" href="{{ asset('public/frontend/css/responsivefe9d.css?ver=4.7.3') }}" type="text/css" media="all" />
<link rel="stylesheet" id="menu-css" href="{{ asset('public/frontend/css/menufe9d.css?ver=4.7.3') }}" type="text/css" media="all" />
<link rel="stylesheet" id="style-css" href="{{ asset('public/frontend/stylefe9d.css?ver=4.7.3') }}" type="text/css" media="all" />
<script type="text/javascript" src="{{ asset('public/frontend/js/jquery/jqueryb8ff.js?ver=1.12.4') }}"></script>
<script type="text/javascript" src="{{ asset('public/frontend/js/jquery/jquery-migrate.min330a.js?ver=1.4.1') }}"></script>
<script type="text/javascript" src="{{ asset('public/frontend/js/bootstrap.minfe9d.js?ver=4.7.3') }}"></script>
<script type="text/javascript" src="{{ asset('public/frontend/js/jquery.minfe9d.js?ver=4.7.3') }}"></script>
<script type="text/javascript" src="{{ asset('public/frontend/js/mainfe9d.js?ver=4.7.3') }}"></script>
<script type="text/javascript" src="{{ asset('public/frontend/js/lazyload.minfe9d.js?ver=4.7.3') }}"></script>
<style>

body {
	background-color:#ffffff;
    font-size: 17px;
	width:100%;
	font-family: SolaimanLipiNormal;
}
.main_wbsite{
	background-color:#ffffff;
	box-shadow: 0 0 20px #ddd;
}
.scrool_1{
	padding:6px;
	font-size:17px;
	background-color:#827F7F;
	font-weight: 400;
	color:#FFFFFF;
	text-align: left;
}
.scrool_5{
	padding:6px;
	font-size:17px;
	background-color:#9A1515;
	font-weight: 400;
	color:#FFFFFF;
	text-align: left;
}

.catagory-title{
	background-color: #ECEAEA;
	border-left: 5px solid#EB0303;
	padding: 6px;
	margin-bottom: 7px;
	margin-top: 7px;
	color: #000;
	font-weight: 400;
	font-size: 20px;
}
.catagory-title a{
	color: #000;
	font-weight: 400;
	font-size: 20px;
	padding-left: 5px;
}


.catagory_title_1{
    background:#F0F0F0;
}
#pointer a{
    color: #fff;
	font-weight: 400;
	font-size: 17px;
    text-decoration: none;
}
#pointer {
	color: #fff;
	font-weight: 400;
	font-size: 17px;
    width: 180px;
    height: 40px;
    position: relative;
    background: #01284F;
    padding-top:10px;
    padding-left:10px;
    margin:0;
    margin-bottom:8px;
    margin-top:10px;
  }
#pointer:after {     
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 0;
    height: 0 white;
  }
#pointer:before {
    content: "";
    position: absolute;
    right: -20px;
    bottom: 0;
    width: 0;
    height: 0;
    border-left: 20px solid #01284F;
    border-top: 20px solid transparent;
    border-bottom: 20px solid transparent;
  }
 
.catagory_title_2{
    display: block;
    margin-bottom:7px;
    background-color: #EDE9E9;
}  
.catagory_title_2 p{ 
    color: #fff;
	font-weight: 400;
	font-size: 18px;
    text-decoration: none; 
    position:relative;
    display: inline-block; 
    margin: 0px 0 0 0 !important;
    background: #cc0000;
    padding:8px 20px;
}
.catagory_title_2 p:after{
    left: 100%;
    height: 0;
    width: 7px;
    position: absolute;
    top: 0;
    content: "";
    pointer-events: none;
    margin-left: 0;
    margin-top: 0;
    border-top: 41px solid #cc0000;
    border-right: 15px solid transparent;
}
.catagory_title_2  a{ 
    color: #fff;
	font-weight: 400;
	font-size: 18px;
    text-decoration: none; 
    position:relative;
    display: inline-block; 
    margin: 0px 0 0 0 !important;
    background: #cc0000;
    padding:8px 20px;
} 
.catagory_title_2 a:after{
    left: 100%;
    height: 0;
    width: 7px;
    position: absolute;
    top: 0;
    content: "";
    pointer-events: none;
    margin-left: 0;
    margin-top: 0;
    border-top: 41px solid #cc0000;
    border-right: 15px solid transparent;
}


.catagory_title_3{
    display: block;
    margin-bottom:7px;
    background-color: #FBF8F8;
    border-bottom: 2px solid#cc0000;
    border-top: 1px solid#EDE9E9;
    border-right: 1px solid#EDE9E9;
}
.catagory_title_3 p{ 
    color: #fff;
	font-weight: 400;
	font-size: 18px;
    text-decoration: none; 
    position:relative;
    display: inline-block; 
    margin: 0px 0 0 0 !important;
    background: #cc0000;
    padding:8px 20px;
}
.catagory_title_3  a{ 
    color: #fff;
	font-weight: 400;
	font-size: 18px;
    text-decoration: none; 
    position:relative;
    display: inline-block; 
    margin: 0px 0 0 0 !important;
    background:#cc0000;
    padding:8px 20px;
} 
.catagory_title_3 p:after{
    left: 100%;
    height: 0;
    width: 7px;
    position: absolute;
    top: 0;
    content: "";
    pointer-events: none;
    margin-left: 0;
    margin-top: 0;
    border-bottom: 43px solid #cc0000;
    border-right: 30px solid transparent;
}
.catagory_title_3 a:after{
    left: 100%;
    height: 0;
    width: 7px;
    position: absolute;
    top: 0;
    content: "";
    pointer-events: none;
    margin-left: 0;
    margin-top: 0;
    border-bottom: 43px solid #cc0000;
    border-right: 30px solid transparent;
}


.hadding_1{
    margin: 0;
    padding-bottom: 7px;
    margin-top: 8px;
}
.hadding_1 a{
    font-size:22px;
	line-height:26px;
	font-weight:400;
    color:#000;
    text-decoration:none;    
}
.hadding_1 a:hover{
    color:#0F7E7F;
}

.hadding_2{
    margin: 0;
    padding: 7px 2px 7px 4px;
}
.hadding_2 a{
    font-size:20px;
	font-weight:400;
	line-height:25px;
    color:#000;
    text-decoration:none;    
}
.hadding_2 a:hover{
    color:#E31418;
}

.hadding_3{  
    padding-right: 3px;
    padding-left: 6px;
    padding-bottom:4px;
    margin: 0;
}
.hadding_3 a{
    font-size:18px;
	line-height:23px;
	font-weight:400;
    color:#000;
    text-decoration:none;
}
.hadding_3 a:hover{
    color:#FE0B05;
}


.photo_caption {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.3); /* Black see-through */
  color: #00ACEE; 
  width: 100%;
  transition: .5s ease;
  opacity:0;
  padding: 10px;
  margin:0;
}
.photo_caption a {
    text-decoration:none;
    color:#fff;
	font-size:20px;
	line-height:25px;
	font-weight:400;
}

.Name .photo_caption  {
  opacity: 2;
}
.more-news a{
	color:#054502;
	font-size:17px;
	font-weight:400;
	text-decoration: none;
	float: right;
	padding-top: 7px;
}
.more-news a:hover{
	color: #EB0303;
}

.footer {
	background-color:#2D2D2D;
	margin-top:30px;
	margin-left:13px;
	margin-right:13px;
	padding:40px 20px;
	overflow:hidden;
}
.footer-menu ul li a{
    color: #fff;
    text-decoration: none;
}
.editorial_1 {
	font-size:17px;
	color: #fff;
    margin-bottom: 20px;
    border-bottom: 1px solid#fff;
    padding-bottom: 20px;
}
.editorial_2 {
    border-bottom: 1px solid#fff;
    padding-bottom: 20px;
	font-size:17px;
	color: #fff;
    margin-bottom: 30px;
}
.btm-social ul li a{
    color: #fff;
    text-decoration: none;
}
.root{
	background-color:#000000;
	overflow:hidden;
	padding:10px;
	margin-left:13px;
	margin-right:13px;
}
.root_01{ 
	color:#fff;
}
.root_02{
	text-align:right;
	color:#fff;	
}
.root_02 a{
	color:#FCF904;
}

/* archive title ========================= */
.archive_calender_sec{
	margin-top:10px;
	margin-bottom:10px;
}
.archive_title{
	background:#4862A3;
	padding:10px;
	margin-bottom:7px;
}
.archive_title {
	color:#fff;	
}
/* facebook title ========================= */
.facebook_title{
	background:#4862A3;
	padding:8px;	
	margin-bottom:10px;
}
.facebook_title a{
	font-weight:400;
	color:#fff;
	
}

.menu_bottom { 
	background: #363636;
	border-bottom:2px solid#9A1515;
	margin-bottom:5px;
 }
.menu_area .menu_bottom .mainmenu a , .navbar-default .navbar-nav > li > a {
    color: #FFFFFF;
    font-size: 16px;
    padding: 8px 18px;
	border-right:1px solid#242424;
}
.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
	color: #fff !important;
	margin: 0px;
	background-color: #9A1515;
}

.scrollToTop {
	width: 40px;
	height: 50px;
	padding: 10px;
	background:#363636;
	position: fixed;
	right: 15px;
	bottom: 40px;
	border-radius: 20%;
	cursor: pointer;
}

</style>
</head>
<body>
<script src="https://bangla.plus/scripts/bangladatetoday.min.js"></script>
<script>dateToday('date-today', 'bangla');</script>
@php
    function bn_date($str)
        {
         $en = array(1,2,3,4,5,6,7,8,9,0);
        $bn = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
        $str = str_replace($en, $bn, $str);
        $en = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' );
        $en_short = array( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' );
        $bn = array( 'জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'অগাস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর' );
        $str = str_replace( $en, $bn, $str );
        $str = str_replace( $en_short, $bn, $str );
        $en = array('Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday');
         $en_short = array('Sat','Sun','Mon','Tue','Wed','Thu','Fri');
         $bn_short = array('শনি', 'রবি','সোম','মঙ্গল','বুধ','বৃহঃ','শুক্র');
         $bn = array('শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার');
         $str = str_replace( $en, $bn, $str );
         $str = str_replace( $en_short, $bn_short, $str );
         $en = array( 'am', 'pm' );
        $bn = array( 'পূর্বাহ্ন', 'অপরাহ্ন' );
        $str = str_replace( $en, $bn, $str );
         $str = str_replace( $en_short, $bn_short, $str );
         $en = array( '১২', '২৪' );
        $bn = array( '৬', '১২' );
        $str = str_replace( $en, $bn, $str );
         return $str;
        }
@endphp
           
<script>
                        setInterval(displayTime, 1000);

function displayTime() {

    const timeNow = new Date();

    let hoursOfDay = timeNow.getHours();
    let minutes = timeNow.getMinutes();
    let seconds = timeNow.getSeconds();
    let weekDay = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"]
    let today = weekDay[timeNow.getDay()];
    let months = timeNow.toLocaleString("default", {
        month: "long"
    });
    let year = timeNow.getFullYear();
    let period = "AM";

    if (hoursOfDay > 12) {
        hoursOfDay-= 12;
        period = "PM";
    }

    if (hoursOfDay === 0) {
        hoursOfDay = 12;
        period = "AM";
    }

    hoursOfDay = hoursOfDay < 10 ? "0" + hoursOfDay : hoursOfDay;
    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    let time = hoursOfDay + ":" + minutes + ":" + seconds + " " + period;

   document.getElementById('Clock').innerHTML = time ;
    
    var chars = {'1':'১','2':'২','3':'৩','4':'৪','5':'৫','6':'৬','7':'৭','8':'৮','9':'৯','0':'০','A':'এ','P':'পি','M':'এম'};
    let str = document.getElementById("Clock").innerHTML; 
    let res = str.replace(/[1234567890AMP]/g, m => chars[m]);
    document.getElementById("Clock").innerHTML = res;

}
displayTime();

                        </script>
<section class="container main_wbsite">

<div class="row top-hdr-border">
<div class="top-hdr-sec">
<div class="col-md-4 col-sm-5 date">
 <span id ="Clock" onload="displayTime()"></span> | <span id="date-today"></span> বঙ্গাব্দ
</div>
<div class="col-md-4 col-sm-3 search-box">
<form class="example" method="get" action="{{ URL::to('/') }}">
<input type="text" maxlength="64" placeholder="এখানে লিখুন.." value name="s" />
<button type="submit">খুজুন</button>
</form>
</div>
<div class="col-md-4 col-sm-4">
<div class="top-hdr-social">
<ul>
<li><a href="{{ $social->facebook ??''}}" target="_blank"> <i class="fa fa-facebook"></i></a></li>
<li><a href="{{ $social->twitter ??''}}" target="_blank"> <i class="fa fa-twitter" style="color:#5DA7DA;"></i></a></li>
<li><a href="{{ $social->linkedin ??''}}" target="_blank"> <i class="fa fa-linkedin" style="color:#D1483B;"></i></a></li>
<li><a href="{{ $social->youtube ??''}}" target="_blank"> <i class="fa fa-youtube" style="color:#C41A1E;"></i></a></li>
</ul>
</div>
</div>
</div>
</div>


<div class="row">
<div class="col-md-4 col-sm-4 logo">
<a href="{{ URL::to('/') }}"><img src="{{ asset($setting->logo ??'') }}" alt="Logo" width="100%"></a>
</div>
<div class="col-md-8 col-sm-8 bannar">
							@php
	 $seo=DB::table('seos')->first()
@endphp
               {!! $seo->horizontal1 !!}  
</div>
</div>




<div id="menu-area" class="menu_area">
<div class="menu_bottom">
<div class="row">
<div class="col-md-12 col-sm-12">
<nav role="navigation" class="navbar navbar-default mainmenu">

<div class="navbar-header">
<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>

<div id="navbarCollapse" class="collapse navbar-collapse">
<div class="menu-main-menu-container"><ul id="menu-main-menu" class="nav navbar-nav"><li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-87" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-87 active"><a title=" প্রচ্ছদ" href="{{ URL::to('/') }}"><i class="fa fa-home" aria-hidden="true"></i> প্রচ্ছদ</a></li>



@foreach($category as $row)
@php
$subcategory=DB::table('subcategories')->where('category_id',$row->id)->get();
@endphp
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-199" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-199 dropdown"><a title="  {{ $row->category_bn ??''}} " href="{{ URL::to('post/'.$row->id.'/'.$row->category_bn ??'')}}" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">  {{ $row->category_bn ??''}}  <span class="caret"></span></a>
<ul role="menu" class=" dropdown-menu">

@foreach( $subcategory as $row)
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-202" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-202"><a title="ঢাকা বিভাগ" href="{{ URL::to('posts/'.$row->id.'/'.$row->subcategory_bn ??'')}}">  {{ $row->subcategory_bn ??''}} </a></li>
@endforeach	
</ul>
</li>
@endforeach	
</ul></div> </div>
</nav>
</div>
</div>
</div>
</div>



@yield('content')




<div class="row">
<div class="footer">
<div class="col-md-12 col-sm-12 editorial_1">
<p style="text-align: center;">মোবাইল নং: {{ $setting->phone_bn ??''}} । ইমেইল: ads@timessylhet.com , news@timessylhet.com</p> </div>
<div class="col-md-12 col-sm-12 editorial_2">
<p style="text-align: center;">সম্পাদক: মুহাম্মদ আব্দুল্লুাহ</p></div>
<div class="col-md-6 col-sm-6">
<div class="row">



@foreach($category as $row)
<div class="col-md-4 col-xs-4 col-sm-4 ">
<div class="footer-menu footer-border">
<ul>
<div class="menu-footer-menu-one-container"><ul id="menu-footer-menu-one" class="menu"><li id="menu-item-431" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-431"><a href="{{ URL::to('post/'.$row->id.'/'.$row->category_bn ??'')}}">{{ $row->category_bn ??''}}</a></li>

</ul></div> </ul>
</div>
</div>
@endforeach


</div>
</div>
<div class="col-md-6 col-sm-6">
<div class="row">
<div class="col-md-6 col-sm-12 hidden-sm  footer-logo">
<a href="{{ URL::to('/') }}"><img src="{{ asset($setting->mobilelogo ??'') }}" alt="Logo" width="100%"></a>
</div>
<div class="col-md-6 col-sm-12">
<div class="btm-social">
<ul>
<li><a href="{{ URL::to('/family') }}" target="_blank">  আমাদের পরিবার </a></li>
<li><a href="{{ URL::to('/reporter') }}" target="_blank">  প্রতিনিধি</a></li>
<li><a href="{{ URL::to('/about') }}" target="_blank">  আমাদের সম্পর্কে </a></li>
<li><a href="{{ URL::to('/photo') }}" target="_blank">  ফটো </a></li>
<li><a href="{{ URL::to('/galery') }}" target="_blank">  ভিডিও </a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>



<div class="row">
<div class="root">
<div class="col-md-6 col-sm-6 root_01">
©সকল কিছুর স্বত্বাধিকারঃ  {{ $seo->meta_title ??''}} | আমাদের সাইটের কোন বিষয়বস্তু অনুমতি ছাড়া কপি করা দণ্ডনীয় অপরাধ </div>
<div class="col-md-6 col-sm-6 root_02">
    
  

</div>
</div>

<div class="scrollToTop"><i class="fa fa-arrow-circle-up"></i></div>

</section>
<script type="text/javascript">
       $(function() {
               $("#datepicker").datepicker({ dateFormat: "yymmdd",       changeMonth: true,
      changeYear: true }).val()
   
       });

   </script>
<script>
			$("img.lazyload").lazyload();
        	  </script>
<script type="text/javascript" src="{{ asset('public/frontend/js/wp-embed.minfe9d.js?ver=4.7.3') }}"></script>
</body>
</html>
