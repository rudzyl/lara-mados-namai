<?php

namespace App\Http\Controllers;

use App\Models\Outfit;
use Illuminate\Http\Request;
use App\Models\Master;

class OutfitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // filtravimas
        $masters = Master::all();
        if($request->master_id) {
            $outfits = Outfit::where('master_id', $request->master_id)->get();
            $filterBy = $request->master_id;
        }
        else {
            $outfits = Outfit::all();
        }
        return view('outfit.index', [
            'outfits' => $outfits, 
            'masters' => $masters,
            'filterBy'=>$filterBy ?? 0
            ]);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $masters = Master::all();
        return view('outfit.create', ['masters' => $masters]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $outfit = new Outfit;
       $outfit->type = $request->outfit_type;
       $outfit->color = $request->outfit_color;
       $outfit->size = $request->outfit_size;
       $outfit->about = $request->outfit_about;
       $outfit->master_id = $request->master_id;
       $outfit->save();
       return redirect()->route('outfit.index')->with('success_message', 'Created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Outfit  $outfit
     * @return \Illuminate\Http\Response
     */
    public function show(Outfit $outfit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Outfit  $outfit
     * @return \Illuminate\Http\Response
     */
    public function edit(Outfit $outfit)
    {
       $masters = Master::all();
       return view('outfit.edit', ['outfit' => $outfit, 'masters' => $masters]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Outfit  $outfit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Outfit $outfit)
    {
        $outfit->type = $request->outfit_type;
       $outfit->color = $request->outfit_color;
       $outfit->size = $request->outfit_size;
       $outfit->about = $request->outfit_about;
       $outfit->master_id = $request->master_id;
       $outfit->save();
       return redirect()->route('outfit.index')->with('success_message', 'Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Outfit  $outfit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Outfit $outfit)
    {
        $outfit->delete();
        return redirect()->route('outfit.index')->with('success_message', 'Deleted successfully.');
    }
}
