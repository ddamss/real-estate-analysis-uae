<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'index test!';
        // return Property::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        

        set_time_limit(0);

        for ($i=0;$i<sizeof($request[0]);$i++){

            Property::create([
                'page'=>$request[0][$i]['page'], 
                'image'=>$request[0][$i]['image'], 
                'price'=>$request[0][$i]['price'], 
                'title'=>$request[0][$i]['title'],
                'url'=>$request[0][$i]['url'],
                'location'=>$request[0][$i]['location'], 
                'type'=>$request[0][$i]['type'], 
                'bedrooms'=>$request[0][$i]['bedrooms'], 
                'bathrooms'=>$request[0][$i]['bathrooms'],
                'sqft'=>$request[0][$i]['sqft'],
                'brokerLogo'=>$request[0][$i]['brokerLogo']
            ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
