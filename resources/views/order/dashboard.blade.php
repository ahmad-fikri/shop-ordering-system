@extends('master')
@section('title', 'Order')

@section('content')

	<!-- Your Page Content Here -->
          <div class="box box-info">
                <div class="box-body">
                  <div class="table-responsive">

                     @if ($orders->isEmpty())
                        <p> There is no order.</p>
                    @else

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <th><center>Order ID</center></th>
                          <th><center>Table No</center></th>
                        </tr>
                      </thead>
                      <tbody>
                            @foreach($orders as $order)
                                <tr>
                                  <td><center><a href="{!! action('OrdersController@show', $order->id) !!}"><span class="label label-success">{!! $order->id !!}</span></a></center></td>
                                  <td><center>{!! $order->tableno !!}</center></td>
                                </tr>
                            @endforeach    
                      </tbody>
                    </table>
                    @endif
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <a href="/order/new" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
                </div><!-- /.box-footer -->
              </div>

@endsection