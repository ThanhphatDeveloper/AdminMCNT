<?php

namespace App\Http\Controllers;

use App\Models\question_packs;
use App\Http\Requests\Storequestion_packsRequest;
use App\Http\Requests\Updatequestion_packsRequest;

class QuestionPacksController extends Controller
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
     * @param  \App\Http\Requests\Storequestion_packsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storequestion_packsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\question_packs  $question_packs
     * @return \Illuminate\Http\Response
     */
    public function show(question_packs $question_packs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\question_packs  $question_packs
     * @return \Illuminate\Http\Response
     */
    public function edit(question_packs $question_packs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatequestion_packsRequest  $request
     * @param  \App\Models\question_packs  $question_packs
     * @return \Illuminate\Http\Response
     */
    public function update(Updatequestion_packsRequest $request, question_packs $question_packs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\question_packs  $question_packs
     * @return \Illuminate\Http\Response
     */
    public function destroy(question_packs $question_packs)
    {
        //
    }
}
