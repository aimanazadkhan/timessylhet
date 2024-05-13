@extends('layouts.front')
@section('content')
@section('meta')
  <title>প্রতিনিধির তালিকা</title>
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

<div class="row">
			@php
            $horizontal1=DB::table('ads')->where('type',3)->limit(100000)->get();
            @endphp
@foreach($horizontal1 as $row) 
<div class="col-md-3 col-sm-3">
<div class="profile_news">
<a href="#"><img width="500" height="300" src="{{ asset($row->ads ??'')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt srcset="{{ asset($row->ads ??'')}} 500w, {{ asset($row->ads ??'')}} 300w" sizes="(max-width: 500px) 100vw, 500px" /> <h4 class="family">{{ $row->link ??'' }} :: {{ $row->desigination ??'' }}</a></h4>
</div>
</div>
 @endforeach


</div>

@endsection