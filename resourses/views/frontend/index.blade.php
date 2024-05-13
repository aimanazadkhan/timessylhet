@extends('layouts.front')
@section('content')
@php
     $firstsectionbig=DB::table('posts')->where('first_section_thumbnail',1)->orderBy('id','DESC')->first();
	 $firstsectionsmall=DB::table('posts')->where('first_section',1)->orderBy('id','DESC')->limit(2)->get();
	 $firstsectionheding=DB::table('posts')->where('headline',1)->orderBy('id','DESC')->limit(12)->get();
     $setting=DB::table('settings')->first();
	 $seo=DB::table('seos')->first()
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
        
 
 <div class="row">
<div class="col-md-12 scrool">
<div class="col-md-2 col-sm-4 scrool_1"style="background-color:#9A1515;">
শিরোনাম : </div>
<div class="col-md-10 col-sm-8 scrool_2">
<marquee direction="left" scrollamount="4px" onmouseover="this.stop()" onmouseout="this.start()">

@foreach($headline as $row) 
@php
$slug=preg_replace('/\s+/u', '-', trim($row->title_bn ??''));
@endphp	
<i class="fa fa-square" aria-hidden="true"></i>
<a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">{{ $row->title_bn ??'' }}</a>
@endforeach

</marquee>
</div>
</div>
</div>
 <div class="row">
<div class="col-md-12 scrool">
<div class="col-md-2 col-sm-4 scrool_1"style="background-color:#9A1515;">
নোটিশ : </div>
<div class="col-md-10 col-sm-8 scrool_2">
<marquee direction="left" scrollamount="4px" onmouseover="this.stop()" onmouseout="this.start()">

    @php

        $notice=DB::table('notices')->first();                
	 @endphp	
<i class="fa fa-warning" aria-hidden="true"></i>
<a href="#">{{ $notice->notice ??''}}</a>


</marquee>
</div>
</div>
</div>


<div class="row">
<div class="col-md-12">
<div class="add">
</div>
</div>
</div>
 <div class="row">
<div class="section-one">
<div class="col-md-5 col-sm-4">
<div class="leadnews">
							@php
								$slug=preg_replace('/\s+/u', '-', trim($firstsectionbig->title_bn ??''));
							@endphp
<a href="{{ URL::to('view-post/'.$firstsectionbig->id.'/'.$slug ??'') }}">
<img class="lazyload" src="{{ asset($setting->	lazybaner ??'') }}" data-src="{{ asset($firstsectionbig->image ??'') }}" alt="{{ $firstsectionbig->title_bn ??''}}" title="{{ $firstsectionbig->title_bn ??''}}" />
</a>

<div class="hadding_1">
<a href="{{ URL::to('view-post/'.$firstsectionbig->id.'/'.$slug ??'') }}">{{ $firstsectionbig->title_bn ??''}}</a>
</div>
<div class="content-dtls">
{{$firstsectionbig->details_en ??''}} <span style="text-align:right"><a href="{{ URL::to('view-post/'.$firstsectionbig->id.'/'.$slug ??'') }}">বিস্তারিত...</a></span>
</div>
</div>
</div>
<div class="col-md-3">


											@foreach($firstsectionsmall as $row)
							                @php
								            $slug=preg_replace('/\s+/u', '-', trim($row->title_bn ??''));
							                @endphp	
<div class="leadnews_1">
<a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">
<img class="lazyload" src="{{ asset($setting->	lazybaner ??'') }}" data-src="{{ asset($row->image ??'')}}" alt="{{ $row->title_bn ??'' }}" title="{{ $row->title_bn ??'' }}" />
</a>
<h4 class="hadding_2 background"><a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">{{ $row->title_bn ??'' }}</a></h4>
</div>
@endforeach	


</div>
<div class="col-md-4">
<div class="tab-header">

<ul class="nav nav-tabs nav-justified" role="tablist">
<li role="presentation" class="active"><a href="#tab21" aria-controls="tab21" role="tab" data-toggle="tab" aria-expanded="false">সর্বশেষ আপডেট</a></li>
<li role="presentation"><a href="#tab22" aria-controls="tab22" role="tab" data-toggle="tab" aria-expanded="true">জনপ্রিয় সংবাদ</a></li>
</ul>

