<div class="col-lg-2 col-md-4 col-sm-6">
    <div class="video-item">
        <div class="thumb">
            <div class="hover-efect"></div>
            <small class="time">{{$video->lengthInHuman}}</small>
            <a href="#"><img src="{{$video->thumbnail}}" alt=""></a>
        </div>
        <div class="video-info">
            <a href="{{route('videos.show', $video->slug)}}" class="title">{{$video->name}}</a>

            <a href="{{route('videos.edit',$video->slug)}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                </svg>
            </a>
            <a class="channel-name" href="#">مهرداد سامی<span>
                    <i class="fa fa-check-circle"></i></span></a>
            <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
            <span class="date"><i class="fa fa-clock-o"></i>{{$video->created_at}}</span>
        </div>
    </div>
</div>