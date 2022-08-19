@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="text-center "><a href="{{route('admin.news.create')}}" class="btn btn-primary mt-3">create news</a>
        </div>
        <div>
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table class="table table-head-fixed text-wrap ">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Show</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($news as $info)
                                <tr>
                                    <td style="max-width: 500px;word-wrap:break-word;">{{$info->title}}</td>
                                    <td>
                                        <a href="{{route('admin.news.show', $info->id)}}"
                                           class="text-black">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{route('admin.news.edit', $info->id)}}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{route('admin.news.delete', $info->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="text-danger border-0 bg-transparent">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection
