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
                          <th>Customer ID</th>
                          <th>Name</th>
                          <th>E-mail</th>
                        </tr>
                      </thead>
                      <tbody>
                            @foreach($customers as $customer)
                                <tr>
                                  <td><a href="{!! action('CustomersController@show', $customer->id) !!}"><span class="label label-success">{!! $customer->id !!}</span></a></td>
                                  <td>{!! $customer->name !!}</td>
                                  <td>{!! $customer->email !!}</td>
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