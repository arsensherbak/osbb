@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper" style="min-height: 366px;">
        <!-- Content Header (Page header) -->

        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row d-flex justify-content-around">

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"> <i class="nav-icon fas fa-archive"></i></span>

                            <div class="info-box-content">
                                <a href="{{route('admin.news.index')}}" class="text-white">
                                    <span class="info-box-text">News</span>
                                </a>
                                <span class="info-box-number">

                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>


                    <!-- /.col -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection
