@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper" >
        <div class="ml-3"><a href="{{route('admin.user.index')}}">back</a></div>

        <section class="content">
            <div class="container-fluid">
                <div class="col-12">
                    <h3>Edit user</h3>
                    <form action="{{route('admin.user.update', $user->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <input type="text" name="first_name" class="form-control col-3 mb-4"
                               value="{{$user->first_name}}"
                               placeholder="enter first name">
                        @error('first_name')
                        <div class="text-danger mb-4">это поле обязательное</div>
                        @enderror
                        <input type="text" name="last_name" class="form-control col-3 mb-4"
                               value="{{$user->last_name}}"
                               placeholder="enter lats name">
                        @error('last_name')
                        <div class="text-danger mb-4">это поле обязательное</div>
                        @enderror
                        <input type="text" name="address" class="form-control col-3 mb-4"
                               value="{{$user->address}}"
                               placeholder="enter address">
                        @error('address')
                        <div class="text-danger mb-4">это поле обязательное</div>
                        @enderror
                        <div class="form-group w-50">
                            <label>Select role user</label>
                            <select class="form-control" name="role">
                                @foreach($roles as $id => $role)
                                    <option value="{{$id}}"
                                        {{ $id == $user->role ? 'selected' : '' }}>
                                        {{$role}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @error('role')
                        <div class="text-danger mb-4">это поле обязательное</div>
                        @enderror
                        <input type="text" name="password" class="form-control col-3 mb-4"
                               placeholder="enter password">
                        @error('password')
                        <div class="text-danger mb-4">это поле обязательное</div>
                        @enderror
                        <input type="text" name="email"
                               value="{{$user->email}}"
                               class="form-control col-3 mb-4"
                               placeholder="enter email">
                        @error('email')
                        <div class="text-danger mb-4">это поле обязательное</div>
                        @enderror
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