<div class="tab-content ">
<div role="tabpanel" class="tab-pane in active" id="tab21">
<div class="news-titletab">
@php
     $firstsectionbig=DB::table('posts')->where('first_section_thumbnail',1)->orderBy('id','DESC')->first();
	 $firstsectionsmallbd=DB::table('posts')->where('first_section',1)->orderBy('id','DESC')->limit(10)->get();
	 $firstsectionheding=DB::table('posts')->where('headline',1)->orderBy('id','DESC')->limit(10)->get();
	 $firstsectionheding1=DB::table('posts')->where('headline',1)->orderBy('id','DESC')->limit(9)->get();
     $setting=DB::table('settings')->first();
	 $seo=DB::table('seos')->first()
@endphp






											@foreach($firstsectionsmallbd as $row)
							                @php
								            $slug=preg_replace('/\s+/u', '-', trim($row->title_bn ??''));
							                @endphp	
<div class="small-img tab-border">
<span>তাজা</span>

<a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">
<img class="lazyload" src="{{ asset($setting->	lazybaner ??'') }}" data-src="{{ asset($row->image ??'')}}" alt="{{ $row->title_bn ??'' }}" title="{{ $row->title_bn ??'' }}" />
</a>

<h4 class="hadding_3"><a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">{{ $row->title_bn ??'' }} </a></h4>
</div>
@endforeach	


</div>
</div>
<div role="tabpanel" class="tab-pane fade" id="tab22">
<div class="news-titletab">

										@foreach($firstsectionheding   as $row)
							                @php
								            $slug=preg_replace('/\s+/u', '-', trim($row->title_bn ??''));
							                @endphp	
<div class="small-img tab-border">
<span>খবর</span>

<a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">
<img class="lazyload" src="{{ asset($setting->	lazybaner ??'') }}" data-src="{{ asset($row->image ??'')}}" alt="{{ $row->title_bn ??'' }}" title="{{ $row->title_bn ??'' }}" />
</a>

<h4 class="hadding_3"><a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">{{ $row->title_bn ??'' }} </a></h4>
</div>
@endforeach	


</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="row">
@php
	 $seo=DB::table('seos')->first()
@endphp

<div class="col-md-6 col-sm-6">
<div class="add">
<div class="widget_area"> {!! $seo->horizontal2 !!} <div class="textwidget">
</a></div>
</div> </div>
</div>


<div class="col-md-6 col-sm-6">
<div class="add">
<div class="widget_area">  {!! $seo->horizontal3 !!}<div class="textwidget">
</a></div>
</div> </div>
</div>
</div>

<div class="row">
<div class="section-two">
<div class="col-md-8 col-sm-8">
<div class="row">


@foreach($firstsectionheding1   as $row)
@php
$slug=preg_replace('/\s+/u', '-', trim($row->title_bn ??''));
@endphp	
<div class="col-md-4 col-sm-4">
<div class="middle_news">

<a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">
<img class="lazyload" src="{{ asset($setting->	lazybaner ??'') }}" data-src="{{ asset($row->image ??'')}}" alt="{{ $row->title_bn ??'' }}" title="{{ $row->title_bn ??'' }}" />
</a>

<h4 class="hadding_2"><a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">{{ $row->title_bn ??'' }} </a> </h4>
</div>
</div>
@endforeach





</div>
</div>
<div class="col-md-4 col-sm-4">
<div class="add_01">
<div class="widget_area"> <div class="textwidget"></div>
</div> </div>
<div class="facebook_title"><a href="#">ফেসবুকে আমরা...</a></div>
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
</div>
</div>
</div>

<div class="col-md-4 col-sm-4">
<div class="facebook_title"><a href="#">নামাজের সময়সূচী</a></div>

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
@php
	 $seo=DB::table('seos')->first()
@endphp
<div class="add_01">
<div class="widget_area"> <div class="textwidget"></div>{!! $seo->vertical!!}
</div> </div>
</div>






<div class="row">
<div class="col-md-12 col-sm-12">
@php
	 $seo=DB::table('seos')->first()
@endphp
<div class="add">
<div class="widget_area"> <div class="textwidget">{!! $seo->horizontalbig1 !!}
</a></div>
</div> </div>
</div>
</div>

<div class="row">
<div class="section-three">
<div class="col-md-8 col-sm-8">
					@php
					$firstcat=DB::table('categories')->first();
					$firstcatpostbig=DB::table('posts')->where('cat_id',$firstcat->id)->where('bigthumbnail',1)->orderBy('id','DESC')->first();
					$firstcatpostsmall=DB::table('posts')->where('cat_id',$firstcat->id)->where('categoryhomepage',1)->orderBy('id','DESC')->limit(6)->get();
					@endphp
<div class="catagory-title">
							@php
							$slug=preg_replace('/\s+/u', '-', trim($firstcatpostbig->title_bn ??''));
							@endphp
