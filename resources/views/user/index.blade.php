@extends('master')
@section('title', 'Employee')


@section('content')
      
<!-- Your Page Content Here -->
          <div class="box box-info">
                <div class="box-body">
                  <div class="table-responsive">

                     @if ($users->isEmpty())
                        <p> There is no user.</p>
                    @else
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <th><center>Employee ID</center></th>
                          <th><center>Name</center></th>
                          <th><center>I/C No.</center></th>
                          <th><center>Telephone No.</center></th>
                          <th><center>Salary</center></th>
                        </tr>
                      </thead>
                      <tbody>

                         @foreach($users as $user)
                          <tr>
                            <td><center><a href="{!! action('AdminsController@show', $user->id) !!}"><span class="label label-success">{!! $user->id !!}</span></a></center></td>
                            <td><center>{!! $user->name !!}</center></td>
                            <td><center>{!! $user->ic !!}</center></td>
                            <td><center>{!! $user->tel !!}</center></td>
                            <td><center>RM{!! $user->salary !!}</center></td>
                          </tr>
                          @endforeach

                      </tbody>
                    </table>
                    @endif
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <!-- <a href="javascript::;" class="btn btn-sm btn-info btn-flat pull-left">Register New Employee</a> -->
                </div><!-- /.box-footer -->
              </div>
@endsection