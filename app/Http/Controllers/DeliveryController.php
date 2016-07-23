<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Request;
use App\Models\Delivery;
use App\Models\Currency;
use App\Models\Typepackage;

class DeliveryController extends BaseController
{
     use ValidatesRequests, DispatchesJobs;
   
    public function index()
    {
        $data = [
            'page_title' => 'Текущие заявки',
            'alls' => Delivery::latest('created_at')->get(),
            'count' => Delivery::count()
         ];
        return view('delivery.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data = Delivery::all();
        $data = [
            'alls' => Delivery::all(),
            'currency' => Currency::all(),
            'typepackages' => Typepackage::all(),
            'page_title' => 'Новая заявка',
            'count' => Delivery::count()
         ];
        return view('delivery.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = Request::all();
        Delivery::create($input);
        return redirect()->action('DeliveryController@index');
        // var_dump($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $showDeliveryId = Delivery::find($id);
        $data = [
            'page_title' => 'Заявка №' . $id,
            'showDeliveryId' => Delivery::find($id),
            'count' => Delivery::count()
        ];
        return view('delivery.show', $data);
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
