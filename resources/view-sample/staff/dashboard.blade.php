@extends('master')
@section('title', 'Dashboard')


@section('content')

    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal">
                <fieldset>
                    <legend>Submit a new order</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Customer ID</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="title" placeholder="Title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Table No</label>
                        <div class="col-lg-10">
                            <input type="number" class="form-control" id="title" placeholder="Title">
                        </div>
                    </div>
                    

                    <div class="form-group">
                      <label for="select111" class="col-md-2 control-label">Coffee ID</label>

                      <div class="col-md-10">
                        <select id="select111" class="form-control">
                          <option>#1 Latte</option>
                          <option>#2 Latte</option>
                          <option>#3 Latte</option>
                          <option>#4 Latte</option>
                          <option>#5 Latte</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Quantity Coffee</label>
                        <div class="col-lg-10">
                            <input type="number" class="form-control" id="title" placeholder="Title">
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="select111" class="col-md-2 control-label">Pastry ID</label>

                      <div class="col-md-10">
                        <select id="select111" class="form-control">
                          <option>#1 Donut</option>
                          <option>#2 Donut</option>
                          <option>#3 Donut</option>
                          <option>#4 Donut</option>
                          <option>#5 Donut</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Quantity Pastry</label>
                        <div class="col-lg-10">
                            <input type="number" class="form-control" id="title" placeholder="Title">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Table No</label>
                        <div class="col-lg-10">
                            <input type="number" class="form-control" id="title" placeholder="Title">
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