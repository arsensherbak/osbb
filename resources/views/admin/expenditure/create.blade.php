@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper" >
        <div class="ml-3"><a href="{{route('admin.expenditure.index')}}" >back</a></div>

        <section class="content">
            <div class="container-fluid">
                <div class="col-12">
                    <h3>Add news</h3>
                    <form action="{{route('admin.expenditure.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="title" class="form-control col-3 mb-4"
                               placeholder="enter title">
                        @error('title')
                        <div class="text-danger mb-4">это поле обязательное</div>
                        @enderror
                        <div class="input-group d-flex flex-column">
                            <div><label>sum</label></div>
                            <div class="w-100">
                                <input type="number" name="sum" class="form-control col-3 mb-4"
                                       placeholder="enter sum">
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
