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
                        <label for="title" class="col-lg-2 control-label">Name Coffee</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="name" placeholder="Latte" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Price</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="price" placeholder="30" name="price">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Cost</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="cost" placeholder="15" name="cost">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

    <div class="row"><!-- Tambah class row sini -->
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
                                <th>Coffee ID</th>
                                <th>Coffee Name</th>
                                <th>Coffee Price</th>
                                <th>Coffee Cost</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($coffees as $coffee)
                                <tr>
                                    <td>{!! $coffee->id !!}</td>
                                    <td>{!! $coffee->name !!}</td>
                                    <td>{!! $coffee->price !!}</td>
                                    <td>{!! $coffee->cost !!}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
    </div>
    </div><!-- End row -->

@endsection