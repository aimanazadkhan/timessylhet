@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Website Settings</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">Website Settings</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>



          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> Website Settings</h3>
            
            </div>
            <!-- /.card-header -->
            <div class="card-body col-lg-12">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Website Setting</h4>
                       
                      </div>

                      <div class="modal-body">
                         <form action="{{ route('update.websitesetting',$setting->id) }}" method="Post" enctype="multipart/form-data">
                         	@csrf
                           <div class="form-group">
                             <label for="logo">Header Logo Black</label>
                             <input type="file" class="form-control "  aria-describedby="emailHelp" name="logo" >
                           </div>
						                              <div class="form-group">
                             <label for="mobilelogo">Mobile Logo White</label>
                             <input type="file" class="form-control "  aria-describedby="emailHelp" name="mobilelogo" >
                           </div>
						   <div class="form-group">
                             <label for="favicon">Favicon (64X64 PX))</label>
                             <input type="file" class="form-control "  aria-describedby="emailHelp" name="favicon" >
                           </div>
						   	<div class="form-group">
                             <label for="lazybaner">Lazy Baner (700X390 PX)</label>
                             <input type="file" class="form-control "  aria-describedby="emailHelp" name="lazybaner" >
                           </div>
						    <div class="form-group">
                             <label for="exampleInputEmail1">Facebook Page ID</label>
                             <input type="text" class="form-control " value="{{ $setting->facebookpage }}" aria-describedby="emailHelp" name="facebookpage" required="">
                           </div>
                           <div class="form-group">
                             <label for="exampleInputEmail1">Phone Bangla</label>
                             <input type="text" class="form-control " value="{{ $setting->phone_bn }}" aria-describedby="emailHelp" name="phone_bn" required="">
                           </div>
                             <div class="form-group">
                             <label for="exampleInputEmail1">Phone English</label>
                             <input type="text" class="form-control " value="{{ $setting->phone_en }}" aria-describedby="emailHelp" name="phone_en" required="">
                           </div>
                           <div class="form-group">
                             <label for="exampleInputEmail1">Email</label>
                             <input type="text" class="form-control " value="{{ $setting->email }}" aria-describedby="emailHelp" name="email" required="">
                           </div>
                            <div class="form-group">
                             <label for="exampleInputEmail1">Addres Bangle</label>
                              <textarea class="textarea" placeholder="Place some text here" name="address_bn" 
                          style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          	{{ $setting->address_bn }}
                          </textarea>
                           </div>
                            <div class="form-group">
                             <label for="exampleInputEmail1">Address English</label>
                               <textarea class="textarea" placeholder="Place some text here" name="address_en" 
                          style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          		{{ $setting->address_en }}
                          </textarea>
                           </div>
                         <div class="form-group">
                             <label for="exampleInputEmail1">Chief Advisor</label>
                               <textarea class="textarea" placeholder="Place some text here" name="chiefadvisor" 
                          style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          		{{ $setting->chiefadvisor }}
                          </textarea>
                           </div>
						                            <div class="form-group">
                             <label for="exampleInputEmail1">Editor and Publisher</label>
                               <textarea class="textarea" placeholder="Place some text here" name="publisher" 
                          style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          		{{ $setting->publisher }}
                          </textarea>
                           </div>
						   	<div class="form-group">
                             <label for="exampleInputEmail1">Managing Editor</label>
                               <textarea class="textarea" placeholder="Place some text here" name="managingeditor" 
                          style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          		{{ $setting->managingeditor }}
                          </textarea>
                           </div>
						   						   	<div class="form-group">
                             <label for="exampleInputEmail1">Message Editor</label>
                               <textarea class="textarea" placeholder="Place some text here" name="messageeditor" 
                          style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          		{{ $setting->messageeditor }}
                          </textarea>
                           </div>
						   						   						   	<div class="form-group">
                             <label for="exampleInputEmail1">Terms & Condition</label>
                               <textarea class="textarea" placeholder="Place some text here" name="terms" 
                          style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          		{{ $setting->terms }}
                          </textarea>
                           </div>
						   	<div class="form-group">
                             <label for="exampleInputEmail1">Privacy & Policy</label>
                               <textarea class="textarea" placeholder="Place some text here" name="privacy" 
                          style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          		{{ $setting->privacy }}
                          </textarea>
                           </div>
						   						   						   						   	<div class="form-group">
                             <label for="exampleInputEmail1">About US</label>
                               <textarea class="textarea" placeholder="Place some text here" name="aboutus" 
                          style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          		{{ $setting->aboutus }}
                          </textarea>
                           </div>
						   
						      
                           <button type="submit" class="btn btn-success btn-block">Update</button>
                         </form>
                      </div>
                    </div>
            </div>
            <!-- /.card-body -->
          </div>


@endsection