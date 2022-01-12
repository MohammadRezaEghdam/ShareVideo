@extends('layout')
@section('content')
<x-latest-videos>
    
</x-latest-videos>

            <!-- popiular videos -->
            <h1 class="new-video-title"><i class="fa fa-bolt"></i> محبوب‌ترین‌ها</h1>
            <div class="row">
                @foreach($mostPopularVideos as $popularVideos)
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <small class="time">{{$popularVideos->length}}</small>
                            <a href="#"><img src="{{$popularVideos->thumbnail}}" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">{{$popularVideos->name}}</a>
                            <a class="channel-name" href="#">مهرداد سامی<span>
                                    <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
                            <span class="date"><i class="fa fa-clock-o"></i>{{$popularVideos->created_at}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
                </div>
            </div>


            <!-- the most viewed videos -->
            <h1 class="new-video-title"><i class="fa fa-bolt"></i> پربازدیدترین</h1>
            <div class="row">
                @foreach($mostViewedVideos as $viewedVideos)
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <small class="time">{{$viewedVideos->length}}</small>
                            <a href="#"><img src="{{$viewedVideos->thumbnail}}" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">{{$viewedVideos->name}}</a>
                            <a class="channel-name" href="#">مهرداد سامی<span>
                                    <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
                            <span class="date"><i class="fa fa-clock-o"></i>{{$viewedVideos->created_at}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
                </div>
        </div>

@endsection