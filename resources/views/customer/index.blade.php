@extends('master')
@section('title', 'List Customer')

@section('content')

	<!-- Your Page Content Here -->
          <div class="box box-info">
                <div class="box-body">
                  <div class="table-responsive">

                     @if ($customers->isEmpty())
                        <p> There is no customer.</p>
                    @else

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <th><center>Customer ID</center></th>
                          <th><center>Name</center></th>
                          <th><center>I/C No.</center></th>
                          <th><center>Telephone No.</center></th>
                        </tr>
                      </thead>
                      <tbody>
                            @foreach($customers as $customer)
                                <tr>
                                  <td><center><a href="{!! action('CustomersController@show', $customer->id) !!}"><span class="label label-success">{!! $customer->id !!}</span></a></center></td>
                                  <td><center>{!! $customer->name !!}</center></td>
                                  <td><center>{!! $customer->ic !!}</center></td>
                                  <td><center>{!! $customer->tel !!}</center></td>
                                </tr>
                            @endforeach    
                      </tbody>
                    </table>
                    @endif
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <a href="/customer/add" class="btn btn-sm btn-info btn-flat pull-left">Add New Customer</a>
                </div><!-- /.box-footer -->
              </div>

@endsection