<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\motor;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class motorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('motor-matic', [
            'motors' => motor::where('category_id', '1')->get(),
            'categories' => Category::all(),
        ]);
    }

    public function indexManual()
    {
        return view('motor-manual', [
            'motors' => motor::where('category_id', '2')->get(),
            'categories' => Category::all(),
        ]);
    }

    public function indexSport()
    {
        return view('motor-sport', [
            'motors' => motor::where('category_id', '3')->get(),
            'categories' => Category::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penyewa.create', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'merkMotor' => 'required',
            'harga' => 'required',
            'bahanBakar' => '',
            'mesin' => '',
            'warna' => '',
            'speedometer' => '',
            'category_id' => '',
            'tahunKeluaran' => '',
            'review' => '',
            'img1' => '',
            'img2' => '',
            'img3' => '',
            'img4' => '',

        ]);
        if ($request->file('img1','img2','img3','img4')) {
            $validateData['img1'] = $request->file('img1')->store('post-images');
            $validateData['img2'] = $request->file('img2')->store('post-images');
            $validateData['img3'] = $request->file('img3')->store('post-images');
            $validateData['img4'] = $request->file('img4')->store('post-images');
        }

        $validateData['user_id'] = auth()->user()->id;
        motor::create($validateData);
        return redirect('/penyewa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = motor::find($id);
        return view('spec', compact('data'));
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
