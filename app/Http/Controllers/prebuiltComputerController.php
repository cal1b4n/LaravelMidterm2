<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prebuiltComputers;

class prebuiltComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $prebuiltComputer = prebuiltComputers::all();
        return view('prebuilt.index')->with('prebuiltComputer', $prebuiltComputer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prebuilt.create');
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
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);
        
        prebuiltComputers::create(array(
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'description' => $request->input('description')
        ));
        
        return redirect('prebuilt/index');
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
        $prebuiltComputer = prebuiltComputers::all()->where('id', $id)->first();
        return view('prebuilt.edit')->with('prebuiltComputer', $prebuiltComputer);
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
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);
    
        prebuiltComputers::where('id', $id)->update(array(
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'description' => $request->input('description')
        ));
    
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        prebuiltComputers::where('id', $id)->delete();
        return redirect('/');	
    }
}
