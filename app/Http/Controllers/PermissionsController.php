<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class PermissionsController extends Controller
{
   
    public function index()
    {
        //
    }

    
    public function create()
    {
        $permissions = Permission::all();

        return view('permission.add', compact('permissions'));  
    }

   
    public function store(Request $request)
    {
        $id = mt_rand(5,15);
        $permission = Permission::create([
            'ID' => $id,
            'NAME' => $request->get('permission'),
        ]);
        
        $permission->save();

        return redirect('/dashboard')->with('status', 'Done added permission');
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
