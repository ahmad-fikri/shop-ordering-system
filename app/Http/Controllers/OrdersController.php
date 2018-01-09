<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\coffee;
use App\Order;
use App\Pastry;
use App\Customer;
use App\User;
use App\Http\Requests\OrderFormRequest;
class OrdersController extends Controller
{
    
    public function index()
    {
        $orders = Order::all();
    

        return view('order.dashboard', compact('orders'));


    }

   
    public function create()
    {
        $customers = Customer::all();


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


        return view('order.create',compact('customers','coffee1','coffee2','coffee3','coffee4','coffee5','pastry1','pastry2','pastry3','pastry4','pastry5'));
    }

 
    public function store(OrderFormRequest $request)
    {
        $id = \Auth::user()->id;
        $order = new Order(array(
            'customerID' => $request->get('customerID'),
            'tableNo' => $request->get('tableno'),
            'coffee1' => $request->get('coffee1'),
            'coffee2' => $request->get('coffee2'),
            'coffee3' => $request->get('coffee3'),
            'coffee4' => $request->get('coffee4'),
            'coffee5' => $request->get('coffee5'),
            'pastry1' => $request->get('pastry1'),
            'pastry2' => $request->get('pastry2'),
            'pastry3' => $request->get('pastry3'),
            'pastry4' => $request->get('pastry4'),
            'pastry5' => $request->get('pastry5'),
            'user_id' => $id
        ));
        
        $order->save();

        return redirect('/order/index')->with('status', 'Done added order'); 


    }

   
    public function show($id)
    {
        $order = Order::whereId($id)->firstOrFail();
               
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


        $total = 0;
        for( $i=1 ;$i < 6;$i++) { 
            $total = (${'coffee'.$i}->price * $order->{'coffee'.$i}) + (${'pastry'.$i}->price * $order->{'pastry'.$i}) + $total;
        }

        
        $user = User::whereId($order->user_id)->firstOrFail();

        $customer = Customer::whereId($order->customerid)->firstOrFail();

        
        
         return view('order.show', compact('order','coffee1','coffee2','coffee3','coffee4','coffee5','pastry1','pastry2','pastry3','pastry4','pastry5', 'total', 'user', 'customer'));


    }

   
    public function edit($id)
    {
        $order = Order::whereId($id)->firstOrFail();
         return view('order.edit', compact('order'));
    }

  
    public function update(Request $request, $id)
    {
        $order = Order::whereId($id)->firstOrFail();


        $order->customerID = $request->get('customerID');
        $order->tableNo = $request->get('tableno');
        $order->coffee1 = $request->get('coffee1');
        $order->coffee2 = $request->get('coffee2');
        $order->coffee3 = $request->get('coffee3');
        $order->coffee4 = $request->get('coffee4');
        $order->coffee5 = $request->get('coffee5');
        $order->pastry1 = $request->get('pastry1');
        $order->pastry2 = $request->get('pastry2');
        $order->pastry3 = $request->get('pastry3');
        $order->pastry4 = $request->get('pastry4');
        $order->pastry5 = $request->get('pastry5');


        $order->save();
        return redirect('/order/index')->with('status', 'The order '.$id.' has been updated!');
    }

    
    public function destroy($id)
    {
        $order = Order::whereId($id)->firstOrFail();
        $order->delete();

        return redirect('/order/index')->with('status', 'The selected order has been deleted');
    }
}
