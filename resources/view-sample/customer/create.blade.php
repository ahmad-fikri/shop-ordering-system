@extends('master')
@section('title', 'Add New Customer')

@section('content')
<div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="post">

                {!! csrf_field() !!}

                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                <fieldset>
                    <legend>Register New Customer</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="name" placeholder="Full Name" name="name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">E-mail</label>
                        <div class="col-lg-10">
                            <input type="email" class="form-control" id="email" placeholder="E-mail" name="email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">IC No</label>
                        <div class="col-lg-10">
                            <input type="number" class="form-control" id="ic" placeholder="Title" name="ic">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Tel</label>
                        <div class="col-lg-10">
                            <input type="number" class="form-control" id="tel" placeholder="Title" name="tel">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Address</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" id="address1" placeholder="Address 1" name="address1">
                        </div>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" id="address2" placeholder="Address 2" name="address2">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Postcode</label>
                        <div class="col-lg-4">
                            <input type="number" class="form-control" id="postcode" placeholder="Address 1" name="postcode">
                        </div>
                        <label for="title" class="col-lg-2 control-label">City</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="city" placeholder="Address 2" name="city">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">State</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="state" placeholder="State" name="state">
                        </div>
                        <label for="title" class="col-lg-2 control-label">Country</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="country" placeholder="Country" name="country">
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
@endsection