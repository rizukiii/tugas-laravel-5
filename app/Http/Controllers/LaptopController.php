<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laptop = Laptop::all();
        return view('backend.laptop.index', compact('laptop'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.laptop.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image',
            'merek' => 'required|string',
            'seri' => 'required|string',
            'harga' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $data['gambar'] = Storage::putFile('/laptop', $request->file('gambar'));
        }
        $laptop =  Laptop::create($data);

        if ($laptop) {
            return redirect()->to('laptop')->withSuccess('Data Berhasil Ditambahkan');
        } else {
            return back()->withErrors('Data Gagal Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Laptop $laptop)
    {
        return view('backend.laptop.detail', compact('laptop'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laptop $laptop)
    {
        return view('backend.laptop.edit', compact('laptop'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laptop $laptop)
    {
        $request->validate([
            'gambar' => 'nullable|image',
            'merek' => 'required|string',
            'seri' => 'required|string',
            'harga' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        $data = $request->all();

        if($request->hasFile('gambar')){
            if($laptop->gambar && Storage::exists($laptop->gambar)){
                Storage::delete($laptop->gambar);
            }
            $data['gambar'] = Storage::putFileAs('/laptop', $request->file('gambar'),date('YMdHis'). '-' . $request->file('gambar')->getClientOriginalName());
        }

        $laptop->update($data);

        if($laptop){
            return redirect()->to('/laptop')->withSuccess('Data Berhasil Di Update');
        }else{
            return back()->withInput()->withErrors('Data Gagal Ditambahkan!');
        }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laptop $laptop)
    {
     if($laptop->gambar && Storage::exists($laptop->gambar)){
        Storage::delete($laptop->gambar);
     }
     $laptop->delete();

     if($laptop){
        return back()->withSuccess('Data Berhasil Dihapus');
     }else{
        return back()->withErrors('e')
     }
    }
}
