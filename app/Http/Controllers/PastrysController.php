<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pastry;
class PastrysController extends Controller
{
   
    public function index()
    {
        //
    }

 
    public function create()
    {
        $pastrys = Pastry::all();
        return view('pastry.create', compact('pastrys')); 

        return view('pastry.create');
    }


    public function store(Request $request)
    {
        $id = mt_rand(5,15);
        $pastry = new Pastry(array(
            'ID' => $id,
            'name' => $request->get('name'),
            'price' => $request->get('price'),
            'cost' => $request->get('cost'),    
            'user_id' => \Auth::user()->id
        ));
        


        $pastry->save();

        return redirect('/pastry/add')->with('status', 'Done added pastry');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
