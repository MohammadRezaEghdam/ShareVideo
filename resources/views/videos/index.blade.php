@extends('layout')
@section('content')


            <!-- popiular videos -->
            <h1 class="new-video-title"><i class="fa fa-bolt"></i> {{$title}}</h1>
            <div class="row">
                @foreach($videos as $video) 
                    <x-video-box :video="$video"/>
                @endforeach
                </div>
            </div>
            <div class="text-center">
                {{$videos->links()}}
            </div>
        </div>

@endsection