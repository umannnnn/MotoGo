<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\motor;
use Illuminate\Http\Request;

class adminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard-admin.index', [
            'motor' => motor::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard-admin.create', [
            'categories' => Category::all()
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
            'harga' => '',
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
        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $motor = motor::find($id);
        return view('dashboard-admin.edit', [
            'categories' => Category::all()
        ],compact('motor'));
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
        $validateData = $request->validate([
            'merkMotor' => 'required',
            'harga' => '',
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
        motor::where('id', $id)->update($validateData);
        return redirect('dashboard');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        motor::where('id', $id)->delete();
        return redirect('dashboard')->with('success', 'Artikel berhasil dihapus!');
        // return response()->json(['success' => 'Artikel berhasil dihapus!']);
    }
}
