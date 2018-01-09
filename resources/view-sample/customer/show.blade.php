@extends('master')
@section('title', 'View a Customer')
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
                  <img class="profile-user-img img-responsive img-circle" src="/img/user4-128x128.jpg" alt="User profile picture">
                  <h3 class="profile-username text-center">{!! $customer->name !!}</h3>

                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- About Me Box -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">About {!! $customer->name !!}</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <strong><i class="fa fa-book margin-r-5"></i>  E-mail</strong>
                  <p class="text-muted">
                    {!! $customer->email !!}
                  </p>

                  <hr>

                  <strong><i class="fa fa-map-marker margin-r-5"></i> Address</strong>
                  <p class="text-muted">{!! $customer->address1 !!},</p>
                  <p class="text-muted">{!! $customer->address2 !!},</p>
                  <p class="text-muted">{!! $customer->postcode !!},</p>
                  <p class="text-muted">{!! $customer->city !!},</p>
                  <p class="text-muted">{!! $customer->state !!}</p>

                  <hr>

                  <strong><i class="fa fa-star-o margin-r-5"></i> IC</strong>
                  <p class="text-muted">{!! $customer->ic !!}</p>

                  <hr>

                  <strong><i class="fa fa-star-o margin-r-5"></i> Registered By</strong>
                  <p class="text-muted">{!! $register !!}</p>

                 

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            
          </div><!-- /.row -->

@endsection