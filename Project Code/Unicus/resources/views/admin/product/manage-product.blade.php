@extends('admin.master')
@section('pageTitle')
    Product
@endsection
@section('pgSubTitle')
    Manage Product
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Product Information Data Table</h3>
                    </div>
                    <!-- /.box-header -->
                    @if($message = Session::get('message'))
                        <h3 class="text-center text-success">{{ $message }}</h3>
                    @endif
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL Id</th>
                                <th>Product Name</th>
                                <th>Category Name</th>
                                <th>Brand Name</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Publication Status</th>
                                {{--<th>Product Image</th>--}}
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $products)
                                <tr>
                                    <td>{{$products->id}}</td>
                                    <td>{{ $products->product_name }}</td>
                                    <td>{{ $products->category_id }}</td>
                                    <td>{{$products->brand_id}}</td>
                                    <td>{{$products->product_price}}</td>
                                    <td>{{$products->product_quantity}}</td>
                                    <td>
                                        @if($products->publication_status==1)
                                            <span class="label label-success">Published</span>
                                        @else
                                            <span class="label label-warning">Unpublished</span>
                                        @endif
                                    </td>
                                    {{--<td>{{ $products->product_image }}</td>--}}
                                    <td>
                                        <a href="" title="View Product Details" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-zoom-in"></span>
                                        </a>
                                        @if($products->publication_status == 1)
                                            <a href="{{ url('/product/unpublished-product/'.$products->id) }}" title="Published Product" class="btn btn-success btn-xs">
                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                            </a>
                                        @else
                                            <a href="{{ url('/product/published-product/'.$products->id) }}" class="btn btn-warning btn-xs" title="Unpublished">
                                                <span class="glyphicon glyphicon-arrow-down"></span>
                                            </a>
                                        @endif

                                        <a href="" title="Edit Product" class="btn btn-primary btn-xs">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="" title="Delete Product" class="btn btn-danger btn-xs">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

