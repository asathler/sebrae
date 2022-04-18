<?php

namespace App\Http\Controllers;

use App\Models\Livros;
use App\Http\Requests\StoreLivrosRequest;
use App\Http\Requests\UpdateLivrosRequest;

class LivrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLivrosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLivrosRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Livros  $livros
     * @return \Illuminate\Http\Response
     */
    public function show(Livros $livros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Livros  $livros
     * @return \Illuminate\Http\Response
     */
    public function edit(Livros $livros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLivrosRequest  $request
     * @param  \App\Models\Livros  $livros
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLivrosRequest $request, Livros $livros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Livros  $livros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livros $livros)
    {
        //
    }
}
