<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MedicineOrder;
use Illuminate\Http\Request;

class MedicineOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicineOrders = MedicineOrder::OrderBy('completed', 'asc')->OrderBy('id', 'desc')->get();
        return view('backend.admin.order.index', compact('medicineOrders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('backend.order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MedicineOrder  $medicineOrder
     * @return \Illuminate\Http\Response
     */
    public function show(MedicineOrder $medicineOrder)
    {
        return view('backend.admin.order.show', compact('medicineOrder'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MedicineOrder  $medicineOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicineOrder $medicineOrder)
    {
        //return view('backend.order.edit', compact('medicineOrder'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MedicineOrder  $medicineOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedicineOrder $medicineOrder)
    {
        if ($medicineOrder->completed){
            $medicineOrder->completed = false;
        }else{
            $medicineOrder->completed = true;
        }

        try {
            $medicineOrder->save();
            return response()->json([
                'type' => 'success',
                'message' => 'Successfully status changed',
                'url' => route('admin.medicineOrder.index'),
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'type' => 'danger',
                'message' => $exception->getMessage(),
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MedicineOrder  $medicineOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicineOrder $medicineOrder)
    {
        try {
            $medicineOrder->delete();
            return response()->json([
                'type' => 'success',
                'message' => ''
            ]);
        }catch (\Exception$exception){
            return response()->json([
                'type' => 'error',
                'message' => ''
            ]);
        }
    }
}
