<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Customer;
use App\User;
use App\Http\Requests\CustomerFormRequest;
class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();


        return view('customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerFormRequest $request)
    {
        $customer = new Customer(array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'ic' => $request->get('ic'),
            'tel' => $request->get('tel'),
            'address1' => $request->get('address1'),
            'address2' => $request->get('address2'),
            'postcode' => $request->get('postcode'),
            'city' => $request->get('city'),
            'state' => $request->get('state'),
            'country' => $request->get('country'),
            'user_id' => \Auth::user()->id
        ));

        $customer->save();

        return redirect('/customers')->with('status', 'Done added customer');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::whereId($id)->firstOrFail();

        $user = User::whereId($customer->user_id)->firstOrFail();

        // $register = User::whereId($customer->registered)->firstOrFail()->name;

        return view('customer.show', compact('customer','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::whereId($id)->firstOrFail();
        return view('customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::whereId($id)->firstOrFail();

        $customer->name = $request->get('name');
        $customer->email = $request->get('email');
        $customer->ic = $request->get('ic');
        $customer->tel = $request->get('tel');
        $customer->address1 = $request->get('address1');
        $customer->address2 = $request->get('address2');
        $customer->postcode = $request->get('postcode');
        $customer->city = $request->get('city');
        $customer->state = $request->get('state');
        $customer->country = $request->get('country');

        $customer->save();
         return redirect('/customer/'.$id)->with('status', 'The customer '.$id.' info has been updated!');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::whereId($id)->firstOrFail();

        $customer->delete();

        return redirect('/customers')->with('status', 'The selected customer has been deleted');
    }
}