<a href="{{ URL::to('post/'.$firstcat->id.'/'.$firstcat->category_bn ??'')}}"> {{ $firstcat->category_bn ??''}} </a>
</div>
<div class="row">
<div class="col-md-6 col-sm-6">
<div class="leadnews">

<a href="{{ URL::to('view-post/'.$firstcatpostbig->id.'/'.$slug ??'') }}">
<img class="lazyload" src="{{ asset($setting->	lazybaner ??'') }}" data-src="{{ asset($firstcatpostbig->image ??'')}}" alt="{{ $firstcatpostbig->title_bn ??''}}" title="{{ $firstcatpostbig->title_bn ??''}}" />
</a>

<div class="hadding_1">
<a href="{{ URL::to('view-post/'.$firstcatpostbig->id.'/'.$slug ??'') }}">{{ $firstcatpostbig->title_bn ??''}}</a>
</div>
<div class="content-dtls">
{{ $firstcatpostbig->details_en ??''}} <span style="text-align:right"><a href="{{ URL::to('view-post/'.$firstcatpostbig->id.'/'.$slug ??'') }}">বিস্তারিত...</a></span>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6">


                            @foreach($firstcatpostsmall as $row)
							@php
								$slug=preg_replace('/\s+/u', '-', trim($row->title_bn ??''));
							@endphp
<div class="image-title border">
<a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">
<img class="lazyload" src="{{ asset($setting->	lazybaner ??'') }}" data-src="{{ asset($row->image ??'')}}" alt="{{ $row->title_bn ??'' }}" title="{{ $row->title_bn ??'' }}" />
</a>

<h4 class="hadding_3"><a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">{{ $row->title_bn ??'' }}</a></h4>
</div>
@endforeach




<div class="row">
<div class="col-md-12">
<div class="more-news">
<a href="{{ URL::to('post/'.$firstcat->id.'/'.$firstcat->category_bn ??'')}}"> আরো খবর <i class="fa fa-angle-double-right" aria-hidden="true"></i> </a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-4 col-sm-4">
			@php
			$secondcat=DB::table('categories')->skip(1)->first();
			$secondcatpostbig=DB::table('posts')->where('cat_id',$secondcat->id)->where('bigthumbnail',1)->orderBy('id','DESC')->first();
			$secondcatpostsmall=DB::table('posts')->where('cat_id',$secondcat->id)->where('categoryhomepage',1)->orderBy('id','DESC')->limit(2)->get();
			@endphp
<div class="catagory-title">
<a href="{{ URL::to('post/'.$secondcat->id.'/'.$secondcat->category_bn ??'')}}"> {{ $secondcat->category_bn ??''}} </a>
</div>
<div class="middle_news">
							@php
							$slug=preg_replace('/\s+/u', '-', trim($secondcatpostbig->title_bn ??''));
							@endphp
<a href="{{ URL::to('view-post/'.$secondcatpostbig->id.'/'.$slug ??'') }}">
<img class="lazyload" src="{{ asset($setting->	lazybaner ??'') }}" data-src="{{ asset($secondcatpostbig->image ??'')}}" alt="{{ $secondcatpostbig->title_bn ??''}}" title="{{ $secondcatpostbig->title_bn ??''}}" />
</a>

<h4 class="hadding_1"><a href="{{ URL::to('view-post/'.$secondcatpostbig->id.'/'.$slug ??'') }}">{{ $secondcatpostbig->title_bn ??''}}</a> </h4>
</div>




                            @foreach($secondcatpostsmall as $row)
                            @php
								$slug=preg_replace('/\s+/u', '-', trim($row->title_bn ??''));
							@endphp	
<div class="image-title border">
<a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">
<img class="lazyload" src="{{ asset($setting->	lazybaner ??'') }}" data-src="{{ asset($row->image ??'')}}" alt="{{ $row->title_bn ??'' }}" title="{{ $row->title_bn ??'' }}" />
</a>

<h4 class="hadding_3"><a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">{{ $row->title_bn ??'' }}</a></h4>
</div>
 @endforeach	




<div class="row">
<div class="col-md-12">
<div class="more-news">
<a href="{{ URL::to('post/'.$secondcat->id.'/'.$secondcat->category_bn ??'')}}"> আরো খবর <i class="fa fa-angle-double-right" aria-hidden="true"></i> </a>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6 col-sm-6">
@php
	 $seo=DB::table('seos')->first()
@endphp
<div class="add">
<div class="widget_area"> <div class="textwidget"> {!! $seo->horizontal4 !!}
</a></div>
</div> </div>
</div>
<div class="col-md-6 col-sm-6">
@php
	 $seo=DB::table('seos')->first()
@endphp
<div class="add">
<div class="widget_area"> <div class="textwidget">{!! $seo->horizontal5 !!}
</a></div>
</div> </div>
</div>
</div>

<div class="row">
<div class="section-four">
<div class="col-md-8 col-sm-8">
	         @php
			$thirdcat=DB::table('categories')->skip(2)->first();
			$thirdcatpostbig=DB::table('posts')->where('cat_id',$thirdcat->id)->where('bigthumbnail',1)->orderBy('id','DESC')->first();
			$thirdcatpostsmall=DB::table('posts')->where('cat_id',$thirdcat->id)->where('categoryhomepage',1)->orderBy('id','DESC')->limit(2)->get();
			$thirdcatpostsmall1=DB::table('posts')->where('cat_id',$thirdcat->id)->where('categoryhomepage',1)->orderBy('id','DESC')->limit(6)->get();
			@endphp
<div class="catagory-title">
<a href="{{ URL::to('post/'.$thirdcat->id.'/'.$thirdcat->category_bn ??'')}}"> {{ $thirdcat->category_bn ??''}} </a>
</div>
<div class="row">
<div class="col-md-6 col-sm-6">
<div class="leadnews">
                            @php
							$slug=preg_replace('/\s+/u', '-', trim($thirdcatpostbig->title_bn ??''));
							@endphp
<a href="{{ URL::to('view-post/'.$thirdcatpostbig->id.'/'.$slug ??'') }}">
<img class="lazyload" src="{{ asset($setting->	lazybaner ??'') }}" data-src="{{ asset($thirdcatpostbig->image ??'')}}" alt="{{ $thirdcatpostbig->title_bn ??''}}" title="{{ $thirdcatpostbig->title_bn ??''}}" />
</a>

<div class="hadding_1">
<a href="{{ URL::to('view-post/'.$thirdcatpostbig->id.'/'.$slug ??'') }}">{{ $thirdcatpostbig->title_bn ??''}}</a>
</div>
<div class="content-dtls">
{{ $thirdcatpostbig->details_en ??''}}  <span style="text-align:right"><a href="{{ URL::to('view-post/'.$thirdcatpostbig->id.'/'.$slug ??'') }}">বিস্তারিত...</a></span>
</div>
</div>


                            @foreach($thirdcatpostsmall as $row)	
						    @php
						    $slug=preg_replace('/\s+/u', '-', trim($row->title_bn ??''));
							@endphp	
<div class="hadding_2 border-again">
<a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> {{ $row->title_bn ??'' }}</a>
</div>
   @endforeach	


</div>
<div class="col-md-6 col-sm-6">


                            @foreach($thirdcatpostsmall1 as $row)	
						    @php
						    $slug=preg_replace('/\s+/u', '-', trim($row->title_bn ??''));
							@endphp	
<div class="image-title border">
<a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">
<img class="lazyload" src="{{ asset($setting->	lazybaner ??'') }}" data-src="{{ asset($row->image ??'')}}" alt="{{ $row->title_bn ??'' }}" title="{{ $row->title_bn ??'' }}" />
</a>
<h4 class="hadding_3"><a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">{{ $row->title_bn ??'' }}</a></h4>
</div>
  @endforeach	



<div class="row">
<div class="col-md-12">
<div class="more-news">
<a href="{{ URL::to('post/'.$thirdcat->id.'/'.$thirdcat->category_bn ??'')}}"> আরো খবর <i class="fa fa-angle-double-right" aria-hidden="true"></i> </a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-4 col-sm-4">
             @php
			$fourthcat=DB::table('categories')->skip(3)->first();
			$fourthcatpostbig=DB::table('posts')->where('cat_id',$fourthcat->id)->where('bigthumbnail',1)->orderBy('id','DESC')->first();
			$fourthcatpostsmall=DB::table('posts')->where('cat_id',$fourthcat->id)->where('categoryhomepage',1)->orderBy('id','DESC')->limit(4)->get();
			@endphp
<div class="catagory-title">
<a href="{{ URL::to('post/'.$fourthcat->id.'/'.$fourthcat->category_bn ??'')}}"> {{ $fourthcat->category_bn ??''}} </a>
</div>
<div class="middle_news_1">
                            @php
							$slug=preg_replace('/\s+/u', '-', trim($fourthcatpostbig->title_bn ??''));
							@endphp
