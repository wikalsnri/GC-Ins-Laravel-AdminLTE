<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cast;

class CastController extends Controller
{
    //
    public function index()
    {
        $casts = Cast::all();
        return view('cast.index', compact('casts'));
    }

    public function create()
    {
        return view('cast.create');
    }

    public function store(Request $request)
    {
       
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required',
            
        ]);

       
        Cast::create($request->all());

        return redirect('/cast')->with('success', 'Pemain film berhasil ditambahkan!');
    }

    public function show($cast_id)
    {
        $cast = Cast::find($cast_id);
        return view('cast.show', compact('cast'));
    }

    public function edit($cast_id)
    {
        $cast = Cast::find($cast_id);
        return view('cast.edit', compact('cast'));
    }

    public function update(Request $request, $cast_id)
    {
        
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required',
           
        ]);

        
        $cast = Cast::find($cast_id);
        $cast->update($request->all());

        return redirect('/cast')->with('success', 'Data pemain film berhasil diperbarui!');
    }

    public function destroy($cast_id)
    {
        
        $cast = Cast::find($cast_id);
        $cast->delete();

        return redirect('/cast')->with('success', 'Data pemain film berhasil dihapus!');
    }
}
