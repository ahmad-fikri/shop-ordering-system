<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Order;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;
use Carbon\Carbon;


class AdminsController extends Controller
{

    
    public function index()
    {


            
            


        $users = User::all();
        $orders = Order::all();

        $usersTotal = count($users);
        $ordersTotal = count($orders);
        

        
        $coffee1 = DB::table('coffees')->where('id',1)->first();
        $coffee2 = DB::table('coffees')->where('id',2)->first();
        $coffee3 = DB::table('coffees')->where('id',3)->first();
        $coffee4 = DB::table('coffees')->where('id',4)->first();
        $coffee5 = DB::table('coffees')->where('id',5)->first();

        $pastry1 = DB::table('pastries')->where('id',1)->first();
        $pastry2 = DB::table('pastries')->where('id',2)->first();
        $pastry3 = DB::table('pastries')->where('id',3)->first();
        $pastry4 = DB::table('pastries')->where('id',4)->first();
        $pastry5 = DB::table('pastries')->where('id',5)->first();

      
        $sum = 0;
        foreach ($orders as $order) {

            for($i = 1; $i < 6; $i++)  {
                $total = ($order->{'coffee'.$i} * ${'coffee'.$i}->price) + ($order->{'pastry'.$i} * ${'pastry'.$i}->price);

                $sum = $sum + $total;
            }
        }

        $profit = 0;

        foreach ($orders as $order) {

            for($i = 1; $i < 6; $i++)  {
                $sales = ($order->{'coffee'.$i} * (${'coffee'.$i}->price - ${'coffee'.$i}->cost)) + ($order->{'pastry'.$i} * (${'pastry'.$i}->price - ${'pastry'.$i}->cost));

                $profit = $profit + $sales;
            }
        }

        $rate = round($sum/$profit * 100,2);

        return view('admin.dashboard', compact('usersTotal','ordersTotal','sum','rate'));
    
    }



    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {   

        $user = User::whereId($id)->firstOrFail();
        
        if ($user->hasRole('Staff')) {
            $role = 'Staff';
        } elseif ($user->hasRole('Admin')) {
            $role = 'Admin';
        } else {
            $role = 'Role not found';
        }


        return view('admin.show', compact('user','role'));
    }

    public function assignRole($id){

        $user = User::whereId($id)->firstOrFail();
        
        if($user->hasRole('Staff')){
            $user->removeRole('Staff');
            $user->assignRole('Admin');
        }
        else {
            $user->removeRole('Admin');
            $user->assignRole('Staff');
        }
        

        return redirect('/users')->with('status', 'Role User with ID:'.$user->id.' has been changed');

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
         $user = User::whereId($id)->firstOrFail();
         $user->destroy();

         return redirect('/dashboard');
    }
}
