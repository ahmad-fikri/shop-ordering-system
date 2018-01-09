@extends('master')
@section('title', 'Edit Order')


@section('content')

        <div class="row">
            <div class="col-md-12">
              <!-- Custom Tabs -->
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">General</a></li>
                  <li><a href="#tab_2" data-toggle="tab">Coffee</a></li>
                  <li><a href="#tab_3" data-toggle="tab">Pastry</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                        <!-- form start -->
                        <form class="form-horizontal" method="post">

                          @foreach ($errors->all() as $error)
                              <p class="alert alert-danger">{{ $error }}</p>
                          @endforeach

                          @if (session('status'))
                              <div class="alert alert-success">
                                  {{ session('status') }}
                              </div>
                          @endif

                          {!! csrf_field() !!}

                          <div class="box-body">
                            <div class="form-group">
                              <label for="customerID" class="col-sm-2 control-label">Customer ID</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="customerID" placeholder="12345" name="customerID" value="{!! $order->customerid !!}">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputPassword3" class="col-sm-2 control-label">Table No</label>
                              <div class="col-sm-10">
                                <input type="number" class="form-control" id="tableno" placeholder="2" name="tableno" value="{!! $order->tableno !!}">
                              </div>
                            </div>
                            <div class="box-footer">
                                <a href="#tab_2" data-toggle="tab" class="btn btn-primary pull-right">Next</a>
                            </div><!-- /.box-footer -->
                          </div><!-- /.box-body -->

                      </div><!-- /.box -->
                    </div>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                        <!-- form start -->

                        <div class="box-body">
                          <div class="form-group">
                            <label for="coffee1" class="col-sm-2 control-label">Latter 1</label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control" id="coffee1" placeholder="12345" name="coffee1" value="{!! $order->coffee1 !!}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="coffee2" class="col-sm-2 control-label">Latter 2</label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control" id="coffee2" placeholder="12345" name="coffee2" value="{!! $order->coffee2 !!}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="coffee3" class="col-sm-2 control-label">Latter 3</label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control" id="coffee3" placeholder="12345" name="coffee3" value="{!! $order->coffee3 !!}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="coffee4" class="col-sm-2 control-label">Latter 4</label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control" id="coffee4" placeholder="12345" name="coffee4" value="{!! $order->coffee4 !!}"> 
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="coffee5" class="col-sm-2 control-label">Latter 5</label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control" id="coffee5" placeholder="12345" name="coffee5" value="{!! $order->coffee5 !!}">
                            </div>
                          </div>
                          <hr>
                          <div class="box-footer">
                            <a href="#tab_1" data-toggle="tab" class="btn btn-primary pull-left">Back</a>
                            <a href="#tab_3" data-toggle="tab" class="btn btn-primary pull-right">Next</a>
                          </div><!-- /.box-footer -->
                          </div><!-- /.box-body -->

                      </div><!-- /.box -->
                    </div>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3">
                    <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                        <!-- form start -->

                          <div class="box-body">
                            <div class="form-group">
                              <label for="pastry1" class="col-sm-2 control-label">Donut 1</label>
                              <div class="col-sm-10">
                                <input type="number" class="form-control" id="pastry1" placeholder="12345"  name="pastry1" value="{!! $order->pastry1 !!}">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="pastry2" class="col-sm-2 control-label">Donut 2</label>
                              <div class="col-sm-10">
                                <input type="number" class="form-control" id="pastry2" placeholder="12345"  name="pastry2" value="{!! $order->pastry2 !!}">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="pastry3" class="col-sm-2 control-label">Donut 3</label>
                              <div class="col-sm-10">
                                <input type="number" class="form-control" id="pastry3" placeholder="12345"  name="pastry3" value="{!! $order->pastry3 !!}">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="pastry4" class="col-sm-2 control-label">Donut 4</label>
                              <div class="col-sm-10">
                                <input type="number" class="form-control" id="pastry4" placeholder="12345" name="pastry4" value="{!! $order->pastry4 !!}">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="pastry5" class="col-sm-2 control-label">Donut 5</label>
                              <div class="col-sm-10">
                                <input type="number" class="form-control" id="pastry5" placeholder="12345"  name="pastry5" value="{!! $order->pastry5 !!}">
                              </div>
                            </div>
                          </div><!-- /.box-body -->
                          <div class="box-footer">
                            <a href="#tab_2" data-toggle="tab" class="btn btn-primary pull-left">Back</a>
                            <button type="submit" class="btn btn-success pull-right">Update</button>
                          </div><!-- /.box-footer -->
                        </form>
                      </div><!-- /.box -->
                    </div>
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- nav-tabs-custom -->
            </div><!-- /.col -->

@endsection