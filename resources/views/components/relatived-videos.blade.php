<!-- Related Posts-->
<div class="col-md-4">
<div id="related-posts">
    @foreach ($videos as $videoFetched)
        <div class="related-video-item">
            <div class="thumb">
                <small class="time">{{ $videoFetched->lengthInHuman }}</small>
                <a href="{{ route('videos.show', $videoFetched->slug) }}"><img src="{{ $videoFetched->thumbnail }}" alt=""></a>
            </div>
            <a href="{{ route('videos.show', $videoFetched->slug) }}" class="title">{{ $videoFetched->name }}</a>
            <a class="channel-name" href="#">داود طاهری<span>
                    <i class="fa fa-check-circle"></i></span></a>
        </div>
        <hr>
    @endforeach
</div>
</div><!-- // col-md-4 -->
        <!-- // Related Posts -->