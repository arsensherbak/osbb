@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="text-center "><a href="{{route('admin.expenditure.create')}}" class="btn btn-primary mt-3">create news</a>
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
                                <th>expenditure</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($expenditures as $expenditure)
                                <tr>
                                    <td style="max-width: 500px;word-wrap:break-word;">{{$expenditure->title}}</td>
                                   <td> {{$expenditure->transaction->sum}}</td>
                                    <td>
                                        <form action="{{route('admin.news.delete', $expenditure->id)}}" method="post">
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
