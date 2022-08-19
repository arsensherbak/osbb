@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper" >
        <div class="ml-3"><a href="{{route('admin.user.index')}}">back</a></div>
        <div>
            <div>
                <h3 class="m-2">
                   {{$user->last_name}}
                </h3>
                <h3 class="m-2">
                    {{$user->first_name}}
                </h3>
                <h3 class="m-2">
                    {{$user->address}}
                </h3>
            </div>
        </div>
    </div>
@endsection
