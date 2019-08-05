@extends('admin.master')

@section('pageTitle')
    Add payment
@endsection
@section('pgSubTitle')
    Add received amount
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
                        <h3 class="box-title">Add payemt</h3>
                    </div>
                    @if($message = Session::get('message'))
                        <h3 class="text-center text-success">{{ $message }}</h3>
                @endif
                <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="POST" action="{{ route('payment.save') }}">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputName3" class="col-sm-3 control-label">Ixn Id</label>

                                <div class="col-sm-9">
                                    <input type="text" name="txn_id" class="form-control" id="inputName3" placeholder="Add a Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputDescription3" class="col-sm-3 control-label">Amount</label>
                                <div class="col-sm-9">
                                    <input type="text" name="amount" class="form-control" id="inputName3" placeholder="Add amount" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Method</label>

                                <div class="col-sm-9">
                                    <select class="form-control" name="payment_method">
                                        <option>Select Method</option>
                                        <option value="roket">Roket</option>
                                        <option value="bkash">Bkash</option>
                                        <option value="ucash">Ucash</option>
                                        <option value="nagod">Nagod</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="col-sm-offset-3">
                                <button type="submit" name="btn" class="btn btn-info">Add Payment</button>
                            </div>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
@endsection
