@extends('layouts.front')
@section('meta')
  <title>{{ $post->title_bn ??''}}</title>
 
  <meta property="og:url" content="{{Request::fullUrl()}}" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="{{ $post->title_bn ??''}}" />
  <meta property="og:image" content="{{URL::to($post->image ??'')}}" />

@endsection
@section('content')
@php
     $firstsectionbig=DB::table('posts')->where('first_section_thumbnail',1)->orderBy('id','DESC')->first();
	 $firstsectionsmall=DB::table('posts')->where('first_section',1)->orderBy('id','DESC')->limit(5)->get();
	 $firstsectionheding=DB::table('posts')->where('headline',1)->orderBy('id','DESC')->limit(5)->get();
	 $user=DB::table('users')->first();
     $setting=DB::table('settings')->first();
@endphp
 <!--============Scroll 03 start==============-->
    @php
	 $headline=DB::table('posts')
                        ->join('categories','posts.cat_id','categories.id')
                        ->join('subcategories','posts.subcat_id','subcategories.id')
                        ->select('posts.*','categories.category_bn','subcategories.subcategory_bn')
                        ->where('posts.headline',1)
                        ->orderBy('id','DESC')
                        ->limit(5)
                        ->get();               
	 @endphp  


<section class="singlepage-section">
<div class="row">
<div class="col-md-8 col-sm-8">
<div class="add">
@php
	 $seo=DB::table('seos')->first()
@endphp
<div class="widget_area"> <div class="textwidget"> {!! $seo->horizontalbig2 !!}
</a></div>
</div> </div>
<div class="single-cat-info">
<div class="single-cat-home">
<a href="{{ URL::to('/') }}"><i class="fa fa-home" aria-hidden="true"></i> প্রচ্ছদ </a>
</div>
<div class="single-cat-cate">
<i class="fa fa-bars" aria-hidden="true"></i> <a href="#" rel="category tag">{{ $post->category_bn ??''}}</a>, <a href="#" rel="category tag">অর্থনীতি</a></div>
</div>
<div class="single-title">
<h3>{{ $post->title_bn ??''}}</h3>
</div>

<div class="view-section">
<div class="row">
<div class="col-md-1 col-sm-1 col-xs-2">
<div class="reportar-img">
<img src="{{asset('public/sv-writer-img.svg')}}" width="100%" />
</div>
</div>
<div class="col-md-11 col-sm-11 col-xs-10">
<div class="reportar-sec">
<div class="reportar-title">
{{ $post->name ??''}}
</div>
<div class="sgl-page-views-count">
<ul>
<li> <i class="fa fa-clock-o"></i>
আপডেট টাইম :
{{ $post->post_date  ??''}} ইং </li>


<li class="active">
<i class="fa fa-eye"></i>
{{ $post->views  ??''}}
বার পঠিত
</li>

</ul>
</div>
</div>
</div>
</div>
</div>

<div class="single-img">

<a href="31.html">
<img class="lazyload" src="{{ asset($setting->	lazybaner ??'') }}" data-src="{{ asset($post->image ??'') }}" alt="{{ $post->title_bn ??''}}" title="{{ $post->title_bn ??''}}" />
</a>

<div class="caption">
ছবির ক্যাপশন: {!! $post->tags_bn ??'' !!}
</div>
</div>
<div class="single-dtls">
<div class="">
<p>{!! $post->details_bn ??'' !!}</p>
</div>
</div>
<div class="add">
@php
	 $seo=DB::table('seos')->first()
