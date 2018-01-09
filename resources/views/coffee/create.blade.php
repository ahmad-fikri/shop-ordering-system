@extends('master')
@section('title', 'Add New Coffee')

@section('content')
<div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="post">

                {!! csrf_field() !!}

                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                <fieldset>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Coffee Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="name" placeholder="Coffee Name" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Price</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="price" placeholder="0.00" name="price">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Cost</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="cost" placeholder="0.00" name="cost">
                        </div>
                    </div>

                    <div class="form-group">
                        <div align="center"><!-- class="col-lg-10 col-lg-offset-2" -->
                            <!-- <button class="btn btn-default">Cancel</button> -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="container col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>List of Coffee</h2>
                </div>

                @if (session('status'))
                  <div class="alert alert-success">
                      {{ session('status') }}
                  </div>
                @endif
                
                @if ($coffees->isEmpty())
                    <p>There is no roles.</p>
                @else
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th><center>Coffee ID</center></th>
                                <th><center>Coffee Name</center></th>
                                <th><center>Coffee Price</center></th>
                                <th><center>Coffee Cost</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($coffees as $coffee)
                                <tr>
                                    <td><center>{!! $coffee->id !!}</center></td>
                                    <td><center>{!! $coffee->name !!}</center></td>
                                    <td><center>{!! $coffee->price !!}</center></td>
                                    <td><center>{!! $coffee->cost !!}</center></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>


@endsection