@extends('admin.master')
@section('pageTitle')
Category
@endsection
@section('pgSubTitle')
Add Category
@endsection
@section('content')
<!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-sm-offset-1 col-sm-10">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Add New Category</h3>
                </div>
                @if($message = Session::get('message'))
                <h3 class="text-center text-success">{{ $message }}</h3>
                    @endif
                    <!-- /.box-header -->
                    <!-- form start -->

            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
@endsection
