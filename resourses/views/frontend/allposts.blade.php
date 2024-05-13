@extends('layouts.front')
@section('content')
@php
     $firstsectionbig=DB::table('posts')->where('first_section_thumbnail',1)->orderBy('id','DESC')->first();
	 $firstsectionsmall=DB::table('posts')->where('first_section',1)->orderBy('id','DESC')->limit(20)->get();
	 $firstsectionheding=DB::table('posts')->where('headline',1)->orderBy('id','DESC')->limit(12)->get();
	 $post=DB::table('posts')->first();
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


<section class="archive-page-section">
<div class="row">
<div class="col-md-8 col-sm-8">

<div class="category_info">
<a href="{{ URL::to('/') }}"><i class="fa fa-home" aria-hidden="true"></i>
</a> <i class="fa fa-chevron-right"></i> সকল খবর</div>




                        @foreach($posts as $row)
					    @php
						$slug=preg_replace('/\s+/u', '-', trim($row->title_bn ??''));
					    @endphp
<div class="archive_page archive_back">
<div class="col-md-4 col-sm-4">
<a href="../56.html">
<img class="lazyload" src="{{ asset($setting->	lazybaner ??'') }}" data-src="{{ asset($row->image ??'') }}" alt="{{ $row->title_bn ??'' }}" title="{{ $row->title_bn ??'' }}" />
</a>
</div>
<div class="col-md-8 col-sm-8">
<h3 class="archive_title01"><a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">{{ $row->title_bn ??'' }} </a></h3>
{{ $row->details_en ??'' }} <h4 class="archvie_more"><a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">বিস্তারিত...</a></h4>
</div>
</div>
@endforeach


</div>
<div class="col-md-4 col-sm-4">
<div class="tab-header">

<ul class="nav nav-tabs nav-justified" role="tablist">
<li role="presentation" class="active"><a href="#tab21" aria-controls="tab21" role="tab" data-toggle="tab" aria-expanded="false">সর্বশেষ আপডেট</a></li>
<li role="presentation"><a href="#tab22" aria-controls="tab22" role="tab" data-toggle="tab" aria-expanded="true">জনপ্রিয় সংবাদ</a></li>
</ul>

<div class="tab-content ">
<div role="tabpanel" class="tab-pane in active" id="tab21">
<div class="news-titletab">
				        @php
					$latest=DB::table('posts')->orderBy('id','DESC')->limit(6)->get();
					$favourite=DB::table('posts')->inRandomOrder()->orderBy('id','DESC')->limit(12)->get();
					$highest=DB::table('posts')->inRandomOrder()->orderBy('id','ASC')->limit(12)->get();
					@endphp


								  @foreach($favourite as $row)
								  @php
								 $slug=preg_replace('/\s+/u', '-', trim($row->title_bn ??''));
							      @endphp
<div class="small-img tab-border">
<span>তাজা</span>
<a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">
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
<a href="../465.html">
<img class="lazyload" src="{{ asset($setting->	lazybaner) }}" data-src="{{ asset($row->image ??'')}}" alt="{{ $row->title_bn ??''}}" title="{{ $row->title_bn ??''}}" />
</a>
<h4 class="hadding_3"><a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">{{ $row->title_bn ??''}} </a></h4>
</div>
@endforeach 


</div>
</div>
<div class="add">
@php
	 $seo=DB::table('seos')->first()
@endphp
<div class="widget_area"> <div class="textwidget">{!! $seo->vertical !!}
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