<?php

namespace App\Http\Controllers;

use App\Models\question_package_details;
use App\Http\Requests\Storequestion_package_detailsRequest;
use App\Http\Requests\Updatequestion_package_detailsRequest;

class QuestionPackageDetailsController extends Controller
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
     * @param  \App\Http\Requests\Storequestion_package_detailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storequestion_package_detailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\question_package_details  $question_package_details
     * @return \Illuminate\Http\Response
     */
    public function show(question_package_details $question_package_details)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\question_package_details  $question_package_details
     * @return \Illuminate\Http\Response
     */
    public function edit(question_package_details $question_package_details)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatequestion_package_detailsRequest  $request
     * @param  \App\Models\question_package_details  $question_package_details
     * @return \Illuminate\Http\Response
     */
    public function update(Updatequestion_package_detailsRequest $request, question_package_details $question_package_details)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\question_package_details  $question_package_details
     * @return \Illuminate\Http\Response
     */
    public function destroy(question_package_details $question_package_details)
    {
        //
    }
}
