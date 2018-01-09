@extends('master')
@section('title', 'Details of Customer')
@section('content')

    <div class="row">
            <div class="col-md-10 col-md-offset-1">
              
              @if (session('status'))
                  <div class="alert alert-success">
                        {{ session('status') }}
                  </div>
              @endif
              
              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive img-circle" src="/img/customer.png" alt="User profile picture">
                  <h3 class="profile-username text-center">{!! $customer->name !!}</h3>

                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- About Me Box -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Name: {!! $customer->name !!}</h3>
                </div><!-- /.box-header -->
                <div class="box-body">

                  <strong><i class="fa fa-star-o margin-r-5"></i> IC</strong>
                  <p class="text-muted">{!! $customer->ic !!}</p>

                  <hr>

                  <strong><i class="fa fa-star-o margin-r-5"></i> Telephone No.</strong>
                  <p class="text-muted">{!! $customer->tel !!}</p>

                  <hr>

                  <strong><i class="fa fa-map-marker margin-r-5"></i> Address</strong>
                  <p class="text-muted">{!! $customer->address1 !!},</p>
                  <p class="text-muted">{!! $customer->address2 !!},</p>
                  <p class="text-muted">{!! $customer->postcode !!},</p>
                  <p class="text-muted">{!! $customer->city !!},</p>
                  <p class="text-muted">{!! $customer->state !!}</p>

                  <hr>

                  <strong><i class="fa fa-book margin-r-5"></i>  E-mail</strong>
                  <p class="text-muted">{!! $customer->email !!}</p>

                  <hr>

                  <strong><i class="fa fa-star-o margin-r-5"></i> Registered By</strong>
                  <p class="text-muted">{!! $user->name !!}</p>

                 <hr>

                 <div class="col-xs-12">
                    <!-- <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a> -->
                    <a href="{!! action('CustomersController@edit', $customer->id) !!}" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Edit</a>
                    <!-- <a class="btn btn-danger pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Delete</a> -->
                    
                    <form method="post" action="{!! action('CustomersController@destroy', $customer->id) !!}" class="pull-right">
                      <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                              <div class="form-group">
                                  <div>
                                      <button type="submit" class="btn btn-danger" style="margin-right: 5px;"><i class="fa fa-download"></i> Delete</button>
                                  </div>
                              </div>
                      </form>
                      <div class="clearfix"></div>
                  </div>

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            
          </div><!-- /.row -->

          

@endsection