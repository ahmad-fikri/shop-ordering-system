@extends('master')
@section('title', 'Create Order')


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
                              <!-- <input type="text" class="form-control" id="customerID" placeholder="12345" name="customerID"> -->
                              <select class="form-control" id="customerID" name="customerID">
                                @foreach($customers as $customer)
                                  <option>{!! $customer->id !!}</option>
                                @endforeach
                              </select>
                              <a href="/customer/add">Add New Customer</a>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Table No</label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control" id="tableno" placeholder="2" name="tableno">
                            </div>
                          </div>
                          <div class="box-footer">
                              <a href="#tab_2" data-toggle="tab" class="btn btn-primary pull-right">Next</a>
                              <!-- /<a href="#tab_2" data-toggle="tab" class="active">Next</a> -->
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
                              <img src="{{ URL::asset('/img/coffee.png') }}" class="img-responsive img-create">
                              <label for="coffee1" class="col-sm-8 control-label text-center">{!! $coffee1->name !!}</label>
                              <div class="col-sm-2">
                                <input type="number" class="form-control" id="coffee1" placeholder="12345" value="0" name="coffee1">
                              </div>
                            </div>
                            <div class="form-group">
                            <img src="{{ URL::asset('/img/coffee.png') }}" class="img-responsive img-create">
                              <label for="coffee2" class="col-sm-8 control-label text-center">{!! $coffee2->name !!}</label>
                              <div class="col-sm-2">
                                <input type="number" class="form-control" id="coffee2" placeholder="12345" value="0"  name="coffee2">
                              </div>
                            </div>
                            <div class="form-group">
                            <img src="{{ URL::asset('/img/coffee.png') }}" class="img-responsive img-create">
                              <label for="coffee3" class="col-sm-8 control-label text-center">{!! $coffee3->name !!}</label>
                              <div class="col-sm-2">
                                <input type="number" class="form-control" id="coffee3" placeholder="12345" value="0"  name="coffee3">
                              </div>
                            </div>
                            <div class="form-group">
                            <img src="{{ URL::asset('/img/coffee.png') }}" class="img-responsive img-create">
                              <label for="coffee4" class="col-sm-8 control-label text-center">{!! $coffee4->name !!}</label>
                              <div class="col-sm-2">
                                <input type="number" class="form-control" id="coffee4" placeholder="12345" value="0"  name="coffee4"> 
                              </div>
                            </div>
                            <div class="form-group">
                            <img src="{{ URL::asset('/img/coffee.png') }}" class="img-responsive img-create">
                              <label for="coffee5" class="col-sm-8 control-label text-center">{!! $coffee5->name !!}</label>
                              <div class="col-sm-2">
                                <input type="number" class="form-control" id="coffee5" placeholder="12345" value="0"  name="coffee5">
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
                            <img src="{{ URL::asset('/img/pastry.png') }}" class="img-responsive img-create">
                              <label for="pastry1" class="col-sm-8 control-label text-center">{!! $pastry1->name !!}</label>
                              <div class="col-sm-2">
                                <input type="number" class="form-control" id="pastry1" placeholder="12345" value="0"  name="pastry1">
                              </div>
                            </div>
                            <div class="form-group">
                            <img src="{{ URL::asset('/img/pastry.png') }}" class="img-responsive img-create">
                              <label for="pastry2" class="col-sm-8 control-label text-center">{!! $pastry2->name !!}</label>
                              <div class="col-sm-2">
                                <input type="number" class="form-control" id="pastry2" placeholder="12345" value="0"  name="pastry2">
                              </div>
                            </div>
                            <div class="form-group">
                            <img src="{{ URL::asset('/img/pastry.png') }}" class="img-responsive img-create">
                              <label for="pastry3" class="col-sm-8 control-label text-center">{!! $pastry3->name !!}</label>
                              <div class="col-sm-2">
                                <input type="number" class="form-control" id="pastry3" placeholder="12345" value="0"  name="pastry3">
                              </div>
                            </div>
                            <div class="form-group">
                            <img src="{{ URL::asset('/img/pastry.png') }}" class="img-responsive img-create">
                              <label for="pastry4" class="col-sm-8 control-label text-center">{!! $pastry4->name !!}</label>
                              <div class="col-sm-2">
                                <input type="number" class="form-control" id="pastry4" placeholder="12345" value="0"  name="pastry4">
                              </div>
                            </div>
                            <div class="form-group">
                            <img src="{{ URL::asset('/img/pastry.png') }}" class="img-responsive img-create">
                              <label for="pastry5" class="col-sm-8 control-label text-center">{!! $pastry5->name !!}</label>
                              <div class="col-sm-2">
                                <input type="number" class="form-control" id="pastry5" placeholder="12345" value="0"  name="pastry5">
                              </div>
                            </div>
                          </div><!-- /.box-body -->
                          <div class="box-footer">
                            <a href="#tab_2" data-toggle="tab" class="btn btn-primary pull-left">Back</a>
                            <button type="submit" class="btn btn-success pull-right">Submit</button>
                          </div><!-- /.box-footer -->
                        </form>
                      </div><!-- /.box -->
                    </div>
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- nav-tabs-custom -->
            </div><!-- /.col -->

@endsection