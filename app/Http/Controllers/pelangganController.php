<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use Illuminate\Http\Request;

class pelangganController extends Controller
{
    public function index()
    {
        return view('dashboard-admin.booking', [
            'pelanggan' => pelanggan::all(),
        ]);
    }

    public function create()
    {
        return view('spec');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'merk' => 'required',
            'nama' => 'required',
            'nomor_hp' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'tgl_pesan' => '',
            'tgl_balik' => '',
            'nomor_ktp' => 'required',
            'foto_ktp' => ''

        ]);
        if ($request->file('foto_ktp')) {
            $validateData['foto_ktp'] = $request->file('foto_ktp')->store('post-images');
            
        }

        $validateData['user_id'] = auth()->user()->id;
        pelanggan::create($validateData);
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
        pelanggan::where('id', $id)->delete();
        return redirect('pelanggan')->with('success', 'Pelanggan berhasil dihapus!');
        // return response()->json(['success' => 'Artikel berhasil dihapus!']);
    }
}
