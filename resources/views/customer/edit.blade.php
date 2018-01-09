@extends('master')
@section('title', 'Edit Customer')

@section('content')
<div class="row">
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
                            <input type="text" class="form-control" id="name" placeholder="Full Name" name="name" value="{!! $customer->name !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">E-mail</label>
                        <div class="col-lg-10">
                            <input type="email" class="form-control" id="email" placeholder="E-mail" name="email" value="{!! $customer->email !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">IC No</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="ic" placeholder="I/C" name="ic" value="{!! $customer->ic !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Telephone No.</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="tel" placeholder="Telephone No." name="tel" value="{!! $customer->tel !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Address</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" id="address1" placeholder="Address 1" name="address1" value="{!! $customer->address1 !!}">
                        </div>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" id="address2" placeholder="Address 2" name="address2" value="{!! $customer->address2 !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Postcode</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="postcode" placeholder="Postcode" name="postcode" value="{!! $customer->postcode !!}">
                        </div>
                        <label for="title" class="col-lg-2 control-label">City</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="city" placeholder="City" name="city" value="{!! $customer->city !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">State</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="state" placeholder="State" name="state" value="{!! $customer->state !!}">
                        </div>
                        <label for="title" class="col-lg-2 control-label">Country</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="country" placeholder="Country" name="country" value="{!! $customer->country !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <div align="center"><!-- class="col-lg-10 col-lg-offset-2" -->
                            <!-- <button class="btn btn-default">Cancel</button> -->
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection