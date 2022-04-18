<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use App\Http\Requests\StoreLivrosRequest;
use App\Http\Requests\UpdateLivrosRequest;
use Illuminate\Validation\Rule;

class LivrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros = Livro::all()->toArray();

        return view('livros.index', ['livros' => $livros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLivrosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLivrosRequest $request)
    {
        dd('chegou', $request);

        Livro::create($this->validarCampos());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function show(Livro $livro)
    {
        return view('livros.show', ['livro' => $livro]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function edit(Livro $livro)
    {
        return view('livros.edit', ['livro' => $livro]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLivrosRequest  $request
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLivrosRequest $request, Livro $livro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livro $livro)
    {
        $livro->delete();

        return redirect('/livros')->with('sucess', 'Registro excluído!');
        // return back()->with('success', 'Registro excluído!');
    }

    protected function validarCampos(Livro $livro = null)
    {
        if (is_null($livro)) {
            $livro = new Livro();
        }

        return $request()->validate([
            'titulo' => ['required', 'max:100', Rule::unique('livros', 'titulo')->ignore($livro)],
            'autor' => 'required|max:100',
            'descricao' => 'max:200'
        ]);
    }
}
