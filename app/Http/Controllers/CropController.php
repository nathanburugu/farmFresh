<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Crop;
use App\Http\Controllers\Auth;

class CropController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       /*  $crops = Crop::all();
        return view('crops.index', compact('crops')); */
        //  return view('options.crops.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
         return view('options.crops.index');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request -> validate([
        'name'=>['required', 'string', 'max:255'],
        'duration'=>['required', 'string', 'max:255'],
        'acers'=>['required', 'string', 'max:255'],
        'notes'=>['required', 'string', 'max:255'],
        ]);

        $crop = new Crop();
        $crop->name = $request['name'];
        $crop->user_id =Auth::user()->id;
        $crop->duration = $request['duration'];
        $crop->acers = $request['acers'];
        $crop->notes = $request['notes'];
        $crop->save();

        return redirect()->route('crop.index')->with('success', 'Crop created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $crop = Crop::findOrFail($id);
        return view('options.crops.edit', compact('crop'))->with('success', 'Crop updated successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $crop = Crop::findOrFail($id);
        $crop->delete();
        return redirect()->route('crop.index')->with('success', 'Crop deleted successfully.');
    }
}
