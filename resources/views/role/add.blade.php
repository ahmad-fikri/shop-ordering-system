@extends('master')
@section('title', 'Add New Staffs')

@section('content')
<div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="post">

                {!! csrf_field() !!}

                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                <fieldset>
                    <legend>Add new Roles</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Name Role</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="name" placeholder="Writer" name="role">
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
                    <h2>List of Role</h2>
                </div>

                @if (session('status'))
                  <div class="alert alert-success">
                      {{ session('status') }}
                  </div>
                @endif
                
                @if ($roles->isEmpty())
                    <p> There is no roles.</p>
                @else
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Role ID</th>
                                <th>Role Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td>{!! $role->id !!}</td>
                                    <td>{!! $role->name !!}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
    </div>
@endsection