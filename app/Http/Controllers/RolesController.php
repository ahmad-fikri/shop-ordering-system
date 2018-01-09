<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use App\Http\Requests\RoleFormRequest;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
   
    public function index()
    {
        


    }

    public function create()
    {
        $roles = Role::all();

        return view('role.add', compact('roles'));  
    }

    
    public function store(RoleFormRequest $request)
    {
        $id = mt_rand(5,15);
        $role = Role::create([
            'ID' => $id,
            'NAME' => $request->get('role'),
        ]);
        $role->givePermissionTo('Create Order');
        $role->save();

        return redirect('/dashboard')->with('status', 'Done added role');

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
