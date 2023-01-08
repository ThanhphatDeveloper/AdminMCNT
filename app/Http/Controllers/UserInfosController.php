<?php

namespace App\Http\Controllers;

use App\Models\user_infos;
use App\Http\Requests\Storeuser_infosRequest;
use App\Http\Requests\Updateuser_infosRequest;

class UserInfosController extends Controller
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
     * @param  \App\Http\Requests\Storeuser_infosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeuser_infosRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user_infos  $user_infos
     * @return \Illuminate\Http\Response
     */
    public function show(user_infos $user_infos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user_infos  $user_infos
     * @return \Illuminate\Http\Response
     */
    public function edit(user_infos $user_infos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateuser_infosRequest  $request
     * @param  \App\Models\user_infos  $user_infos
     * @return \Illuminate\Http\Response
     */
    public function update(Updateuser_infosRequest $request, user_infos $user_infos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user_infos  $user_infos
     * @return \Illuminate\Http\Response
     */
    public function destroy(user_infos $user_infos)
    {
        //
    }
}
