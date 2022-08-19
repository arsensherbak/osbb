@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper" >
        <div class="ml-3"><a href="{{route('admin.news.index')}}">back</a></div>
        <div>
            <div>
                <h3 class="m-2">
                   {{$news->title}}
                </h3>
                <h3 class="m-2">
                    {!! $news->body !!}
                </h3>
                <h3 class="m-2">
                    <img src="{{url('storage/' . $news->image)}}" alt="{{$news->title}}">
                </h3>
            </div>
        </div>
    </div>
@endsection
