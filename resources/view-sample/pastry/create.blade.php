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
                                <th>Pastry ID</th>
                                <th>Pastry Name</th>
                                <th>Pastry Price</th>
                                <th>Pastry Cost</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pastrys as $pastry)
                                <tr>
                                    <td>{!! $pastry->id !!}</td>
                                    <td>{!! $pastry->name !!}</td>
                                    <td>{!! $pastry->price !!}</td>
                                    <td>{!! $pastry->cost !!}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
    </div>



@endsection