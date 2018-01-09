@extends('master')
@section('title', 'View a User')
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
                  <h3 class="profile-username text-center">{!! $user->name !!}</h3>
                  <p class="text-muted text-center">{!! $role !!}</p>

                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- About Me Box -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">About Me</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <strong><i class="fa fa-book margin-r-5"></i>  E-mail</strong>
                  <p class="text-muted">
                    {!! $user->email !!}
                  </p>

                  <hr>

                  <strong><i class="fa fa-map-marker margin-r-5"></i> Address</strong>
                  <p class="text-muted">{!! $user->address1 !!},</p>
                  <p class="text-muted">{!! $user->address2 !!},</p>
                  <p class="text-muted">{!! $user->postcode !!},</p>
                  <p class="text-muted">{!! $user->city !!},</p>
                  <p class="text-muted">{!! $user->state !!}</p>

                  <hr>

                  <strong><i class="fa fa-star-o margin-r-5"></i> IC</strong>
                  <p class="text-muted">{!! $user->ic !!}</p>

                  <hr>

                  <strong><i class="fa fa-money margin-r-5"></i> Salary</strong>
                  <p class="text-muted">RM {!! $user->salary !!}</p>

                  <hr>

                  @if( $role == 'Admin' )
                    <a href="{!! action('AdminsController@assignRole', $user->id) !!}" class="btn bg-maroon btn-flat margin">Assign to Staff</a>
                  @else
                    <a href="{!! action('AdminsController@assignRole', $user->id) !!}" class="btn bg-maroon btn-flat margin">Assign to Admin</a>
                  @endhasrole

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            
          </div><!-- /.row -->

@endsection