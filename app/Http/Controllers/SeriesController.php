<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Description of SeriesController
 *
 * @author andre
 */
class SeriesController extends Controller {

    public function list(Request $request) {

        $series = \App\Providers\Serie::query()->orderBy('name')->get();

        $message = $request->session()->get('message');

        return view('series.index', compact('series', 'message'));
    }

    public function addForm() {
        return view('series.create');
    }

    public function add(\App\Http\Requests\SeriesFormRequest $request) {

        $serie = \App\Providers\Serie::create($request->all());

        $request->session()->flash('message', "Serie {$serie->id} Criada com Sucesso {$serie->name}");

        return redirect('/');
    }

    public function delete(Request $request) {
        \App\Providers\Serie::destroy($request->id);
        $request->session()->flash('message', "Serie Removida com Sucesso");
        return redirect('/');
    }

}
