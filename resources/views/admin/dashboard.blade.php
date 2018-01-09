@extends('master')
@section('title', 'Admin Dashboard')


@section('content')
    
    <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>{!! $ordersTotal !!}</h3>
                  <p>Orders</p>
                </div>
                <div class="icon">
                  <i class="fa fa-cart-plus"></i>
                </div>
                
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>{!! $rate !!}<sup style="font-size: 20px">%</sup></h3>
                  <p>Profit Margin</p>
                </div>
                <div class="icon">
                  <i class="fa fa-line-chart"></i>
                </div>
                
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>{!! $usersTotal !!}</h3>
                  <p>Employee Registrations</p>
                </div>
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
               
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><span>RM</span>{!! $sum !!}</h3>
                  <p>Total Sales</p>
                </div>
                <div class="icon">
                  <i class="fa fa-money"></i>
                </div>
                
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-12 connectedSortable">

              <!-- solid sales graph -->
              <div class="box box-solid bg-teal-gradient">
                <div class="box-header">
                  <i class="fa fa-th"></i>
                  <h3 class="box-title">Sales Order</h3>
                </div>
                <div class="box-body border-radius-none">
                  
                  <div class="chart" id="line-chart" style="height: 250px;"></div>
                  
                  <script>
                    $(function() {

                      // Create a function that will handle AJAX requests
                      function requestData(days, chart){
                        $.ajax({
                          type: "GET",
                          dataType: 'json',
                          url: "./api", // This is the URL to the API
                          data: { days: days }
                        })
                        .done(function( data ) {
                          // When the response to the AJAX request comes back render the chart with new data
                          chart.setData(data);
                        })
                        .fail(function() {
                          // If there is no communication between the server, show an error
                          alert( "error occured" );
                        });
                      }

                      var chart = Morris.Bar({
                        // ID of the element in which to draw the chart.
                        element: 'line-chart',
                        data: [0, 0], // Set initial data (ideally you would provide an array of default data)
                        xkey: 'date', // Set the key for X-axis
                        ykeys: ['value'], // Set the key for Y-axis
                        labels: ['Orders'], // Set the label when bar is rolled over
                        resize:['true'],
                        barColors:['#fff'],
                        gridTextColor:['#fff']
                      });


                      // Request initial data for the past 7 days:
                      requestData(7, chart);

                      $('ul.ranges a').click(function(e){
                        e.preventDefault();

                        // Get the number of days from the data attribute
                        var el = $(this);
                        days = el.attr('data-range');

                        // Request the data and render the chart using our handy function
                        requestData(days, chart);
                      })
                    }); 
                  </script>
                
                </div><!-- /.box-body -->
                
              </div><!-- /.box -->


            </section><!-- right col -->
	
@endsection