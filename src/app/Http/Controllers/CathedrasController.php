<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\Cathedra;

class CathedrasController extends Controller
{
    public function show(Faculty $_, Cathedra $cathedra) {
        return view('public.stuff', [
            'cathedra' => $cathedra
        ]);
    }

    public function create(Request $request)
    {
        Cathedra::insert([
            'name' => $request->name,
            'thumbnail' => $request->thumbnail,
            'faculty_id' => $request->faculty_id
        ]);

        return redirect('/admin/control/cathedra')->with('success', 'Cathedra created successfully.');
    }
    public function update(Request $request, $id)
    {
        $cathedra = Cathedra::find($id);
        $cathedra->update([
            'name' => $request->name,
            'thumbnail' => $request->thumbnail,
            'faculty_id' => $request->faculty_id
        ]);
        $cathedra->save();
        return redirect('/admin/control/cathedra')->with('success', 'Cathedra updated successfully');
    }
    public function delete($id)
    {
        Cathedra::find($id)->delete();
        return redirect('/admin/control/cathedra')->with('success', 'Cathedra deleted successfully');
    }
}
