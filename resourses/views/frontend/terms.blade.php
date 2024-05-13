@extends('layouts.front')
@section('content')
@section('meta')
  <title>ট্রামস অ্যান্ড কন্ডিশন</title>
@endsection
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

<div class="create-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="create-pageTitle">                        
                            <span>  ট্রামস অ্যান্ড কন্ডিশন   </span>     
                        </div>
                        
                        <div class="create-page-details">
							<p>{!! $setting->terms !!}</p>
							</div>
                        
                    </div>
                </div>
            </div>
        </div>

@endsection