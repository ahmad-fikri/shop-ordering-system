@extends('master')
@section('title', 'Receipt')
@section('content')

<section class="invoice">
          <!-- title row -->
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                <i class="fa fa-globe"></i> KopiBEAN
                <small class="pull-right">Date: {!! $order->created_at->format('m/d/Y') !!}</small>
              </h2>
            </div><!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
              From
              <address>
                <strong>{!! $user->name !!} </strong><br>
                {!! $user->address1 !!}<br>
                {!! $user->address2 !!}<br>
                Phone: {!! $user->tel !!}<br>
                Email: {!! $user->email !!}
              </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              To
              <address>
                <strong>{!! $customer->name !!}</strong><br>
                {!! $customer->address1 !!}<br>
                {!! $customer->address2 !!}<br>
                Phone: {!! $customer->tel !!}<br>
                Email: {!! $customer->email !!}
              </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              <br>
              <b>Order ID:</b> #{!! $order->id !!}<br>
              <b>Table No:</b> {!! $order->tableno !!}<br>
              <b>Payment Due:</b> 2/22/2014<br>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Qty</th>
                    <th>Product</th>
                    <th>Product ID</th>
                    <th>Subtotal</th>
                  </tr>
                </thead>
                <tbody>

                @if($order->coffee1 != 0)
                    <tr>
                        <td>{!! $order->coffee1 !!}</td>
                        <td>{!! $coffee1->name !!}</td>
                        <td>{!! $coffee1->id !!}</td>
                        <td>RM {!! $order->coffee1 * $coffee1->price !!}</td>                     
                    </tr>
                @endif

                @if($order->coffee2 != 0)
                  <tr>
                    <td>{!! $order->coffee2 !!}</td>
                    <td>{!! $coffee2->name !!}</td>
                    <td>{!! $coffee2->id !!}</td>
                    <td>RM {!! $order->coffee2 * $coffee2->price !!}</td>
                  </tr>
                @endif

                @if($order->coffee3 != 0)   
                  <tr>
                    <td>{!! $order->coffee3 !!}</td>
                    <td>{!! $coffee3->name !!}</td>
                    <td>{!! $coffee3->id !!}</td>
                    <td>RM {!! $order->coffee3 * $coffee3->price !!}</td>
                  </tr>
                @endif

                @if($order->coffee4 != 0)
                  <tr>
                    <td>{!! $order->coffee4 !!}</td>
                    <td>{!! $coffee4->name !!}</td>
                    <td>{!! $coffee4->id !!}</td>
                    <td>RM {!! $order->coffee4 * $coffee4->price !!}</td>
                  </tr>
                @endif

                @if($order->coffee5 != 0)
                  <tr>
                    <td>{!! $order->coffee5 !!}</td>
                    <td>{!! $coffee5->name !!}</td>
                    <td>{!! $coffee5->id !!}</td>
                    <td>RM {!! $order->coffee5 * $coffee5->price !!}</td>
                  </tr>
                @endif

                @if($order->pastry1 != 0)
                  <tr>
                    <td>{!! $order->pastry1 !!}</td>
                    <td>{!! $pastry1->name !!}</td>
                    <td>{!! $pastry1->id !!}</td>
                    <td>RM {!! $order->pastry1 * $pastry1->price !!}</td>
                  </tr>
                @endif

                @if($order->pastry2 != 0)
                  <tr>
                    <td>{!! $order->pastry2 !!}</td>
                    <td>{!! $pastry2->name !!}</td>
                    <td>{!! $pastry2->id !!}</td>
                    <td>RM {!! $order->pastry2 * $pastry2->price !!}</td>
                  </tr>
                @endif

                @if($order->pastry3 != 0)
                  <tr>
                    <td>{!! $order->pastry3 !!}</td>
                    <td>{!! $pastry3->name !!}</td>
                    <td>{!! $pastry3->id !!}</td>
                    <td>RM {!! $order->pastry3 * $pastry3->price !!}</td>
                  </tr>
                @endif  

                @if($order->pastry4 != 0)
                  <tr>
                    <td>{!! $order->pastry4 !!}</td>
                    <td>{!! $pastry4->name !!}</td>
                    <td>{!! $pastry4->id !!}</td>
                    <td>RM {!! $order->pastry4 * $pastry4->price !!}</td>
                  </tr>
                @endif

                @if($order->pastry5 != 0)
                  <tr>
                    <td>{!! $order->pastry5 !!}</td>
                    <td>{!! $pastry5->name !!}</td>
                    <td>{!! $pastry5->id !!}</td>
                    <td>RM {!! $order->pastry5 * $pastry5->price !!}</td>
                  </tr>
                @endif

                </tbody>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
             
            </div><!-- /.col -->
            <div class="col-xs-6">
              <p class="lead">Amount Due  {!! $order->created_at->format('m/d/Y') !!}</p>
              <div class="table-responsive">
                <table class="table">
                  <tr>
                    <th>Total:</th>
                    <td>RM {!! $total !!}</td>
                  </tr>
                </table>
              </div>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
              <!-- <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a> -->
              <a href="{!! action('OrdersController@edit', $order->id) !!}" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Edit</a>
              <!-- <a class="btn btn-danger pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Delete</a> -->
              
              <form method="post" action="{!! action('OrdersController@destroy', $order->id) !!}" class="pull-left">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-danger piull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Delete</button>
                            </div>
                        </div>
                </form>
                <div class="clearfix"></div>
            </div>
          </div>
        </section><!-- /.content -->

@endsection