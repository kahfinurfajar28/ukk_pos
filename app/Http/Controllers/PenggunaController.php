<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{

    public function index()
    {
        $penggunas = Pengguna::latest()->paginate(5);
      
        return view('penggunas.index',compact('penggunas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  

    public function create()
    {
        return view('penggunas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'alamat' => 'required',
            'tlp' => 'required',
        ]);
      
        Pengguna::create($request->all());
       
        return redirect()->route('penggunas.index')
                        ->with('success','pengguna created successfully.');
    }
  

    public function show(Pengguna $pengguna)
    {
        return view('penggunas.show',compact('penggunas'));
    }
  

    public function edit(Pengguna $pengguna)
    {
        // return view('penggunas.edit',compact('pengguna'));
    
        return view('penggunas.edit', compact('pengguna'));
    }
  

    public function update(Request $request, Pengguna $pengguna)
    {
        $request->validate([
            'alamat' => 'required',
            'tlp' => 'required',
        ]);
      
        $pengguna->update($request->all());
      
        return redirect()->route('penggunas.index')
                        ->with('success','pengguna updated successfully');
    }

    public function destroy(Pengguna $pengguna)
    {
        $pengguna->delete();
       
        return redirect()->route('penggunas.index')
                        ->with('success','pengguna deleted successfully');
    }
}