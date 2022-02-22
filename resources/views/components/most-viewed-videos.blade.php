<h1 class="new-video-title"><i class="fa fa-bolt"></i> پر بازدید ترین ها</h1>
    <div class="row">
        @foreach($mostViewedVideos as $mostViewed)
        <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="video-item">
                <div class="thumb">
                    <div class="hover-efect"></div>
                    <small class="time">{{$mostViewed->length}}</small>
                    <a href="#"><img src="{{$mostViewed->thumbnail}}" alt=""></a>
                </div>
                <div class="video-info">
                    <a href="#" class="title">{{$mostViewed->name}}</a>
                    <a class="channel-name" href="#">مهرداد سامی<span>
                            <i class="fa fa-check-circle"></i></span></a>
                    <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
                    <span class="date"><i class="fa fa-clock-o"></i>{{$mostViewed->created_at}}</span>
                </div>
            </div>
        </div>
        @endforeach
</div>