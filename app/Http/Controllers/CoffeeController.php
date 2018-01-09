<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\coffee;
class CoffeeController extends Controller
{
   
    public function index()
    {
        
    }

   
    public function create()
    {
        $coffees = coffee::all();
        return view('coffee.create', compact('coffees'));  
    }

   
    public function store(Request $request)
    {
        $coffee = new coffee(array(
            'name' => $request->get('name'),
            'price' => $request->get('price'),
            'cost' => $request->get('cost'),
            'user_id' => \Auth::user()->id
        ));
        
        $coffee->save();

        //return redirect('/dashboard')->with('status', 'Done added coffee');
        return redirect('/coffee/add')->with('status', 'Done added coffee');
    }

   
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        
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
