<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use Illuminate\Http\Request;

class AttractionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attraction = Attraction::all();
        return view('Attraction.index', ['attractions' => $attraction]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Attraction.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'size_required'=>'required',
            'experience_earn'=>'required',
            'picture'=>'required',
            'picture_alt'=>'required',
            'description'=>'required',
        ]);

        $logo_url = $request->file('picture')->store('public/attractions');
        $logo_link = substr($logo_url, 7); //On enlève 'public/' de la string, pour faire l'affichage correctement dans la vue

        $attraction = new Attraction([
            'name' => $request->get('name'),
            'size_required' => $request->get('size_required'),
            'experience_earn' => $request->get('experience_earn'),
            'picture' => $logo_link,
            'picture_alt' => $request->get('picture_alt'),
            'description' => $request->get('description')
        ]);

        $attraction->save();
        return redirect()->route('Attraction.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $attraction = Attraction::find($id);
        return view('Attraction.show', ['Attraction' => $attraction]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $attraction = Attraction::find($id);
        return view('Attraction.edit', ['attraction' => $attraction]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $attraction = Attraction::find($id);
        $attraction->fill($request->all());
        $attraction->save();
        return redirect()->route('Attraction.show', ['Attraction' => $attraction]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attraction = Attraction::find($id);
        $attraction->delete();

        return redirect()->route('Attraction.index');
    }
}
