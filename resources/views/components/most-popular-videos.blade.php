
<h1 class="new-video-title"><i class="fa fa-bolt"></i> محبوب ترین ویدیوها</h1>
<div class="row">
@foreach($mostPopularVideos as $mostPopular)
    <div class="col-lg-2 col-md-4 col-sm-6">
        <div class="video-item">
            <div class="thumb">
                <div class="hover-efect"></div>
                <small class="time">{{$mostPopular->length}}</small>
                <a href="#"><img src="{{$mostPopular->thumbnail}}" alt=""></a>
            </div>
            <div class="video-info">
                <a href="#" class="title">{{$mostPopular->name}}</a>
                <a class="channel-name" href="#">مهرداد سامی<span>
                        <i class="fa fa-check-circle"></i></span></a>
                <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
                <span class="date"><i class="fa fa-clock-o"></i>{{$mostPopular->created_at}}</span>
            </div>
        </div>
    </div>
@endforeach
    

    