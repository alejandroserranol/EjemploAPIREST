<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicacion;

class PublicacionController extends Controller
{
    public function index()
    {
        return Publicacion::all();
    }
    public function show($id)
    {
        return Publicacion::find($id);
    }
    public function store(Request $request)
    {
        return Publicacion::create($request->all());
    }
    public function update(Request $request, $id)
    {
        $publicacion = Publicacion::findOrFail($id);
        $publicacion->update($request->all());
        return $publicacion;
    }
    public function delete(Request $request, $id)
    {
        $publicacion =$publicacion::findOrFail($id);
        $publicacion->delete();
        return 204;
    }
}
