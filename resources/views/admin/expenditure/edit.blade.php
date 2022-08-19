@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper" >
        <div class="ml-3"><a href="{{route('admin.news.index')}}">back</a></div>

        <section class="content">
            <div class="container-fluid">
                <div class="col-12">
                    <h3>Edit news</h3>
                    <form action="{{route('admin.news.update', $news->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <input type="text" name="title" class="form-control col-3 mb-4"
                               placeholder="enter a description of the news" value="{{$news->title}}">
                        @error('title')
                        <div class="text-danger mb-4">это поле обязательное</div>
                        @enderror
                        <div class="input-group d-flex flex-column">
                            <div><label>news description</label></div>
                            <div class="w-100">
                                <textarea id="summernote" name="body" class="w-50">{!! $news->body !!}</textarea>
                            </div>
                        </div>
                        <img src="{{url('storage/' . $news->image)}}" alt="{{$news->title}}">
                        <div class="input-group w-50">

                            <div class="custom-file">
                                <input type="file" class="custom-file-input"  name="image">
                                <label class="custom-file-label">upload news image</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
