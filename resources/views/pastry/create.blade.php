@extends('master')
@section('title', 'Add New Pastry')

@section('content')
<div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="post">

                {!! csrf_field() !!}

                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                <fieldset>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Pastry Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="name" placeholder="Pastry Name" name="name">
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
                    <h2>List of Pastry</h2>
                </div>

                
                @if ($pastrys->isEmpty())
                    <p>There is no Pastrys.</p>
                @else
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th><center>Pastry ID</center></th>
                                <th><center>Pastry Name</center></th>
                                <th><center>Pastry Price</center></th>
                                <th><center>Pastry Cost</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pastrys as $pastry)
                                <tr>
                                    <td><center>{!! $pastry->id !!}</center></td>
                                    <td><center>{!! $pastry->name !!}</center></td>
                                    <td><center>{!! $pastry->price !!}</center></td>
                                    <td><center>{!! $pastry->cost !!}</center></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>



@endsection