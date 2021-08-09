<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = [
            'storesData' => Store::paginate(),
            'errorMessage' => $request->errorMessage,
            'successMessage' => $request->successMessage,
        ];
        return view('stores.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newStore = new Store($request->only(['name', 'opening_date']));
        $newStore->save();
        return redirect('stores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        dd($store->product);
    }

    public function showProducts(Store $store){
        return $store->products;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        try {
            $delete = $store->delete();
        } catch (\Throwable $th) {
            $delete = false;
        }
        return redirect()->route('stores', [
            'errorMessage' => (!$delete) ? 'No se pudo eliminar': '',
            'successMessage' => ($delete) ? 'Eliminado correctamente': ''
        ]);
    }
}
