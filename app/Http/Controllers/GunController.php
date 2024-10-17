<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gun;

class GunController extends Controller
{
    public function index()
    {
        $guns = Gun::all();
        return view("guns.index", compact("guns"));
    }
    public function create()
    {
        return view("guns.create");
    }
    public function store(Request $request)
    {
        $gun = new Gun;
        $gun->name = $request->input("name");
        $gun->type = $request->input("type");
        $gun->country = $request->input("country");
        $gun->ammo = $request->input("ammo");
        $gun->save();
        return redirect()->route('guns.index');
    }
    public function destroy($id)
    {
        $gun = Gun::find($id);

        if (!$gun) {
            return redirect()->route('guns.index')->with('error', 'gun Didnt Found it');
        }

        $gun->delete();

        return redirect()->route('guns.index')->with('success', 'Gun Killed easy');
    }
    public function edit($id)
    {
        $gun = Gun::find($id);

        if (!$gun) {
            return redirect()->route('guns.index')->with('error', 'Gun didnt found it');
        }
        return view('guns.edit', compact('gun'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'ammo' => 'required|string|max:255',
        ]);

        $gun = Gun::find($id);

        if (!$gun) {
            return redirect()->route('guns.index')->with('error', 'Gun no encontrada');
        }
        $gun->name = $request->input('name');
        $gun->type = $request->input('type');
        $gun->country = $request->input('country');
        $gun->ammo = $request->input('ammo');

        $gun->save();

        return redirect()->route('guns.index')->with('success','Actualizada');
    }
}