<a href="{{ URL::to('view-post/'.$fourthcatpostbig->id.'/'.$slug ??'') }}">
<img class="lazyload" src="{{ asset($setting->	lazybaner ??'') }}" data-src="{{ asset($fourthcatpostbig->image ??'')}}" alt="{{ $fourthcatpostbig->title_bn ??''}}" title="{{ $fourthcatpostbig->title_bn ??''}}" />
</a>

<h4 class="hadding_1"><a href="{{ URL::to('view-post/'.$fourthcatpostbig->id.'/'.$slug ??'') }}">{{ $fourthcatpostbig->title_bn ??''}}</a> </h4>
</div>

@foreach($fourthcatpostsmall as $row)
<div class="hadding_2 border-again">
<a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> {{ $row->title_bn ??'' }}</a>
</div>
@endforeach


<div class="row">
<div class="col-md-12">
<div class="more-news">
<a href="{{ URL::to('post/'.$fourthcat->id.'/'.$fourthcat->category_bn ??'')}}"> আরো খবর <i class="fa fa-angle-double-right" aria-hidden="true"></i> </a>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12 col-sm-12">
<div class="add">
@php
	 $seo=DB::table('seos')->first()
@endphp
<div class="widget_area"> <div class="textwidget">{!! $seo->horizontalbig3 !!}
</a></div>
</div> </div>
</div>
</div>

<div class="gallery-section">
<div class="row">
<div class="col-md-6 col-sm-6">
<div class="catagory-title">
<i class="fa fa-camera"></i> ফটো গ্যালারী </div>
<div class="photo_gallary">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
				@php
				$photobig=DB::table('photos')->where('type',1)->orderBy('id','DESC')->limit(1)->get();
				$photobig1=DB::table('photos')->where('type',1)->orderBy('id','DESC')->limit(5)->get();
				$photosmall=DB::table('photos')->where('type',0)->orderBy('id','DESC')->limit(5)->get();
				@endphp
<div class="carousel-inner" role="listbox">


@foreach($photobig as $row)
<div class="item active">
<div class="Name">
<a href="{{ asset($row->photo ??'')}}">
<img width="600" height="337" src="{{ asset($row->photo ??'')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt srcset="{{ asset($row->photo ??'')}} 600w, {{ asset($row->photo ??'')}} 300w" sizes="(max-width: 600px) 100vw, 600px" /> </a>
<h4 class="photo_caption"> <a href="{{ asset($row->photo ??'')}}">{{ $row->title ??''}}</a> </h4>
</div>
</div>
 @endforeach

@foreach($photobig1 as $row)
<div class="item">
<div class="Name">
<a href="{{ asset($row->photo ??'')}}">
<img width="600" height="337" src="{{ asset($row->photo ??'')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt srcset="{{ asset($row->photo ??'')}} 600w, {{ asset($row->photo ??'')}} 300w" sizes="(max-width: 600px) 100vw, 600px" /> </a>
<h4 class="photo_caption"> <a href="{{ asset($row->photo ??'')}}">{{ $row->title ??''}}</a> </h4>
</div>
</div>
@endforeach


</div>

<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6">
<div class="catagory-title">
<i class="fa fa-video-camera"></i> ভিডিও গ্যালারী </div>
<div class="row">
				@php
				$videobig=DB::table('videos')->where('type',1)->orderBy('id','DESC')->first();
				$videosmall=DB::table('videos')->where('type',0)->orderBy('id','DESC')->limit(5)->get();
				$videosmall2=DB::table('videos')->where('type',1)->orderBy('id','DESC')->limit(4)->get();
				@endphp

@foreach($videosmall2 as $row)
<div class="col-md-6 col-sm-6">
<div class="embed-responsive embed-responsive-16by9 embed-responsive-item" style="margin-bottom:5px;">
<p><iframe width="500" height="281" src="https://www.youtube.com/embed/{{  $row->embed_code ??''}}?feature=oembed" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
</div>
</div>
@endforeach



</div>
</div>
</div>



<div class="row">
@php
	 $seo=DB::table('seos')->first()
@endphp
<div class="col-md-6 col-sm-6">
<div class="add">
<div class="widget_area"> <div class="textwidget">{!! $seo->horizontal1 !!}
</a></div>
</div> </div>
</div>
<div class="col-md-6 col-sm-6">
<div class="add">
<div class="widget_area"> <div class="textwidget">{!! $seo->horizontal2!!}
</a></div>
</div> </div>
</div>
</div>
 
 
 
 
 
 
 
	@endsection