@endphp
<div class="widget_area"> <div class="textwidget"> {!! $seo->horizontalbig3 !!} 
</a></div>
</div> </div>
<div class="sgl-page-social-title">
<h4>নিউজটি শেয়ার করুন</h4>
</div>
<div class="sgl-page-social">
<ul>
<li><a href="https://www.facebook.com/sharer/sharer.php?u={{ Request::fullUrl() }}" class="facebook" target="_blank"> <i class="fa fa-facebook"></i> Facebook</a></li>
<!--<li><a href="#" class="twitter" target="_blank"> <i class="fa fa-twitter"></i> Twitter</a></li-->
<!--<li><a href="#" class="digg" target="_blank"> <i class="fa fa-digg"></i> Digg </a></li>-->
<!--<li><a href="#" class="linkedin" target="_blank"> <i class="fa fa-linkedin"></i> Linkedin </a></li>-->
<!--<li><a href="#" class="reddit" target="_blank"> <i class="fa fa-reddit"></i> Reddit </a></li>-->
<!--<li><a href="#" class="google-plus" target="_blank"> <i class="fa fa-google-plus"></i> Google Plus</a></li>-->
<!--<li><a href="#" class="pinterest" target="_blank"> <i class="fa fa-pinterest"></i> Pinterest </a></li>-->

<!--<li><a href="{{ URL::to('/print/') }}/{{ $post->printviewlink ??''}}" class="print" target="_blank"> <i class="fa fa-print"></i> প্রিন্ট নিউজ দেখুন </a></li>-->
</ul>
</div>
<script>
					function myFunction() {
						window.print();
					}
					</script>


<div class="sgl-cat-tittle">
এ জাতীয় আরো খবর.. </div>
<div class="row">
				        @php
					$latest=DB::table('posts')->orderBy('id','DESC')->limit(6)->get();
					$favourite=DB::table('posts')->inRandomOrder()->orderBy('id','DESC')->limit(6)->get();
					$highest=DB::table('posts')->inRandomOrder()->orderBy('id','ASC')->limit(6)->get();
					@endphp

								  @foreach($favourite as $row)
								  @php
								 $slug=preg_replace('/\s+/u', '-', trim($row->title_bn ??''));
							      @endphp
<div class="col-sm-4 col-md-4">
<div class="Name-again box-shadow">
<div class="image-again">
<a href="465.html">
<img class="lazyload" src="{{ asset($setting->	lazybaner ??'') }}" data-src="{{ asset($row->image ??'')}}" alt="{{ $row->title_bn ??''}}" title="{{ $row->title_bn ??''}}" />
</a>

<h4 class="sgl-hadding"> <a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">{{ $row->title_bn ??''}} </a> </h4>
</div>
</div>
</div>
   @endforeach


</div>
<div class="add">
@php
	 $seo=DB::table('seos')->first()
@endphp
<div class="widget_area"> <div class="textwidget">{!! $seo->horizontal5 !!}    
</a></div>
</div> </div>
</div>
<div class="col-md-4 col-sm-4">
<div class="tab-header">

<ul class="nav nav-tabs nav-justified" role="tablist">
<li role="presentation" class="active"><a href="#tab21" aria-controls="tab21" role="tab" data-toggle="tab" aria-expanded="false">সর্বশেষ আপডেট</a></li>
<li role="presentation"><a href="#tab22" aria-controls="tab22" role="tab" data-toggle="tab" aria-expanded="true">জনপ্রিয় সংবাদ</a></li>
</ul>

<div class="tab-content ">
				        @php
					$latest=DB::table('posts')->orderBy('id','DESC')->limit(6)->get();
					$favourite=DB::table('posts')->inRandomOrder()->orderBy('id','DESC')->limit(6)->get();
					$highest=DB::table('posts')->inRandomOrder()->orderBy('id','ASC')->limit(6)->get();
					@endphp
<div role="tabpanel" class="tab-pane in active" id="tab21">
<div class="news-titletab">

								  @foreach($favourite as $row)
								  @php
								 $slug=preg_replace('/\s+/u', '-', trim($row->title_bn ??''));
							      @endphp
<div class="small-img tab-border">
<span>তাজা</span>

<a href="465.html">
<img class="lazyload" src="{{ asset($setting->	lazybaner ??'') }}" data-src="{{ asset($row->image ??'')}}" alt="{{ $row->title_bn ??''}}" title="{{ $row->title_bn ??''}}" />
</a>

