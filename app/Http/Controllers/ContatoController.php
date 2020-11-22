<?php
namespace App\Http\Controllers;
use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller {

    public function index() {
        $contato = Contato::all();
        return view('home',[
            'contatos'=>$contato
        ]);
    }

    public function create() {
        return view('newContato');
    }

    public function store(Request $request) {
        $contato = new Contato();
        $contato->name = $request->name;
        $contato->save();
        return redirect()->route('contato.index');
    }

    public function show(Contato $contato) {
        return view('listContato',[
            'contato'=>$contato
        ]);
    }

    public function edit(Contato $contato) {
        return view('editContato',[
            'contato'=>$contato
        ]);
    }

    public function update(Request $request, Contato $contato) {
        $contato->name = $request->name;
        $contato->save();
        return redirect()->route('contato.index');
    }

    public function destroy(Contato $contato) {
        $contato->delete();
        return redirect()->route('contato.index');
    }
}
