@extends('layout')
@section('content')
        <div class="col-md-2 no-padding-left hidden-sm hidden-xs">
            <div class="left-sidebar">
                <div id="sidebar-stick" >
                <ul class="menu-sidebar">
                    <li><a href="01-home.html"><i class="fa fa-home"></i>خانه</a></li>
                    <li><a href="#"><i class="fa fa-bolt"></i>رندوم</a></li>
                    <li><a href="14-history.html"><i class="fa fa-clock-o"></i>تاریخچه</a></li>
                    <li><a href="11-blog.html"><i class="fa fa-file-text"></i>وبلاگ</a></li>
                    <li><a href="10-upload.html"><i class="fa fa-upload"></i>آپلود</a></li>
                </ul>
                <ul class="menu-sidebar">
                    <li><a href="#"><i class="fa fa-edit"></i>ویرایش پروفایل</a></li>
                    <li><a href="#"><i class="fa fa-sign-out"></i>خروج</a></li>
                </ul>
                <ul class="menu-sidebar">
                    <li><a href="#"><i class="fa fa-gear"></i>تنظیمات</a></li>
                    <li><a href="#"><i class="fa fa-question-circle"></i>راهنما</a></li>
                    <li><a href="#"><i class="fa fa-send-o"></i>ارسال بازخورد</a></li>
                </ul>
                </div><!-- // sidebar-stick -->
                <div class="clear"></div>
            </div><!-- // left-sidebar -->
      </div><!-- // col-md-2 -->



        <div id="all-output" class="col-md-10 upload">
        	<div id="upload">
                <div class="row">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <!-- upload -->
                    <div class="col-md-8">
						<h1 class="page-title"><span>آپلود</span> فیلم</h1>
						<form action="{{route('videos.store')}}" method="POST">
                            @csrf
                        	<div class="row">
                            	<div class="col-md-6">
                                	<label>عنوان</label>
                                    <input type="text" name="name" class="form-control" placeholder="عنوان">
                                </div>
                            	<div class="col-md-6">
                                	<label>مدت زمان</label>
                                    <input type="text" name="length" class="form-control" placeholder="مدت زمان">
                                </div>
                            	<div class="col-md-6">
                                    <label>نام یکتا</label>
                                    <input type="text" name="slug" class="form-control" placeholder="نام یکتا">
                                </div>
                            	<div class="col-md-6">
                                    <label>آدرس</label>
                                    <input type="text" name="url" class="form-control" placeholder="آدرس">
                                </div>
                            	<div class="col-md-6">
                                	<label>آپلود فیلم</label>
                                    <input id="upload_file" name="thumbnail" type="file" class="file">
                                </div>
                            	<div class="col-md-12">
                                	<label>توضیحات</label>
                                    <textarea class="form-control" name="description" rows="4"  placeholder="توضیح"></textarea>
                                </div>
                            	<!-- <div class="col-md-6">
                                	<label>تصویر</label>
                                    <input id="featured_image" type="file" class="file">
                                </div> -->
                            	<div class="col-md-6">
                                    <button type="submit" id="contact_submit" class="btn btn-dm">ذخیره</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- // col-md-8 -->

                    <div class="col-md-4">
                    	<a href="#"><img src="demo_img/upload-adv.png" alt=""></a>
                    </div><!-- // col-md-8 -->
                    <!-- // upload -->
                </div><!-- // row -->
            </div><!-- // upload -->
		</div>
      
@endsection