<h4 class="hadding_3"><a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">{{ $row->title_bn ??''}} </a></h4>
</div>
  @endforeach


</div>
</div>
<div role="tabpanel" class="tab-pane fade" id="tab22">
<div class="news-titletab">

					@php
					$highest=DB::table('posts')->inRandomOrder()->orderBy('id','ASC')->limit(10)->get();
					@endphp

								  @foreach($highest as $row)
								  @php
								  $slug=preg_replace('/\s+/u', '-', trim($row->title_bn ??''));
							      @endphp
<div class="small-img tab-border">
<span>খবর</span>

<a href="465.html">
<img class="lazyload" src="{{ asset($setting->	lazybaner) }}" data-src="{{ asset($row->image ??'')}}" alt="{{ $row->title_bn ??''}}" title="{{ $row->title_bn ??''}}" />
</a>

<h4 class="hadding_3"><a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">{{ $row->title_bn ??''}} </a></h4>
</div>
@endforeach 




</div>
</div>
</div>
</div>
<div class="add">
@php
	 $seo=DB::table('seos')->first()
@endphp
<div class="widget_area"> <div class="textwidget"> {!! $seo->vertical !!}
</a></div>
</div> </div>
<div class="sgl-cat-tittle">
ফেসবুকে আমরা... </div>
<div id='fb-root'/>
<script type='text/javascript'>
//<![CDATA[
window.fbAsyncInit = function() {
FB.init({
appId : 'FB APP ID',
status : true, // check login status
cookie : true, // enable cookies 
xfbml : true // parse XFBML
});
};
(function() {
var e = document.createElement('script');
e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
e.async = true;
document.getElementById('fb-root').appendChild(e);
}());
//]]>
</script>
<div class="fb-page" data-href="https://www.facebook.com/{{$setting->facebookpage ??''}}" data-width="700" data-height="400" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/msdesign.rtml"><a href="https://www.facebook.com/msdesign.rtml">Elite Design</a></blockquote></div></div>

						
						<div class="sgl-cat-tittle">
নামাজের সময়সূচী </div>
	@php
					$prayer=DB::table('namaz')->first();
					@endphp
                        
                        <div class="facebook-content">
						<table class="table">
						<tr>
							<th>
							@if(session()->get('lang')== 'english' ??'')
							  Fajr
							@else
							  ফজর 
							  @endif
							</th>
							<th>{{ $prayer->fajr ??''}} ভোর</th>
						</tr>
						<tr>
							<th>
							@if(session()->get('lang')== 'english' ??'')
							  Johr
							@else
							  যোহর 
							  @endif
							</th>
							<th>{{ $prayer->johr ??''}} দুপুর</th>
						</tr>
						<tr>
							<th>
							@if(session()->get('lang')== 'english' ??'')
							  Asor
							@else
							  আছর 
							  @endif
							</th>
							<th>{{ $prayer->asor ??''}} বিকাল</th>
						</tr>
						<tr>
							<th>
							@if(session()->get('lang')== 'english' ??'')
							  Magrib
							@else
							  মাগরিব  
							  @endif
							</th>
							<th>{{ $prayer->magrib ??''}} সন্ধ্যা</th>
						</tr>
						<tr>
							<th>
							@if(session()->get('lang')== 'english' ??'')
							  Esha
							@else
							  এশা 
							  @endif
							</th>
							<th>{{ $prayer->esha ??''}} রাত</th>
						</tr>
						<tr>
							<th>
							@if(session()->get('lang')== 'english' ??'')
							  Jummah
							@else
							  জুম্মা 
							  @endif
							</th>
							<th>{{ $prayer->jummah ??''}} দুপুর</th>
						</tr>
					</table>
						</div>
												<div class="sgl-cat-tittle">
জাতীয় সঙ্গীত </div>
						<audio controls="" style="width:100%">
				 <source src="{{ URL::to('/bd_national_anthem.mp3') }}" type="audio/mp3">
				</audio>

</div>
</div>
</section>



@endsection