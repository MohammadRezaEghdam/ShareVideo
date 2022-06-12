@extends('layout')
@section('content')
    <div class="row">
        
        <!-- Watch -->
        <div class="col-md-8">
            <div id="watch">

                <!-- Video Player -->
                <h1 class="video-title">{{ $video->name }}</h1>
                <div class="video-code">
                    <video controls style="height: 100%; width: 100%;">
                        <source src="{{ $video->url }}" type="video/mp4">
                    </video>

                </div><!-- // video-code -->
                <div>
                    <p>
                        {{ $video->description }}
                    </p>

                </div>
                <div class="video-share">
                    <ul class="like">
                        <li><a class="deslike" href="#">{{$video->dislike_count}} <i class="fa fa-thumbs-down"></i></a></li>
                        <li><a class="like" href="{{route('video.like', $video)}}">{{$video->like_count}} <i class="fa fa-thumbs-up"></i></a></li>
                    </ul>
                    <ul class="social_link">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li><a class="youtube" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </li>
                        <li><a class="google" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li><a class="rss" href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                    </ul><!-- // Social -->
                </div><!-- // video-share -->
                <!-- // Video Player -->


                <!-- Chanels Item -->
                <div class="chanel-item">
                    <div class="chanel-thumb">
                        <a href="#"><img src="{{ $video->owner_gravatar }}" alt=""></a>
                    </div>
                    <div class="chanel-info">
                        <a class="title" href="#">{{ $video->Owner_name }}</a>
                        <span class="subscribers">436,414 اشتراک</span>
                    </div>
                    <a href="#" class="subscribe">اشتراک</a>
                </div>
                <!-- // Chanels Item -->


                <!-- Comments -->
                <div id="comments" class="post-comments">
                    <h3 class="post-box-title"><span>{{ count($video->comments) }}</span> نظرات</h3>
                    <ul class="comments-list">
                        @foreach ($video->comments as $comment)
                            <li>
                                <div class="post_author">
                                    <div class="img_in">
                                        <a href="#"><img src="{{ $comment->user->garavatar }}" alt=""></a>
                                    </div>
                                    <a href="#" class="author-name">{{ $comment->user->name }}</a>
                                    <time datetime="2017-03-24T18:18">{{ $comment->created_at_in_human }}</time>
                                </div>
                                <p>
                                    {{ $comment->body }}
                                </p>



                            </li>
                        @endforeach


                    </ul>
                    @if ($errors->any())
                        {{ implode('', $errors->all('<div>:message</div>')) }}
                    @endif

                    <h3 class="post-box-title">ارسال نظرات</h3>
                    <form method="POST" action="{{ route('comment.store', $video) }}">
                        @csrf
                        <textarea class="form-control" rows="8" name="body" id="Message" placeholder="پیام"></textarea>
                        <button type="submit" id="contact_submit" class="btn btn-dm">ارسال پیام</button>
                    </form>
                </div>
                <!-- // Comments -->


            </div><!-- // watch -->
        </div>
        <x-relatived-videos :video="$video" />
        <!-- // col-md-8 -->
        <!-- // Watch -->
    </div><!-- // row -->
@endsection
