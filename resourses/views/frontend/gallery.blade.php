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
	 
@section('meta')
  <title>ভিডিও গ্যালারি</title>
@endsection

<section class="videoGallery-page">
            <div class="container">
                <div class="archive-info-cats">
                    <a href="{{ URL::to('/') }}"><i class="la la-home"> </i> </a>  <i class="la la-chevron-right"></i> ভিডিও গ্যালারী
                </div>
          
                <div class="video-page-content">
                    <div class="row">
									@php
				$videobig=DB::table('videos')->where('type',1)->orderBy('id','DESC')->first();
				$videosmall=DB::table('videos')->where('type',0)->orderBy('id','DESC')->limit(10000000)->get();
				$videosmall2=DB::table('videos')->where('type',1)->orderBy('id','DESC')->limit(10000000)->get();
				@endphp
                        

                            @foreach($videosmall2 as $row)
							<div class="elitesDesign-4 elitesDesign-m2">
                            <div class="video-page-wrpp">
                                <div class="video-page-image">
                                    <img class="lazyload" src="{{ asset($setting->	lazybaner ??'') }}" data-src="https://img.youtube.com/vi/{{  $row->embed_code ??''}}/mqdefault.jpg">
                                    <a href="https://www.youtube.com/watch?v={{  $row->embed_code ??''}}" class="video-pageIcon popup"> <i class="las la-video"></i>  </a>
                                                                   
                                </div>
                                <div class="video-page-title">
                                    <a href="https://www.youtube.com/watch?v={{  $row->embed_code ??''}}"> {{ $row->title ??''}} </a>
                                </div>
                                
                            </div>
                        </div>
						@endforeach
						

                        
                        <div style="text-align: center; display: ruby; margin:20px">  </div>   



             
                       
                    </div>
                    
                   
                   
                   

                </div>

      
              

               
            </div>
        </section>

@endsection