@extends('master')
@section('title', 'Add New Permission')

@section('content')
<div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="post">

                {!! csrf_field() !!}

                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                <fieldset>
                    <legend>Add new Permission</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Name Permission</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="name" placeholder="View Order" name="permission">
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
                    <h2>List of Permission</h2>
                </div>

                @if (session('status'))
                  <div class="alert alert-success">
                      {{ session('status') }}
                  </div>
                @endif
                
                @if ($permissions->isEmpty())
                    <p>There is no roles.</p>
                @else
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Permission ID</th>
                                <th>Permission Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($permissions as $permission)
                                <tr>
                                    <td>{!! $permission->id !!}</td>
                                    <td>{!! $permission->name !!}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
    </div>
@endsection