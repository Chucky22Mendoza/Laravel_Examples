<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    //función para obtener todos los datos de una tabla
    public function home(){
        $notes = App\Note::paginate(5); //Obtener todos los datos de la bd por medio del modelo Note
        return view('welcome', compact('notes'));
    }

    //función para obtener los datos de una sola tupla por id
    public function detail($id){
        // $note = App\Note::find($id);

        //Validar si existe, si no, redirecciona a 404
        $note = App\Note::findOrFail($id);

        return view('notes.detail', compact('note'));
    }

    //función para agregar una nueva tupla a una tabla
    public function create(Request $request){
        // return $request->all();

        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $newNote = new App\Note;
        $newNote->name = $request->name;
        $newNote->description = $request->description;

        $newNote->save();

        return back()->with('message', 'New note added successfully');
    }

    //Seleccionar el registro que será editado
    public function edit($id){
        $note = App\Note::findOrFail($id);
        return view('notes.edit', compact('note'));
    }

    //actualizar registro por el método put
    public function update(Request $request, $id){
        $updateNote = App\Note::findOrFail($id);
        $updateNote->name = $request->name;
        $updateNote->description = $request->description;

        $updateNote->save();

        return back()->with('message', 'Note updated successfully');
    }

    //eliminar un registro por el método delete
    public function delete($id){
        $noteDelete = App\Note::findOrFail($id);
        $noteDelete->delete();

        return back()->with('message', 'Note deleted successfully');
    }

    public function blog(){
        return view('blog');
    }

    public function portfolio(){
        return view('portfolio');
    }

    public function about_us($name = null){
        $team = ['Jesús Mendoza', 'Carlos Mendoza', 'Daniel Mendoza'];
        return view('about_us', compact('team', 'name'));
    }
}
