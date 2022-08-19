@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="text-center "><a href="{{route('admin.user.create')}}" class="btn btn-primary mt-3">create user</a>
        </div>
        <div>
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table class="table table-head-fixed text-wrap ">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>show</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td style="max-width: 200px;word-wrap:break-word;">
                                        {{$user->first_name}} {{$user->last_name}}
                                    </td>
                                    <td style="max-width: 200px;word-wrap:break-word;">
                                        {{$user->address}}
                                    </td>
                                    <td style="max-width: 200px;word-wrap:break-word;">
                                        {{$user->email}}
                                    </td>
                                    <td>
                                        <a href="{{route('admin.user.show', $user->id)}}"
                                           class="text-black">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{route('admin.user.edit', $user->id)}}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{route('admin.user.delete', $user->id)}}" method="post">
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
